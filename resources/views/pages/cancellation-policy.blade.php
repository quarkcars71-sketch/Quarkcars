@extends('layouts.layoutCommon')

@section('title', 'Cancellation Policy || Quarkcars')

@section('content')
    <x-pageHeader title="Cancellation Policy" subtitle="QuarkCars - Booking Cancellation Policy" />

    <!--Cancellation Policy Section Start-->
    <section class="cancellation-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cancellation-content">
                        <!-- Company Header -->
                        <div class="company-header text-center mb-5">
                            <div class="company-info">
                                <h2 class="company-name">QuarkCars Self Drive Rental</h2>
                                <h3 class="document-title">Booking Cancellation Policy</h3>
                                <div class="company-details">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="info-card">
                                                <i class="fas fa-building"></i>
                                                <p><strong>Company:</strong> QuarkCars Services Private Limited</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="info-card">
                                                <i class="fas fa-car"></i>
                                                <p><strong>Brand:</strong> QuarkCars Self Drive</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="info-card">
                                                <i class="fas fa-globe"></i>
                                                <p><strong>Website:</strong> www.quarkcars.com</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="info-card">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <p><strong>Location:</strong> Jaipur, Rajasthan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cancellation Policy Sections -->
                        <div class="cancellation-sections">
                            <!-- Section 1: Cancellation by Customer -->
                            <div class="cancellation-section-block">
                                <h3><span class="section-number">1.</span> Cancellation by Customer</h3>
                                <div class="cancellation-tiers">
                                    <!-- More than 24 Hours -->
                                    <div class="tier-item success">
                                        <div class="tier-header">
                                            <i class="fas fa-calendar-check"></i>
                                            <h4>More than 24 Hours Before Trip Start</h4>
                                        </div>
                                        <div class="tier-details">
                                            <div class="charge-info">
                                                <i class="fas fa-rupee-sign"></i>
                                                <p><strong>Cancellation Charges:</strong> ₹0 or minimal processing fee</p>
                                            </div>
                                            <div class="refund-info">
                                                <i class="fas fa-check-circle"></i>
                                                <p><strong>Refund:</strong> 100% refund of booking amount (excluding convenience charges, if any)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Within 24 Hours -->
                                    <div class="tier-item warning">
                                        <div class="tier-header">
                                            <i class="fas fa-clock"></i>
                                            <h4>Within 24 Hours of Trip Start</h4>
                                        </div>
                                        <div class="tier-details">
                                            <div class="charge-info">
                                                <i class="fas fa-exclamation-triangle"></i>
                                                <p><strong>Cancellation Charges:</strong> 25% – 50% of booking amount</p>
                                            </div>
                                            <div class="refund-info">
                                                <i class="fas fa-percentage"></i>
                                                <p><strong>Refund:</strong> Remaining balance after deduction</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Within 6 Hours -->
                                    <div class="tier-item danger">
                                        <div class="tier-header">
                                            <i class="fas fa-exclamation-circle"></i>
                                            <h4>Within 6 Hours of Trip Start</h4>
                                        </div>
                                        <div class="tier-details">
                                            <div class="charge-info">
                                                <i class="fas fa-times-circle"></i>
                                                <p><strong>Cancellation Charges:</strong> Up to 75% of booking amount</p>
                                            </div>
                                            <div class="refund-info">
                                                <i class="fas fa-coins"></i>
                                                <p><strong>Refund:</strong> Partial refund after deduction</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- No Show -->
                                    <div class="tier-item danger">
                                        <div class="tier-header">
                                            <i class="fas fa-user-slash"></i>
                                            <h4>No Show (Customer does not pick vehicle)</h4>
                                        </div>
                                        <div class="tier-details">
                                            <div class="charge-info">
                                                <i class="fas fa-ban"></i>
                                                <p><strong>Cancellation Charges:</strong> 100% of booking amount</p>
                                            </div>
                                            <div class="refund-info">
                                                <i class="fas fa-times"></i>
                                                <p><strong>Refund:</strong> No refund applicable</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 2: Cancellation by QuarkCars -->
                            <div class="cancellation-section-block">
                                <h3><span class="section-number">2.</span> Cancellation by QuarkCars</h3>
                                <div class="company-cancellation">
                                    <div class="cancellation-item">
                                        <i class="fas fa-car-broken"></i>
                                        <p><strong>In case of vehicle unavailability or technical issues:</strong></p>
                                        <ul>
                                            <li><i class="fas fa-undo"></i> Full refund will be processed OR</li>
                                            <li><i class="fas fa-exchange-alt"></i> Alternate vehicle will be provided (subject to availability)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 3: Refund Process -->
                            <div class="cancellation-section-block">
                                <h3><span class="section-number">3.</span> Refund Process</h3>
                                <div class="refund-process">
                                    <div class="process-item">
                                        <i class="fas fa-clock"></i>
                                        <p><strong>Refund will be processed within 5–7 working days</strong></p>
                                    </div>
                                    <div class="process-item">
                                        <i class="fas fa-credit-card"></i>
                                        <p><strong>Amount will be credited to original payment method</strong></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 4: Rescheduling Policy -->
                            <div class="cancellation-section-block">
                                <h3><span class="section-number">4.</span> Rescheduling Policy</h3>
                                <div class="reschedule-policy">
                                    <div class="policy-item">
                                        <i class="fas fa-calendar-alt"></i>
                                        <p><strong>Free rescheduling allowed if requested at least 12 hours before trip</strong></p>
                                    </div>
                                    <div class="policy-item">
                                        <i class="fas fa-exchange-alt"></i>
                                        <p><strong>Subject to vehicle availability and price difference (if any)</strong></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 5: Security Deposit -->
                            <div class="cancellation-section-block">
                                <h3><span class="section-number">5.</span> Security Deposit</h3>
                                <div class="deposit-policy">
                                    <div class="deposit-item">
                                        <i class="fas fa-shield-alt"></i>
                                        <p><strong>Security deposit is not part of cancellation</strong></p>
                                    </div>
                                    <div class="deposit-item">
                                        <i class="fas fa-check-circle"></i>
                                        <p><strong>If already paid, it will be refunded fully (if no dues)</strong></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 6: Exceptional Cases -->
                            <div class="cancellation-section-block">
                                <h3><span class="section-number">6.</span> Exceptional Cases</h3>
                                <div class="exceptional-cases">
                                    <p><strong>In case of:</strong></p>
                                    <div class="case-list">
                                        <div class="case-item">
                                            <i class="fas fa-cloud-rain"></i>
                                            <p>Natural disasters</p>
                                        </div>
                                        <div class="case-item">
                                            <i class="fas fa-gavel"></i>
                                            <p>Government restrictions</p>
                                        </div>
                                        <div class="case-item">
                                            <i class="fas fa-exclamation-triangle"></i>
                                            <p>Emergency situations</p>
                                        </div>
                                    </div>
                                    <div class="exception-note">
                                        <i class="fas fa-info-circle"></i>
                                        <p><strong>👉 Cancellation charges may be relaxed (case-to-case basis)</strong></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 7: Important Notes -->
                            <div class="cancellation-section-block">
                                <h3><span class="section-number">7.</span> Important Notes</h3>
                                <div class="important-notes">
                                    <div class="note-item">
                                        <i class="fas fa-money-bill-wave"></i>
                                        <p><strong>Convenience/platform fees are non-refundable</strong></p>
                                    </div>
                                    <div class="note-item">
                                        <i class="fas fa-hourglass-half"></i>
                                        <p><strong>Refund timelines may vary based on bank/payment gateway</strong></p>
                                    </div>
                                    <div class="note-item">
                                        <i class="fas fa-calendar-times"></i>
                                        <p><strong>Peak season bookings may have stricter cancellation rules</strong></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 8: Declaration -->
                            <div class="cancellation-section-block declaration-section">
                                <h3><span class="section-number">8.</span> Declaration</h3>
                                <div class="declaration-box">
                                    <p><strong>By confirming the booking with QuarkCars, the customer agrees to this cancellation policy.</strong></p>
                                </div>
                            </div>

                            <!-- Section 9: Contact Support -->
                            <div class="cancellation-section-block contact-section">
                                <h3><span class="section-number">9.</span> Contact Support</h3>
                                <div class="contact-info">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="contact-card">
                                                <i class="fas fa-phone-alt"></i>
                                                <p><strong>Phone:</strong> <a href="tel:8769639911">8769639911</a></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="contact-card">
                                                <i class="fas fa-globe"></i>
                                                <p><strong>Website:</strong> <a href="https://www.quarkcars.com" target="_blank">www.quarkcars.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Cancellation Policy Section End-->

    <!-- Custom Styles for Cancellation Policy - Same as Terms -->
    <style>
        .cancellation-section {
            /* background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); */
            padding: 60px 0;
            position: relative;
        }
        
        .cancellation-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.03"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.03"/><circle cx="50" cy="50" r="1" fill="white" opacity="0.03"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            pointer-events: none;
        }
        
        .cancellation-content {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        .company-header {
            margin-bottom: 50px;
        }
        
        .company-name {
            color: #2c3e50;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .document-title {
            color: #667eea;
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 30px;
        }
        
        .info-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 20px;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        }
        
        .info-card i {
            font-size: 2rem;
            margin-bottom: 15px;
            display: block;
        }
        
        .cancellation-section-block {
            margin-bottom: 40px;
            padding: 30px;
            background: #ffffff;
            border-radius: 15px;
            border: 1px solid #e9ecef;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .cancellation-section-block::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .cancellation-section-block:hover {
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transform: translateY(-3px);
        }
        
        .cancellation-section-block h3 {
            color: #2c3e50;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
        }
        
        .section-number {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 1.1rem;
            font-weight: 700;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }
        
        .cancellation-tiers {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin: 20px 0;
        }
        
        .tier-item {
            padding: 25px;
            border-radius: 15px;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .tier-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }
        
        .tier-item.success {
            background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
            border-color: #28a745;
        }
        
        .tier-item.warning {
            background: linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%);
            border-color: #ffc107;
        }
        
        .tier-item.danger {
            background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
            border-color: #dc3545;
        }
        
        .tier-header {
            margin-bottom: 20px;
            text-align: center;
        }
        
        .tier-header i {
            font-size: 2.5rem;
            margin-bottom: 15px;
            display: block;
        }
        
        .tier-item.success .tier-header i {
            color: #28a745;
        }
        
        .tier-item.warning .tier-header i {
            color: #ffc107;
        }
        
        .tier-item.danger .tier-header i {
            color: #dc3545;
        }
        
        .tier-header h4 {
            color: #2c3e50;
            margin: 0;
            font-size: 1.2rem;
            font-weight: 600;
        }
        
        .tier-details {
            margin-top: 15px;
        }
        
        .charge-info,
        .refund-info {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            padding: 10px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 8px;
        }
        
        .charge-info i,
        .refund-info i {
            margin-right: 12px;
            font-size: 1.3rem;
            min-width: 25px;
        }
        
        .tier-item.success .charge-info i,
        .tier-item.success .refund-info i {
            color: #28a745;
        }
        
        .tier-item.warning .charge-info i,
        .tier-item.warning .refund-info i {
            color: #ffc107;
        }
        
        .tier-item.danger .charge-info i,
        .tier-item.danger .refund-info i {
            color: #dc3545;
        }
        
        .company-cancellation,
        .refund-process,
        .reschedule-policy,
        .deposit-policy,
        .exceptional-cases,
        .important-notes {
            margin: 20px 0;
        }
        
        .cancellation-item,
        .process-item,
        .policy-item,
        .deposit-item,
        .note-item {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #007bff;
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }
        
        .cancellation-item:hover,
        .process-item:hover,
        .policy-item:hover,
        .deposit-item:hover,
        .note-item:hover {
            background: #e3f2fd;
            transform: translateY(-2px);
        }
        
        .cancellation-item i,
        .process-item i,
        .policy-item i,
        .deposit-item i,
        .note-item i {
            color: #007bff;
            font-size: 1.5rem;
            margin-right: 15px;
            min-width: 30px;
        }
        
        .cancellation-item ul,
        .case-list {
            list-style: none;
            padding-left: 0;
            margin: 15px 0;
        }
        
        .cancellation-item li,
        .case-item {
            padding: 10px 0;
            border-bottom: 1px solid #dee2e6;
            display: flex;
            align-items: center;
        }
        
        .cancellation-item li:last-child,
        .case-item:last-child {
            border-bottom: none;
        }
        
        .cancellation-item li i,
        .case-item i {
            color: #007bff;
            margin-right: 12px;
            font-size: 1.2rem;
            min-width: 20px;
        }
        
        .case-item {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #17a2b8;
            margin-bottom: 10px;
            transition: all 0.3s ease;
        }
        
        .case-item:hover {
            background: #e3f2fd;
            transform: translateX(5px);
        }
        
        .case-item i {
            color: #17a2b8;
            margin-right: 12px;
            font-size: 1.3rem;
            min-width: 25px;
        }
        
        .exception-note {
            background: #e3f2fd;
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #17a2b8;
            margin-top: 20px;
            text-align: center;
        }
        
        .exception-note i {
            color: #17a2b8;
            font-size: 1.5rem;
            margin-right: 10px;
        }
        
        .declaration-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        
        .declaration-section h3 {
            color: white;
        }
        
        .declaration-box {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .contact-section {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        }
        
        .contact-section h3 {
            color: white;
        }
        
        .contact-info {
            margin: 20px 0;
        }
        
        .contact-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }
        
        .contact-card:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
        }
        
        .contact-card i {
            font-size: 2.5rem;
            margin-bottom: 15px;
            display: block;
            color: white;
        }
        
        .contact-card p {
            color: white;
            margin: 0;
        }
        
        .contact-card a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .contact-card a:hover {
            text-decoration: underline;
            transform: scale(1.05);
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .cancellation-content {
                padding: 20px;
            }
            
            .company-name {
                font-size: 1.8rem;
            }
            
            .document-title {
                font-size: 1.4rem;
            }
            
            .cancellation-tiers {
                grid-template-columns: 1fr;
            }
            
            .cancellation-section-block {
                padding: 20px;
            }
            
            .section-number {
                width: 30px;
                height: 30px;
                font-size: 0.9rem;
            }
            
            .cancellation-section-block h3 {
                font-size: 1.3rem;
            }
        }
        
        /* Print Styles */
        @media print {
            .cancellation-section {
                background: white;
                padding: 20px 0;
            }
            
            .cancellation-content {
                box-shadow: none;
                border: 1px solid #ccc;
            }
            
            .cancellation-section-block {
                break-inside: avoid;
                page-break-inside: avoid;
                box-shadow: none;
                border: 1px solid #ddd;
            }
        }
    </style>

    <x-footer_style_one />
@endsection
