<?php $__env->startSection('title', 'Car-subscription'); ?>

<?php $__env->startSection('content'); ?>

    <?php if (isset($component)) { $__componentOriginalf5606eea0f9c25be0d1717ad67ba232c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5606eea0f9c25be0d1717ad67ba232c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pageHeader','data' => ['title' => 'Car Subscription','subtitle' => 'Car Subscription']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('pageHeader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Car Subscription','subtitle' => 'Car Subscription']); ?>
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

    <!--Cars Page Start -->
    <section class="cars-page">
        <div class="container">
            <div class="row">
                <!-- Listing One Single Start -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="listing-one__single">
                        <div class="listing-one__img">
                            <img src="<?php echo e(asset('assets/images/listing/listing-1-1.jpg')); ?>" alt="">
                            <div class="listing-one__brand-name">
                                <p>Acura</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="<?php echo e(route('swift-vxi-details')); ?>">Acura
                                    Sport Version</a></h3>
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
                            <div class="listing-one__car-rent-box">
                                <p class="listing-one__car-rent">Starting From
                                    <span>$100/</span> Day
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                <a href="<?php echo e(route('swift-vxi-details')); ?>" class="thm-btn">Details Now<span
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
                            <img src="<?php echo e(asset('assets/images/listing/listing-1-2.jpg')); ?>" alt="">
                            <div class="listing-one__brand-name">
                                <p>Kia Soul</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="<?php echo e(route('swift-vxi-details')); ?>">Kia Soul
                                    2025</a></h3>
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
                            <div class="listing-one__car-rent-box">
                                <p class="listing-one__car-rent">Starting From
                                    <span>$100/</span> Day
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                <a href="<?php echo e(route('swift-vxi-details')); ?>" class="thm-btn">Details Now<span
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
                            <img src="<?php echo e(asset('assets/images/listing/listing-1-3.jpg')); ?>" alt="">
                            <div class="listing-one__brand-name">
                                <p>Audi</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="<?php echo e(route('swift-vxi-details')); ?>">Audi A3
                                    2025 New</a></h3>
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
                            <div class="listing-one__car-rent-box">
                                <p class="listing-one__car-rent">Starting From
                                    <span>$100/</span> Day
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                <a href="<?php echo e(route('swift-vxi-details')); ?>" class="thm-btn">Details Now<span
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
                            <img src="<?php echo e(asset('assets/images/listing/listing-1-4.jpg')); ?>" alt="">
                            <div class="listing-one__brand-name">
                                <p>Audi</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="<?php echo e(route('swift-vxi-details')); ?>">Ferrari
                                    458 MM Speciale</a></h3>
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
                            <div class="listing-one__car-rent-box">
                                <p class="listing-one__car-rent">Starting From
                                    <span>$100/</span> Day
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                <a href="<?php echo e(route('swift-vxi-details')); ?>" class="thm-btn">Details Now<span
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
                            <img src="<?php echo e(asset('assets/images/listing/listing-1-5.jpg')); ?>" alt="">
                            <div class="listing-one__brand-name">
                                <p>Acura</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="<?php echo e(route('swift-vxi-details')); ?>">Audi Sport
                                    Version</a></h3>
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
                            <div class="listing-one__car-rent-box">
                                <p class="listing-one__car-rent">Starting From
                                    <span>$100/</span> Day
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                <a href="<?php echo e(route('swift-vxi-details')); ?>" class="thm-btn">Details Now<span
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
                            <img src="<?php echo e(asset('assets/images/listing/listing-1-6.jpg')); ?>" alt="">
                            <div class="listing-one__brand-name">
                                <p>Toyota</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="<?php echo e(route('swift-vxi-details')); ?>">Toyota
                                    Tacoma 4WD</a></h3>
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
                            <div class="listing-one__car-rent-box">
                                <p class="listing-one__car-rent">Starting From
                                    <span>$100/</span> Day
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                <a href="<?php echo e(route('swift-vxi-details')); ?>" class="thm-btn">Details Now<span
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
                            <img src="<?php echo e(asset('assets/images/listing/listing-1-1.jpg')); ?>" alt="">
                            <div class="listing-one__brand-name">
                                <p>Acura</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="<?php echo e(route('swift-vxi-details')); ?>">Acura
                                    Sport Version</a></h3>
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
                            <div class="listing-one__car-rent-box">
                                <p class="listing-one__car-rent">Starting From
                                    <span>$100/</span> Day
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                <a href="<?php echo e(route('swift-vxi-details')); ?>" class="thm-btn">Details Now<span
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
                            <img src="<?php echo e(asset('assets/images/listing/listing-1-2.jpg')); ?>" alt="">
                            <div class="listing-one__brand-name">
                                <p>Kia Soul</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="<?php echo e(route('swift-vxi-details')); ?>">Kia Soul
                                    2025</a></h3>
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
                            <div class="listing-one__car-rent-box">
                                <p class="listing-one__car-rent">Starting From
                                    <span>$100/</span> Day
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                <a href="<?php echo e(route('swift-vxi-details')); ?>" class="thm-btn">Details Now<span
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
                            <img src="<?php echo e(asset('assets/images/listing/listing-1-3.jpg')); ?>" alt="">
                            <div class="listing-one__brand-name">
                                <p>Audi</p>
                            </div>
                        </div>
                        <div class="listing-one__content">
                            <h3 class="listing-one__title"><a href="<?php echo e(route('swift-vxi-details')); ?>">Audi A3
                                    2025 New</a></h3>
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
                            <div class="listing-one__car-rent-box">
                                <p class="listing-one__car-rent">Starting From
                                    <span>$100/</span> Day
                                </p>
                            </div>
                            <div class="listing-one__btn-box">
                                <a href="<?php echo e(route('swift-vxi-details')); ?>" class="thm-btn">Details Now<span
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
<?php echo $__env->make('layouts.layoutCommon', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\pack-file laravel\Quarkcars\resources\views/pages/car-subscription.blade.php ENDPATH**/ ?>