<?php $__env->startSection('title', 'Taxi Services'); ?>

<?php $__env->startSection('content'); ?>

    <?php if (isset($component)) { $__componentOriginalf5606eea0f9c25be0d1717ad67ba232c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5606eea0f9c25be0d1717ad67ba232c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pageHeader','data' => ['title' => 'Taxi Services','subtitle' => 'Taxi Services']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('pageHeader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Taxi Services','subtitle' => 'Taxi Services']); ?>
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

    <!--Car Listing page One Start -->
    <section class="car-listing-page-three">
        <div class="container">
            <div class="row">
                <div class="col-xl-9">
                    <div class="car-listing-page-three__left">
                        <div class="row">
                            <!-- Listing One Single Start -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="listing-three__single">
                                    <div class="listing-three__img">
                                        <img src="<?php echo e(asset('assets/images/listing/listing-3-1.jpg')); ?>" alt="">
                                        <div class="listing-three__brand-name">
                                            <p>Maruti</p>
                                        </div>
                                    </div>
                                    <div class="listing-three__content">
                                        <h3 class="listing-three__title"><a href="<?php echo e(route('listing-single')); ?>">Maruti Swift VXI (O) CNG</a></h3>
                                        <div class="listing-three__meta-box-info">
                                            <ul class="list-unstyled listing-three__meta">
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
                                            <ul class="list-unstyled listing-three__meta listing-three__meta--two">
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
                                        <div class="listing-three__car-rent-and-btn-box">
                                            <p class="listing-three__car-rent"><span>$100/</span> Day</p>
                                            <div class="listing-three__btn-box">
                                                <a href="<?php echo e(route('listing-single')); ?>" class="listing-three__btn"><span
                                                        class="icon-right-arrow-1"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing One Single End -->
                            <!-- Listing One Single Start -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="listing-three__single">
                                    <div class="listing-three__img">
                                        <img src="<?php echo e(asset('assets/images/listing/listing-3-2.jpg')); ?>" alt="">
                                        <div class="listing-three__brand-name">
                                            <p>Acura</p>
                                        </div>
                                    </div>
                                    <div class="listing-three__content">
                                        <h3 class="listing-three__title"><a href="<?php echo e(route('listing-single')); ?>">Kia Soul
                                                2025</a></h3>
                                        <div class="listing-three__meta-box-info">
                                            <ul class="list-unstyled listing-three__meta">
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
                                                        <p>25 KM</p>
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
                                            <ul class="list-unstyled listing-three__meta listing-three__meta--two">
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
                                                        <p>Age 25</p>
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
                                        <div class="listing-three__car-rent-and-btn-box">
                                            <p class="listing-three__car-rent"><span>$100/</span> Day</p>
                                            <div class="listing-three__btn-box">
                                                <a href="<?php echo e(route('listing-single')); ?>" class="listing-three__btn"><span
                                                        class="icon-right-arrow-1"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing One Single End -->
                            <!-- Listing One Single Start -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="listing-three__single">
                                    <div class="listing-three__img">
                                        <img src="<?php echo e(asset('assets/images/listing/listing-3-3.jpg')); ?>" alt="">
                                        <div class="listing-three__brand-name">
                                            <p>Acura</p>
                                        </div>
                                    </div>
                                    <div class="listing-three__content">
                                        <h3 class="listing-three__title"><a href="<?php echo e(route('listing-single')); ?>">Audi A3
                                                2025 New</a></h3>
                                        <div class="listing-three__meta-box-info">
                                            <ul class="list-unstyled listing-three__meta">
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
                                                        <p>25 KM</p>
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
                                            <ul class="list-unstyled listing-three__meta listing-three__meta--two">
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
                                                        <p>Age 25</p>
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
                                        <div class="listing-three__car-rent-and-btn-box">
                                            <p class="listing-three__car-rent"><span>$100/</span> Day</p>
                                            <div class="listing-three__btn-box">
                                                <a href="<?php echo e(route('listing-single')); ?>" class="listing-three__btn"><span
                                                        class="icon-right-arrow-1"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing One Single End -->
                            <!-- Listing One Single Start -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="listing-three__single">
                                    <div class="listing-three__img">
                                        <img src="<?php echo e(asset('assets/images/listing/listing-3-4.jpg')); ?>" alt="">
                                        <div class="listing-three__brand-name">
                                            <p>Acura</p>
                                        </div>
                                    </div>
                                    <div class="listing-three__content">
                                        <h3 class="listing-three__title"><a href="<?php echo e(route('listing-single')); ?>">Ferrari
                                                458 MM Speciale</a></h3>
                                        <div class="listing-three__meta-box-info">
                                            <ul class="list-unstyled listing-three__meta">
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
                                                        <p>25 KM</p>
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
                                            <ul class="list-unstyled listing-three__meta listing-three__meta--two">
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
                                                        <p>Age 25</p>
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
                                        <div class="listing-three__car-rent-and-btn-box">
                                            <p class="listing-three__car-rent"><span>$100/</span> Day</p>
                                            <div class="listing-three__btn-box">
                                                <a href="<?php echo e(route('listing-single')); ?>" class="listing-three__btn"><span
                                                        class="icon-right-arrow-1"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing One Single End -->
                            <!-- Listing One Single Start -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="listing-three__single">
                                    <div class="listing-three__img">
                                        <img src="<?php echo e(asset('assets/images/listing/listing-3-5.jpg')); ?>" alt="">
                                        <div class="listing-three__brand-name">
                                            <p>Acura</p>
                                        </div>
                                    </div>
                                    <div class="listing-three__content">
                                        <h3 class="listing-three__title"><a href="<?php echo e(route('listing-single')); ?>">Audi Sport
                                                Version</a></h3>
                                        <div class="listing-three__meta-box-info">
                                            <ul class="list-unstyled listing-three__meta">
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
                                                        <p>25 KM</p>
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
                                            <ul class="list-unstyled listing-three__meta listing-three__meta--two">
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
                                                        <p>Age 25</p>
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
                                        <div class="listing-three__car-rent-and-btn-box">
                                            <p class="listing-three__car-rent"><span>$100/</span> Day</p>
                                            <div class="listing-three__btn-box">
                                                <a href="<?php echo e(route('listing-single')); ?>" class="listing-three__btn"><span
                                                        class="icon-right-arrow-1"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing One Single End -->
                            <!-- Listing One Single Start -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="listing-three__single">
                                    <div class="listing-three__img">
                                        <img src="<?php echo e(asset('assets/images/listing/listing-1-6.jpg')); ?>" alt="">
                                        <div class="listing-three__brand-name">
                                            <p>Acura</p>
                                        </div>
                                    </div>
                                    <div class="listing-three__content">
                                        <h3 class="listing-three__title"><a href="<?php echo e(route('listing-single')); ?>">Toyota
                                                Tacoma 4WD</a></h3>
                                        <div class="listing-three__meta-box-info">
                                            <ul class="list-unstyled listing-three__meta">
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
                                                        <p>25 KM</p>
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
                                            <ul class="list-unstyled listing-three__meta listing-three__meta--two">
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
                                                        <p>Age 25</p>
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
                                        <div class="listing-three__car-rent-and-btn-box">
                                            <p class="listing-three__car-rent"><span>$100/</span> Day</p>
                                            <div class="listing-three__btn-box">
                                                <a href="<?php echo e(route('listing-single')); ?>" class="listing-three__btn"><span
                                                        class="icon-right-arrow-1"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing One Single End -->
                            <!-- Listing One Single Start -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="listing-three__single">
                                    <div class="listing-three__img">
                                        <img src="<?php echo e(asset('assets/images/listing/listing-3-1.jpg')); ?>" alt="">
                                        <div class="listing-three__brand-name">
                                            <p>Acura</p>
                                        </div>
                                    </div>
                                    <div class="listing-three__content">
                                        <h3 class="listing-three__title"><a href="<?php echo e(route('listing-single')); ?>">Acura
                                                Sport Version</a></h3>
                                        <div class="listing-three__meta-box-info">
                                            <ul class="list-unstyled listing-three__meta">
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
                                                        <p>25 KM</p>
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
                                            <ul class="list-unstyled listing-three__meta listing-three__meta--two">
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
                                                        <p>Age 25</p>
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
                                        <div class="listing-three__car-rent-and-btn-box">
                                            <p class="listing-three__car-rent"><span>$100/</span> Day</p>
                                            <div class="listing-three__btn-box">
                                                <a href="<?php echo e(route('listing-single')); ?>" class="listing-three__btn"><span
                                                        class="icon-right-arrow-1"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing One Single End -->
                            <!-- Listing One Single Start -->
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="listing-three__single">
                                    <div class="listing-three__img">
                                        <img src="<?php echo e(asset('assets/images/listing/listing-3-2.jpg')); ?>" alt="">
                                        <div class="listing-three__brand-name">
                                            <p>Acura</p>
                                        </div>
                                    </div>
                                    <div class="listing-three__content">
                                        <h3 class="listing-three__title"><a href="<?php echo e(route('listing-single')); ?>">Kia Soul
                                                2025</a></h3>
                                        <div class="listing-three__meta-box-info">
                                            <ul class="list-unstyled listing-three__meta">
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
                                                        <p>25 KM</p>
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
                                            <ul class="list-unstyled listing-three__meta listing-three__meta--two">
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
                                                        <p>Age 25</p>
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
                                        <div class="listing-three__car-rent-and-btn-box">
                                            <p class="listing-three__car-rent"><span>$100/</span> Day</p>
                                            <div class="listing-three__btn-box">
                                                <a href="<?php echo e(route('listing-single')); ?>" class="listing-three__btn"><span
                                                        class="icon-right-arrow-1"></span></a>
                                            </div>
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
                </div>
                <div class="col-xl-3">
                    <div class="car-listing-page-three__right">
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
                                            <label for="skipper2"><span></span>sport cars</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>50</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="skipper3" id="skipper3">
                                            <label for="skipper3"><span></span>sedan</label>
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
                                            <label for="skipper5"><span></span>Minibus</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>80</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="skipper6" id="skipper6">
                                            <label for="skipper6"><span></span>Coupes</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>60</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="skipper7" id="skipper7">
                                            <label for="skipper7"><span></span>Trucks</label>
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
                                            <label for="f_type2"><span></span>Gasoline</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>25</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="f_type3" id="f_type3">
                                            <label for="f_type3"><span></span>Petrol</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>29</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="f_type4" id="f_type4">
                                            <label for="f_type4"><span></span>Electric Vehicle</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>40</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="f_type5" id="f_type5">
                                            <label for="f_type5"><span></span>Ethanol</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>20</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="checked-box">
                                            <input type="checkbox" name="f_type6" id="f_type6">
                                            <label for="f_type6"><span></span>Hybrid</label>
                                        </div>
                                        <div class="counts-box">
                                            <p>27</p>
                                        </div>
                                    </li>
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
<?php echo $__env->make('layouts.layoutCommon', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\pack-file laravel\Quarkcars\resources\views/pages/taxi-services.blade.php ENDPATH**/ ?>