@extends('layouts.layoutCommon')

@section('title', 'Cancellation Policy || Quarkcars || Quarkcars Laravel Template')

@section('content')
   <x-pageHeader title="Privacy Policy" subtitle="Privacy policy" />
    <!--Cancellation Policy Section Start-->
    <section class="cancellation-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cancellation-content">
                        <div class="cancellation-section-block">
                            <h3>1. General Cancellation Policy</h3>
                            <p>At Quarkcars, we understand that plans may change. Our cancellation policy is designed to be fair to both customers and service providers. Please review the following terms carefully before making a booking.</p>
                        </div>

                        <div class="cancellation-section-block">
                            <h3>2. Self-Drive Car Rentals</h3>
                            <div class="cancellation-subsection">
                                <h4>Full Refund (100%)</h4>
                                <p>Cancellations made more than 48 hours before the scheduled pickup time are eligible for a full refund.</p>
                            </div>
                            <div class="cancellation-subsection">
                                <h4>Partial Refund (50%)</h4>
                                <p>Cancellations made between 24-48 hours before the scheduled pickup time will receive a 50% refund of the total booking amount.</p>
                            </div>
                            <div class="cancellation-subsection">
                                <h4>No Refund</h4>
                                <p>Cancellations made less than 24 hours before the scheduled pickup time are not eligible for any refund.</p>
                            </div>
                        </div>

                        <div class="cancellation-section-block">
                            <h3>3. Car Sharing Services</h3>
                            <div class="cancellation-subsection">
                                <h4>Full Refund (100%)</h4>
                                <p>Cancellations made more than 24 hours before the scheduled start time are eligible for a full refund.</p>
                            </div>
                            <div class="cancellation-subsection">
                                <h4>Partial Refund (75%)</h4>
                                <p>Cancellations made between 12-24 hours before the scheduled start time will receive a 75% refund.</p>
                            </div>
                            <div class="cancellation-subsection">
                                <h4>No Refund</h4>
                                <p>Cancellations made less than 12 hours before the scheduled start time are not eligible for any refund.</p>
                            </div>
                        </div>

                        <div class="cancellation-section-block">
                            <h3>4. Taxi Services</h3>
                            <div class="cancellation-subsection">
                                <h4>Full Refund (100%)</h4>
                                <p>Cancellations made more than 2 hours before the scheduled pickup time are eligible for a full refund.</p>
                            </div>
                            <div class="cancellation-subsection">
                                <h4>Partial Refund (50%)</h4>
                                <p>Cancellations made between 1-2 hours before the scheduled pickup time will receive a 50% refund.</p>
                            </div>
                            <div class="cancellation-subsection">
                                <h4>No Refund</h4>
                                <p>Cancellations made less than 1 hour before the scheduled pickup time are not eligible for any refund.</p>
                            </div>
                        </div>

                        <div class="cancellation-section-block">
                            <h3>5. No-Show Policy</h3>
                            <p>If you fail to arrive for your scheduled booking without prior cancellation, you will be charged the full amount of the booking. This applies to all service types including:</p>
                            <ul>
                                <li>Self-drive car rentals</li>
                                <li>Car sharing bookings</li>
                                <li>Taxi services</li>
                                <li>Driver services</li>
                            </ul>
                        </div>

                        <div class="cancellation-section-block">
                            <h3>6. Refund Process</h3>
                            <div class="cancellation-subsection">
                                <h4>Processing Time</h4>
                                <p>Refunds are typically processed within 5-7 business days from the date of cancellation.</p>
                            </div>
                            <div class="cancellation-subsection">
                                <h4>Refund Method</h4>
                                <p>Refunds will be credited back to the original payment method used for booking.</p>
                            </div>
                            <div class="cancellation-subsection">
                                <h4>Bank Charges</h4>
                                <p>Any bank processing charges or currency conversion fees will be deducted from the refund amount.</p>
                            </div>
                        </div>

                        <div class="cancellation-section-block">
                            <h3>7. Force Majeure</h3>
                            <p>In case of unforeseen circumstances beyond our control (natural disasters, government restrictions, extreme weather conditions, etc.), we may need to cancel bookings. In such cases:</p>
                            <ul>
                                <li>Full refund will be provided</li>
                                <li>Alternative booking dates will be offered if possible</li>
                                <li>No additional cancellation charges will apply</li>
                            </ul>
                        </div>

                        <div class="cancellation-section-block">
                            <h3>8. Modification Policy</h3>
                            <div class="cancellation-subsection">
                                <h4>Date Changes</h4>
                                <p>Changes to booking dates are subject to availability and may incur additional charges.</p>
                            </div>
                            <div class="cancellation-subsection">
                                <h4>Vehicle Changes</h4>
                                <p>Upgrades or downgrades to vehicle categories are subject to price differences and availability.</p>
                            </div>
                        </div>

                        <div class="cancellation-section-block">
                            <h3>9. Special Offers and Promotions</h3>
                            <p>Bookings made under special offers, promotional rates, or advance booking discounts may have different cancellation terms. Please check the specific terms and conditions of your booking before confirming.</p>
                        </div>

                        <div class="cancellation-section-block">
                            <h3>10. How to Cancel</h3>
                            <p>You can cancel your booking through any of the following methods:</p>
                            <ul>
                                <li><strong>Online:</strong> Log into your account on our website or mobile app</li>
                                <li><strong>Phone:</strong> Call our customer service at +91 8769639911</li>
                                <li><strong>Email:</strong> Send your cancellation request to cancel@quarkcars.com</li>
                                <li><strong>In Person:</strong> Visit our nearest Quarkcars office</li>
                            </ul>
                        </div>

                        <div class="cancellation-section-block">
                            <h3>11. Cancellation Confirmation</h3>
                            <p>Once your cancellation is processed, you will receive:</p>
                            <ul>
                                <li>Email confirmation of cancellation</li>
                                <li>Reference number for your refund</li>
                                <li>Expected refund processing timeline</li>
                            </ul>
                        </div>

                        <div class="cancellation-section-block">
                            <h3>12. Dispute Resolution</h3>
                            <p>If you believe your cancellation was processed incorrectly or have concerns about the refund amount, please contact our customer service within 7 days of cancellation. We will review your case and respond within 48 hours.</p>
                        </div>

                        <div class="cancellation-section-block">
                            <h3>13. Contact Information</h3>
                            <p>For any questions about our cancellation policy or to request a cancellation, please contact us:</p>
                            <ul>
                                <li><strong>Customer Service:</strong> +91 8769639911</li>
                                <li><strong>Email:</strong> support@quarkcars.com</li>
                                <li><strong>Cancellation Hotline:</strong> +91 8769639912</li>
                                <li><strong>Operating Hours:</strong> 24/7</li>
                            </ul>
                        </div>

                        <div class="cancellation-section-block">
                            <p><strong>Last Updated:</strong> {{ date('F j, Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Cancellation Policy Section End-->

    <x-footer_style_one />
@endsection
