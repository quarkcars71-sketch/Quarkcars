@extends('layouts.layoutCommon')

@section('title', 'Customer Agreement || Quarkcars || Quarkcars Laravel Template')

@section('content')
    <x-pageHeader title="Customer Agreement" subtitle="Self-Drive Vehicle Rental Agreement" />
   
    <!--Customer Agreement Section Start-->
    <section class="agreement-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="agreement-content">
                        <!-- Agreement Header -->
                        <div class="agreement-header text-center mb-5">
                            <h2 class="agreement-title">SELF-DRIVE VEHICLE RENTAL AGREEMENT</h2>
                            <p class="agreement-subtitle"><em>(Court-Ready Professional Format)</em></p>
                            <div class="agreement-date">
                                <p>This Self-Drive Vehicle Rental Agreement ("Agreement") is executed on <span class="blank-line">___ / ___ / 20___</span></p>
                            </div>
                        </div>

                        <!-- Parties Section -->
                        <div class="agreement-parties mb-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="party-card">
                                        <h4>Between:</h4>
                                        <p><strong>QuarkCars Services Private Limited,</strong></p>
                                        <p>Registered Office: Jaipur, Rajasthan</p>
                                        <p class="text-muted">(hereinafter referred to as "Company" or "Lessor")</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="party-card">
                                        <h4>AND</h4>
                                        <div class="customer-details">
                                            <p><strong>Customer Name:</strong> <span class="blank-line">__________</span></p>
                                            <p><strong>Father's Name:</strong> <span class="blank-line">__________</span></p>
                                            <p><strong>Address:</strong> <span class="blank-line">__________</span></p>
                                            <p><strong>Mobile No:</strong> <span class="blank-line">__________</span></p>
                                            <p><strong>Email:</strong> <span class="blank-line">__________</span></p>
                                            <p><strong>Driving License No:</strong> <span class="blank-line">__________</span></p>
                                            <p><strong>Issuing Authority & Valid Till:</strong> <span class="blank-line">__________</span></p>
                                        </div>
                                        <p class="text-muted">(hereinafter referred to as "Customer" or "Lessee")</p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <p><strong>Both parties agree as follows:</strong></p>
                            </div>
                        </div>

                        <!-- Agreement Sections -->
                        <div class="agreement-sections">
                            <!-- Section 1: Vehicle Details -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">1.</span> VEHICLE DETAILS</h3>
                                <div class="vehicle-details-grid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><strong>Vehicle Model:</strong> <span class="blank-line">__________</span></p>
                                            <p><strong>Registration Number:</strong> <span class="blank-line">__________</span></p>
                                            <p><strong>Fuel Type:</strong> <span class="blank-line">__________</span></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>Odometer Reading at Delivery:</strong> <span class="blank-line">__________</span></p>
                                            <p><strong>Fuel Level at Delivery:</strong> <span class="blank-line">__________</span></p>
                                            <p><strong>Vehicle Condition Report Attached:</strong> <span class="blank-line">Yes / No</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="confirmation-box">
                                    <p><strong>The Customer confirms inspection of the vehicle and accepts it in good condition.</strong></p>
                                </div>
                            </div>

                            <!-- Section 2: Rental Period -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">2.</span> RENTAL PERIOD</h3>
                                <div class="rental-period-grid">
                                    <p><strong>Rental Start Date & Time:</strong> <span class="blank-line">__________</span></p>
                                    <p><strong>Rental End Date & Time:</strong> <span class="blank-line">__________</span></p>
                                </div>
                                <div class="important-notes">
                                    <ul>
                                        <li>Minimum rental duration applies as per booking terms.</li>
                                        <li>Extension without prior approval is strictly prohibited.</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Section 3: Rental Charges & Security Deposit -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">3.</span> RENTAL CHARGES & SECURITY DEPOSIT</h3>
                                <div class="charges-grid">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p><strong>Rental Charges:</strong> ₹ <span class="blank-line">______</span></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p><strong>Security Deposit:</strong> ₹ <span class="blank-line">______</span></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p><strong>Mode of Payment:</strong> <span class="blank-line">______</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="deposit-info">
                                    <p><strong>Security deposit shall be refundable within</strong> <span class="blank-line">_</span> <strong>working days after vehicle return, subject to:</strong></p>
                                    <ul>
                                        <li>No damages</li>
                                        <li>No pending challans</li>
                                        <li>No additional charges</li>
                                        <li>No contractual violations</li>
                                    </ul>
                                    <p><strong>The Company reserves the right to adjust any dues from the deposit.</strong></p>
                                </div>
                            </div>

                            <!-- Section 4: Eligibility & Customer Declaration -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">4.</span> ELIGIBILITY & CUSTOMER DECLARATION</h3>
                                <p><strong>The Customer declares that:</strong></p>
                                <ol>
                                    <li>He/She holds a valid driving license.</li>
                                    <li>He/She is above 21 years of age.</li>
                                    <li>The license has not been suspended or revoked.</li>
                                    <li>All information provided is true and correct.</li>
                                </ol>
                                <div class="warning-box">
                                    <p><strong>Providing false information shall result in immediate termination without refund.</strong></p>
                                </div>
                            </div>

                            <!-- Section 5: Use of Vehicle -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">5.</span> USE OF VEHICLE</h3>
                                <p><strong>The Customer agrees that the vehicle shall NOT be used:</strong></p>
                                <ul class="prohibited-uses">
                                    <li>For illegal or criminal activity</li>
                                    <li>Under the influence of alcohol or drugs</li>
                                    <li>For racing, rallying, or speed testing</li>
                                    <li>For towing or pushing any vehicle</li>
                                    <li>For carrying hazardous or prohibited goods</li>
                                    <li>By any person other than the registered Customer</li>
                                    <li>For commercial passenger transport unless permitted</li>
                                </ul>
                                <div class="warning-box">
                                    <p><strong>Violation will make the Customer fully liable for all damages and legal consequences.</strong></p>
                                </div>
                            </div>

                            <!-- Section 6: Geographical Limit -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">6.</span> GEOGRAPHICAL LIMIT</h3>
                                <p><strong>Vehicle usage is restricted to:</strong></p>
                                <div class="geo-options">
                                    <label><input type="checkbox"> Within Rajasthan</label>
                                    <label><input type="checkbox"> All India (if permitted)</label>
                                </div>
                                <p><strong>Cross-border travel without written approval is prohibited.</strong></p>
                            </div>

                            <!-- Section 7: Customer Responsibilities -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">7.</span> CUSTOMER RESPONSIBILITIES</h3>
                                <p><strong>The Customer shall:</strong></p>
                                <ul>
                                    <li>Drive responsibly and follow traffic laws</li>
                                    <li>Keep vehicle locked when not in use</li>
                                    <li>Maintain fuel level as received</li>
                                    <li>Not tamper with GPS device</li>
                                    <li>Inform Company immediately in case of breakdown or accident</li>
                                </ul>
                                <div class="info-box">
                                    <p><strong>The Customer is liable for any mechanical damage due to negligent driving.</strong></p>
                                </div>
                            </div>

                            <!-- Section 8: Insurance & Liability -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">8.</span> INSURANCE & LIABILITY</h3>
                                <p><strong>The vehicle is insured under a commercial comprehensive policy.</strong></p>
                                <div class="insurance-details">
                                    <p><strong>However:</strong></p>
                                    <ul>
                                        <li>Customer is liable for deductible/excess amount.</li>
                                        <li>In case of accident, customer must obtain FIR (if required).</li>
                                        <li>Drunk driving voids insurance; full liability rests with customer.</li>
                                        <li>In case of total loss/theft due to negligence, customer bears financial liability until claim settlement.</li>
                                    </ul>
                                    <p><strong>Loss of business charges may apply during repair period.</strong></p>
                                </div>
                            </div>

                            <!-- Section 9: Damage Policy -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">9.</span> DAMAGE POLICY</h3>
                                <ul>
                                    <li>Minor scratches/dents: As per attached damage matrix.</li>
                                    <li>Major accident: Insurance claim + deductible + downtime charges.</li>
                                </ul>
                                <p><strong>Undisclosed damage found after return may be charged within 48 hours.</strong></p>
                            </div>

                            <!-- Section 10: Traffic Violations -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">10.</span> TRAFFIC VIOLATIONS</h3>
                                <p><strong>All traffic challans during rental period are customer's responsibility.</strong></p>
                                <p><strong>If Company receives challan notice later:</strong></p>
                                <ul>
                                    <li>Customer must pay within 3 days</li>
                                    <li>Otherwise, Company may deduct from deposit</li>
                                    <li>Administrative fee may apply</li>
                                </ul>
                            </div>

                            <!-- Section 11: Late Return Policy -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">11.</span> LATE RETURN POLICY</h3>
                                <div class="late-return-info">
                                    <p><strong>Grace Period:</strong> <span class="blank-line">_</span> minutes</p>
                                    <p><strong>After grace period:</strong></p>
                                    <ul>
                                        <li>₹ <span class="blank-line">__</span> per hour OR</li>
                                        <li>Full day charge after <span class="blank-line">_</span> hours</li>
                                    </ul>
                                    <p><strong>Unauthorized retention beyond 24 hours may be treated as criminal breach of trust.</strong></p>
                                </div>
                            </div>

                            <!-- Section 12: Breakdown & Accident Procedure -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">12.</span> BREAKDOWN & ACCIDENT PROCEDURE</h3>
                                <div class="procedure-grid">
                                    <div class="procedure-box">
                                        <h4>In case of breakdown:</h4>
                                        <ol>
                                            <li>Stop vehicle safely</li>
                                            <li>Inform Company immediately</li>
                                            <li>Do not attempt unauthorized repairs</li>
                                        </ol>
                                    </div>
                                    <div class="procedure-box">
                                        <h4>In case of accident:</h4>
                                        <ol>
                                            <li>Inform police (if required)</li>
                                            <li>Take photos/videos</li>
                                            <li>Share details with Company immediately</li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="warning-box">
                                    <p><strong>Failure to follow procedure may void insurance support.</strong></p>
                                </div>
                            </div>

                            <!-- Section 13: Termination -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">13.</span> TERMINATION</h3>
                                <p><strong>The Company may terminate this Agreement without notice if:</strong></p>
                                <ul>
                                    <li>Customer violates terms</li>
                                    <li>Vehicle is misused</li>
                                    <li>False documents submitted</li>
                                    <li>Safety risk detected</li>
                                </ul>
                                <p><strong>No refund shall be made in such cases.</strong></p>
                            </div>

                            <!-- Section 14: Indemnity Clause -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">14.</span> INDEMNITY CLAUSE</h3>
                                <p><strong>The Customer agrees to indemnify and hold harmless the Company from:</strong></p>
                                <ul>
                                    <li>Third-party claims</li>
                                    <li>Legal penalties</li>
                                    <li>Damages due to misuse</li>
                                    <li>Court cases arising during rental</li>
                                </ul>
                            </div>

                            <!-- Section 15: Data & GPS Consent -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">15.</span> DATA & GPS CONSENT</h3>
                                <p><strong>Customer acknowledges that:</strong></p>
                                <ul>
                                    <li>Vehicle is GPS tracked</li>
                                    <li>Trip data may be stored</li>
                                    <li>Information may be shared with authorities if legally required</li>
                                </ul>
                            </div>

                            <!-- Section 16: Force Majeure -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">16.</span> FORCE MAJEURE</h3>
                                <p><strong>Company shall not be liable for failure due to events beyond control including:</strong></p>
                                <ul>
                                    <li>Natural disaster</li>
                                    <li>Government restrictions</li>
                                    <li>Civil unrest</li>
                                    <li>Mechanical failure not due to negligence</li>
                                </ul>
                            </div>

                            <!-- Section 17: Dispute Resolution -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">17.</span> DISPUTE RESOLUTION</h3>
                                <p><strong>All disputes shall be subject to the jurisdiction of courts in Jaipur, Rajasthan only.</strong></p>
                                <p><strong>Before litigation, parties agree to attempt mutual settlement.</strong></p>
                            </div>

                            <!-- Section 18: Entire Agreement -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">18.</span> ENTIRE AGREEMENT</h3>
                                <p><strong>This Agreement constitutes the entire understanding between parties and supersedes prior discussions.</strong></p>
                                <p><strong>Any modification must be in writing and signed by both parties.</strong></p>
                            </div>

                            <!-- Section 19: Declaration -->
                            <div class="agreement-section-block">
                                <h3><span class="section-number">19.</span> DECLARATION</h3>
                                <div class="declaration-box">
                                    <p><strong>I, the undersigned Customer, have read and understood all terms and conditions and agree to abide by them.</strong></p>
                                </div>
                                
                                <!-- Signature Section -->
                                <div class="signature-section mt-5">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="signature-box">
                                                <h4>Customer Signature:</h4>
                                                <div class="signature-line">__________</div>
                                                <p><strong>Name:</strong> __________</p>
                                                <p><strong>Date:</strong> __________</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="signature-box">
                                                <h4>For QuarkCars Services Pvt Ltd</h4>
                                                <div class="signature-line">__________</div>
                                                <p><strong>Authorized Signatory:</strong> __________</p>
                                                <p><strong>Designation:</strong> __________</p>
                                                <p><strong>Seal & Stamp</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Annexures -->
                            <div class="annexures-section mt-5">
                                <div class="annexure-box">
                                    <h4>ANNEXURE A – VEHICLE CONDITION CHECKLIST</h4>
                                    <p>(Attach pre-delivery inspection sheet with photos)</p>
                                </div>
                                <div class="annexure-box">
                                    <h4>ANNEXURE B – DAMAGE MATRIX</h4>
                                    <p>(Attach standardized repair cost chart)</p>
                                </div>
                                <div class="annexure-box">
                                    <h4>ANNEXURE C – ID & DL COPY</h4>
                                    <p>(Attach KYC documents)</p>
                                </div>
                            </div>

                            <!-- End of Agreement -->
                            <div class="agreement-footer text-center mt-5">
                                <h4>END OF AGREEMENT</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Customer Agreement Section End-->

    <!-- Custom Styles for Agreement -->
    <style>
        .agreement-section {
            background: #f8f9fa;
            padding: 60px 0;
        }
        
        .agreement-content {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .agreement-header {
            border-bottom: 3px solid #007bff;
            padding-bottom: 30px;
            margin-bottom: 40px;
        }
        
        .agreement-title {
            color: #2c3e50;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .agreement-subtitle {
            color: #6c757d;
            font-size: 1.1rem;
        }
        
        .agreement-date {
            margin-top: 20px;
            font-size: 1.1rem;
        }
        
        .party-card {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
            border-left: 4px solid #007bff;
            margin-bottom: 20px;
        }
        
        .customer-details p {
            margin-bottom: 10px;
        }
        
        .blank-line {
            display: inline-block;
            min-width: 150px;
            border-bottom: 2px solid #007bff;
            padding: 0 10px;
            margin: 0 5px;
        }
        
        .agreement-section-block {
            margin-bottom: 40px;
            padding: 30px;
            background: #ffffff;
            border-radius: 10px;
            border: 1px solid #e9ecef;
            transition: all 0.3s ease;
        }
        
        .agreement-section-block:hover {
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transform: translateY(-2px);
        }
        
        .agreement-section-block h3 {
            color: #2c3e50;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }
        
        .section-number {
            background: #007bff;
            color: white;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-size: 1rem;
        }
        
        .vehicle-details-grid,
        .rental-period-grid,
        .charges-grid {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 15px 0;
        }
        
        .confirmation-box,
        .warning-box,
        .info-box {
            padding: 15px;
            border-radius: 8px;
            margin: 15px 0;
        }
        
        .confirmation-box {
            background: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
        }
        
        .warning-box {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            color: #856404;
        }
        
        .info-box {
            background: #d1ecf1;
            border: 1px solid #bee5eb;
            color: #0c5460;
        }
        
        .important-notes ul,
        .prohibited-uses ul {
            margin: 15px 0;
            padding-left: 20px;
        }
        
        .important-notes li,
        .prohibited-uses li {
            margin-bottom: 10px;
        }
        
        .geo-options {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin: 15px 0;
        }
        
        .geo-options label {
            display: block;
            margin: 10px 0;
            font-weight: 500;
        }
        
        .geo-options input[type="checkbox"] {
            margin-right: 10px;
        }
        
        .procedure-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin: 20px 0;
        }
        
        .procedure-box {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #28a745;
        }
        
        .procedure-box h4 {
            color: #28a745;
            margin-bottom: 15px;
        }
        
        .procedure-box ol {
            padding-left: 20px;
        }
        
        .procedure-box li {
            margin-bottom: 8px;
        }
        
        .declaration-box {
            background: #e7f3ff;
            padding: 25px;
            border-radius: 10px;
            border-left: 5px solid #007bff;
            text-align: center;
        }
        
        .signature-section {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            margin-top: 30px;
        }
        
        .signature-box {
            background: white;
            padding: 25px;
            border-radius: 8px;
            text-align: center;
            border: 2px solid #e9ecef;
        }
        
        .signature-line {
            border-bottom: 2px solid #007bff;
            height: 50px;
            margin: 20px 0;
        }
        
        .annexures-section {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            margin-top: 30px;
        }
        
        .annexure-box {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 15px;
            border-left: 4px solid #6c757d;
        }
        
        .annexure-box h4 {
            color: #6c757d;
            margin-bottom: 10px;
        }
        
        .agreement-footer {
            background: #2c3e50;
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-top: 40px;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .agreement-content {
                padding: 20px;
            }
            
            .agreement-title {
                font-size: 1.8rem;
            }
            
            .procedure-grid {
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
            }
        }
    </style>

    <x-footer_style_one />
@endsection
