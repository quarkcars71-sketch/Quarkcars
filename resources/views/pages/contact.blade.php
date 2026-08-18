@extends('layouts.layoutCommon')
@section('title', 'Contact || QuarkCars')

@section('content')

    <x-pageHeader title="Contact" subtitle="Contact" />

    <!--Contact Info Start-->
    <section class="contact-info">
        <div class="container">
            <div class="row">
                <!--Contact Two Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="contact-info__single">
                        <div class="contact-info__icon">
                            <span class="icon-call"></span>
                        </div>
                        <p>Contact Us</p>
                        <h3><a href="tel:919694004477"> +91 9694004477</a></h3>
                       <h3><a href="tel:918769639911"> +91 8769639911</a></h3>
                        <br>
                        <br>
                        <br>
                       <br>
                       <br>
                    </div>
                </div>
                <!--Contact Two Single End-->
                <!--Contact Two Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="contact-info__single">
                        <div class="contact-info__icon">
                            <span class="icon-email"></span>
                        </div>
                        <p>Mail Us</p>
                        <h3><a href="mailto:info@quarkcars.com">info@quarkcars.com</a></h3>
                      <h3><a href="mailto:support@quarkcars.com">support@quarkcars.com</a></h3>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
                <!--Contact Two Single End-->
                <!--Contact Two Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                    <div class="contact-info__single">
                        <div class="contact-info__icon">
                            <span class="icon-location"></span>
                        </div>
                        <p>Our Office Location</p>
                        <h3>265, Jeevan Rekha Marg, Karolan Ka Barh, Shri Kishanpura, Jagatpura, Jaipur -302017</h3>
                        <br>
                    </div>
                </div>
                <!--Contact Two Single End-->
            </div>
        </div>
    </section>
    <!--Contact Info End-->

    <!--Contact Page Start-->
    <section class="contact-page">
        <div class="container">
            <div class="contact-page__inner">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="contact-page__left">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.7034699218!2d75.8575571!3d26.7994006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396dc9001af5b72b:0x420eb7561005f2db!2sQuarkcars+-+Mobility!5e0!3m2!1sen!2sin!4v1640995200000!5m2!1sen!2sin"
                                class="google-map__one" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-page__right">
    <h3 class="contact-page__form-title">Get A Free Quote</h3>

    <form
        id="contact-form"
        class="contact-page__form"
        action="{{ route('contact.send') }}"
        method="POST"
    >
        @csrf

        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="contact-page__input-box">
                    <input
                        type="text"
                        name="name"
                        placeholder="Your Name"
                        maxlength="100"
                        required
                    >
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="contact-page__input-box">
                    <input
                        type="email"
                        name="email"
                        placeholder="Your Email"
                        maxlength="150"
                        required
                    >
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="contact-page__input-box">
                    <input
                        type="tel"
                        name="number"
                        placeholder="Mobile Number"
                        autocomplete="tel"
                        maxlength="20"
                        required
                    >
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="contact-page__input-box">
                    <input
                        type="text"
                        name="company"
                        placeholder="Company"
                        maxlength="150"
                    >
                </div>
            </div>

            <div class="col-xl-12">
                <div class="contact-page__input-box text-message-box">
                    <textarea
                        name="message"
                        placeholder="Message"
                        maxlength="2000"
                        required
                    ></textarea>
                </div>

                <div class="contact-page__btn-box">
                    <button
                        type="submit"
                        class="thm-btn contact-page__btn"
                        data-loading-text="Please wait..."
                    >
                        <span class="thm-btn-text">Send A Message</span>

                        <span class="thm-btn-icon-box">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </form>

    <p class="ajax-response mb-0"></p>
</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Page End-->

    <!--Gallery One Start -->
    <section class="gallery-one">
        <div class="gallery-one__carousel owl-theme owl-carousel">
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-1.png') }}" alt="">
                        <a href="{{ route('subscription') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-2.png') }}" alt="">
                        <a href="{{ route('subscription') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-3.png') }}" alt="">
                        <a href="{{ route('cart') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-4.png') }}" alt="">
                        <a href="{{ route('cart') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-5.jpg') }}" alt="">
                        <a href="{{ route('cart') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-6.png') }}" alt="">
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
