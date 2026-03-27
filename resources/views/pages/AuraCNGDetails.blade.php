@extends('layouts.layoutCommon')
@section('title', 'Hyundai Aura CNG Details || Quarkcars')

@section('content')




    <x-pageHeader title="Hyundai Aura CNG" subtitle="Aura S CNG Sedan" />

    <!--Listing Single Start-->
    <section class="listing-single">
        <div class="container">
            <div class="listing-single__top">
                <div class="listing-single__top-left">
                    <h3 class="listing-single__title">Hyundai Aura CNG</h3>
                    <p class="listing-single__sub-title">1.2L S CNG 4dr FWD Manual Sedan</p>
                    <div class="listing-single__car-details-box">
                        <ul class="list-unstyled listing-single__car-details">
                            <li>
                                <span class="icon-date"></span>
                                <p>2023</p>
                            </li>
                            <li>
                                <span class="icon-mileage"></span>
                                <p>28 km/kg</p>
                            </li>
                            <li>
                                <span class="icon-Carrier"></span>
                                <p>Manual</p>
                            </li>
                            <li>
                                <span class="icon-fuel-type"></span>
                                <p>CNG</p>
                            </li>
                        </ul>
                        <ul class="list-unstyled listing-single__car-details">
                            <li>
                                <span class="icon-seat"></span>
                                <p>5 Seats</p>
                            </li>
                            <li>
                                <span class="icon-door"></span>
                                <p>4 Doors</p>
                            </li>
                            <li>
                                <span class="icon-fuel-type"></span>
                                <p>1.2L</p>
                            </li>
                            <li>
                                <span class="icon-car-insurance"></span>
                                <p>2 Large bags</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="listing-single__top-right">
                    <div class="listing-single__tag">
                        <a href="#">Share <span class="icon-arrow-up-from"></span> </a>
                        <a href="#">Save <span class="icon-bookmark"></span> </a>
                        <a href="#">Compare <span class="icon-compress"></span> </a>
                    </div>
                </div>
            </div>
            <div class="listing-single__inner">
                <div class="listing-single__main-content">
                    <div class="swiper-container" id="listing-single__carousel">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="listing-single__main-content-inner">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5">
                                            <div class="listing-single__left">
                                                <div class="listing-single__img">
                                                    <img src="{{ asset('assets/images/listing/listing-3-9.png') }}"
                                                        alt="Hyundai Aura CNG">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-lg-7">
                                            <div class="listing-single__right">
                                                <h3 class="listing-single__title-two">Hyundai Aura CNG – Stylish Compact Sedan with Excellent Mileage</h3>
                                                <p class="listing-single__text">The Hyundai Aura CNG is a premium compact sedan that combines elegant styling with exceptional fuel efficiency. Featuring Hyundai's factory-fitted CNG kit, the Aura delivers an impressive mileage of 28 km/kg, making it one of the most economical sedans in its segment. With its contemporary design, spacious interiors, and advanced safety features, the Aura CNG is perfect for family outings, airport transfers, and daily commuting.</p>
                                                <ul class="list-unstyled listing-single__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="fas fa-map-marker-alt"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Jaipur, India</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="fas fa-map-marked-alt"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p><a href="#">Show on map</a></p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <span class="fas fa-map"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Fleet Code:<a href="#"><span>QC-AURA-01</span></a></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="listing-single__btn-and-video-box">
                                                    <div class="listing-single__btn-box">
                                                        <a href="{{ route('car-subscription') }}" class="thm-btn">See All Photo<span
                                                                class="fas fa-arrow-right"></span></a>
                                                    </div>
                                                    <div class="listing-single__video-link">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup">
                                                            <div class="listing-single__video-icon">
                                                                <span class="icon-play-2"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                        <h4 class="listing-single__video-title">Watch Video</h4>
                                                    </div>
                                                    <br> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="listing-single__nav">
                        <div class="swiper-button-next" id="listing-single__swiper-button-prev">
                            <i class="far fa-long-arrow-left"></i>
                        </div>
                        <div class="swiper-button-prev" id="listing-single__swiper-button-next">
                            <i class="far fa-long-arrow-right"></i>
                        </div>
                    </div>
                </div>

                <div class="listing-single__thumb-box">
                    <div class="swiper-container" id="listing-single__thumb">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="listing-single__img-holder-box">
                                    <div class="listing-single__img-holder">
                                        <img src="{{ asset('assets/images/listing/listing-3-9.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listing-single__bottom">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="listing-single__bottom-left">
                            <div class="listing-single__car-overview">
                                <h3 class="listing-single__car-overview-title">Car Overview</h3>
                                <div class="listing-single__car-overview-points-box">
                                    <ul class="list-unstyled listing-single__car-overview-point">
                                        <li>
                                            <div class="listing-single__car-overview-point-left">
                                                <i class="icon-car1"></i>
                                                <p>Body</p>
                                            </div>
                                            <div class="listing-single__car-overview-point-right">
                                                <p>Sedan</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="listing-single__car-overview-point-left">
                                                <i class="icon-mileage"></i>
                                                <p>Mileage</p>
                                            </div>
                                            <div class="listing-single__car-overview-point-right">
                                                <p>28 km/kg</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="listing-single__car-overview-point-left">
                                                <i class="icon-fuel-type"></i>
                                                <p>Fuel Type</p>
                                            </div>
                                            <div class="listing-single__car-overview-point-right">
                                                <p>CNG</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="listing-single__car-overview-point-left">
                                                <i class="icon-date"></i>
                                                <p>Year</p>
                                            </div>
                                            <div class="listing-single__car-overview-point-right">
                                                <p>2023</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="listing-single__car-overview-point-left">
                                                <i class="icon-Carrier"></i>
                                                <p>Transmission</p>
                                            </div>
                                            <div class="listing-single__car-overview-point-right">
                                                <p>Manual</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="listing-single__car-overview-point-left">
                                                <i class="icon-test-drive"></i>
                                                <p>Drive Type</p>
                                            </div>
                                            <div class="listing-single__car-overview-point-right">
                                                <p>FWD</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled listing-single__car-overview-point">
                                        <li>
                                            <div class="listing-single__car-overview-point-left">
                                                <i class="icon-avatar"></i>
                                                <p>Condition</p>
                                            </div>
                                            <div class="listing-single__car-overview-point-right">
                                                <p>New</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="listing-single__car-overview-point-left">
                                                <i class="icon-engine"></i>
                                                <p>Engine Size</p>
                                            </div>
                                            <div class="listing-single__car-overview-point-right">
                                                <p>1.2L</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="listing-single__car-overview-point-left">
                                                <i class="icon-door"></i>
                                                <p>Door</p>
                                            </div>
                                            <div class="listing-single__car-overview-point-right">
                                                <p>4 Doors</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="listing-single__car-overview-point-left">
                                                <i class="icon-range"></i>
                                                <p>Power</p>
                                            </div>
                                            <div class="listing-single__car-overview-point-right">
                                                <p>69 bhp</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="listing-single__car-overview-point-left">
                                                <i class="icon-color"></i>
                                                <p>Color</p>
                                            </div>
                                            <div class="listing-single__car-overview-point-right">
                                                <p>Titan Grey</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="listing-single__car-overview-point-left">
                                                <i class="icon-seat"></i>
                                                <p>Seats</p>
                                            </div>
                                            <div class="listing-single__car-overview-point-right">
                                                <p>05</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="listing-single__description">
                                <h3 class="listing-single__description-title">Description</h3>
                                <p class="listing-single__description-text-1">The Hyundai Aura CNG is a modern compact sedan designed for the eco-conscious driver who refuses to compromise on style and comfort. The sleek exterior features Hyundai's signature cascading grille, swept-back projector headlamps, and stylish LED DRLs that give it a premium appeal. The 402-liter boot space ensures you never have to worry about luggage, even with the CNG tank installed.</p>
                                <p class="listing-single__description-text-2">Powered by Hyundai's reliable 1.2L Kappa petrol engine paired with a factory-fitted CNG kit, the Aura CNG delivers a refined driving experience with excellent fuel economy of 28 km/kg. The suspension is tuned for Indian road conditions, offering a comfortable ride quality. Inside, you'll find premium dual-tone interiors, a touchscreen infotainment system, and thoughtful features like rear AC vents that enhance passenger comfort.</p>
                            </div>
                            <div class="listing-single__feature">
                                <h3 class="listing-single__feature-title">Features</h3>
                                <div class="listing-single__feature-points-box">
                                    <div class="listing-single__feature-point-single">
                                        <h4 class="listing-single__feature-point-title">Interior</h4>
                                        <ul class="list-unstyled listing-single__feature-point">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Dual Tone Interior</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>5-Seater Configuration</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Automatic Climate Control</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Steering Mounted Controls</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>8-inch Touchscreen Display</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Android Auto & Apple CarPlay</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-single__feature-point-single">
                                        <h4 class="listing-single__feature-point-title">Safety</h4>
                                        <ul class="list-unstyled listing-single__feature-point">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Dual Front Airbags</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>ABS with EBD</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Reverse Parking Sensors</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Rear Parking Camera</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Speed Alert System</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>ISOFIX Child Anchors</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-single__feature-point-single">
                                        <h4 class="listing-single__feature-point-title">Comfort & Convenience</h4>
                                        <ul class="list-unstyled listing-single__feature-point">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Push Button Start</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>All Power Windows</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Electrically Foldable ORVMs</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Rear AC Vents</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Wireless Phone Charger</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>402L Boot Space</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="listing-single__sidebar">
                            <div class="listing-single__rent-car-daily-price listing-single__single-box">
                                <p>Daily rate</p>
                                <h3>₹1,800</h3>
                            </div>
                            <div class="listing-single__rent-car listing-single__single-box">
                                <h3 class="listing-single__rent-car-title">Rent This Car</h3>
                                <div class="listing-single__rent-car-content">
                                    <div class="listing-single__rent-car-content-form">
                                        <div class="listing-single__rent-car-date-box">
                                            <p class="listing-single__rent-car-date-title">Pick-Up
                                            </p>
                                            <div class="listing-single__rent-car-date-time-box">
                                                <input type="text" placeholder="mm/dd/yyy" name="date" id="datepicker">
                                                <input type="text" name="time" placeholder="Time"
                                                    class="listing-single__rent-car-time-box">
                                            </div>
                                        </div>
                                        <div class="listing-single__rent-car-date-box">
                                            <p class="listing-single__rent-car-date-title">Drop-Off
                                            </p>
                                            <div class="listing-single__rent-car-date-time-box">
                                                <input type="text" placeholder="mm/dd/yyy" name="date" id="datepicker-2">
                                                <input type="text" name="time" placeholder="Time"
                                                    class="listing-single__rent-car-time-box">
                                            </div>
                                        </div>
                                        <div class="listing-single__rent-car-extra">
                                            <h3 class="listing-single__rent-car-extra-title">Add Extra:</h3>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <div class="checked-box">
                                                        <input type="checkbox" name="f_extra1" id="f_extra1">
                                                        <label for="f_extra1"><span></span>Bluetooth</label>
                                                    </div>
                                                    <div class="counts-box">
                                                        <p>₹200</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checked-box">
                                                        <input type="checkbox" name="f_extra2" id="f_extra2" checked="">
                                                        <label for="f_extra2"><span></span>GPS System </label>
                                                    </div>
                                                    <div class="counts-box">
                                                        <p>₹300</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checked-box">
                                                        <input type="checkbox" name="f_extra3" id="f_extra3">
                                                        <label for="f_extra3"><span></span>Child Seat</label>
                                                    </div>
                                                    <div class="counts-box">
                                                        <p>₹400</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-single__rent-car-price-box">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <div class="title">
                                                        <p>Subtotal</p>
                                                    </div>
                                                    <div class="price">
                                                        <p>₹1,800.00</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        <p>Driver Charges</p>
                                                    </div>
                                                    <div class="price">
                                                        <p>₹350.00</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        <p>Total Payable</p>
                                                    </div>
                                                    <div class="price">
                                                        <p>₹2,150.00</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-single__btn-box-2">
                                    <a href="{{ route('aura-cng-details') }}" class="thm-btn">Rent Now<span
                                            class="fas fa-arrow-right"></span></a>
                                </div>
                            </div>
                            <div class="listing-single__contact-info listing-single__single-box">
                                <div class="listing-single__contact-phone">
                                    <a href="tel:+919876543210" class="listing-single__contact-phone-number"> <span
                                            class="icon-call-3"></span> +91 98765 43210</a>
                                    <p class="listing-single__contact-phone-text">Click here to reveal phone number.
                                    </p>
                                </div>
                                <div class="listing-single__contact-btn-box">
                                    <a href="#"> <i class="icon-steering-wheel"></i>Schedule Test Drive </a>
                                    <a href="#"> <i class="fab fa-whatsapp"></i>Whatsapp</a>
                                    <a href="#"> <i class="far fa-envelope"></i>Email Address</a>
                                </div>
                            </div>
                            <div class="listing-single__seller-info listing-single__single-box">
                                <div class="listing-single__seller-info-details">
                                    <div class="listing-single__seller-info-img">
                                        <img src="{{ asset('assets/images/listing/listing-single-seller-info-img-1.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="listing-single__seller-info-content">
                                        <p>Add by:</p>
                                        <h5>Quarkcars Team <span class="icon-cheack"></span> </h5>
                                    </div>
                                </div>
                                <div class="listing-single__seller-contact-info">
                                    <ul class="list-unstyled listing-single__seller-contact-info-list">
                                        <li>
                                            <div class="icon">
                                                <i class="far fa-phone"></i>
                                            </div>
                                            <div class="text">
                                                <p><a href="tel:+919876543210"> +91 98765 43210</a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="far fa-envelope"></i>
                                            </div>
                                            <div class="text">
                                                <p><a href="mailto:info@quarkcars.com">info@quarkcars.com</a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="text">
                                                <p>Jaipur, Rajasthan, India</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="listing-single__seller-profile">
                                    <a href="#" class="thm-btn">View Profile <span class="fas fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Listing Single End-->

    <x-footer_style_one />
@endsection
