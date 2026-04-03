@extends('layouts.layoutCommon')

@section('title', 'Terms & Conditions || Quarkcars')

@section('content')
    <x-pageHeader title="Terms & Conditions" subtitle="QuarkCars Self Drive Rental – Terms & Conditions" />

    <!--Terms Section Start-->
    <section class="terms-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="terms-content">
                        <!-- Company Header -->
                        <div class="company-header text-center mb-5">
                            <div class="company-info">
                                <h2 class="company-name">QuarkCars Self Drive Rental</h2>
                                <h3 class="document-title">Terms & Conditions</h3>
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

                        <!-- Terms Sections -->
                        <div class="terms-sections">
                            <!-- Section 1: Eligibility -->
                            <div class="terms-section-block">
                                <h3><span class="section-number">1.</span> Eligibility</h3>
                                <div class="requirement-list">
                                    <div class="requirement-item">
                                        <i class="fas fa-user-check"></i>
                                        <p><strong>Minimum age required:</strong> 21 years</p>
                                    </div>
                                    <div class="requirement-item">
                                        <i class="fas fa-id-card"></i>
                                        <p><strong>Valid Driving License (DL)</strong> is mandatory (original copy)</p>
                                    </div>
                                    <div class="requirement-item">
                                        <i class="fas fa-address-card"></i>
                                        <p><strong>Customer must provide valid Government ID proof</strong> (Aadhar / Passport / Voter ID)</p>
                                    </div>
                                    <div class="requirement-item">
                                        <i class="fas fa-passport"></i>
                                        <p><strong>International customers must provide a valid International Driving Permit (IDP)</strong></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 2: Booking & Payment -->
                            <div class="terms-section-block">
                                <h3><span class="section-number">2.</span> Booking & Payment</h3>
                                <div class="booking-info">
                                    <ul>
                                        <li><i class="fas fa-check-circle"></i> All bookings must be made through official website, app, or authorized representatives</li>
                                        <li><i class="fas fa-check-circle"></i> Full or partial payment may be required at time of booking</li>
                                        <li><i class="fas fa-check-circle"></i> Security deposit is mandatory before vehicle handover</li>
                                        <li><i class="fas fa-check-circle"></i> Prices may vary based on demand, duration, and vehicle availability</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Section 3: Security Deposit -->
                            <div class="terms-section-block">
                                <h3><span class="section-number">3.</span> Security Deposit</h3>
                                <div class="deposit-info">
                                    <div class="info-box">
                                        <i class="fas fa-shield-alt"></i>
                                        <p><strong>Refundable security deposit</strong> will be collected before trip start</p>
                                    </div>
                                    <div class="info-box">
                                        <i class="fas fa-clock"></i>
                                        <p><strong>Refund will be processed within 5–7 working days</strong> after vehicle return (subject to inspection)</p>
                                    </div>
                                    <div class="info-box">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        <p><strong>Any damages, penalties, or extra charges will be deducted from deposit</strong></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 4: Vehicle Usage Policy -->
                            <div class="terms-section-block">
                                <h3><span class="section-number">4.</span> Vehicle Usage Policy</h3>
                                <div class="usage-policy">
                                    <div class="allowed-usage">
                                        <h4><i class="fas fa-check"></i> Allowed Usage</h4>
                                        <p>Vehicle must be used only for personal use</p>
                                    </div>
                                    <div class="prohibited-usage">
                                        <h4><i class="fas fa-times"></i> Strictly Prohibited</h4>
                                        <ul>
                                            <li>Commercial use without permission</li>
                                            <li>Racing, overspeeding, or stunt driving</li>
                                            <li>Driving under the influence of alcohol or drugs</li>
                                            <li>Only registered driver is allowed to drive</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 5: Fuel Policy -->
                            <div class="terms-section-block">
                                <h3><span class="section-number">5.</span> Fuel Policy</h3>
                                <div class="fuel-policy">
                                    <div class="policy-item">
                                        <i class="fas fa-gas-pump"></i>
                                        <p>Vehicle will be provided with a certain fuel level</p>
                                    </div>
                                    <div class="policy-item">
                                        <i class="fas fa-tachometer-alt"></i>
                                        <p>Customer must return vehicle with same fuel level</p>
                                    </div>
                                    <div class="policy-item warning">
                                        <i class="fas fa-exclamation-circle"></i>
                                        <p><strong>Fuel difference charges will be applicable if not maintained</strong></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 6: Kilometers & Extra Charges -->
                            <div class="terms-section-block">
                                <h3><span class="section-number">6.</span> Kilometers & Extra Charges</h3>
                                <div class="km-charges">
                                    <div class="charge-item">
                                        <i class="fas fa-road"></i>
                                        <p>Rental includes limited kilometers per day (as per plan)</p>
                                    </div>
                                    <div class="charge-item">
                                        <i class="fas fa-plus-circle"></i>
                                        <p>Extra kilometers will be charged as per applicable rate</p>
                                    </div>
                                    <div class="charge-item">
                                        <i class="fas fa-clock"></i>
                                        <p>Late return charges will be applied on hourly basis</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 7: Vehicle Return -->
                            <div class="terms-section-block">
                                <h3><span class="section-number">7.</span> Vehicle Return</h3>
                                <div class="return-policy">
                                    <ul>
                                        <li><i class="fas fa-map-pin"></i> Vehicle must be returned at agreed time and location</li>
                                        <li><i class="fas fa-exclamation-triangle"></i> Late return may attract penalties</li>
                                        <li><i class="fas fa-info-circle"></i> Early return does not guarantee refund</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Section 8: Damage & Liability -->
                            <div class="terms-section-block">
                                <h3><span class="section-number">8.</span> Damage & Liability</h3>
                                <div class="damage-policy">
                                    <div class="liability-info">
                                        <h4><i class="fas fa-user-shield"></i> Customer Responsibility</h4>
                                        <p>Customer is fully responsible for any damage during rental period</p>
                                    </div>
                                    <div class="accident-procedure">
                                        <h4><i class="fas fa-car-crash"></i> In Case of Accident</h4>
                                        <ul>
                                            <li>Inform QuarkCars immediately</li>
                                            <li>File FIR if required</li>
                                        </ul>
                                    </div>
                                    <div class="insurance-info">
                                        <h4><i class="fas fa-file-contract"></i> Insurance & Claims</h4>
                                        <ul>
                                            <li>Insurance claim (if applicable) depends on compliance with terms</li>
                                            <li>Negligence or violation may lead to full damage recovery from customer</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 9: Traffic Violations & Fines -->
                            <div class="terms-section-block">
                                <h3><span class="section-number">9.</span> Traffic Violations & Fines</h3>
                                <div class="traffic-policy">
                                    <ul>
                                        <li><i class="fas fa-gavel"></i> All traffic challans during rental period will be borne by customer</li>
                                        <li><i class="fas fa-money-bill-wave"></i> Any pending fines will be deducted from security deposit</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Section 10: Cancellation Policy -->
                            <div class="terms-section-block">
                                <h3><span class="section-number">10.</span> Cancellation Policy</h3>
                                <div class="cancellation-tiers">
                                    <div class="tier-item">
                                        <div class="tier-header">
                                            <i class="fas fa-calendar-check"></i>
                                            <h4>24+ hours before</h4>
                                        </div>
                                        <p>Minimal or no charge</p>
                                    </div>
                                    <div class="tier-item">
                                        <div class="tier-header">
                                            <i class="fas fa-clock"></i>
                                            <h4>Within 24 hours</h4>
                                        </div>
                                        <p>Partial deduction</p>
                                    </div>
                                    <div class="tier-item">
                                        <div class="tier-header">
                                            <i class="fas fa-times-circle"></i>
                                            <h4>No show</h4>
                                        </div>
                                        <p>Full booking amount may be charged</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 11: Extension Policy -->
                            <div class="terms-section-block">
                                <h3><span class="section-number">11.</span> Extension Policy</h3>
                                <div class="extension-policy">
                                    <ul>
                                        <li><i class="fas fa-calendar-plus"></i> Rental extension is subject to availability</li>
                                        <li><i class="fas fa-bell"></i> Customer must inform in advance</li>
                                        <li><i class="fas fa-rupee-sign"></i> Extra charges will apply as per updated rates</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Section 12: Prohibited Areas -->
                            <div class="terms-section-block">
                                <h3><span class="section-number">12.</span> Prohibited Areas</h3>
                                <div class="prohibited-areas">
                                    <ul>
                                        <li><i class="fas fa-map-marked-alt"></i> Certain regions may be restricted (border areas, off-road locations)</li>
                                        <li><i class="fas fa-question-circle"></i> Customer must confirm allowed travel zones before trip</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Section 13: Breakdown & Support -->
                            <div class="terms-section-block">
                                <h3><span class="section-number">13.</span> Breakdown & Support</h3>
                                <div class="breakdown-support">
                                    <div class="support-item">
                                        <i class="fas fa-tools"></i>
                                        <h4>In Case of Breakdown</h4>
                                        <ul>
                                            <li>Contact QuarkCars support immediately</li>
                                            <li>Replacement vehicle will be provided (subject to availability)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 14: Termination of Rental -->
                            <div class="terms-section-block">
                                <h3><span class="section-number">14.</span> Termination of Rental</h3>
                                <div class="termination-conditions">
                                    <p><strong>QuarkCars reserves right to terminate rental if:</strong></p>
                                    <ul>
                                        <li><i class="fas fa-times"></i> Terms are violated</li>
                                        <li><i class="fas fa-times"></i> Misuse of vehicle is detected</li>
                                    </ul>
                                    <div class="termination-notice">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        <p><strong>No refund will be provided in such cases</strong></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 15: Privacy Policy -->
                            <div class="terms-section-block">
                                <h3><span class="section-number">15.</span> Privacy Policy</h3>
                                <div class="privacy-info">
                                    <ul>
                                        <li><i class="fas fa-lock"></i> Customer data will be kept confidential</li>
                                        <li><i class="fas fa-database"></i> Information may be used for verification and service improvement</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Section 16: Amendments -->
                            <div class="terms-section-block">
                                <h3><span class="section-number">16.</span> Amendments</h3>
                                <div class="amendments-info">
                                    <p><strong>QuarkCars reserves right to modify terms at any time without prior notice</strong></p>
                                </div>
                            </div>

                            <!-- Section 17: Jurisdiction -->
                            <div class="terms-section-block">
                                <h3><span class="section-number">17.</span> Jurisdiction</h3>
                                <div class="jurisdiction-info">
                                    <p><strong>All disputes are subject to Jaipur, Rajasthan jurisdiction</strong></p>
                                </div>
                            </div>

                            <!-- Declaration -->
                            <div class="terms-section-block declaration-section">
                                <h3><span class="section-number">18.</span> Declaration</h3>
                                <div class="declaration-box">
                                    <p><strong>By booking and using QuarkCars services, customer agrees to all the above terms and conditions.</strong></p>
                                </div>
                            </div>

                            <!-- Contact Support -->
                            <div class="terms-section-block contact-section">
                                <h3><span class="section-number">19.</span> Contact Support</h3>
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
    <!--Terms Section End-->

    <!-- Custom Styles for Terms -->
    <style>
        .terms-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 60px 0;
            position: relative;
        }
        
        .terms-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.03"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.03"/><circle cx="50" cy="50" r="1" fill="white" opacity="0.03"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            pointer-events: none;
        }
        
        .terms-content {
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
        
        .terms-section-block {
            margin-bottom: 40px;
            padding: 30px;
            background: #ffffff;
            border-radius: 15px;
            border: 1px solid #e9ecef;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .terms-section-block::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .terms-section-block:hover {
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transform: translateY(-3px);
        }
        
        .terms-section-block h3 {
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
        
        .requirement-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }
        
        .requirement-item {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #28a745;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .requirement-item:hover {
            background: #e8f5e8;
            transform: translateX(5px);
        }
        
        .requirement-item i {
            color: #28a745;
            font-size: 1.5rem;
            margin-right: 15px;
            min-width: 30px;
        }
        
        .booking-info ul,
        .return-policy ul,
        .extension-policy ul,
        .prohibited-areas ul,
        .traffic-policy ul,
        .breakdown-support ul,
        .privacy-info ul {
            margin: 20px 0;
            padding-left: 0;
            list-style: none;
        }
        
        .booking-info li,
        .return-policy li,
        .extension-policy li,
        .prohibited-areas li,
        .traffic-policy li,
        .breakdown-support li,
        .privacy-info li {
            background: #f8f9fa;
            padding: 15px 20px;
            border-radius: 8px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .booking-info li:hover,
        .return-policy li:hover,
        .extension-policy li:hover,
        .prohibited-areas li:hover,
        .traffic-policy li:hover,
        .breakdown-support li:hover,
        .privacy-info li:hover {
            background: #e9ecef;
            transform: translateX(5px);
        }
        
        .booking-info li i,
        .return-policy li i,
        .extension-policy li i,
        .prohibited-areas li i,
        .traffic-policy li i,
        .breakdown-support li i,
        .privacy-info li i {
            color: #667eea;
            margin-right: 15px;
            font-size: 1.2rem;
            min-width: 20px;
        }
        
        .deposit-info,
        .fuel-policy,
        .km-charges {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }
        
        .info-box {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #007bff;
            display: flex;
            align-items: flex-start;
            transition: all 0.3s ease;
        }
        
        .info-box:hover {
            background: #e3f2fd;
            transform: translateY(-2px);
        }
        
        .info-box.warning {
            border-left-color: #ffc107;
            background: #fff8e1;
        }
        
        .info-box.warning:hover {
            background: #fff3cd;
        }
        
        .info-box i {
            color: #007bff;
            font-size: 1.5rem;
            margin-right: 15px;
            margin-top: 2px;
        }
        
        .info-box.warning i {
            color: #ffc107;
        }
        
        .usage-policy {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin: 20px 0;
        }
        
        .allowed-usage,
        .prohibited-usage {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
        }
        
        .allowed-usage {
            border-left: 4px solid #28a745;
        }
        
        .prohibited-usage {
            border-left: 4px solid #dc3545;
        }
        
        .allowed-usage h4,
        .prohibited-usage h4 {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        
        .allowed-usage h4 i {
            color: #28a745;
            margin-right: 10px;
        }
        
        .prohibited-usage h4 i {
            color: #dc3545;
            margin-right: 10px;
        }
        
        .prohibited-usage ul {
            list-style: none;
            padding-left: 0;
            margin: 15px 0;
        }
        
        .prohibited-usage li {
            padding: 10px 0;
            border-bottom: 1px solid #dee2e6;
            display: flex;
            align-items: center;
        }
        
        .prohibited-usage li:last-child {
            border-bottom: none;
        }
        
        .prohibited-usage li::before {
            content: '🚫';
            margin-right: 10px;
            font-size: 1.2rem;
        }
        
        .fuel-policy,
        .km-charges {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        }
        
        .policy-item {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #17a2b8;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .policy-item:hover {
            background: #e3f2fd;
            transform: translateY(-2px);
        }
        
        .policy-item.warning {
            border-left-color: #ffc107;
            background: #fff8e1;
        }
        
        .policy-item.warning:hover {
            background: #fff3cd;
        }
        
        .policy-item i {
            color: #17a2b8;
            font-size: 1.5rem;
            margin-right: 15px;
            min-width: 30px;
        }
        
        .policy-item.warning i {
            color: #ffc107;
        }
        
        .charge-item {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #6f42c1;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .charge-item:hover {
            background: #e3e8ff;
            transform: translateY(-2px);
        }
        
        .charge-item i {
            color: #6f42c1;
            font-size: 1.5rem;
            margin-right: 15px;
            min-width: 30px;
        }
        
        .cancellation-tiers {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }
        
        .tier-item {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .tier-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .tier-header {
            margin-bottom: 15px;
        }
        
        .tier-header i {
            font-size: 2rem;
            margin-bottom: 10px;
            display: block;
        }
        
        .tier-header h4 {
            color: #2c3e50;
            margin: 0;
        }
        
        .damage-policy {
            margin: 20px 0;
        }
        
        .liability-info,
        .accident-procedure,
        .insurance-info {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 20px;
            border-left: 4px solid #fd7e14;
        }
        
        .liability-info h4,
        .accident-procedure h4,
        .insurance-info h4 {
            color: #fd7e14;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        
        .liability-info h4 i,
        .accident-procedure h4 i,
        .insurance-info h4 i {
            margin-right: 10px;
        }
        
        .accident-procedure ul,
        .insurance-info ul {
            list-style: none;
            padding-left: 0;
            margin: 15px 0;
        }
        
        .accident-procedure li,
        .insurance-info li {
            padding: 10px 0;
            border-bottom: 1px solid #dee2e6;
            display: flex;
            align-items: center;
        }
        
        .accident-procedure li:last-child,
        .insurance-info li:last-child {
            border-bottom: none;
        }
        
        .accident-procedure li::before {
            content: '⚠️';
            margin-right: 10px;
            font-size: 1.2rem;
        }
        
        .insurance-info li::before {
            content: '📋';
            margin-right: 10px;
            font-size: 1.2rem;
        }
        
        .termination-conditions {
            margin: 20px 0;
        }
        
        .termination-conditions ul {
            list-style: none;
            padding-left: 0;
            margin: 20px 0;
        }
        
        .termination-conditions li {
            background: #f8f9fa;
            padding: 15px 20px;
            border-radius: 8px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .termination-conditions li:hover {
            background: #f8d7da;
            transform: translateX(5px);
        }
        
        .termination-conditions li i {
            color: #dc3545;
            margin-right: 15px;
            font-size: 1.2rem;
            min-width: 20px;
        }
        
        .termination-notice {
            background: #f8d7da;
            color: #721c24;
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #dc3545;
            margin-top: 20px;
            text-align: center;
            font-weight: 600;
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
            .terms-content {
                padding: 20px;
            }
            
            .company-name {
                font-size: 1.8rem;
            }
            
            .document-title {
                font-size: 1.4rem;
            }
            
            .usage-policy {
                grid-template-columns: 1fr;
            }
            
            .cancellation-tiers {
                grid-template-columns: 1fr;
            }
            
            .terms-section-block {
                padding: 20px;
            }
            
            .section-number {
                width: 30px;
                height: 30px;
                font-size: 0.9rem;
            }
            
            .terms-section-block h3 {
                font-size: 1.3rem;
            }
            
            .requirement-list {
                grid-template-columns: 1fr;
            }
        }
        
        /* Print Styles */
        @media print {
            .terms-section {
                background: white;
                padding: 20px 0;
            }
            
            .terms-content {
                box-shadow: none;
                border: 1px solid #ccc;
            }
            
            .terms-section-block {
                break-inside: avoid;
                page-break-inside: avoid;
                box-shadow: none;
                border: 1px solid #ddd;
            }
        }
    </style>

    <x-footer_style_one />
@endsection
