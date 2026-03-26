@extends('layouts.layoutCommon')

@section('title', 'Privacy Policy || Quarkcars || Quarkcars Laravel Template')

@section('content')
    <x-pageHeader title="Privacy Policy" subtitle="Privacy policy" />
   
    <!--Privacy Policy Section Start-->
    <section class="privacy-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="privacy-content">
                        <div class="privacy-section-block">
                            <h3>1. Information We Collect</h3>
                            <p>At Quarkcars, we collect information to provide better services to all our users. The types of information we collect include:</p>
                            <ul>
                                <li><strong>Personal Information:</strong> Name, email address, phone number, and address</li>
                                <li><strong>Driver Information:</strong> Driver's license details, date of birth, and driving history</li>
                                <li><strong>Payment Information:</strong> Credit card details, billing address, and payment history</li>
                                <li><strong>Vehicle Usage Data:</strong> GPS location, mileage, and usage patterns</li>
                                <li><strong>Device Information:</strong> IP address, browser type, and device identifiers</li>
                            </ul>
                        </div>

                        <div class="privacy-section-block">
                            <h3>2. How We Use Your Information</h3>
                            <p>We use the information we collect for various purposes, including:</p>
                            <ul>
                                <li>Processing and managing your car rental bookings</li>
                                <li>Verifying your identity and driver credentials</li>
                                <li>Processing payments and managing your account</li>
                                <li>Communicating with you about your reservations</li>
                                <li>Improving our services and developing new features</li>
                                <li>Ensuring safety and security for all users</li>
                                <li>Complying with legal obligations</li>
                            </ul>
                        </div>

                        <div class="privacy-section-block">
                            <h3>3. Information Sharing</h3>
                            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except in the following circumstances:</p>
                            <ul>
                                <li><strong>Service Providers:</strong> We share information with trusted third-party service providers who assist in operating our platform</li>
                                <li><strong>Legal Requirements:</strong> We may disclose information when required by law or to protect our rights</li>
                                <li><strong>Business Transfers:</strong> Information may be transferred in connection with a merger, acquisition, or sale of assets</li>
                                <li><strong>Safety:</strong> We may share information to prevent fraud or ensure safety</li>
                            </ul>
                        </div>

                        <div class="privacy-section-block">
                            <h3>4. Data Security</h3>
                            <p>We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. These measures include:</p>
                            <ul>
                                <li>SSL encryption for data transmission</li>
                                <li>Secure servers and database protection</li>
                                <li>Regular security audits and updates</li>
                                <li>Employee training on data protection</li>
                                <li>Access controls and authentication systems</li>
                            </ul>
                        </div>

                        <div class="privacy-section-block">
                            <h3>5. Cookies and Tracking Technologies</h3>
                            <p>We use cookies and similar tracking technologies to enhance your experience on our platform:</p>
                            <ul>
                                <li><strong>Essential Cookies:</strong> Required for basic website functionality</li>
                                <li><strong>Performance Cookies:</strong> Help us understand how our website is used</li>
                                <li><strong>Functional Cookies:</strong> Remember your preferences and settings</li>
                                <li><strong>Marketing Cookies:</strong> Used to display relevant advertisements</li>
                            </ul>
                            <p>You can control cookie settings through your browser preferences.</p>
                        </div>

                        <div class="privacy-section-block">
                            <h3>6. Your Rights</h3>
                            <p>You have the following rights regarding your personal information:</p>
                            <ul>
                                <li><strong>Access:</strong> Request access to your personal information</li>
                                <li><strong>Correction:</strong> Request correction of inaccurate information</li>
                                <li><strong>Deletion:</strong> Request deletion of your personal information</li>
                                <li><strong>Portability:</strong> Request transfer of your data to another service</li>
                                <li><strong>Objection:</strong> Object to processing of your information</li>
                            </ul>
                        </div>

                        <div class="privacy-section-block">
                            <h3>7. Data Retention</h3>
                            <p>We retain your personal information for as long as necessary to fulfill the purposes outlined in this privacy policy, unless a longer retention period is required or permitted by law. The specific retention periods vary based on the type of information and legal requirements.</p>
                        </div>

                        <div class="privacy-section-block">
                            <h3>8. Children's Privacy</h3>
                            <p>Our services are not intended for individuals under the age of 21. We do not knowingly collect personal information from children under 21. If you become aware that a child has provided us with personal information, please contact us immediately.</p>
                        </div>

                        <div class="privacy-section-block">
                            <h3>9. International Data Transfers</h3>
                            <p>Your personal information may be transferred to and processed in countries other than your own. We ensure appropriate safeguards are in place to protect your information in accordance with applicable data protection laws.</p>
                        </div>

                        <div class="privacy-section-block">
                            <h3>10. Changes to This Privacy Policy</h3>
                            <p>We may update this privacy policy from time to time. We will notify you of any changes by posting the new policy on this page and updating the "Last Updated" date. You are advised to review this privacy policy periodically for any changes.</p>
                        </div>

                        <div class="privacy-section-block">
                            <h3>11. Contact Us</h3>
                            <p>If you have any questions about this privacy policy or our data practices, please contact us:</p>
                            <ul>
                                <li><strong>Email:</strong> privacy@quarkcars.com</li>
                                <li><strong>Phone:</strong> +1-800-QUARKCARS</li>
                                <li><strong>Address:</strong> 123 Main Street, City, State 12345</li>
                                <li><strong>Data Protection Officer:</strong> dpo@quarkcars.com</li>
                            </ul>
                        </div>

                        <div class="privacy-section-block">
                            <p><strong>Last Updated:</strong> {{ date('F j, Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Privacy Policy Section End-->

    <x-footer_style_one />
@endsection
