@extends('layouts.layoutCommon')
@section('title', 'Faq || QuarkCars')

@section('content')




    <x-pageHeader title="Faq" subtitle="Faq" />

    <!--Faq Page Start -->
    <div class="faq-one faq-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-page__left">
                        <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>What is QuarkCars?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>QuarkCars Services Pvt. Ltd. is a self-drive car rental company based in Jaipur, Rajasthan, offering reliable, affordable, and convenient mobility solutions for individuals and businesses.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion active">
                                <div class="accrodion-title">
                                    <h4>How can I book a car with QuarkCars?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>🌐 Website: www.quarkcars.com<br>
📞 Call or WhatsApp: +91-8769639911<br>
📍 Directly at our Jaipur office
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>What types of vehicles are available for rent?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>From personalized solutions to expert execution, we prioritize quality,
                                            reliability, and customer satisfaction in everything we do. Let us be
                                            your trusted partner in achieving success.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Can I rent a car with a debit card?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>From personalized solutions to expert execution, we prioritize quality,
                                            reliability, and customer satisfaction in everything we do. Let us be
                                            your trusted partner in achieving success.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>What is your fuel policy?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>From personalized solutions to expert execution, we prioritize quality,
                                            reliability, and customer satisfaction in everything we do. Let us be
                                            your trusted partner in achieving success.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-page__right">
                        <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>How old do I need to be to rent a car?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>From personalized solutions to expert execution, we prioritize quality,
                                            reliability, and customer satisfaction in everything we do. Let us be
                                            your trusted partner in achieving success.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>What documents do I need to rent a car?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>From personalized solutions to expert execution, we prioritize quality,
                                            reliability, and customer satisfaction in everything we do. Let us be
                                            your trusted partner in achieving success.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>What types of vehicles are available for rent?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>From personalized solutions to expert execution, we prioritize quality,
                                            reliability, and customer satisfaction in everything we do. Let us be
                                            your trusted partner in achieving success.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Can I rent a car with a debit card?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>From personalized solutions to expert execution, we prioritize quality,
                                            reliability, and customer satisfaction in everything we do. Let us be
                                            your trusted partner in achieving success.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>What is your fuel policy?</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>From personalized solutions to expert execution, we prioritize quality,
                                            reliability, and customer satisfaction in everything we do. Let us be
                                            your trusted partner in achieving success.
                                        </p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Faq Page End -->

    <!--Gallery One Start -->
    <section class="gallery-one">
        <div class="gallery-one__carousel owl-theme owl-carousel">
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-1(2).png') }}" alt="">
                        <a href="{{ route('car-subscription') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-2(2).png') }}" alt="">
                        <a href="{{ route('car-subscription') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-3(2).png') }}" alt="">
                        <a href="{{ route('cart') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-4(2).png') }}" alt="">
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
                        <img src="{{ asset('assets/images/gallery/gallery-1-6(2).png') }}" alt="">
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