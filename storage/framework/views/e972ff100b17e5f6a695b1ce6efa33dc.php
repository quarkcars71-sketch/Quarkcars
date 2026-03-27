<?php $__env->startSection('title', 'Listing Single || Gorent || Gorent Laravel  Template'); ?>

<?php $__env->startSection('content'); ?>




    <?php if (isset($component)) { $__componentOriginalf5606eea0f9c25be0d1717ad67ba232c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5606eea0f9c25be0d1717ad67ba232c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pageHeader','data' => ['title' => 'Listing Single','subtitle' => 'Listing Single']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('pageHeader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Listing Single','subtitle' => 'Listing Single']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5606eea0f9c25be0d1717ad67ba232c)): ?>
<?php $attributes = $__attributesOriginalf5606eea0f9c25be0d1717ad67ba232c; ?>
<?php unset($__attributesOriginalf5606eea0f9c25be0d1717ad67ba232c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5606eea0f9c25be0d1717ad67ba232c)): ?>
<?php $component = $__componentOriginalf5606eea0f9c25be0d1717ad67ba232c; ?>
<?php unset($__componentOriginalf5606eea0f9c25be0d1717ad67ba232c); ?>
<?php endif; ?>

    <!--Listing Single Start-->
    <section class="listing-single">
        <div class="container">
            <div class="listing-single__top">
                <div class="listing-single__top-left">
                    <h3 class="listing-single__title">Maruti Swift VXI (O) CNG</h3>
                    <p class="listing-single__sub-title">1.2L VXI (O) CNG 5dr FWD Manual Hatchback</p>
                    <div class="listing-single__car-details-box">
                        <ul class="list-unstyled listing-single__car-details">
                            <li>
                                <span class="icon-date"></span>
                                <p>2023</p>
                            </li>
                            <li>
                                <span class="icon-mileage"></span>
                                <p>25,000 KM</p>
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
                    <!-- <h2 class="listing-single__price">$150,000</h2> -->
                    <!-- <div class="listing-single__offer-price">
                        <div class="icon">
                            <span class="icon-tag-2"></span>
                        </div>
                        <div class="text">
                            <p>Make An Offer Price</p>
                        </div>
                    </div> -->
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
                                                    <img src="<?php echo e(asset('assets/images/listing/listing-single-1-1(1).png')); ?>"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-lg-7">
                                            <div class="listing-single__right">
                                                <h3 class="listing-single__title-two">Maruti Swift VXI (O) CNG – Features, Mileage & City Drive Performance</h3>
                                                <p class="listing-single__text">The Maruti Swift VXI (O) CNG is a smart and fuel-efficient hatchback designed for everyday driving and budget-conscious travelers. Known for its reliable performance and low running cost, this CNG variant of the Swift offers a perfect balance of comfort, practicality, and economy.</p>
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
                                                            <p>Fleet Code:<a href="#"><span>QC-SWIFT-CNG-01</span></a></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="listing-single__btn-and-video-box">
                                                    <div class="listing-single__btn-box">
                                                        <a href="<?php echo e(route('car-subscription')); ?>" class="thm-btn">See All Photo<span
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
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <div class="listing-single__main-content-inner">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5">
                                            <div class="listing-single__left">
                                                <div class="listing-single__img">
                                                    <img src="<?php echo e(asset('assets/images/listing/listing-single-1-2(1).png')); ?>"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-lg-7">
                                            <div class="listing-single__right">
                                                <h3 class="listing-single__title-two">Hyundai Accent 2025 - Modern
                                                    compact sedan in blue color car.</h3>
                                                <p class="listing-single__text">The Toyota Corolla Hybrid is the
                                                    high-performance
                                                    version of the 2 Series 2-door coupé. The first generation of
                                                    the M2 is the F87 coupé and is powered by turbocharged.</p>
                                                <ul class="list-unstyled listing-single__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="fas fa-map-marker-alt"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Las Vegas, USA</p>
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
                                                            <p>Fleet Code:<a href="#"><span>BMW-4525</span></a></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="listing-single__btn-and-video-box">
                                                    <div class="listing-single__btn-box">
                                                        <a href="<?php echo e(route('car-subscription')); ?>" class="thm-btn">See All Photo<span
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <div class="listing-single__main-content-inner">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-5">
                                            <div class="listing-single__left">
                                                <div class="listing-single__img">
                                                    <img src="<?php echo e(asset('assets/images/listing/listing-single-1-3(1).png')); ?>"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-lg-7">
                                            <div class="listing-single__right">
                                                <h3 class="listing-single__title-two">2025 Toyota Corolla Hybrid
                                                    Best Reviews and Specs</h3>
                                                <p class="listing-single__text">The Toyota Corolla Hybrid is the
                                                    high-performance
                                                    version of the 2 Series 2-door coupé. The first generation of
                                                    the M2 is the F87 coupé and is powered by turbocharged.</p>
                                                <ul class="list-unstyled listing-single__meta">
                                                    <li>
                                                        <div class="icon">
                                                            <span class="fas fa-map-marker-alt"></span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Las Vegas, USA</p>
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
                                                            <p>Fleet Code:<a href="#"><span>BMW-4525</span></a></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="listing-single__btn-and-video-box">
                                                    <div class="listing-single__btn-box">
                                                        <a href="<?php echo e(route('car-subscription')); ?>" class="thm-btn">See All Photo<span
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.swiper-slide -->
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
                                        <img src="<?php echo e(asset('assets/images/listing/listing-single-thamb-1-1(1).png')); ?>" alt="">
                                    </div>
                                </div>
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <div class="listing-single__img-holder-box">
                                    <div class="listing-single__img-holder">
                                        <img src="<?php echo e(asset('assets/images/listing/listing-single-thamb-1-2(1).png')); ?>" alt="">
                                    </div>
                                </div>
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <div class="listing-single__img-holder-box">
                                    <div class="listing-single__img-holder">
                                        <img src="<?php echo e(asset('assets/images/listing/listing-single-thamb-1-3(1).png')); ?>" alt="">
                                    </div>
                                </div>
                            </div><!-- /.swiper-slide -->
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
                                                <p>SUV</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="listing-single__car-overview-point-left">
                                                <i class="icon-mileage"></i>
                                                <p>Mileage</p>
                                            </div>
                                            <div class="listing-single__car-overview-point-right">
                                                <p>50</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="listing-single__car-overview-point-left">
                                                <i class="icon-fuel-type"></i>
                                                <p>Fuel Type</p>
                                            </div>
                                            <div class="listing-single__car-overview-point-right">
                                                <p>Petrol</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="listing-single__car-overview-point-left">
                                                <i class="icon-date"></i>
                                                <p>Year</p>
                                            </div>
                                            <div class="listing-single__car-overview-point-right">
                                                <p>2024</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="listing-single__car-overview-point-left">
                                                <i class="icon-Carrier"></i>
                                                <p>Transmission</p>
                                            </div>
                                            <div class="listing-single__car-overview-point-right">
                                                <p>Automatic</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="listing-single__car-overview-point-left">
                                                <i class="icon-test-drive"></i>
                                                <p>Drive Type</p>
                                            </div>
                                            <div class="listing-single__car-overview-point-right">
                                                <p>Drive (AWD/4WD)</p>
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
                                                <p>4.5</p>
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
                                                <p>Range</p>
                                            </div>
                                            <div class="listing-single__car-overview-point-right">
                                                <p>$1700</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="listing-single__car-overview-point-left">
                                                <i class="icon-color"></i>
                                                <p>Color</p>
                                            </div>
                                            <div class="listing-single__car-overview-point-right">
                                                <p>Blue, Gold, Red</p>
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
                                <p class="listing-single__description-text-1">Lorem ipsum is simply ipun txns mane
                                    so dummy text of free available in market the printing and typesetting industry
                                    has been the industry's standard dummy text ever. Lorem ipsum is simply ipun
                                    txns mane. Lorem ipsum is simply ipun txns mane
                                    so dummy text of free available in market the printing and typesetting industry
                                    has been the industry's standard dummy text ever.</p>
                                <p class="listing-single__description-text-2">Lorem ipsum is simply ipun txns mane
                                    so dummy text of free available in market the printing and typesetting industry
                                    has been the industry's standard dummy text ever.</p>
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
                                                    <p>Air Conditioner</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Digital Odometer</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Heater</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Leather Seats</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Panoramic Moonroof</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Tachometer</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Touchscreen Display</p>
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
                                                    <p>Anti-lock Braking</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Brake Assist Child</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Safety Locks Driver</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Air Bag Power</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Door Locks</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Stability Control</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Traction Control</p>
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
                                                    <p>Android Auto</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Apple CarPlay</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Bluetooth</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>HomeLink</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Power Steering</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-cheack"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Vanity Mirror</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="listing-single__review-and-comment">
                                <!--Review One Start-->
                                <div class="review-one">
                                    <div class="comments-area">
                                        <div class="review-one__title">
                                            <h3>2 Reviews</h3>
                                        </div>
                                        <!--Start Comment Box-->
                                        <div class="comment-box">
                                            <div class="comment">
                                                <div class="author-thumb">
                                                    <figure class="thumb"><img
                                                            src="<?php echo e(asset('assets/images/shop/review-1-1.jpg')); ?>" alt="">
                                                    </figure>
                                                </div>

                                                <div class="review-one__content">
                                                    <div class="review-one__content-top">
                                                        <div class="info">
                                                            <h2>Kevin martin <span>20 Oct, 2022 . 4:00
                                                                    pm</span></h2>
                                                        </div>
                                                        <div class="reply-btn">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>

                                                    <div class="review-one__content-bottom">
                                                        <p>Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci
                                                            phaedrum. There are many variations of passages of Lorem
                                                            Ipsum available, but the majority have alteration in
                                                            some injected or words which don't look even slightly
                                                            believable. If you are going to use a passage of Lorem
                                                            Ipsum, you need to be sure there isn't anything
                                                            embarrang hidden in the middle of text.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Comment Box-->

                                        <!--Start Comment Box-->
                                        <div class="comment-box">
                                            <div class="comment">
                                                <div class="author-thumb">
                                                    <figure class="thumb"><img
                                                            src="<?php echo e(asset('assets/images/shop/review-1-2.jpg')); ?>" alt="">
                                                    </figure>
                                                </div>

                                                <div class="review-one__content">
                                                    <div class="review-one__content-top">
                                                        <div class="info">
                                                            <h2>Sarah albert <span>20 Oct, 2022 . 4:00
                                                                    pm</span></h2>
                                                        </div>
                                                        <div class="reply-btn">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>

                                                    <div class="review-one__content-bottom">
                                                        <p>It has survived not only five centuries, but also
                                                            the leap into electronic
                                                            typesetting unchanged. It was popularised in the
                                                            sheets containing lorem ipsum
                                                            is simply free text. Class aptent taciti
                                                            sociosqu ad litora torquent per conubia
                                                            nostra, per inceptos himenaeos. Vestibulum
                                                            sollicitudin varius mauris non
                                                            dignissim.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Comment Box-->
                                    </div>
                                </div>
                                <!--Review One End-->

                                <!--Start Review Form-->
                                <div class="review-form-one">
                                    <div class="review-form-one__inner">
                                        <h3 class="review-form-one__title">Add a review</h3>
                                        <div class="review-form-one__rate-box">
                                            <p class="review-form-one__rate-text">Rate this product?</p>
                                            <div class="review-form-one__rate">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <form action="assets/inc/sendemail.php"
                                            class="review-form-one__form contact-form-validated" novalidate="novalidate">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="review-form-one__input-box text-message-box">
                                                        <textarea name="message" placeholder="Write a comment"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="review-form-one__input-box">
                                                        <input type="text" placeholder="Your name" name="name">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6">
                                                    <div class="review-form-one__input-box">
                                                        <input type="email" placeholder="Email address" name="email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <button type="submit" class="thm-btn review-form-one__btn">Submit a
                                                        review <span class="fas fa-arrow-right"></span></button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="result"></div>
                                    </div>
                                </div>
                                <!--End Review Form-->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="listing-single__sidebar">
                            <div class="listing-single__rent-car-daily-price listing-single__single-box">
                                <p>Daily rate</p>
                                <h3>$150</h3>
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
                                                        <p>$20</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checked-box">
                                                        <input type="checkbox" name="f_extra2" id="f_extra2" checked="">
                                                        <label for="f_extra2"><span></span>GPS System </label>
                                                    </div>
                                                    <div class="counts-box">
                                                        <p>$20</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checked-box">
                                                        <input type="checkbox" name="f_extra3" id="f_extra3">
                                                        <label for="f_extra3"><span></span>Additional Driver
                                                        </label>
                                                    </div>
                                                    <div class="counts-box">
                                                        <p>$100</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checked-box">
                                                        <input type="checkbox" name="f_extra4" id="f_extra4">
                                                        <label for="f_extra4"><span></span>Central Lock</label>
                                                    </div>
                                                    <div class="counts-box">
                                                        <p>$150</p>
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
                                                        <p>$150.00</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        <p>Sale discount</p>
                                                    </div>
                                                    <div class="price">
                                                        <p>$140.00</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="title">
                                                        <p>Total Payable</p>
                                                    </div>
                                                    <div class="price">
                                                        <p>$160.00</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="listing-single__btn-box-2">
                                    <a href="<?php echo e(route('swift-vxi-details')); ?>" class="thm-btn">Rent Now<span
                                            class="fas fa-arrow-right"></span></a>
                                </div>
                            </div>
                            <div class="listing-single__contact-info listing-single__single-box">
                                <div class="listing-single__contact-phone">
                                    <a href="tel:15502505260" class="listing-single__contact-phone-number"> <span
                                            class="icon-call-3"></span> 1 (550) 250 5260</a>
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
                                        <img src="<?php echo e(asset('assets/images/listing/listing-single-seller-info-img-1.jpg')); ?>"
                                            alt="">
                                    </div>
                                    <div class="listing-single__seller-info-content">
                                        <p>Add by:</p>
                                        <h5>Kevin Obrain <span class="icon-cheack"></span> </h5>
                                    </div>
                                </div>
                                <div class="listing-single__seller-contact-info">
                                    <ul class="list-unstyled listing-single__seller-contact-info-list">
                                        <li>
                                            <div class="icon">
                                                <i class="far fa-phone"></i>
                                            </div>
                                            <div class="text">
                                                <p><a href="tel:15502505260"> 1 (550) 250 5260</a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="far fa-envelope"></i>
                                            </div>
                                            <div class="text">
                                                <p><a href="mailto:kevin.gilbert@gmail.com">kevin.obrain@gmail.com</a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="text">
                                                <p>Las Vegas, USA</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-globe"></i>
                                            </div>
                                            <div class="text">
                                                <p><a href="#">www.kevin.com</a></p>
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

    <!--Gallery One Start -->
    <section class="gallery-one">
        <div class="gallery-one__carousel owl-theme owl-carousel">
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="<?php echo e(asset('assets/images/gallery/gallery-1-1(1).jpg')); ?>" alt="">
                        <a href="<?php echo e(route('car-subscription')); ?>"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="<?php echo e(asset('assets/images/gallery/gallery-1-2(1).jpg')); ?>" alt="">
                        <a href="<?php echo e(route('car-subscription')); ?>"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="<?php echo e(asset('assets/images/gallery/gallery-1-3(1).jpg')); ?>" alt="">
                        <a href="<?php echo e(route('cart')); ?>"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="<?php echo e(asset('assets/images/gallery/gallery-1-4(1).jpg')); ?>" alt="">
                        <a href="<?php echo e(route('cart')); ?>"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="<?php echo e(asset('assets/images/gallery/gallery-1-5(1).jpg')); ?>" alt="">
                        <a href="<?php echo e(route('cart')); ?>"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="<?php echo e(asset('assets/images/gallery/gallery-1-6(1).jpg')); ?>" alt="">
                        <a href="<?php echo e(route('cart')); ?>"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
        </div>
    </section>
    <!--Gallery One End -->

    <?php if (isset($component)) { $__componentOriginal0ce0d897570c8cee83bad0dd5b037fc6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0ce0d897570c8cee83bad0dd5b037fc6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer_style_one','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer_style_one'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0ce0d897570c8cee83bad0dd5b037fc6)): ?>
<?php $attributes = $__attributesOriginal0ce0d897570c8cee83bad0dd5b037fc6; ?>
<?php unset($__attributesOriginal0ce0d897570c8cee83bad0dd5b037fc6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0ce0d897570c8cee83bad0dd5b037fc6)): ?>
<?php $component = $__componentOriginal0ce0d897570c8cee83bad0dd5b037fc6; ?>
<?php unset($__componentOriginal0ce0d897570c8cee83bad0dd5b037fc6); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layoutCommon', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\pack-file laravel\Quarkcars\resources\views/pages/SwiftVXIDetails.blade.php ENDPATH**/ ?>