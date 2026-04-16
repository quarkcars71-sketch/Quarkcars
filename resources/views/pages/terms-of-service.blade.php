@extends('layouts.layoutCommon')

@section('title', 'Terms & Conditions || Quarkcars')

@section('content')

    <!-- Terms & Conditions Section Start -->
    <section class="terms-section">
        <div class="container">
            <div class="terms-content">

                <!-- Company Header -->
                <div class="company-header text-center mb-5">
                    <h2 class="company-name">QuarkCars Self Drive Rental</h2>
                    <h3 class="document-title">Terms & Conditions</h3>

                    <div class="row company-details">
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

                <!-- Terms Sections -->
                <div class="terms-sections">

                    <!-- 1. Eligibility -->
                    <div class="terms-section-block">
                        <h3><span class="section-number">1</span> Eligibility</h3>
                        <ul>
                            <li>Minimum age required: 21 years.</li>
                            <li>Valid Driving License (DL) is mandatory.</li>
                            <li>Valid Government ID proof is required.</li>
                            <li>International customers must provide an IDP.</li>
                        </ul>
                    </div>

                    <!-- 2. Booking & Payment -->
                    <div class="terms-section-block">
                        <h3><span class="section-number">2</span> Booking & Payment</h3>
                        <ul>
                            <li>Bookings can be made through the official website or representatives.</li>
                            <li>Full or partial payment may be required.</li>
                            <li>A refundable security deposit is mandatory.</li>
                            <li>Prices may vary based on demand and availability.</li>
                        </ul>
                    </div>

                    <!-- 3. Security Deposit -->
                    <div class="terms-section-block">
                        <h3><span class="section-number">3</span> Security Deposit</h3>
                        <ul>
                            <li>Collected before vehicle handover.</li>
                            <li>Refund processed within 5–7 working days.</li>
                            <li>Damages or fines will be deducted.</li>
                        </ul>
                    </div>

                    <!-- 4. Vehicle Usage Policy -->
                    <div class="terms-section-block">
                        <h3><span class="section-number">4</span> Vehicle Usage Policy</h3>
                        <ul>
                            <li>Only for personal use.</li>
                            <li>No racing or overspeeding.</li>
                            <li>No driving under the influence of alcohol.</li>
                            <li>Only registered drivers are allowed.</li>
                        </ul>
                    </div>

                    <!-- 5. Fuel Policy -->
                    <div class="terms-section-block">
                        <h3><span class="section-number">5</span> Fuel Policy</h3>
                        <ul>
                            <li>Vehicle must be returned with the same fuel level.</li>
                            <li>Fuel difference charges will apply.</li>
                        </ul>
                    </div>

                    <!-- 6. Cancellation Policy -->
                    <div class="terms-section-block">
                        <h3><span class="section-number">6</span> Cancellation Policy</h3>
                        <ul>
                            <li>24+ hours before: Minimal or no charge.</li>
                            <li>Within 24 hours: Partial deduction.</li>
                            <li>No-show: Full booking amount charged.</li>
                        </ul>
                    </div>

                    <!-- 7. Damage & Liability -->
                    <div class="terms-section-block">
                        <h3><span class="section-number">7</span> Damage & Liability</h3>
                        <ul>
                            <li>Customers are responsible for damages during the rental period.</li>
                            <li>Accidents must be reported immediately.</li>
                        </ul>
                    </div>

                    <!-- 8. Jurisdiction -->
                    <div class="terms-section-block">
                        <h3><span class="section-number">8</span> Jurisdiction</h3>
                        <p>All disputes are subject to Jaipur, Rajasthan jurisdiction.</p>
                    </div>

                    <!-- 9. Contact Support -->
                    <div class="terms-section-block">
                        <h3><span class="section-number">9</span> Contact Support</h3>
                        <p><strong>Phone:</strong> <a href="tel:8769639911">8769639911</a></p>
                        <p><strong>Website:</strong> 
                            <a href="https://www.quarkcars.com" target="_blank">
                                www.quarkcars.com
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Terms & Conditions Section End -->

    <style>
        .terms-section {
            background: linear-gradient(135deg, #1F4F8C, #f2b720);
            padding: 60px 0;
        }

        .terms-content {
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .company-name {
            color: #1F4F8C;
            font-weight: 700;
        }

        .document-title {
            color: #f2b720;
            margin-bottom: 30px;
        }

        .info-card {
            background: linear-gradient(135deg, #1F4F8C, #f2b720);
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .terms-section-block {
            margin-bottom: 25px;
            padding: 20px;
            border-left: 5px solid #1F4F8C;
            background: #f9f9f9;
            border-radius: 10px;
        }

        .section-number {
            background: #1F4F8C;
            color: #fff;
            padding: 6px 12px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .terms-section-block h3 {
            color: #1F4F8C;
            margin-bottom: 15px;
        }

        ul {
            padding-left: 20px;
        }

        @media (max-width: 768px) {
            .terms-content {
                padding: 20px;
            }
        }
    </style>

    <x-footer_style_one />
@endsection
