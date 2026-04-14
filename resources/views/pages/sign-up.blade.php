@extends('layouts.layoutCommon')
@section('title', 'Sign Up || QuarkCars')

@section('content')

    <x-pageHeader title="Sign Up" subtitle="Sign Up" />

    <!--Start Sign Up One-->
    <section class="sign-up-one">
        <div class="container">
            <div class="sign-up-one__form">
                <div class="inner-title text-center">
                    <h2>Sing Up</h2>
                </div>
                <form id="sign-up-one__form" name="sign-up-one_form" action="{{ route('sign-up.post') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="form-group">
                                <div class="input-box">
                                    <input type="text" name="form_name" id="formName" placeholder="Name..." required=""
                                        value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group">
                                <div class="input-box">
                                    <input type="email" name="form_email" id="formEmail" placeholder="Email..." required=""
                                        value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group">
                                <div class="input-box">
                                    <input type="text" name="form_phone" id="formPhone" placeholder="Phone..." required=""
                                        value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group">
                                <div class="input-box">
                                    <input type="text" name="form_password" id="formPassword" placeholder="Password..."
                                        required="" value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group">
                                <button class="thm-btn" type="submit" data-loading-text="Please wait...">Sign UP
                                    <span class="fas fa-arrow-right"></span></button>
                            </div>
                        </div>
                    </div>
                    <div class="google-facebook">
                        <a href="https://www.google.com/">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/icon-google-2.png') }}" alt="Google">
                            </div>
                            Continue with Google
                        </a>
                        <a href="https://www.facebook.com/">
                            <div class="icon">
                                <img src="{{ asset('assets/images/icon/icon-facebook.png') }}" alt="Google">
                            </div>
                            Continue with Facebook
                        </a>
                    </div>
                    <div class="create-account text-center">
                        <p>Already have an account? <a href="{{ route('login') }}">Login Here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--End Sign Up One-->

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