@extends('layouts.layoutCommon')

@section('title', 'Terms of Service || Quarkcars || Quarkcars Laravel Template')

@section('content')
    <x-pageHeader title="Terms of Service" subtitle="Terms of Service" />

    <!--Terms Section Start-->
    <section class="terms-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="terms-content">
                        <div class="terms-section-block">
                            <h3>1. Acceptance of Terms</h3>
                            <p>By accessing and using Quarkcars' car rental services, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.</p>
                        </div>

                        <div class="terms-section-block">
                            <h3>2. Description of Service</h3>
                            <p>Quarkcars provides car rental services including self-drive cars, car sharing, and taxi services. Our platform connects users with vehicle providers and facilitates the rental process through our booking system.</p>
                        </div>

                        <div class="terms-section-block">
                            <h3>3. User Eligibility</h3>
                            <p>You must be at least 21 years of age and possess a valid driver's license to use our services. Users must provide accurate and complete information during the registration process.</p>
                        </div>

                        <div class="terms-section-block">
                            <h3>4. Booking and Payment</h3>
                            <p>All bookings are subject to vehicle availability. Payment must be completed before the rental period begins. We accept various payment methods as specified on our platform.</p>
                            <ul>
                                <li>Full payment required at booking</li>
                                <li>Cancellation policy applies as per booking terms</li>
                                <li>Security deposit may be required</li>
                            </ul>
                        </div>

                        <div class="terms-section-block">
                            <h3>5. User Responsibilities</h3>
                            <p>As a user of our service, you agree to:</p>
                            <ul>
                                <li>Provide accurate and truthful information</li>
                                <li>Use the vehicle responsibly and legally</li>
                                <li>Return the vehicle in the same condition</li>
                                <li>Comply with all traffic laws and regulations</li>
                                <li>Not use the vehicle for illegal activities</li>
                            </ul>
                        </div>

                        <div class="terms-section-block">
                            <h3>6. Vehicle Insurance</h3>
                            <p>Basic insurance coverage is included with all rentals. Additional coverage options are available for purchase. Users are responsible for deductibles and damages not covered by insurance.</p>
                        </div>

                        <div class="terms-section-block">
                            <h3>7. Cancellation Policy</h3>
                            <p>Cancellations made 24 hours before the rental start time are eligible for a full refund. Cancellations made within 24 hours may incur a cancellation fee as specified in the booking terms.</p>
                        </div>

                        <div class="terms-section-block">
                            <h3>8. Privacy Policy</h3>
                            <p>Your privacy is important to us. Please review our Privacy Policy, which also governs your use of our service, to understand our practices.</p>
                        </div>

                        <div class="terms-section-block">
                            <h3>9. Prohibited Uses</h3>
                            <p>You may not use our service for any illegal or unauthorized purpose. You are prohibited from using the service to:</p>
                            <ul>
                                <li>Transport illegal substances</li>
                                <li>Participate in racing or competitions</li>
                                <li>Sublease or rent the vehicle to others</li>
                                <li>Use the vehicle for commercial purposes without authorization</li>
                            </ul>
                        </div>

                        <div class="terms-section-block">
                            <h3>10. Limitation of Liability</h3>
                            <p>Quarkcars shall not be liable for any indirect, incidental, special, consequential, or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses.</p>
                        </div>

                        <div class="terms-section-block">
                            <h3>11. Termination</h3>
                            <p>We may terminate or suspend your access immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>
                        </div>

                        <div class="terms-section-block">
                            <h3>12. Changes to Terms</h3>
                            <p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material, we will provide at least 30 days notice prior to any new terms taking effect.</p>
                        </div>

                        <div class="terms-section-block">
                            <h3>13. Contact Information</h3>
                            <p>If you have any questions about these Terms of Service, please contact us:</p>
                            <ul>
                                <li>Email: info@quarkcars.com</li>
                                <li>Phone: +1-800-QUARKCARS</li>
                                <li>Address: 123 Main Street, City, State 12345</li>
                            </ul>
                        </div>

                        <div class="terms-section-block">
                            <p><strong>Last Updated:</strong> {{ date('F j, Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Terms Section End-->

     <x-footer_style_one />
@endsection
