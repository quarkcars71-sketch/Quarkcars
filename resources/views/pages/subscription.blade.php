@extends('layouts.layoutCommon')
@section('title', 'Subscription || QuarkCars')

@section('content')
@php
    $whatsappNumber = '918769639911';
@endphp


    <x-pageHeader title="Subscription" subtitle="Subscription" />

    <!--Cars Page Start -->
    <section class="cars-page">
        <div class="container">
            <div class="row">
                <!-- Listing One Single Start -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="listing-one__single">
                        <div class="listing-one__img">
                            <img src="{{ asset('assets/images/listing/listing-1-1.jpg') }}" alt="">
                            <div class="listing-one__brand-name">
                                <p>Maruti</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="https://wa.me/918769639911?text=Hi%20QuarkCars%2C%0A%0AI%20want%20to%20book%20Maruti%20Swift%20VXI%20%28O%29%20CNG.%0A%0APlease%20share%20details%20and%20availability." target="_blank" rel="noopener noreferrer">Maruti Swift VXI (O) CNG</a></h3>
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
                                    <span>40000 INR/</span> Month
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                            <a href="https://wa.me/918769639911?text=Hi%20QuarkCars%2C%0A%0AI%20want%20to%20book%20Maruti%20Swift%20VXI%20%28O%29%20CNG.%0A%0APlease%20share%20details%20and%20availability." target="_blank" rel="noopener noreferrer" class="thm-btn">Book Now<span
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
                            <img src="{{ asset('assets/images/listing/listing-3-2.png') }}" alt="">
                            <div class="listing-one__brand-name">
                                <p>Maruti</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="https://wa.me/918769639911?text=Hi%20QuarkCars%2C%0A%0AI%20want%20to%20book%20Maruti%20Ertiga%20VXI%20CNG.%0A%0APlease%20share%20details%20and%20availability." target="_blank" rel="noopener noreferrer">Maruti Ertiga VXI CNG</a></h3>
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
                                    <span>45000 INR/</span> Month
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                            <a href="https://wa.me/918769639911?text=Hi%20QuarkCars%2C%0A%0AI%20want%20to%20book%20Maruti%20Ertiga%20VXI%20CNG.%0A%0APlease%20share%20details%20and%20availability." target="_blank" rel="noopener noreferrer" class="thm-btn">Book Now<span
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
                            <img src="{{ asset('assets/images/listing/listing-3-3.png') }}" alt="">
                            <div class="listing-one__brand-name">
                                <p>Maruti</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="https://wa.me/918769639911?text=Hi%20QuarkCars%2C%0A%0AI%20want%20to%20book%20Maruti%20Swift%20LXI.%0A%0APlease%20share%20details%20and%20availability." target="_blank" rel="noopener noreferrer">Maruti Swift LXI</a></h3>
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
                                    <span>35000 INR/</span> Month
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                            <a href="https://wa.me/918769639911?text=Hi%20QuarkCars%2C%0A%0AI%20want%20to%20book%20Maruti%20Swift%20LXI.%0A%0APlease%20share%20details%20and%20availability." target="_blank" rel="noopener noreferrer" class="thm-btn">Book Now<span
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
                            <img src="{{ asset('assets/images/listing/listing-3-4.png') }}" alt="">
                            <div class="listing-one__brand-name">
                                <p>Mahindra</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="https://wa.me/918769639911?text=Hi%20QuarkCars%2C%0A%0AI%20want%20to%20book%20Mahindra%20Scorpio%20S11.%0A%0APlease%20share%20details%20and%20availability." target="_blank" rel="noopener noreferrer">Mahindra Scorpio S11</a></h3>
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
                                    <span>70000 INR/</span> Month
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                            <a href="https://wa.me/918769639911?text=Hi%20QuarkCars%2C%0A%0AI%20want%20to%20book%20Mahindra%20Scorpio%20S11.%0A%0APlease%20share%20details%20and%20availability." target="_blank" rel="noopener noreferrer" class="thm-btn">Book Now<span
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
                            <img src="{{ asset('assets/images/listing/listing-3-5.png') }}" alt="">
                            <div class="listing-one__brand-name">
                                <p>Mahindra</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="https://wa.me/918769639911?text=Hi%20QuarkCars%2C%0A%0AI%20want%20to%20book%20Mahindra%20Thar%204x4%20Diesel.%0A%0APlease%20share%20details%20and%20availability." target="_blank" rel="noopener noreferrer">Mahindra Thar 4x4 Diesel</a></h3>
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
                                    <span>65000 INR/</span> Month
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                            <a href="https://wa.me/918769639911?text=Hi%20QuarkCars%2C%0A%0AI%20want%20to%20book%20Mahindra%20Thar%204x4%20Diesel.%0A%0APlease%20share%20details%20and%20availability." target="_blank" rel="noopener noreferrer" class="thm-btn">Book Now<span
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
                            <img src="{{ asset('assets/images/listing/listing-3-6.png') }}" alt="">
                            <div class="listing-one__brand-name">
                                <p>Hyundai</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="https://wa.me/918769639911?text=Hi%20QuarkCars%2C%0A%0AI%20want%20to%20book%20Hyundai%20Verna%20Petrol.%0A%0APlease%20share%20details%20and%20availability." target="_blank" rel="noopener noreferrer">Hyundai Verna Petrol</a></h3>
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
                                    <span>60000 INR/</span> Month
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                            <a href="https://wa.me/918769639911?text=Hi%20QuarkCars%2C%0A%0AI%20want%20to%20book%20Hyundai%20Verna%20Petrol.%0A%0APlease%20share%20details%20and%20availability." target="_blank" rel="noopener noreferrer" class="thm-btn">Book Now<span
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
                            <img src="{{ asset('assets/images/listing/listing-1-6.png') }}" alt="">
                            <div class="listing-one__brand-name">
                                <p>Hyundai</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="https://wa.me/918769639911?text=Hi%20QuarkCars%2C%0A%0AI%20want%20to%20book%20Hyundai%20i20.%0A%0APlease%20share%20details%20and%20availability." target="_blank" rel="noopener noreferrer">Hyundai i20</a></h3>
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
                                    <span>40000 INR/</span> Month
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                            <a href="https://wa.me/918769639911?text=Hi%20QuarkCars%2C%0A%0AI%20want%20to%20book%20Hyundai%20i20.%0A%0APlease%20share%20details%20and%20availability." target="_blank" rel="noopener noreferrer" class="thm-btn">Book Now<span
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
                            <img src="{{ asset('assets/images/listing/listing-1-7.png') }}" alt="">
                            <div class="listing-one__brand-name">
                                <p>Hyundai</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="https://wa.me/918769639911?text=Hi%20QuarkCars%2C%0A%0AI%20want%20to%20book%20Hyundai%20i10.%0A%0APlease%20share%20details%20and%20availability." target="_blank" rel="noopener noreferrer">Hyundai i10</a></h3>
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
                                    <span>30000 INR/</span> Month
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                            <a href="https://wa.me/918769639911?text=Hi%20QuarkCars%2C%0A%0AI%20want%20to%20book%20Hyundai%20i10.%0A%0APlease%20share%20details%20and%20availability." target="_blank" rel="noopener noreferrer" class="thm-btn">Book Now<span
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
                            <img src="{{ asset('assets/images/listing/listing-1-8.png') }}" alt="">
                            <div class="listing-one__brand-name">
                                <p>Maruti</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="https://wa.me/918769639911?text=Hi%20QuarkCars%2C%0A%0AI%20want%20to%20book%20Maruti%20Swift%20Dzire.%0A%0APlease%20share%20details%20and%20availability." target="_blank" rel="noopener noreferrer">Maruti Swift Dzire</a></h3>
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
                                    <span>35000 INR/</span> Day
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                            <a href="https://wa.me/918769639911?text=Hi%20QuarkCars%2C%0A%0AI%20want%20to%20book%20Maruti%20Swift%20Dzire.%0A%0APlease%20share%20details%20and%20availability." target="_blank" rel="noopener noreferrer" class="thm-btn">Book Now<span
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