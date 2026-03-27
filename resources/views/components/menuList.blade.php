<ul class="main-menu__list">
    <li class=" megamenu">
        <a href="{{ route('index') }}">Home</a>
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
        <a href="{{ route('about') }}">About Us</a>
    </li>
    <li class="dropdown">
        <a href="#">Pages</a>
        <ul class="shadow-box">


            <li><a href="{{ route('services') }}">Services</a></li>



            <li><a href="{{ route('drivers') }}">Drivers</a></li>
            <li><a href="{{ route('driver-details') }}">Driver Details</a></li>
            <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
            <li><a href="{{ route('pricing') }}">Pricing</a></li>
            <li><a href="{{ route('faq') }}">FAQs</a></li>
            <li><a href="{{ route('404') }}">404 Error</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#">Cars</a>
        <ul class="shadow-box">
             <li><a href="{{ route('car-subscription') }}">Car Subscription</a></li>
            <li><a href="{{ route('self-drive-car') }}">Self Drive Car</a></li>
            <li><a href="{{ route('car-sharing') }}">Car Sharing</a></li>
            <li><a href="{{ route('taxi-services') }}">Taxi Service</a></li>
            <!-- <li><a href="{{ route('swift-vxi-details') }}">Car Listing Single</a></li> -->
        </ul>
    </li>
    <!-- <li class="dropdown">
        <a href="#">Shop</a>
        <ul class="shadow-box">
            <li><a href="{{ route('products') }}">Products</a></li>
            <li><a href="{{ route('product-details') }}">Product Details</a></li>
            <li><a href="{{ route('cart') }}">Cart</a></li>
            <li><a href="{{ route('checkout') }}">Checkout</a></li>
            <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
            <li><a href="{{ route('sign-up') }}">Sign Up</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
        </ul>
    </li> -->
    <li class="dropdown">
        <a href="#">Blog</a>
        <ul class="shadow-box">
            <li><a href="{{ route('blog') }}">Blog</a></li>
            <!-- <li><a href="{{ route('blog-standard') }}">Blog Standard</a></li>
            <li><a href="{{ route('blog-left-sidebar') }}">Blog Left Sidebar</a></li>
            <li><a href="{{ route('blog-right-sidebar') }}">Blog Right Sidebar</a></li> -->
            <li><a href="{{ route('blog-details') }}">Blog Details</a></li>
        </ul>
    </li>
    <li>
        <a href="{{ route('contact') }}">Contact</a>
    </li>
</ul>