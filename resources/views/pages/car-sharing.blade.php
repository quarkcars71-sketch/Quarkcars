@extends('layouts.layoutCommon')
@section('title', 'Car Sharing')

@section('content')

    <x-pageHeader title="Car Sharing" subtitle="Car Sharing" />

    <!--Car Listing page One Start -->
    <section class="car-listing-page-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-9">
                    <div class="car-listing-page-two__left">
                        <div class="row">
                            <!-- Listing Two Single Start -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="listing-two__single">
                                    <div class="listing-two__img-box">
                                        <div class="listing-two__img">
                                            <img src="{{ asset('assets/images/listing/listing-2-1(1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="listing-two__content">
                                        <p class="listing-two__sub-title">Maruti Swift VXI </p>
                                        <h3 class="listing-two__title"><a href="{{ route('swift-vxi-details') }}">Jaipur - Dausa</a>
                                        </h3>
                                        <div class="listing-two__price-and-btn">
                                            <div class="listing-two__price-box">
                                                <span>From</span>
                                                <p>120 INR/Seat</p>
                                            </div>
                                            <div class="listing-two__btn-box">
                                                <a href="https://wa.me/message/ZS5QNMAR2NSCO1" class="thm-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing Two Single End -->
                            <!-- Listing Two Single Start -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="listing-two__single">
                                    <div class="listing-two__img-box">
                                        <div class="listing-two__img">
                                            <img src="{{ asset('assets/images/listing/listing-2-2(1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="listing-two__content">
                                        <p class="listing-two__sub-title">Maruti Swift VXI</p>
                                        <h3 class="listing-two__title"><a href="{{ route('swift-vxi-details') }}">Jaipur - Alwar</a>
                                        </h3>
                                        <div class="listing-two__price-and-btn">
                                            <div class="listing-two__price-box">
                                                <span>From</span>
                                                <p>399 INR/Seat</p>
                                            </div>
                                            <div class="listing-two__btn-box">
                                                <a href="https://wa.me/message/ZS5QNMAR2NSCO1" class="thm-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing Two Single End -->
                            <!-- Listing Two Single Start -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="listing-two__single">
                                    <div class="listing-two__img-box">
                                        <div class="listing-two__img">
                                            <img src="{{ asset('assets/images/listing/listing-2-3(1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="listing-two__content">
                                        <p class="listing-two__sub-title">Maruti Swift VXI</p>
                                        <h3 class="listing-two__title"><a href="{{ route('swift-vxi-details') }}">Jaipur - Bharatpur</a>
                                        </h3>
                                        <div class="listing-two__price-and-btn">
                                            <div class="listing-two__price-box">
                                                <span>From</span>
                                                <p>399 INR/Seat</p>
                                            </div>
                                            <div class="listing-two__btn-box">
                                                <a href="https://wa.me/message/ZS5QNMAR2NSCO1" class="thm-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing Two Single End -->
                            <!-- Listing Two Single Start -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="listing-two__single">
                                    <div class="listing-two__img-box">
                                        <div class="listing-two__img">
                                            <img src="{{ asset('assets/images/listing/listing-2-4(1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="listing-two__content">
                                        <p class="listing-two__sub-title">Maruti Swift VXI</p>
                                        <h3 class="listing-two__title"><a href="{{ route('swift-vxi-details') }}">Jaipur - Ajmer</a>
                                        </h3>
                                        <div class="listing-two__price-and-btn">
                                            <div class="listing-two__price-box">
                                                <span>From</span>
                                                <p>299 INR/Seat</p>
                                            </div>
                                            <div class="listing-two__btn-box">
                                                <a href="https://wa.me/message/ZS5QNMAR2NSCO1" class="thm-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing Two Single End -->
                            <!-- Listing Two Single Start -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="listing-two__single">
                                    <div class="listing-two__img-box">
                                        <div class="listing-two__img">
                                            <img src="{{ asset('assets/images/listing/listing-2-5(1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="listing-two__content">
                                        <p class="listing-two__sub-title">Maruti Swift VXI</p>
                                        <h3 class="listing-two__title"><a href="{{ route('swift-vxi-details') }}">Jaipur - Sawai Madhopur </a>
                                        </h3>
                                        <div class="listing-two__price-and-btn">
                                            <div class="listing-two__price-box">
                                                <span>From</span>
                                                <p>499 INR/Seat</p>
                                            </div>
                                            <div class="listing-two__btn-box">
                                                <a href="https://wa.me/message/ZS5QNMAR2NSCO1" class="thm-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing Two Single End -->
                            <!-- Listing Two Single Start -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="listing-two__single">
                                    <div class="listing-two__img-box">
                                        <div class="listing-two__img">
                                            <img src="{{ asset('assets/images/listing/listing-2-6(1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="listing-two__content">
                                        <p class="listing-two__sub-title">Maruti Swift VXI</p>
                                        <h3 class="listing-two__title"><a href="{{ route('swift-vxi-details') }}">Jaipur - Khatu Shyam Ji</a>
                                        </h3>
                                        <div class="listing-two__price-and-btn">
                                            <div class="listing-two__price-box">
                                                <span>From</span>
                                                <p>199 INR/Seat</p>
                                            </div>
                                            <div class="listing-two__btn-box">
                                                <a href="https://wa.me/message/ZS5QNMAR2NSCO1" class="thm-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing Two Single End -->
                            <!-- Listing Two Single Start -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="listing-two__single">
                                    <div class="listing-two__img-box">
                                        <div class="listing-two__img">
                                            <img src="{{ asset('assets/images/listing/listing-2-7(1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="listing-two__content">
                                        <p class="listing-two__sub-title">Maruti Swift VXI</p>
                                        <h3 class="listing-two__title"><a href="{{ route('swift-vxi-details') }}">Jaipur - Tonk</a>
                                        </h3>
                                        <div class="listing-two__price-and-btn">
                                            <div class="listing-two__price-box">
                                                <span>From</span>
                                                <p>229 INR/Seat</p>
                                            </div>
                                            <div class="listing-two__btn-box">
                                                <a href="https://wa.me/message/ZS5QNMAR2NSCO1" class="thm-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing Two Single End -->
                            <!-- Listing Two Single Start -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="listing-two__single">
                                    <div class="listing-two__img-box">
                                        <div class="listing-two__img">
                                            <img src="{{ asset('assets/images/listing/listing-2-8(1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="listing-two__content">
                                        <p class="listing-two__sub-title">Maruti Swift VXI</p>
                                        <h3 class="listing-two__title"><a href="{{ route('swift-vxi-details') }}">Jaipur - Sikar</a>
                                        </h3>
                                        <div class="listing-two__price-and-btn">
                                            <div class="listing-two__price-box">
                                                <span>From</span>
                                                <p>279 INR/Seat</p>
                                            </div>
                                            <div class="listing-two__btn-box">
                                                <a href="https://wa.me/message/ZS5QNMAR2NSCO1" class="thm-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing Two Single End -->
                            <!-- Listing Two Single Start -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="listing-two__single">
                                    <div class="listing-two__img-box">
                                        <div class="listing-two__img">
                                            <img src="{{ asset('assets/images/listing/listing-2-9(1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="listing-two__content">
                                        <p class="listing-two__sub-title">Maruti Swift VXI</p>
                                        <h3 class="listing-two__title"><a href="{{ route('swift-vxi-details') }}">Jaipur - Nagaur</a>
                                        </h3>
                                        <div class="listing-two__price-and-btn">
                                            <div class="listing-two__price-box">
                                                <span>From</span>
                                                <p>549 INR/Seat</p>
                                            </div>
                                            <div class="listing-two__btn-box">
                                                <a href="https://wa.me/message/ZS5QNMAR2NSCO1" class="thm-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing Two Single End -->
                            <!-- Listing Two Single Start -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="listing-two__single">
                                    <div class="listing-two__img-box">
                                        <div class="listing-two__img">
                                            <img src="{{ asset('assets/images/listing/listing-2-10(1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="listing-two__content">
                                        <p class="listing-two__sub-title">Maruti Swift VXI</p>
                                        <h3 class="listing-two__title"><a href="{{ route('swift-vxi-details') }}">Jaipur -  Mahuwa</a>
                                        </h3>
                                        <div class="listing-two__price-and-btn">
                                            <div class="listing-two__price-box">
                                                <span>From</span>
                                                <p>279 INR/Seat</p>
                                            </div>
                                            <div class="listing-two__btn-box">
                                                <a href="https://wa.me/message/ZS5QNMAR2NSCO1" class="thm-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing Two Single End -->
                            <!-- Listing Two Single Start -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="listing-two__single">
                                    <div class="listing-two__img-box">
                                        <div class="listing-two__img">
                                            <img src="{{ asset('assets/images/listing/listing-2-11(1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="listing-two__content">
                                        <p class="listing-two__sub-title">Maruti Swift VXI</p>
                                        <h3 class="listing-two__title"><a href="{{ route('swift-vxi-details') }}">Jaipur
                                             - sariska
                                        </a>
                                        </h3>
                                        <div class="listing-two__price-and-btn">
                                            <div class="listing-two__price-box">
                                                <span>From</span>
                                                <p>329 INR/Seat</p>
                                            </div>
                                            <div class="listing-two__btn-box">
                                                <a href="https://wa.me/message/ZS5QNMAR2NSCO1" class="thm-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing Two Single End -->
                            <!-- Listing Two Single Start -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="listing-two__single">
                                    <div class="listing-two__img-box">
                                        <div class="listing-two__img">
                                            <img src="{{ asset('assets/images/listing/listing-2-12(1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="listing-two__content">
                                        <p class="listing-two__sub-title">Maruti Swift VXI</p>
                                        <h3 class="listing-two__title"><a href="{{ route('swift-vxi-details') }}">Jaipur - Pushkar</a>
                                        </h3>
                                        <div class="listing-two__price-and-btn">
                                            <div class="listing-two__price-box">
                                                <span>From</span>
                                                <p>379 INR/Seat</p>
                                            </div>
                                            <div class="listing-two__btn-box">
                                                <a href="https://wa.me/message/ZS5QNMAR2NSCO1" class="thm-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing Two Single End -->
                            <!-- Listing Two Single Start -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="listing-two__single">
                                    <div class="listing-two__img-box">
                                        <div class="listing-two__img">
                                            <img src="{{ asset('assets/images/listing/listing-2-13(1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="listing-two__content">
                                        <p class="listing-two__sub-title">Maruti Swift VXI</p>
                                        <h3 class="listing-two__title"><a href="{{ route('swift-vxi-details') }}">Jaipur - Kishangarh</a>
                                        </h3>
                                        <div class="listing-two__price-and-btn">
                                            <div class="listing-two__price-box">
                                                <span>From</span>
                                                <p>249 INR/Seat</p>
                                            </div>
                                            <div class="listing-two__btn-box">
                                                <a href="https://wa.me/message/ZS5QNMAR2NSCO1" class="thm-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing Two Single End -->
                            <!-- Listing Two Single Start -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="listing-two__single">
                                    <div class="listing-two__img-box">
                                        <div class="listing-two__img">
                                            <img src="{{ asset('assets/images/listing/listing-2-14(1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="listing-two__content">
                                        <p class="listing-two__sub-title">Maruti Swift VXI</p>
                                        <h3 class="listing-two__title"><a href="{{ route('swift-vxi-details') }}">Jaipur - udaipur</a>
                                        </h3>
                                        <div class="listing-two__price-and-btn">
                                            <div class="listing-two__price-box">
                                                <span>From</span>
                                                <p>899 INR/Seat</p>
                                            </div>
                                            <div class="listing-two__btn-box">
                                                <a href="https://wa.me/message/ZS5QNMAR2NSCO1" class="thm-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing Two Single End -->
                            <!-- Listing Two Single Start -->
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="listing-two__single">
                                    <div class="listing-two__img-box">
                                        <div class="listing-two__img">
                                            <img src="{{ asset('assets/images/listing/listing-2-15(1).png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="listing-two__content">
                                        <p class="listing-two__sub-title">Maruti Swift VXI</p>
                                        <h3 class="listing-two__title"><a href="{{ route('swift-vxi-details') }}">Jaipur - Delhi</a>
                                        </h3>
                                        <div class="listing-two__price-and-btn">
                                            <div class="listing-two__price-box">
                                                <span>From</span>
                                                <p>799 INR/Seat</p>
                                            </div>
                                            <div class="listing-two__btn-box">
                                                <a href="https://wa.me/message/ZS5QNMAR2NSCO1" class="thm-btn">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing Two Single End -->
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
                </div>
                <div class="col-xl-3">
                    <div class="car-listing-page-two__right">
                        <div class="car-listing__sidebar">
                            <div class="car-listing__search car-listing__sidebar-single">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="car-listing__price-ranger car-listing__sidebar-single">
                                <h3 class="car-listing__sidebar-title">Filter Price</h3>
                                <div class="price-ranger">
                                    <div id="slider-range"></div>
                                    <div class="ranger-min-max-block">
                                        <input type="text" readonly class="min">
                                        <span>-</span>
                                        <input type="text" readonly class="max">
                                        <input type="submit" value="Filter">
                                    </div>
                                </div>
                            </div>
                            <div class="car-listing__category car-listing__sidebar-single">
                                <h3 class="car-listing__sidebar-title">Categories</h3>
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="skipper1" id="skipper">
                                            <label for="skipper"><span></span>All</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>200</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="skipper2" id="skipper2" checked="">
                                            <label for="skipper2"><span></span>SUV</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>50</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="skipper3" id="skipper3">
                                            <label for="skipper3"><span></span>Sedan</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>100</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="skipper4" id="skipper4">
                                            <label for="skipper4"><span></span>luxury cars</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>150</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="skipper5" id="skipper5">
                                            <label for="skipper5"><span></span>Hatchbacks</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>80</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="skipper6" id="skipper6">
                                            <label for="skipper6"><span></span>MUV / MPV</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>60</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="skipper7" id="skipper7">
                                            <label for="skipper7"><span></span>Crossover</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>90</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="car-listing__category car-listing__features car-listing__sidebar-single">
                                <h3 class="car-listing__sidebar-title">Car Features</h3>
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="c_features1" id="c_features1">
                                            <label for="c_features1"><span></span>Backup Camera</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>2</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="c_features2" id="c_features2" checked="">
                                            <label for="c_features2"><span></span>Blindspot warning</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>2</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="c_features4" id="c_features4">
                                            <label for="c_features4"><span></span>Airbags</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>2</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="c_features5" id="c_features5">
                                            <label for="skipper5"><span></span>Parking sensors</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>1</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="c_features6" id="c_features6">
                                            <label for="c_features6"><span></span>Head-up display</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>2</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="c_features7" id="c_features7">
                                            <label for="c_features7"><span></span>Heated seats</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>20</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="car-listing__category car-listing__tuel-type car-listing__sidebar-single">
                                <h3 class="car-listing__sidebar-title">Fuel Type</h3>
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="f_type1" id="f_type1">
                                            <label for="f_type1"><span></span>Diesel</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>20</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="f_type2" id="f_type2" checked="">
                                            <label for="f_type2"><span></span>Petrol</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>25</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="f_type3" id="f_type3">
                                            <label for="f_type3"><span></span>Electric Vehicle</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>29</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="f_type4" id="f_type4">
                                            <label for="f_type4"><span></span>Petrol + CNG</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>40</p>
                                        </div>
                                    </li>
                                    <!-- <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="f_type5" id="f_type5">
                                            <label for="f_type5"><span></span>Ethanol</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>20</p>
                                        </div>
                                    </li> -->
                                    <!-- <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="f_type6" id="f_type6">
                                            <label for="f_type6"><span></span>Hybrid</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>27</p>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                            <div class="car-listing__rating car-listing__sidebar-single">
                                <h3 class="car-listing__sidebar-title">Reviews</h3>
                                <div class="car-listing__rating-box">
                                    <ul class="list-unstyled">
                                        <li>
                                            <input type="radio" id="fivestar" name="rating" checked="checked">
                                            <label for="fivestar">
                                                <i></i>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="fourstar" name="rating">
                                            <label for="fourstar">
                                                <i></i>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star gray"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="threestar" name="rating">
                                            <label for="threestar">
                                                <i></i>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star gray"></span>
                                                <span class="fas fa-star gray"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="twostar" name="rating">
                                            <label for="twostar">
                                                <i></i>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star gray"></span>
                                                <span class="fas fa-star gray"></span>
                                                <span class="fas fa-star gray"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="onestar" name="rating">
                                            <label for="onestar">
                                                <i></i>
                                                <span class="fas fa-star"></span>
                                                <span class="fas fa-star gray"></span>
                                                <span class="fas fa-star gray"></span>
                                                <span class="fas fa-star gray"></span>
                                                <span class="fas fa-star gray"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="car-listing__google-map car-listing__sidebar-single">
                                <h3 class="car-listing__sidebar-title">Google Map</h3>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.7034699218!2d75.8575571!3d26.7994006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396dc9001af5b72b:0x420eb7561005f2db!2sQuarkcars+-+Mobility!5e0!3m2!1sen!2sin!4v1640995200000!5m2!1sen!2sin"
                                    class="car-listing__google-map-box" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Car Listing page One End -->

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