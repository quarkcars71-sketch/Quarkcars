@extends('layouts.layoutCommon')
@section('title', 'Car-subscription')

@section('content')

    <x-pageHeader title="Car Subscription" subtitle="Car Subscription" />

    <!--Cars Page Start -->
    <section class="cars-page">
        <div class="container">
            <div class="row">
                <!-- Listing One Single Start -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="listing-one__single">
                        <div class="listing-one__img">
                            <img src="{{ asset('assets/images/listing/listing-1-1(1).jpg') }}" alt="">
                            <div class="listing-one__brand-name">
                                <p>Maruti</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="{{ route('swift-vxi-details') }}">Maruti Swift VXI (O) CNG</a></h3>
                            <div class="listing-one__meta-box-info">
                                <ul class="list-unstyled listing-one__meta">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-manual"></span>
                                        </div>
                                        <div class="text">
                                            <p>Manual</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-mileage"></span>
                                        </div>
                                        <div class="text">
                                            <p>32 KM/L</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-fuel-type"></span>
                                        </div>
                                        <div class="text">
                                            <p>CNG</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-test-drive"></span>
                                        </div>
                                        <div class="text">
                                            <p>Basic</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-avatar"></span>
                                        </div>
                                        <div class="text">
                                            <p>Age 21</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-in-person"></span>
                                        </div>
                                        <div class="text">
                                            <p>5 Persons</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="listing-one__car-rent-box">
                                <p class="listing-one__car-rent">Starting From
                                    <span>2800 INR/</span> Day
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                <a href="{{ route('swift-vxi-details') }}" class="thm-btn">Details Now<span
                                        class="fas fa-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing One Single End -->
                <!-- Listing One Single Start -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="listing-one__single">
                        <div class="listing-one__img">
                            <img src="{{ asset('assets/images/listing/listing-3-2(1).png') }}" alt="">
                            <div class="listing-one__brand-name">
                                <p>Maruti</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="{{ route('swift-vxi-details') }}">Maruti Ertiga VXI CNG</a></h3>
                            <div class="listing-one__meta-box-info">
                                <ul class="list-unstyled listing-one__meta">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-manual"></span>
                                        </div>
                                        <div class="text">
                                            <p>Manual</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-mileage"></span>
                                        </div>
                                        <div class="text">
                                            <p>26 KM/KG</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-fuel-type"></span>
                                        </div>
                                        <div class="text">
                                            <p>CNG</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-test-drive"></span>
                                        </div>
                                        <div class="text">
                                            <p>MPV</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-avatar"></span>
                                        </div>
                                        <div class="text">
                                            <p>Age 21</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-in-person"></span>
                                        </div>
                                        <div class="text">
                                            <p>7 Persons</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="listing-one__car-rent-box">
                                <p class="listing-one__car-rent">Starting From
                                    <span>3500 INR/</span> Day
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                <a href="{{ route('swift-vxi-details') }}" class="thm-btn">Details Now<span
                                        class="fas fa-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing One Single End -->
                <!-- Listing One Single Start -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="listing-one__single">
                        <div class="listing-one__img">
                            <img src="{{ asset('assets/images/listing/listing-3-3(1).png') }}" alt="">
                            <div class="listing-one__brand-name">
                                <p>Maruti</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="{{ route('swift-vxi-details') }}">Maruti Swift LXI</a></h3>
                            <div class="listing-one__meta-box-info">
                                <ul class="list-unstyled listing-one__meta">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-manual"></span>
                                        </div>
                                        <div class="text">
                                            <p>Manual</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-mileage"></span>
                                        </div>
                                        <div class="text">
                                            <p>23 KM/L</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-fuel-type"></span>
                                        </div>
                                        <div class="text">
                                            <p>Petrol</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-test-drive"></span>
                                        </div>
                                        <div class="text">
                                            <p>Basic</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-avatar"></span>
                                        </div>
                                        <div class="text">
                                            <p>Age 21</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-in-person"></span>
                                        </div>
                                        <div class="text">
                                            <p>5 Persons</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="listing-one__car-rent-box">
                                <p class="listing-one__car-rent">Starting From
                                    <span>2500 INR/</span> Day
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                <a href="{{ route('swift-vxi-details') }}" class="thm-btn">Details Now<span
                                        class="fas fa-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing One Single End -->
                <!-- Listing One Single Start -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="listing-one__single">
                        <div class="listing-one__img">
                            <img src="{{ asset('assets/images/listing/listing-3-4(1).png') }}" alt="">
                            <div class="listing-one__brand-name">
                                <p>Mahindra</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="{{ route('swift-vxi-details') }}">Mahindra Scorpio S11</a></h3>
                            <div class="listing-one__meta-box-info">
                                <ul class="list-unstyled listing-one__meta">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-manual"></span>
                                        </div>
                                        <div class="text">
                                            <p>Manual</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-mileage"></span>
                                        </div>
                                        <div class="text">
                                            <p>18 KM/L</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-fuel-type"></span>
                                        </div>
                                        <div class="text">
                                            <p>Diesel</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-test-drive"></span>
                                        </div>
                                        <div class="text">
                                            <p>SUV</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-avatar"></span>
                                        </div>
                                        <div class="text">
                                            <p>Age 21</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-in-person"></span>
                                        </div>
                                        <div class="text">
                                            <p>7 Persons</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="listing-one__car-rent-box">
                                <p class="listing-one__car-rent">Starting From
                                    <span>5500 INR/</span> Day
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                <a href="{{ route('swift-vxi-details') }}" class="thm-btn">Details Now<span
                                        class="fas fa-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing One Single End -->
                <!-- Listing One Single Start -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="listing-one__single">
                        <div class="listing-one__img">
                            <img src="{{ asset('assets/images/listing/listing-3-5(1).png') }}" alt="">
                            <div class="listing-one__brand-name">
                                <p>Mahindra</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="{{ route('swift-vxi-details') }}">Mahindra Thar 4x4 Diesel</a></h3>
                            <div class="listing-one__meta-box-info">
                                <ul class="list-unstyled listing-one__meta">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-manual"></span>
                                        </div>
                                        <div class="text">
                                            <p>Manual</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-mileage"></span>
                                        </div>
                                        <div class="text">
                                            <p>18 KM/L</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-fuel-type"></span>
                                        </div>
                                        <div class="text">
                                            <p>Diesel</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-test-drive"></span>
                                        </div>
                                        <div class="text">
                                            <p>SUV</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-avatar"></span>
                                        </div>
                                        <div class="text">
                                            <p>Age 21</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-in-person"></span>
                                        </div>
                                        <div class="text">
                                            <p>4 Persons</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="listing-one__car-rent-box">
                                <p class="listing-one__car-rent">Starting From
                                    <span>5000 INR/</span> Day
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                <a href="{{ route('swift-vxi-details') }}" class="thm-btn">Details Now<span
                                        class="fas fa-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing One Single End -->
                <!-- Listing One Single Start -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="listing-one__single">
                        <div class="listing-one__img">
                            <img src="{{ asset('assets/images/listing/listing-3-6(1).png') }}" alt="">
                            <div class="listing-one__brand-name">
                                <p>Hyundai</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="{{ route('swift-vxi-details') }}">Hyundai Verna Petrol</a></h3>
                            <div class="listing-one__meta-box-info">
                                <ul class="list-unstyled listing-one__meta">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-manual"></span>
                                        </div>
                                        <div class="text">
                                            <p>Manual</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-mileage"></span>
                                        </div>
                                        <div class="text">
                                            <p>13 KM/L</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-fuel-type"></span>
                                        </div>
                                        <div class="text">
                                            <p>Petrol</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-test-drive"></span>
                                        </div>
                                        <div class="text">
                                            <p>Sedan</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-avatar"></span>
                                        </div>
                                        <div class="text">
                                            <p>Age 21</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-in-person"></span>
                                        </div>
                                        <div class="text">
                                            <p>5 Persons</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="listing-one__car-rent-box">
                                <p class="listing-one__car-rent">Starting From
                                    <span>4500 INR/</span> Day
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                <a href="{{ route('swift-vxi-details') }}" class="thm-btn">Details Now<span
                                        class="fas fa-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing One Single End -->
                <!-- Listing One Single Start -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="listing-one__single">
                        <div class="listing-one__img">
                            <img src="{{ asset('assets/images/listing/listing-1-6(1).png') }}" alt="">
                            <div class="listing-one__brand-name">
                                <p>Hyundai</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="{{ route('swift-vxi-details') }}">Hyundai i20</a></h3>
                            <div class="listing-one__meta-box-info">
                                <ul class="list-unstyled listing-one__meta">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-manual"></span>
                                        </div>
                                        <div class="text">
                                            <p>Manual</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-mileage"></span>
                                        </div>
                                        <div class="text">
                                            <p>20 KM/L</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-fuel-type"></span>
                                        </div>
                                        <div class="text">
                                            <p>Petrol</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-test-drive"></span>
                                        </div>
                                        <div class="text">
                                            <p>Hatchback</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-avatar"></span>
                                        </div>
                                        <div class="text">
                                            <p>Age 21</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-in-person"></span>
                                        </div>
                                        <div class="text">
                                            <p>5 Persons</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="listing-one__car-rent-box">
                                <p class="listing-one__car-rent">Starting From
                                    <span>2800 INR/</span> Day
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                <a href="{{ route('swift-vxi-details') }}" class="thm-btn">Details Now<span
                                        class="fas fa-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing One Single End -->
                <!-- Listing One Single Start -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="listing-one__single">
                        <div class="listing-one__img">
                            <img src="{{ asset('assets/images/listing/listing-1-7(1).png') }}" alt="">
                            <div class="listing-one__brand-name">
                                <p>Hyundai</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="{{ route('swift-vxi-details') }}">Hyundai i10</a></h3>
                            <div class="listing-one__meta-box-info">
                                <ul class="list-unstyled listing-one__meta">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-manual"></span>
                                        </div>
                                        <div class="text">
                                            <p>Manual</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-mileage"></span>
                                        </div>
                                        <div class="text">
                                            <p>19 KM/L</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-fuel-type"></span>
                                        </div>
                                        <div class="text">
                                            <p>Petrol</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-test-drive"></span>
                                        </div>
                                        <div class="text">
                                            <p>Hatchback</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-avatar"></span>
                                        </div>
                                        <div class="text">
                                            <p>Age 21</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-in-person"></span>
                                        </div>
                                        <div class="text">
                                            <p>5 Persons</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="listing-one__car-rent-box">
                                <p class="listing-one__car-rent">Starting From
                                    <span>2500 INR/</span> Day
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                <a href="{{ route('swift-vxi-details') }}" class="thm-btn">Details Now<span
                                        class="fas fa-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing One Single End -->
                <!-- Listing One Single Start -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="listing-one__single">
                        <div class="listing-one__img">
                            <img src="{{ asset('assets/images/listing/listing-1-8(1).png') }}" alt="">
                            <div class="listing-one__brand-name">
                                <p>Maruti</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="{{ route('swift-vxi-details') }}">Maruti Swift Dzire</a></h3>
                            <div class="listing-one__meta-box-info">
                                <ul class="list-unstyled listing-one__meta">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-manual"></span>
                                        </div>
                                        <div class="text">
                                            <p>Manual</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-mileage"></span>
                                        </div>
                                        <div class="text">
                                            <p>22 KM/L</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-fuel-type"></span>
                                        </div>
                                        <div class="text">
                                            <p>Petrol</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled listing-one__meta listing-one__meta--two">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-test-drive"></span>
                                        </div>
                                        <div class="text">
                                            <p>Basic</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-avatar"></span>
                                        </div>
                                        <div class="text">
                                            <p>Age 21</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-in-person"></span>
                                        </div>
                                        <div class="text">
                                            <p>5 Persons</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="listing-one__car-rent-box">
                                <p class="listing-one__car-rent">Starting From
                                    <span>2700 INR/</span> Day
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                <a href="{{ route('swift-vxi-details') }}" class="thm-btn">Details Now<span
                                        class="fas fa-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Listing One Single End -->
            </div>
            <div class="car-listing__pagination">
                <ul class="pg-pagination list-unstyled">
                    <li class="prev">
                        <a href="#" aria-label="prev"><i class="fas fa-angle-left"></i></a>
                    </li>
                    <li class="count active"><a href="#">1</a></li>
                    <li class="count"><a href="#">2</a></li>
                    <li class="count"><a href="#">3</a></li>
                    <li class="count"><a href="#">...</a></li>
                    <li class="next">
                        <a href="#" aria-label="Next"><i class="fas fa-angle-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Cars Page End -->

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