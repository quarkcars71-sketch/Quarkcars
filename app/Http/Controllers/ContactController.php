<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Throwable;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:100'],
            'email'   => ['required', 'email', 'max:150'],
            'number'  => ['required', 'string', 'max:20'],
            'company' => ['nullable', 'string', 'max:150'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        try {
            $receiverEmail = config('mail.contact_receiver', 'info@quarkcars.com');

            Mail::send(
                'emails.contact-enquiry',
                ['enquiry' => $validated],
                function ($mail) use ($validated, $receiverEmail) {
                    $mail->to($receiverEmail)
                        ->subject('New Contact Enquiry - QuarkCars')
                        ->replyTo(
                            $validated['email'],
                            $validated['name']
                        );
                }
            );

            return response()->json([
                'success' => true,
                'message' => 'Your enquiry has been submitted successfully.',
                'redirect' => route('thank-you'),
            ]);
        } catch (Throwable $exception) {
            Log::error('Contact form email failed', [
                'message' => $exception->getMessage(),
                'exception' => $exception,
            ]);

            $responseData = [
                'success' => false,
                'message' => 'Message could not be sent. Please try again.',
            ];

            if (config('app.debug')) {
                $responseData['debug'] = [
                    'message' => $exception->getMessage(),
                    'file' => $exception->getFile(),
                    'line' => $exception->getLine(),
                    'trace' => explode("\n", $exception->getTraceAsString()),
                ];
            }

            return response()->json($responseData, 500);
        }
    }
}