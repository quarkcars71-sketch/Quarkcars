<?php $__env->startSection('title', '404 Error'); ?>

<?php $__env->startSection('content'); ?>

    <?php if (isset($component)) { $__componentOriginalf5606eea0f9c25be0d1717ad67ba232c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5606eea0f9c25be0d1717ad67ba232c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pageHeader','data' => ['title' => '404 Error','subtitle' => '404 Error']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('pageHeader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => '404 Error','subtitle' => '404 Error']); ?>
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

    <!--Start Error Page-->
    <section class="error-page">
        <div class="container">
            <div class="error-page__inner text-center">
                <div class="error-page__img float-bob-y">
                    <img src="<?php echo e(asset('assets/images/resources/error-page-img1.png')); ?>" alt="">
                </div>

                <div class="error-page__content">
                    <h2>Oops! Page Not Found!</h2>
                    <p>The page you are looking for does not exist. It might have been moved or deleted.</p>
                    <div class="btn-box">
                        <a href="<?php echo e(route('index')); ?>" class="thm-btn">Back To Home <span class="fas fa-arrow-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Error Page-->
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

<?php echo $__env->make('layouts.layoutCommon', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\pack-file laravel\Quarkcars\resources\views/pages/404.blade.php ENDPATH**/ ?>