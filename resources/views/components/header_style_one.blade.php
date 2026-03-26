<header class="main-header">
    <div class="main-menu__top">
        <div class="main-menu__top-inner">
            <ul class="list-unstyled main-menu__contact-list">
                <li>
                    <div class="icon">
                        <i class="icon-call-2"></i>
                    </div>
                    <div class="text">
                        <p><a href="tel:918769639911">+91 8769639911</a>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <i class="icon-envelope-2"></i>
                    </div>
                    <div class="text">
                        <p><a href="mailto:support@quarkcars.com">support@quarkcars.com</a>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="icon">
                        <i class="icon-pin-2"></i>
                    </div>
                    <div class="text">
                        <p>F-10 2nd Floor R-tech Capital Mall, Jaipur, Rajasthan, India</p>
                    </div>
                </li>
            </ul>
            <div class="main-menu__top-right">
                <div class="main-menu__top-login-reg-box">
                    <a href="{{ route('login') }}">Login</a>
                    <p>or</p>
                    <a href="{{ route('sign-up') }}">Register</a>
                </div>
                <div class="main-menu__social">
                    <a href="https://www.facebook.com/people/Quarkcars-Self-Drive-Rental/100087919809854/?mibextid=2JQ9oc" target="_blank"><i class="icon-facebook"></i></a>
                    <a href="https://twitter.com/quarkcars?t=3EkNp5XO5y-iWU5RpfhrUg&s=09" target="_blank"><i class="icon-twitter"></i></a>
                    <a href="#" target="_blank"><i class="icon-instagram"></i></a>
                    <a href="https://www.youtube.com/@quarkcars304" target="_blank"><i class="icon-youtube"></i></a>
                    <a href="https://www.linkedin.com/in/quarkcars-mobility-969a25263/" target="_blank"><i class="icon-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-menu">
        <div class="main-menu__wrapper">
            <div class="main-menu__wrapper-inner">
                <div class="main-menu__left">
                    <div class="main-menu__logo">
                        <a href="{{ route('index') }}"><img src="{{ asset('assets/images/resources/logo-1(1).png') }}"
                                alt=""></a>
                    </div>
                </div>
                <div class="main-menu__middle-box">
                    <div class="main-menu__main-menu-box">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <x-menuList />
                    </div>
                    <div class="main-menu__search-cart-box">
                        <div class="main-menu__search-box">
                            <a href="#" class="main-menu__search search-toggler icon-search"></a>
                        </div>
                        <div class="main-menu__cart-box">
                            <a href="{{ route('cart') }}" class="main-menu__cart">
                                <span class="far fa-shopping-cart"></span>
                                <span class="main-menu__cart-count">02</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="main-menu__right">
                    <div class="main-menu__call">
                        <div class="main-menu__call-icon">
                            <i class="icon-call-3"></i>
                        </div>
                        <div class="main-menu__call-content">
                            <p class="main-menu__call-sub-title">Call Anytime</p>
                            <h5 class="main-menu__call-number"><a href="tel:918769639911">+91-8769639911</a>
                            </h5>
                        </div>
                    </div>
                    <div class="main-menu__nav-sidebar-icon">
                        <a class="navSidebar-button" href="#">
                            <span class="icon-dots-menu-one"></span>
                            <span class="icon-dots-menu-two"></span>
                            <span class="icon-dots-menu-three"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
