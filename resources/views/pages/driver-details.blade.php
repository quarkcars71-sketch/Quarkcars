@extends('layouts.layoutCommon')
@section('title', 'Driver Details')

@section('content')




    <x-pageHeader title="Driver Details" subtitle="Driver Details" />

    <!--Team Details Start-->
    <section class="team-details">
        <div class="container">
            <div class="team-details__top">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="team-details__top-left">
                            <div class="team-details__img-1">
                                <img src="{{ asset('assets/images/team/team-details-img-1(1).jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="team-details__top-right">
                            <div class="team-details__client-box">
                                <h3 class="team-details__client-name">Rishab Rai</h3>
                                <span class="team-details__client-sub-title">SR. Driver</span>
                                <div class="team-details__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                                <p class="team-details__client-text">Rishab Rai is a skilled and reliable Senior Driver with over 5 years of experience in handling rental vehicles. He has extensive expertise in driving a wide range of cars, ensuring safe, smooth, and professional journeys for every customer. Known for his responsible driving, punctuality, and good knowledge of routes, Rishab consistently maintains high service standards. His experience in the car rental industry makes him a valuable asset in delivering a comfortable and trustworthy travel experience.</p>
                                <ul class="team-details__client-address list-unstyled">
                                    <li>
                                        <p><span class="icon-pin"></span>Address</p>
                                        <h5>281, Ganesh Vatika, Sanagner, Jaipur</h5>
                                    </li>
                                    <li>
                                        <p><span class="icon-call"></span>Phone Number</p>
                                        <h5><a href="tel:919602805218">+91 9602805218</a></h5>
                                    </li>
                                    <li>
                                        <p><span class="icon-envelope"></span>Email</p>
                                        <h5><a href="mailto:rishabraisarkar110@gmail.com">rishabraisarkar110@gmail.com</a>
                                        </h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-details__bottom">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="team-details__bottom-left">
                            <h3 class="team-details__bottom-title">Biography</h3>
                            <p class="team-details__bottom-text">Neque porro quisquam est, qui dolorem ipsum quia
                                dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                incidunt ut labore et dolore ma gnam aliquam quaerat voluptatem. Ut enim ad minima
                                veniam</p>
                            <div class="team-details__practice-area">
                                <h4 class="team-details__practice-area-title">Practice Area</h4>
                                <div class="team-details__practice-area-list-box">
                                    <ul class="list-unstyled team-details__practice-area-list">
                                        <li>
                                            <div class="icon"></div>
                                            <div class="text">
                                                <p>
                                                    Corporate car rental</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"></div>
                                            <div class="text">
                                                <p>
                                                    Car rental with driver</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"></div>
                                            <div class="text">
                                                <p>European Lard Sration</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul
                                        class="list-unstyled team-details__practice-area-list team-details__practice-area-list--two">
                                        <li>
                                            <div class="icon"></div>
                                            <div class="text">
                                                <p>Fleet leasing</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"></div>
                                            <div class="text">
                                                <p>
                                                    Enjoy Driving</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"></div>
                                            <div class="text">
                                                <p>Time Awareness</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="team-details__bottom-right">
                            <h3 class="team-details__progress-title-1">Skills</h3>
                            <ul class="team-details__progress-list list-unstyled">
                                <li>
                                    <div class="team-details__progress">
                                        <h4 class="team-details__progress-title">Maruti Swift
                                        </h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="80%">
                                                <div class="count-text">80%</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="team-details__progress">
                                        <h4 class="team-details__progress-title">Hyundai Verna</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="95%">
                                                <div class="count-text">95%</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="team-details__progress">
                                        <h4 class="team-details__progress-title">Mahindra Thar</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="65%">
                                                <div class="count-text">65%</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Team Details End-->

    <!--Team Details Contact Start-->
    <section class="team-details-contact">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <h6 class="section-title__tagline"><span class="section-title__tagline-border"></span>Contact Our
                    Team
                </h6>
                <h3 class="section-title__title title-animation">Give Us A Message</h3>
            </div>
            <div class="team-details-contact__inner">
                <form class="contact-form-validated team-details-contact__form" action="assets/inc/sendemail.php"
                    method="post" novalidate="novalidate">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="team-details-contact__input-box">
                                <input type="text" name="name" placeholder="Your Name" required="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="team-details-contact__input-box">
                                <input type="email" name="Email" placeholder="Email Address" required="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="team-details-contact__input-box">
                                <input type="text" name="Phone" placeholder="Phone Number" required="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="team-details-contact__input-box">
                                <div class="select-box">
                                    <select class="selectmenu wide">
                                        <option selected="selected">Service Type
                                        </option>
                                        <option>Maintenance Service</option>
                                        <option>Lighting & Fixtures</option>
                                        <option>installing a ceiling fan</option>
                                        <option>Commercial services</option>
                                        <option>Short circuit repair</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="team-details-contact__input-box text-message-box">
                                <textarea name="message" placeholder="Messege"></textarea>
                            </div>
                            <div class="team-details-contact__btn-box">
                                <button type="submit" class="thm-btn">send a
                                    message
                                    <span class="fas fa-arrow-right"></span> </button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="result"></div>
            </div>
        </div>
    </section>
    <!--Team Details Contact End-->

    <!--Gallery One Start -->
    <section class="gallery-one">
        <div class="gallery-one__carousel owl-theme owl-carousel">
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-1(1).jpg') }}" alt="">
                        <a href="{{ route('car-subscription') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-2(1).jpg') }}" alt="">
                        <a href="{{ route('car-subscription') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-3(1).jpg') }}" alt="">
                        <a href="{{ route('cart') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-4(1).jpg') }}" alt="">
                        <a href="{{ route('cart') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-5(1).jpg') }}" alt="">
                        <a href="{{ route('cart') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-6(1).jpg') }}" alt="">
                        <a href="{{ route('cart') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
        </div>
    </section>
    <!--Gallery One End -->

    <x-footer_style_one />
@endsection