<?php $__env->startSection('title', 'Blog'); ?>

<?php $__env->startSection('content'); ?>


    <?php if (isset($component)) { $__componentOriginalf5606eea0f9c25be0d1717ad67ba232c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5606eea0f9c25be0d1717ad67ba232c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pageHeader','data' => ['title' => 'Blog','subtitle' => 'Blog']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('pageHeader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Blog','subtitle' => 'Blog']); ?>
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

    <!--Blog Page Start -->
    <section class="blog-page">
        <div class="container">
            <div class="row">
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="<?php echo e(asset('assets/images/blog/blog-1-1.jpg')); ?>" alt="">
                                <div class="blog-one__tags">
                                    <span>Car Showcase</span>
                                </div>
                            </div>
                            <div class="blog-one__date">
                                <p>10</p>
                                <span>Nov</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="<?php echo e(route('blog-details')); ?>">
                                        <span class="fas fa-user"></span>Admin
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('blog-details')); ?>">
                                        <span class="fas fa-comments"></span>Comment
                                    </a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="<?php echo e(route('blog-details')); ?>">Documents required for car
                                    rental services</a></h3>
                            <p class="blog-one__text">Car Is Where Early Adopters And Innovation Seekers Find Lively
                                Imaginative Tech.</p>
                            <a href="<?php echo e(route('blog-details')); ?>" class="blog-one__read-more">Read More <span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="<?php echo e(asset('assets/images/blog/blog-1-2.jpg')); ?>" alt="">
                                <div class="blog-one__tags">
                                    <span>Car Showcase</span>
                                </div>
                            </div>
                            <div class="blog-one__date">
                                <p>10</p>
                                <span>Nov</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="<?php echo e(route('blog-details')); ?>">
                                        <span class="fas fa-user"></span>Admin
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('blog-details')); ?>">
                                        <span class="fas fa-comments"></span>Comment
                                    </a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="<?php echo e(route('blog-details')); ?>">One of the most effective car
                                    rental
                                    blog topic</a></h3>
                            <p class="blog-one__text">Car Is Where Early Adopters And Innovation Seekers Find Lively
                                Imaginative Tech.</p>
                            <a href="<?php echo e(route('blog-details')); ?>" class="blog-one__read-more">Read More <span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="<?php echo e(asset('assets/images/blog/blog-1-3.jpg')); ?>" alt="">
                                <div class="blog-one__tags">
                                    <span>Car Showcase</span>
                                </div>
                            </div>
                            <div class="blog-one__date">
                                <p>10</p>
                                <span>Nov</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="<?php echo e(route('blog-details')); ?>">
                                        <span class="fas fa-user"></span>Admin
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('blog-details')); ?>">
                                        <span class="fas fa-comments"></span>Comment
                                    </a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="<?php echo e(route('blog-details')); ?>">Rental cost of sport and other
                                    cars</a></h3>
                            <p class="blog-one__text">Car Is Where Early Adopters And Innovation Seekers Find Lively
                                Imaginative Tech.</p>
                            <a href="<?php echo e(route('blog-details')); ?>" class="blog-one__read-more">Read More <span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="<?php echo e(asset('assets/images/blog/blog-1-4.jpg')); ?>" alt="">
                                <div class="blog-one__tags">
                                    <span>Car Showcase</span>
                                </div>
                            </div>
                            <div class="blog-one__date">
                                <p>10</p>
                                <span>Nov</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="<?php echo e(route('blog-details')); ?>">
                                        <span class="fas fa-user"></span>Admin
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('blog-details')); ?>">
                                        <span class="fas fa-comments"></span>Comment
                                    </a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="<?php echo e(route('blog-details')); ?>">Rental cars how to check
                                    driving
                                    fines?</a></h3>
                            <p class="blog-one__text">Car Is Where Early Adopters And Innovation Seekers Find Lively
                                Imaginative Tech.</p>
                            <a href="<?php echo e(route('blog-details')); ?>" class="blog-one__read-more">Read More <span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="<?php echo e(asset('assets/images/blog/blog-1-5.jpg')); ?>" alt="">
                                <div class="blog-one__tags">
                                    <span>Car Showcase</span>
                                </div>
                            </div>
                            <div class="blog-one__date">
                                <p>10</p>
                                <span>Nov</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="<?php echo e(route('blog-details')); ?>">
                                        <span class="fas fa-user"></span>Admin
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('blog-details')); ?>">
                                        <span class="fas fa-comments"></span>Comment
                                    </a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="<?php echo e(route('blog-details')); ?>">How to Rent a Car at the
                                    Airport
                                    Terminal?</a></h3>
                            <p class="blog-one__text">Car Is Where Early Adopters And Innovation Seekers Find Lively
                                Imaginative Tech.</p>
                            <a href="<?php echo e(route('blog-details')); ?>" class="blog-one__read-more">Read More <span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="<?php echo e(asset('assets/images/blog/blog-1-6.jpg')); ?>" alt="">
                                <div class="blog-one__tags">
                                    <span>Car Showcase</span>
                                </div>
                            </div>
                            <div class="blog-one__date">
                                <p>10</p>
                                <span>Nov</span>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li>
                                    <a href="<?php echo e(route('blog-details')); ?>">
                                        <span class="fas fa-user"></span>Admin
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('blog-details')); ?>">
                                        <span class="fas fa-comments"></span>Comment
                                    </a>
                                </li>
                            </ul>
                            <h3 class="blog-one__title"><a href="<?php echo e(route('blog-details')); ?>">Penalties for violating the
                                    rules in rental cars</a></h3>
                            <p class="blog-one__text">Car Is Where Early Adopters And Innovation Seekers Find Lively
                                Imaginative Tech.</p>
                            <a href="<?php echo e(route('blog-details')); ?>" class="blog-one__read-more">Read More <span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
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
    </section>
    <!--Blog Page End -->



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
<?php echo $__env->make('layouts.layoutCommon', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\pack-file laravel\Quarkcars\resources\views/pages/blog.blade.php ENDPATH**/ ?>