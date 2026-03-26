<!--Page Header Start -->
<section class="page-header">
    <div class="page-header__bg"
        style="background-image: url('<?php echo e(url('assets/images/backgrounds/page-header-bg(1).jpg')); ?>');">
    </div>
    <div class="page-header__shape-1"
        style="background-image: url('<?php echo e(url('assets/images/shapes/page-header-shape-1(1).png')); ?>');"></div>
    <div class="container">
        <div class="page-header__inner">
            <h3><?php echo e($title ?? 'Welcome'); ?></h3>
            <div class="thm-breadcrumb__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
                    <li><span class="icon-arrow-left"></span></li>
                    <li><?php echo e($subtitle ?? 'Page Title'); ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Page Header End --><?php /**PATH D:\pack-file laravel\Quarkcars\resources\views/components/pageHeader.blade.php ENDPATH**/ ?>