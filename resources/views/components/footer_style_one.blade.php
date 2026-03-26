<!--Site Footer Start-->
<footer class="site-footer">
    <!-- <div class="site-footer__bg"
        style="background-image: url({{ asset('assets/images/backgrounds/site-footer-bg.jpg') }});">
    </div> -->
    <div class="site-footer__top">
        <div class="container">
            <div class="site-footer__top-inner">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__about">
                            <div class="footer-widget__about-logo">
                                <a href="{{ route('index') }}"><img
                                        src="{{ asset('assets/images/resources/footer-logo(3).png') }}" alt=""></a>
                            </div>
                            <p class="footer-widget__about-text">Cars integrate advanced technology and innovation to deliver a modern, efficient, and reliable driving experience.</p>
                            <form class="footer-widget__form">
                                <div class="footer-widget__input">
                                    <input type="email" placeholder="Your Email">
                                </div>
                                <button type="submit" class="footer-widget__btn"><i
                                        class="icon-right-arrow"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__links">
                            <h4 class="footer-widget__title">Quick links</h4>
                            <ul class="footer-widget__links-list list-unstyled">
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('services') }}">Our Services</a></li>
                                <li><a href="{{ route('drivers') }}">Our Drivers</a></li>
                                <li><a href="{{ route('blog') }}">Our Blog</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="footer-widget__services">
                            <h4 class="footer-widget__title">Services</h4>
                            <ul class="footer-widget__links-list list-unstyled">
                                <li><a href="{{ route('self-drive-car') }}">Self Drive Car</a></li>
                                <li><a href="{{ route('car-sharing') }}">Car Sharing</a></li>
                                <li><a href="{{ route('cars') }}">Car Subscription</a></li>
                                <li><a href="{{ route('self-drive-car') }}">Taxi Services</a></li>
                                <!-- <li><a href="{{ route('listing-single') }}">Dash Transport</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__contact">
                            <h3 class="footer-widget__title">Contact Us</h3>
                            <ul class="footer-widget__contact-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <p>F-10 2nd Floor R-tech Capital Hi Street Mall, Jaipur, Shri Kishanpura,
                                        <br> Rajasthan 302017, India
                                    </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-call"></span>
                                    </div>
                                    <p><a href="tel:918769639911">+91 8769639911</a></p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-envelope"></span>
                                    </div>
                                    <p><a href="mailto:info@quarkcars.com">info@quarkcars.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <div class="site-footer__copyright">
                            <p class="site-footer__copyright-text"> <?php echo date('Y'); ?> Quarkcars By <a
                                    href="https://themeforest.net/user/webstall">Webstall.</a> All
                                Rights
                                Reserved.</p>
                        </div>
                        <div class="site-footer__bottom-menu-box">
                            <ul class="list-unstyled site-footer__bottom-menu">
                                <li><a href="{{ route('terms-of-service') }}">Terms of Service</a></li>
                                <li><a href="{{ route('privacy-policy') }}">Privacy policy</a></li>
                                <li><a href="{{ route('cancellation-policy') }}">Cancellation Policy</a></li>
                                <li><a href="{{ route('customer-agreement') }}">Customer agreement</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Site Footer End-->




</div><!-- /.page-wrapper -->