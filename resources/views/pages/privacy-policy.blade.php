@extends('layouts.layoutCommon')

@section('title', 'Privacy Policy || Quarkcars || Quarkcars Laravel Template')

@section('content')
    <x-pageHeader title="Privacy Policy" subtitle="QuarkCars – Privacy Policy" />

    <!--Privacy Policy Section Start-->
    <section class="privacy-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="privacy-content">
                        <!-- Company Header -->
                        <div class="company-header text-center mb-5">
                            <div class="company-info">
                                <h2 class="company-name">QuarkCars Self Drive Rental</h2>
                                <h3 class="document-title">Privacy Policy</h3>
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
                                                <p><strong>Location:</strong> Jaipur, Rajasthan, India</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Privacy Policy Sections -->
                        <div class="privacy-sections">
                            <!-- Section 1: Introduction -->
                            <div class="privacy-section-block">
                                <h3><span class="section-number">1.</span> Introduction</h3>
                                <div class="introduction-content">
                                    <p><strong>QuarkCars respects your privacy and is committed to protecting your personal information. This Privacy Policy explains how we collect, use, store, and protect your data when you use our services.</strong></p>
                                </div>
                            </div>

                            <!-- Section 2: Information We Collect -->
                            <div class="privacy-section-block">
                                <h3><span class="section-number">2.</span> Information We Collect</h3>
                                <div class="information-types">
                                    <!-- Personal Information -->
                                    <div class="info-category">
                                        <div class="category-header">
                                            <i class="fas fa-user"></i>
                                            <h4>a) Personal Information</h4>
                                        </div>
                                        <div class="category-items">
                                            <div class="info-item">
                                                <i class="fas fa-id-card"></i>
                                                <p>Full Name</p>
                                            </div>
                                            <div class="info-item">
                                                <i class="fas fa-phone"></i>
                                                <p>Mobile Number</p>
                                            </div>
                                            <div class="info-item">
                                                <i class="fas fa-envelope"></i>
                                                <p>Email Address</p>
                                            </div>
                                            <div class="info-item">
                                                <i class="fas fa-home"></i>
                                                <p>Address</p>
                                            </div>
                                            <div class="info-item">
                                                <i class="fas fa-passport"></i>
                                                <p>Government ID (Aadhar, Driving License, Passport)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Booking Information -->
                                    <div class="info-category">
                                        <div class="category-header">
                                            <i class="fas fa-calendar-check"></i>
                                            <h4>b) Booking Information</h4>
                                        </div>
                                        <div class="category-items">
                                            <div class="info-item">
                                                <i class="fas fa-clock"></i>
                                                <p>Trip details (date, time, location)</p>
                                            </div>
                                            <div class="info-item">
                                                <i class="fas fa-car-side"></i>
                                                <p>Vehicle preferences</p>
                                            </div>
                                            <div class="info-item">
                                                <i class="fas fa-credit-card"></i>
                                                <p>Payment details</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Technical Information -->
                                    <div class="info-category">
                                        <div class="category-header">
                                            <i class="fas fa-laptop"></i>
                                            <h4>c) Technical Information</h4>
                                        </div>
                                        <div class="category-items">
                                            <div class="info-item">
                                                <i class="fas fa-globe"></i>
                                                <p>IP address</p>
                                            </div>
                                            <div class="info-item">
                                                <i class="fas fa-mobile-alt"></i>
                                                <p>Device information</p>
                                            </div>
                                            <div class="info-item">
                                                <i class="fas fa-chrome"></i>
                                                <p>Browser type</p>
                                            </div>
                                            <div class="info-item">
                                                <i class="fas fa-chart-line"></i>
                                                <p>Website/app usage data</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 3: How We Use Your Information -->
                            <div class="privacy-section-block">
                                <h3><span class="section-number">3.</span> How We Use Your Information</h3>
                                <div class="usage-list">
                                    <p><strong>We use your information to:</strong></p>
                                    <div class="usage-items">
                                        <div class="usage-item">
                                            <i class="fas fa-cogs"></i>
                                            <p>Process bookings and payments</p>
                                        </div>
                                        <div class="usage-item">
                                            <i class="fas fa-user-check"></i>
                                            <p>Verify identity and eligibility</p>
                                        </div>
                                        <div class="usage-item">
                                            <i class="fas fa-headset"></i>
                                            <p>Provide customer support</p>
                                        </div>
                                        <div class="usage-item">
                                            <i class="fas fa-chart-line"></i>
                                            <p>Improve our services and user experience</p>
                                        </div>
                                        <div class="usage-item">
                                            <i class="fas fa-bell"></i>
                                            <p>Send booking confirmations, updates, and offers</p>
                                        </div>
                                        <div class="usage-item">
                                            <i class="fas fa-shield-alt"></i>
                                            <p>Ensure safety, fraud prevention, and legal compliance</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 4: Data Sharing Policy -->
                            <div class="privacy-section-block">
                                <h3><span class="section-number">4.</span> Data Sharing Policy</h3>
                                <div class="sharing-policy">
                                    <div class="policy-statement">
                                        <i class="fas fa-lock"></i>
                                        <p><strong>We do not sell your personal data. However, we may share information with:</strong></p>
                                    </div>
                                    <div class="sharing-items">
                                        <div class="sharing-item">
                                            <i class="fas fa-credit-card"></i>
                                            <p>Payment gateways for transaction processing</p>
                                        </div>
                                        <div class="sharing-item">
                                            <i class="fas fa-landmark"></i>
                                            <p>Government authorities (if legally required)</p>
                                        </div>
                                        <div class="sharing-item">
                                            <i class="fas fa-handshake"></i>
                                            <p>Service partners (only when necessary for operations)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 5: Data Security -->
                            <div class="privacy-section-block">
                                <h3><span class="section-number">5.</span> Data Security</h3>
                                <div class="security-measures">
                                    <div class="security-item">
                                        <i class="fas fa-shield-alt"></i>
                                        <p><strong>We implement industry-standard security measures</strong></p>
                                    </div>
                                    <div class="security-item">
                                        <i class="fas fa-lock"></i>
                                        <p><strong>Your data is stored securely and protected against unauthorized access</strong></p>
                                    </div>
                                    <div class="security-item">
                                        <i class="fas fa-key"></i>
                                        <p><strong>Sensitive data is encrypted wherever applicable</strong></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 6: Cookies & Tracking -->
                            <div class="privacy-section-block">
                                <h3><span class="section-number">6.</span> Cookies & Tracking</h3>
                                <div class="cookies-info">
                                    <div class="cookie-item">
                                        <i class="fas fa-cookie"></i>
                                        <p><strong>We use cookies to enhance user experience</strong></p>
                                    </div>
                                    <div class="cookie-item">
                                        <i class="fas fa-chart-bar"></i>
                                        <p><strong>Cookies help in remembering preferences and analyzing website traffic</strong></p>
                                    </div>
                                    <div class="cookie-item">
                                        <i class="fas fa-cog"></i>
                                        <p><strong>Users can disable cookies via browser settings</strong></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 7: User Rights -->
                            <div class="privacy-section-block">
                                <h3><span class="section-number">7.</span> User Rights</h3>
                                <div class="user-rights">
                                    <p><strong>You have the right to:</strong></p>
                                    <div class="rights-items">
                                        <div class="right-item">
                                            <i class="fas fa-eye"></i>
                                            <p>Access your data</p>
                                        </div>
                                        <div class="right-item">
                                            <i class="fas fa-edit"></i>
                                            <p>Request correction of incorrect data</p>
                                        </div>
                                        <div class="right-item">
                                            <i class="fas fa-trash"></i>
                                            <p>Request deletion of your data (subject to legal requirements)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 8: Data Retention -->
                            <div class="privacy-section-block">
                                <h3><span class="section-number">8.</span> Data Retention</h3>
                                <div class="retention-policy">
                                    <div class="retention-item">
                                        <i class="fas fa-clock"></i>
                                        <p><strong>We retain your data only as long as necessary for business and legal purposes</strong></p>
                                    </div>
                                    <div class="retention-item">
                                        <i class="fas fa-gavel"></i>
                                        <p><strong>Data may be stored longer if required by law</strong></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 9: Third-Party Links -->
                            <div class="privacy-section-block">
                                <h3><span class="section-number">9.</span> Third-Party Links</h3>
                                <div class="third-party-info">
                                    <div class="third-party-item">
                                        <i class="fas fa-external-link-alt"></i>
                                        <p><strong>Our website/app may contain links to third-party websites</strong></p>
                                    </div>
                                    <div class="third-party-item">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        <p><strong>We are not responsible for their privacy practices</strong></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 10: Policy Updates -->
                            <div class="privacy-section-block">
                                <h3><span class="section-number">10.</span> Policy Updates</h3>
                                <div class="update-policy">
                                    <div class="update-item">
                                        <i class="fas fa-sync-alt"></i>
                                        <p><strong>QuarkCars reserves the right to update this Privacy Policy at any time</strong></p>
                                    </div>
                                    <div class="update-item">
                                        <i class="fas fa-bullhorn"></i>
                                        <p><strong>Updates will be posted on our website</strong></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 11: Contact Us -->
                            <div class="privacy-section-block">
                                <h3><span class="section-number">11.</span> Contact Us</h3>
                                <div class="contact-info">
                                    <p><strong>For any privacy-related queries:</strong></p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="contact-card">
                                                <i class="fas fa-phone-alt"></i>
                                                <p><strong>📞 Phone:</strong> <a href="tel:8769639911">8769639911</a></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="contact-card">
                                                <i class="fas fa-globe"></i>
                                                <p><strong>🌐 Website:</strong> <a href="https://www.quarkcars.com" target="_blank">www.quarkcars.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 12: Declaration -->
                            <div class="privacy-section-block declaration-section">
                                <h3><span class="section-number">12.</span> Declaration</h3>
                                <div class="declaration-box">
                                    <p><strong>By using QuarkCars services, you agree to the terms of this Privacy Policy.</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Privacy Policy Section End-->

    <!-- Custom Styles for Privacy Policy - Same as Terms -->
    <style>
        .privacy-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 60px 0;
            position: relative;
        }
        
        .privacy-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.03"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.03"/><circle cx="50" cy="50" r="1" fill="white" opacity="0.03"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            pointer-events: none;
        }
        
        .privacy-content {
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
        
        .privacy-section-block {
            margin-bottom: 40px;
            padding: 30px;
            background: #ffffff;
            border-radius: 15px;
            border: 1px solid #e9ecef;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .privacy-section-block::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .privacy-section-block:hover {
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transform: translateY(-3px);
        }
        
        .privacy-section-block h3 {
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
        
        .introduction-content {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
            border-left: 4px solid #007bff;
            text-align: center;
        }
        
        .information-types {
            margin: 20px 0;
        }
        
        .info-category {
            margin-bottom: 30px;
            background: #f8f9fa;
            border-radius: 12px;
            padding: 25px;
            border-left: 4px solid #007bff;
            transition: all 0.3s ease;
        }
        
        .info-category:hover {
            background: #e3f2fd;
            transform: translateY(-2px);
        }
        
        .category-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #dee2e6;
        }
        
        .category-header i {
            font-size: 1.8rem;
            color: #007bff;
            margin-right: 15px;
            min-width: 35px;
        }
        
        .category-header h4 {
            color: #2c3e50;
            margin: 0;
            font-size: 1.3rem;
            font-weight: 600;
        }
        
        .category-items {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
        }
        
        .info-item {
            background: white;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #dee2e6;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .info-item:hover {
            background: #007bff;
            color: white;
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.2);
        }
        
        .info-item i {
            font-size: 1.2rem;
            margin-right: 12px;
            min-width: 25px;
            color: #007bff;
        }
        
        .info-item:hover i {
            color: white;
        }
        
        .usage-list,
        .sharing-policy,
        .security-measures,
        .cookies-info,
        .user-rights,
        .retention-policy,
        .third-party-info,
        .update-policy {
            margin: 20px 0;
        }
        
        .usage-items,
        .sharing-items,
        .security-item,
        .cookie-item,
        .rights-items,
        .retention-item,
        .third-party-item,
        .update-item {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 15px;
            margin: 15px 0;
        }
        
        .usage-item,
        .sharing-item,
        .security-item,
        .cookie-item,
        .right-item,
        .retention-item,
        .third-party-item,
        .update-item {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #007bff;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .usage-item:hover,
        .sharing-item:hover,
        .security-item:hover,
        .cookie-item:hover,
        .right-item:hover,
        .retention-item:hover,
        .third-party-item:hover,
        .update-item:hover {
            background: #e3f2fd;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.1);
        }
        
        .usage-item i,
        .sharing-item i,
        .security-item i,
        .cookie-item i,
        .right-item i,
        .retention-item i,
        .third-party-item i,
        .update-item i {
            color: #007bff;
            font-size: 1.5rem;
            margin-right: 15px;
            min-width: 30px;
        }
        
        .policy-statement {
            background: #e3f2fd;
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #007bff;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }
        
        .policy-statement i {
            font-size: 1.8rem;
            color: #007bff;
            margin-right: 15px;
            min-width: 35px;
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
        
        .contact-info {
            margin: 20px 0;
        }
        
        .contact-card {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            border-left: 4px solid #007bff;
            transition: all 0.3s ease;
        }
        
        .contact-card:hover {
            background: #e3f2fd;
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 123, 255, 0.2);
        }
        
        .contact-card i {
            font-size: 2.5rem;
            margin-bottom: 15px;
            display: block;
            color: #007bff;
        }
        
        .contact-card a {
            color: #007bff;
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
            .privacy-content {
                padding: 20px;
            }
            
            .company-name {
                font-size: 1.8rem;
            }
            
            .document-title {
                font-size: 1.4rem;
            }
            
            .category-items,
            .usage-items,
            .sharing-items,
            .security-item,
            .cookie-item,
            .rights-items,
            .retention-item,
            .third-party-item,
            .update-item {
                grid-template-columns: 1fr;
            }
            
            .privacy-section-block {
                padding: 20px;
            }
            
            .section-number {
                width: 30px;
                height: 30px;
                font-size: 0.9rem;
            }
            
            .privacy-section-block h3 {
                font-size: 1.3rem;
            }
        }
        
        /* Print Styles */
        @media print {
            .privacy-section {
                background: white;
                padding: 20px 0;
            }
            
            .privacy-content {
                box-shadow: none;
                border: 1px solid #ccc;
            }
            
            .privacy-section-block {
                break-inside: avoid;
                page-break-inside: avoid;
                box-shadow: none;
                border: 1px solid #ddd;
            }
        }
    </style>

    <x-footer_style_one />
@endsection
