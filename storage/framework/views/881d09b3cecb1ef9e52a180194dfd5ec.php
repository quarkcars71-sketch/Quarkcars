<ul class="main-menu__list">
    <li class=" megamenu">
        <a href="<?php echo e(route('index')); ?>">Home</a>
        <ul>
            <li>
                <section class="home-showcase">
                    <div class="container">
                       

                    </div><!-- /.container -->
                </section>
            </li>
        </ul>
    </li>
    <li>
        <a href="<?php echo e(route('about')); ?>">About Us</a>
    </li>
    <li class="dropdown">
        <a href="#">Pages</a>
        <ul class="shadow-box">


            <li><a href="<?php echo e(route('services')); ?>">Services</a></li>



            <li><a href="<?php echo e(route('drivers')); ?>">Drivers</a></li>
            <li><a href="<?php echo e(route('driver-details')); ?>">Driver Details</a></li>
            <li><a href="<?php echo e(route('testimonials')); ?>">Testimonials</a></li>
            <li><a href="<?php echo e(route('pricing')); ?>">Pricing</a></li>
            <li><a href="<?php echo e(route('faq')); ?>">FAQs</a></li>
            <li><a href="<?php echo e(route('404')); ?>">404 Error</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#">Cars</a>
        <ul class="shadow-box">
             <li><a href="<?php echo e(route('car-subscription')); ?>">Car Subscription</a></li>
            <li><a href="<?php echo e(route('self-drive-car')); ?>">Self Drive Car</a></li>
            <li><a href="<?php echo e(route('car-sharing')); ?>">Car Sharing</a></li>
            <li><a href="<?php echo e(route('taxi-services')); ?>">Taxi Service</a></li>
            <!-- <li><a href="<?php echo e(route('listing-single')); ?>">Car Listing Single</a></li> -->
        </ul>
    </li>
    <li class="dropdown">
        <a href="#">Shop</a>
        <ul class="shadow-box">
            <li><a href="<?php echo e(route('products')); ?>">Products</a></li>
            <li><a href="<?php echo e(route('product-details')); ?>">Product Details</a></li>
            <li><a href="<?php echo e(route('cart')); ?>">Cart</a></li>
            <li><a href="<?php echo e(route('checkout')); ?>">Checkout</a></li>
            <li><a href="<?php echo e(route('wishlist')); ?>">Wishlist</a></li>
            <li><a href="<?php echo e(route('sign-up')); ?>">Sign Up</a></li>
            <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#">Blog</a>
        <ul class="shadow-box">
            <li><a href="<?php echo e(route('blog')); ?>">Blog</a></li>
            <li><a href="<?php echo e(route('blog-standard')); ?>">Blog Standard</a></li>
            <li><a href="<?php echo e(route('blog-left-sidebar')); ?>">Blog Left Sidebar</a></li>
            <li><a href="<?php echo e(route('blog-right-sidebar')); ?>">Blog Right Sidebar</a></li>
            <li><a href="<?php echo e(route('blog-details')); ?>">Blog Details</a></li>
        </ul>
    </li>
    <li>
        <a href="<?php echo e(route('contact')); ?>">Contact</a>
    </li>
</ul><?php /**PATH D:\pack-file laravel\Quarkcars\resources\views/components/menuList.blade.php ENDPATH**/ ?>