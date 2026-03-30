@extends('layouts.layoutCommon')

@section('title', 'Customer Agreement || Quarkcars || Quarkcars Laravel Template')

@section('content')
    <x-pageHeader title="Customer Agreement" subtitle="QuarkCars Self Drive Rental – Customer Agreement" />

    <!--Customer Agreement Section Start-->
    <section class="agreement-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="agreement-content">
                        <!-- Company Header -->
                        <div class="company-header text-center mb-5">
                            <div class="company-info">
                                <h2 class="company-name">QuarkCars Self Drive Rental</h2>
                                <h3 class="document-title">Customer Agreement</h3>
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

                        <!-- Agreement Sections -->
                        <div class="agreement-sections">
                            <!-- Parties Section -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">1.</span> Parties to Agreement</h3>
                                <div class="parties-info">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="party-card">
                                                <h4><i class="fas fa-building"></i> Company (Lessor)</h4>
                                                <div class="party-details">
                                                    <p><strong>QuarkCars Services Private Limited</strong></p>
                                                    <p>Registered Office: Jaipur, Rajasthan</p>
                                                    <p class="text-muted">(hereinafter referred to as "Company" or "Lessor")</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="party-card">
                                                <h4><i class="fas fa-user"></i> Customer (Lessee)</h4>
                                                <div class="customer-details">
                                                    <p><strong>Name:</strong> <span class="blank-line">__________</span></p>
                                                    <p><strong>Father's Name:</strong> <span class="blank-line">__________</span></p>
                                                    <p><strong>Address:</strong> <span class="blank-line">__________</span></p>
                                                    <p><strong>Mobile No:</strong> <span class="blank-line">__________</span></p>
                                                    <p><strong>Email:</strong> <span class="blank-line">__________</span></p>
                                                    <p><strong>Driving License No:</strong> <span class="blank-line">__________</span></p>
                                                    <p><strong>Issuing Authority:</strong> <span class="blank-line">__________</span></p>
                                                </div>
                                                <p class="text-muted">(hereinafter referred to as "Customer" or "Lessee")</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Vehicle Details -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">2.</span> Vehicle Details</h3>
                                <div class="vehicle-details">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="detail-item">
                                                <i class="fas fa-car"></i>
                                                <p><strong>Vehicle Model:</strong> <span class="blank-line">__________</span></p>
                                            </div>
                                            <div class="detail-item">
                                                <i class="fas fa-palette"></i>
                                                <p><strong>Color:</strong> <span class="blank-line">__________</span></p>
                                            </div>
                                            <div class="detail-item">
                                                <i class="fas fa-cog"></i>
                                                <p><strong>Transmission:</strong> <span class="blank-line">__________</span></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="detail-item">
                                                <i class="fas fa-hashtag"></i>
                                                <p><strong>Registration No:</strong> <span class="blank-line">__________</span></p>
                                            </div>
                                            <div class="detail-item">
                                                <i class="fas fa-gas-pump"></i>
                                                <p><strong>Fuel Type:</strong> <span class="blank-line">__________</span></p>
                                            </div>
                                            <div class="detail-item">
                                                <i class="fas fa-tachometer-alt"></i>
                                                <p><strong>Odometer Reading:</strong> <span class="blank-line">__________</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Rental Period -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">3.</span> Rental Period</h3>
                                <div class="rental-period">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="period-item">
                                                <i class="fas fa-calendar-alt"></i>
                                                <p><strong>Start Date & Time:</strong> <span class="blank-line">___ / ___ / 20___</span> at <span class="blank-line">__:__</span></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="period-item">
                                                <i class="fas fa-calendar-check"></i>
                                                <p><strong>End Date & Time:</strong> <span class="blank-line">___ / ___ / 20___</span> at <span class="blank-line">__:__</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="total-duration">
                                        <i class="fas fa-clock"></i>
                                        <p><strong>Total Rental Duration:</strong> <span class="blank-line">__________</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Charges & Payment -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">4.</span> Charges & Security Deposit</h3>
                                <div class="charges-info">
                                    <div class="charge-item">
                                        <i class="fas fa-rupee-sign"></i>
                                        <p><strong>Rental Charges:</strong> <span class="blank-line">₹__________</span></p>
                                    </div>
                                    <div class="charge-item">
                                        <i class="fas fa-shield-alt"></i>
                                        <p><strong>Security Deposit:</strong> <span class="blank-line">₹__________</span></p>
                                    </div>
                                    <div class="charge-item">
                                        <i class="fas fa-calculator"></i>
                                        <p><strong>Total Amount:</strong> <span class="blank-line">₹__________</span></p>
                                    </div>
                                    <div class="payment-method">
                                        <i class="fas fa-credit-card"></i>
                                        <p><strong>Payment Method:</strong> <span class="blank-line">__________</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Eligibility & Declaration -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">5.</span> Eligibility & Declaration</h3>
                                <div class="eligibility-list">
                                    <div class="eligibility-item">
                                        <i class="fas fa-check-circle"></i>
                                        <p>Customer is minimum 21 years of age</p>
                                    </div>
                                    <div class="eligibility-item">
                                        <i class="fas fa-check-circle"></i>
                                        <p>Customer holds a valid driving license</p>
                                    </div>
                                    <div class="eligibility-item">
                                        <i class="fas fa-check-circle"></i>
                                        <p>Customer provided valid government ID proof</p>
                                    </div>
                                    <div class="eligibility-item">
                                        <i class="fas fa-check-circle"></i>
                                        <p>Customer agrees to comply with all terms</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Use of Vehicle -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">6.</span> Use of Vehicle</h3>
                                <div class="usage-policy">
                                    <div class="allowed-usage">
                                        <h4><i class="fas fa-check"></i> Permitted Use</h4>
                                        <ul>
                                            <li>Personal use only</li>
                                            <li>Within geographical limits</li>
                                            <li>Compliance with traffic laws</li>
                                        </ul>
                                    </div>
                                    <div class="prohibited-usage">
                                        <h4><i class="fas fa-times"></i> Prohibited Use</h4>
                                        <ul>
                                            <li>Commercial use without permission</li>
                                            <li>Racing or stunt driving</li>
                                            <li>Driving under influence</li>
                                            <li>Subleasing to third parties</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Geographical Limit -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">7.</span> Geographical Limit</h3>
                                <div class="geo-limit">
                                    <div class="limit-item">
                                        <i class="fas fa-map-marked-alt"></i>
                                        <p><strong>Allowed Areas:</strong> Within Rajasthan state limits</p>
                                    </div>
                                    <div class="limit-item warning">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        <p><strong>Restricted Areas:</strong> Border areas, off-road locations</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Customer Responsibilities -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">8.</span> Customer Responsibilities</h3>
                                <div class="responsibility-list">
                                    <div class="responsibility-item">
                                        <i class="fas fa-user-shield"></i>
                                        <p>Maintain vehicle in good condition</p>
                                    </div>
                                    <div class="responsibility-item">
                                        <i class="fas fa-gas-pump"></i>
                                        <p>Maintain fuel level as provided</p>
                                    </div>
                                    <div class="responsibility-item">
                                        <i class="fas fa-lock"></i>
                                        <p>Ensure vehicle security</p>
                                    </div>
                                    <div class="responsibility-item">
                                        <i class="fas fa-file-alt"></i>
                                        <p>Report any damage immediately</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Insurance & Liability -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">9.</span> Insurance & Liability</h3>
                                <div class="insurance-info">
                                    <div class="insurance-item">
                                        <i class="fas fa-shield-alt"></i>
                                        <p><strong>Insurance Coverage:</strong> Basic insurance included</p>
                                    </div>
                                    <div class="insurance-item">
                                        <i class="fas fa-exclamation-circle"></i>
                                        <p><strong>Deductible:</strong> Customer liable for deductible amount</p>
                                    </div>
                                    <div class="insurance-item">
                                        <i class="fas fa-times-circle"></i>
                                        <p><strong>Exclusions:</strong> Damage due to negligence not covered</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Damage Policy -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">10.</span> Damage Policy</h3>
                                <div class="damage-policy">
                                    <div class="damage-item">
                                        <i class="fas fa-car-crash"></i>
                                        <p><strong>Minor Damage:</strong> Deductible applies</p>
                                    </div>
                                    <div class="damage-item">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        <p><strong>Major Damage:</strong> Full recovery cost from customer</p>
                                    </div>
                                    <div class="damage-item">
                                        <i class="fas fa-tools"></i>
                                        <p><strong>Maintenance:</strong> Regular wear and tear excluded</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Traffic Violations -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">11.</span> Traffic Violations</h3>
                                <div class="traffic-policy">
                                    <div class="traffic-item">
                                        <i class="fas fa-gavel"></i>
                                        <p>All traffic violations during rental period are customer's responsibility</p>
                                    </div>
                                    <div class="traffic-item">
                                        <i class="fas fa-money-bill-wave"></i>
                                        <p>Fines and penalties will be deducted from security deposit</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Late Return Policy -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">12.</span> Late Return Policy</h3>
                                <div class="late-return">
                                    <div class="return-item">
                                        <i class="fas fa-clock"></i>
                                        <p><strong>Late Charges:</strong> Applied on hourly basis</p>
                                    </div>
                                    <div class="return-item">
                                        <i class="fas fa-exclamation-circle"></i>
                                        <p><strong>Penalty:</strong> Additional charges for late return</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Breakdown & Accident -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">13.</span> Breakdown & Accident Procedure</h3>
                                <div class="breakdown-procedure">
                                    <div class="procedure-item">
                                        <i class="fas fa-phone-alt"></i>
                                        <h4>Immediate Action</h4>
                                        <ul>
                                            <li>Contact QuarkCars support immediately</li>
                                            <li>Inform about breakdown/accident</li>
                                        </ul>
                                    </div>
                                    <div class="procedure-item">
                                        <i class="fas fa-file-contract"></i>
                                        <h4>Documentation</h4>
                                        <ul>
                                            <li>File FIR if required</li>
                                            <li>Collect all necessary documents</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Termination -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">14.</span> Termination</h3>
                                <div class="termination-conditions">
                                    <p><strong>Company reserves right to terminate if:</strong></p>
                                    <ul>
                                        <li><i class="fas fa-times"></i> Terms are violated</li>
                                        <li><i class="fas fa-times"></i> Misuse detected</li>
                                        <li><i class="fas fa-times"></i> Safety concerns</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Indemnity -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">15.</span> Indemnity</h3>
                                <div class="indemnity-info">
                                    <p>Customer agrees to indemnify Company against any claims, damages, or losses arising from vehicle use during rental period.</p>
                                </div>
                            </div>

                            <!-- Data & GPS Consent -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">16.</span> Data & GPS Consent</h3>
                                <div class="consent-info">
                                    <div class="consent-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <p>GPS tracking enabled for vehicle safety</p>
                                    </div>
                                    <div class="consent-item">
                                        <i class="fas fa-database"></i>
                                        <p>Data collected for service improvement</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Force Majeure -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">17.</span> Force Majeure</h3>
                                <div class="force-info">
                                    <p>Company not liable for delays/failures due to circumstances beyond reasonable control.</p>
                                </div>
                            </div>

                            <!-- Dispute Resolution -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">18.</span> Dispute Resolution</h3>
                                <div class="dispute-info">
                                    <p>All disputes subject to Jaipur, Rajasthan jurisdiction.</p>
                                </div>
                            </div>

                            <!-- Entire Agreement -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">19.</span> Entire Agreement</h3>
                                <div class="entire-info">
                                    <p>This agreement constitutes the complete understanding between parties and supersedes all prior agreements.</p>
                                </div>
                            </div>

                            <!-- Declaration -->
                            <div class="agreement-section-block declaration-section">
                                <h3><span class="section-number">20.</span> Declaration</h3>
                                <div class="declaration-box">
                                    <p><strong>We hereby declare that we have read, understood, and agree to all terms and conditions mentioned in this agreement.</strong></p>
                                </div>
                            </div>

                            <!-- Signature Section -->
                            <div class="agreement-section-block signature-section">
                                <h3><span class="section-number">21.</span> Signatures</h3>
                                <div class="signature-area">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="signature-card">
                                                <h4><i class="fas fa-building"></i> Company Representative</h4>
                                                <div class="signature-line">
                                                    <p>Signature: _________________________</p>
                                                    <p>Name: _________________________</p>
                                                    <p>Date: _________________________</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="signature-card">
                                                <h4><i class="fas fa-user"></i> Customer</h4>
                                                <div class="signature-line">
                                                    <p>Signature: _________________________</p>
                                                    <p>Name: _________________________</p>
                                                    <p>Date: _________________________</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Contact Support -->
                            <div class="agreement-section-block contact-section">
                                <h3><span class="section-number">22.</span> Contact Support</h3>
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
    <!--Customer Agreement Section End-->

    <!-- Custom Styles for Agreement - Same as Terms -->
    <style>
        .agreement-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 60px 0;
            position: relative;
        }
        
        .agreement-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.03"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.03"/><circle cx="50" cy="50" r="1" fill="white" opacity="0.03"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            pointer-events: none;
        }
        
        .agreement-content {
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
        
        .agreement-section-block {
            margin-bottom: 40px;
            padding: 30px;
            background: #ffffff;
            border-radius: 15px;
            border: 1px solid #e9ecef;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .agreement-section-block::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .agreement-section-block:hover {
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transform: translateY(-3px);
        }
        
        .agreement-section-block h3 {
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
        
        .party-card {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
            border-left: 4px solid #007bff;
            margin-bottom: 20px;
        }
        
        .party-card h4 {
            color: #007bff;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        
        .party-card h4 i {
            margin-right: 10px;
        }
        
        .blank-line {
            display: inline-block;
            border-bottom: 1px solid #333;
            min-width: 150px;
            margin: 0 5px;
        }
        
        .detail-item,
        .period-item,
        .charge-item,
        .limit-item,
        .responsibility-item,
        .insurance-item,
        .damage-item,
        .traffic-item,
        .return-item,
        .consent-item {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #007bff;
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }
        
        .detail-item:hover,
        .period-item:hover,
        .charge-item:hover,
        .responsibility-item:hover,
        .insurance-item:hover,
        .damage-item:hover,
        .traffic-item:hover,
        .return-item:hover,
        .consent-item:hover {
            background: #e3f2fd;
            transform: translateY(-2px);
        }
        
        .limit-item.warning {
            border-left-color: #ffc107;
            background: #fff8e1;
        }
        
        .detail-item i,
        .period-item i,
        .charge-item i,
        .limit-item i,
        .responsibility-item i,
        .insurance-item i,
        .damage-item i,
        .traffic-item i,
        .return-item i,
        .consent-item i {
            color: #007bff;
            font-size: 1.5rem;
            margin-right: 15px;
            min-width: 30px;
        }
        
        .limit-item.warning i {
            color: #ffc107;
        }
        
        .eligibility-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }
        
        .eligibility-item {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #28a745;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .eligibility-item:hover {
            background: #e8f5e8;
            transform: translateX(5px);
        }
        
        .eligibility-item i {
            color: #28a745;
            font-size: 1.5rem;
            margin-right: 15px;
            min-width: 30px;
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
        
        .allowed-usage ul,
        .prohibited-usage ul {
            list-style: none;
            padding-left: 0;
            margin: 15px 0;
        }
        
        .allowed-usage li,
        .prohibited-usage li {
            padding: 10px 0;
            border-bottom: 1px solid #dee2e6;
            display: flex;
            align-items: center;
        }
        
        .allowed-usage li:last-child,
        .prohibited-usage li:last-child {
            border-bottom: none;
        }
        
        .allowed-usage li::before {
            content: '✅';
            margin-right: 10px;
            font-size: 1.2rem;
        }
        
        .prohibited-usage li::before {
            content: '🚫';
            margin-right: 10px;
            font-size: 1.2rem;
        }
        
        .breakdown-procedure {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }
        
        .procedure-item {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
            border-left: 4px solid #fd7e14;
        }
        
        .procedure-item h4 {
            color: #fd7e14;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        
        .procedure-item h4 i {
            margin-right: 10px;
        }
        
        .procedure-item ul {
            list-style: none;
            padding-left: 0;
            margin: 15px 0;
        }
        
        .procedure-item li {
            padding: 10px 0;
            border-bottom: 1px solid #dee2e6;
            display: flex;
            align-items: center;
        }
        
        .procedure-item li:last-child {
            border-bottom: none;
        }
        
        .procedure-item li::before {
            content: '📋';
            margin-right: 10px;
            font-size: 1.2rem;
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
        
        .signature-section {
            background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
        }
        
        .signature-section h3 {
            color: white;
        }
        
        .signature-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 25px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            margin-bottom: 20px;
        }
        
        .signature-card h4 {
            color: white;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }
        
        .signature-card h4 i {
            margin-right: 10px;
        }
        
        .signature-line p {
            color: white;
            margin: 10px 0;
            font-family: 'Courier New', monospace;
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
        
        .indemnity-info,
        .consent-info,
        .force-info,
        .dispute-info,
        .entire-info {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
            border-left: 4px solid #6f42c1;
            margin: 20px 0;
        }
        
        .consent-info {
            border-left-color: #17a2b8;
        }
        
        .force-info {
            border-left-color: #fd7e14;
        }
        
        .dispute-info {
            border-left-color: #20c997;
        }
        
        .entire-info {
            border-left-color: #6c757d;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .agreement-content {
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
            
            .breakdown-procedure {
                grid-template-columns: 1fr;
            }
            
            .agreement-section-block {
                padding: 20px;
            }
            
            .section-number {
                width: 30px;
                height: 30px;
                font-size: 0.9rem;
            }
            
            .agreement-section-block h3 {
                font-size: 1.3rem;
            }
            
            .eligibility-list {
                grid-template-columns: 1fr;
            }
        }
        
        /* Print Styles */
        @media print {
            .agreement-section {
                background: white;
                padding: 20px 0;
            }
            
            .agreement-content {
                box-shadow: none;
                border: 1px solid #ccc;
            }
            
            .agreement-section-block {
                break-inside: avoid;
                page-break-inside: avoid;
                box-shadow: none;
                border: 1px solid #ddd;
            }
        }
    </style>

    <x-footer_style_one />
@endsection
                                
