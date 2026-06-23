@extends('layouts.layoutCommon')
@section('title', 'Login || QuarkCars')

@section('content')

    <x-pageHeader title="Login" subtitle="Login" />

    <!--Start Login One-->
    <section class="login-one">
        <div class="container">
            <div class="login-one__form">
                <div class="inner-title text-center">
                    <h2>Login Here</h2>
                </div>

                {{-- Success Message --}}
                @if(session('success'))
                    <div class="alert-success-box" style="background:#d4edda;color:#155724;padding:12px 20px;border-radius:8px;margin-bottom:20px;text-align:center;">
                        <i class="fas fa-check-circle"></i> {{ session('success') }}
                    </div>
                @endif

                {{-- Error Message --}}
                @if($errors->any())
                    <div class="alert-error-box" style="background:#f8d7da;color:#721c24;padding:12px 20px;border-radius:8px;margin-bottom:20px;text-align:center;">
                        <i class="fas fa-exclamation-circle"></i> {{ $errors->first() }}
                    </div>
                @endif

                <form id="login-one__form" name="Login-one_form" action="{{ route('login.post') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="form-group">
                                <div class="input-box">
                                    <input type="email" name="form_email" id="formEmail" placeholder="Email..."
                                        required="" value="{{ old('form_email') }}"
                                        class="{{ $errors->has('form_email') ? 'input-error' : '' }}">
                                </div>
                                @error('form_email')
                                    <span class="field-error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group">
                                <div class="input-box">
                                    <input type="password" name="form_password" id="formPassword"
                                        placeholder="Password..." required="">
                                </div>
                                @error('form_password')
                                    <span class="field-error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group">
                                <button class="thm-btn" type="submit" id="loginSubmitBtn">Login Here
                                    <span class="fas fa-arrow-right"></span>
                                </button>
                            </div>
                        </div>
                        <div class="remember-forget">
                            <div class="checked-box1">
                                <input type="checkbox" name="saveMyInfo" id="saveinfo" checked="">
                                <label for="saveinfo">
                                    <span></span>
                                    Remember me
                                </label>
                            </div>
                            <div class="forget">
                                <a href="#">Forget password?</a>
                            </div>
                        </div>

                        <div class="create-account text-center">
                            <p>Not registered yet? <a href="{{ route('sign-up') }}">Create an Account</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--End Login One-->

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