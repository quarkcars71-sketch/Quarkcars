@extends('layouts.layoutCommon')
@section('title', 'Blog Right Sidebar')

@section('content')


    <x-pageHeader title="Blog Right Sidebar" subtitle="Blog Right Sidebar" />

    <!--Blog Right Sidebar Start -->
    <section class="blog-right-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="row">
                        <!--Blog One Single Start-->
                        <div class="col-xl-6 col-lg-6">
                            <div class="blog-one__single">
                                <div class="blog-one__img-box">
                                    <div class="blog-one__img">
                                        <img src="{{ asset('assets/images/blog/blog-1-1.jpg') }}" alt="">
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
                                            <a href="{{ route('blog-details') }}">
                                                <span class="fas fa-user"></span>Admin
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog-details') }}">
                                                <span class="fas fa-comments"></span>Comment
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Documents required for
                                            car
                                            rental services</a></h3>
                                    <p class="blog-one__text">Car Is Where Early Adopters And Innovation Seekers
                                        Find Lively
                                        Imaginative Tech.</p>
                                    <a href="{{ route('blog-details') }}" class="blog-one__read-more">Read More <span
                                            class="fas fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <!--Blog One Single End-->
                        <!--Blog One Single Start-->
                        <div class="col-xl-6 col-lg-6">
                            <div class="blog-one__single">
                                <div class="blog-one__img-box">
                                    <div class="blog-one__img">
                                        <img src="{{ asset('assets/images/blog/blog-1-2.jpg') }}" alt="">
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
                                            <a href="{{ route('blog-details') }}">
                                                <span class="fas fa-user"></span>Admin
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog-details') }}">
                                                <span class="fas fa-comments"></span>Comment
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">One of the most
                                            effective car
                                            rental
                                            blog topic</a></h3>
                                    <p class="blog-one__text">Car Is Where Early Adopters And Innovation Seekers
                                        Find Lively
                                        Imaginative Tech.</p>
                                    <a href="{{ route('blog-details') }}" class="blog-one__read-more">Read More <span
                                            class="fas fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <!--Blog One Single End-->
                        <!--Blog One Single Start-->
                        <div class="col-xl-6 col-lg-6">
                            <div class="blog-one__single">
                                <div class="blog-one__img-box">
                                    <div class="blog-one__img">
                                        <img src="{{ asset('assets/images/blog/blog-1-3.jpg') }}" alt="">
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
                                            <a href="{{ route('blog-details') }}">
                                                <span class="fas fa-user"></span>Admin
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog-details') }}">
                                                <span class="fas fa-comments"></span>Comment
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Rental cost of sport
                                            and
                                            other
                                            cars</a></h3>
                                    <p class="blog-one__text">Car Is Where Early Adopters And Innovation Seekers
                                        Find Lively
                                        Imaginative Tech.</p>
                                    <a href="{{ route('blog-details') }}" class="blog-one__read-more">Read More <span
                                            class="fas fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <!--Blog One Single End-->
                        <!--Blog One Single Start-->
                        <div class="col-xl-6 col-lg-6">
                            <div class="blog-one__single">
                                <div class="blog-one__img-box">
                                    <div class="blog-one__img">
                                        <img src="{{ asset('assets/images/blog/blog-1-4.jpg') }}" alt="">
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
                                            <a href="{{ route('blog-details') }}">
                                                <span class="fas fa-user"></span>Admin
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog-details') }}">
                                                <span class="fas fa-comments"></span>Comment
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Rental cars how to
                                            check
                                            driving
                                            fines?</a></h3>
                                    <p class="blog-one__text">Car Is Where Early Adopters And Innovation Seekers
                                        Find Lively
                                        Imaginative Tech.</p>
                                    <a href="{{ route('blog-details') }}" class="blog-one__read-more">Read More <span
                                            class="fas fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <!--Blog One Single End-->
                        <!--Blog One Single Start-->
                        <div class="col-xl-6 col-lg-6">
                            <div class="blog-one__single">
                                <div class="blog-one__img-box">
                                    <div class="blog-one__img">
                                        <img src="{{ asset('assets/images/blog/blog-1-5.jpg') }}" alt="">
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
                                            <a href="{{ route('blog-details') }}">
                                                <span class="fas fa-user"></span>Admin
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog-details') }}">
                                                <span class="fas fa-comments"></span>Comment
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">How to Rent a Car at
                                            the
                                            Airport
                                            Terminal?</a></h3>
                                    <p class="blog-one__text">Car Is Where Early Adopters And Innovation Seekers
                                        Find Lively
                                        Imaginative Tech.</p>
                                    <a href="{{ route('blog-details') }}" class="blog-one__read-more">Read More <span
                                            class="fas fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <!--Blog One Single End-->
                        <!--Blog One Single Start-->
                        <div class="col-xl-6 col-lg-6">
                            <div class="blog-one__single">
                                <div class="blog-one__img-box">
                                    <div class="blog-one__img">
                                        <img src="{{ asset('assets/images/blog/blog-1-6.jpg') }}" alt="">
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
                                            <a href="{{ route('blog-details') }}">
                                                <span class="fas fa-user"></span>Admin
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog-details') }}">
                                                <span class="fas fa-comments"></span>Comment
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Penalties for
                                            violating
                                            the
                                            rules in rental cars</a></h3>
                                    <p class="blog-one__text">Car Is Where Early Adopters And Innovation Seekers
                                        Find Lively
                                        Imaginative Tech.</p>
                                    <a href="{{ route('blog-details') }}" class="blog-one__read-more">Read More <span
                                            class="fas fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <!--Blog One Single End-->
                        <!--Blog One Single Start-->
                        <div class="col-xl-6 col-lg-6">
                            <div class="blog-one__single">
                                <div class="blog-one__img-box">
                                    <div class="blog-one__img">
                                        <img src="{{ asset('assets/images/blog/blog-1-1.jpg') }}" alt="">
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
                                            <a href="{{ route('blog-details') }}">
                                                <span class="fas fa-user"></span>Admin
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog-details') }}">
                                                <span class="fas fa-comments"></span>Comment
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">Documents required for
                                            car
                                            rental services</a></h3>
                                    <p class="blog-one__text">Car Is Where Early Adopters And Innovation Seekers
                                        Find Lively
                                        Imaginative Tech.</p>
                                    <a href="{{ route('blog-details') }}" class="blog-one__read-more">Read More <span
                                            class="fas fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <!--Blog One Single End-->
                        <!--Blog One Single Start-->
                        <div class="col-xl-6 col-lg-6">
                            <div class="blog-one__single">
                                <div class="blog-one__img-box">
                                    <div class="blog-one__img">
                                        <img src="{{ asset('assets/images/blog/blog-1-2.jpg') }}" alt="">
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
                                            <a href="{{ route('blog-details') }}">
                                                <span class="fas fa-user"></span>Admin
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('blog-details') }}">
                                                <span class="fas fa-comments"></span>Comment
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-one__title"><a href="{{ route('blog-details') }}">One of the most
                                            effective car
                                            rental
                                            blog topic</a></h3>
                                    <p class="blog-one__text">Car Is Where Early Adopters And Innovation Seekers
                                        Find Lively
                                        Imaginative Tech.</p>
                                    <a href="{{ route('blog-details') }}" class="blog-one__read-more">Read More <span
                                            class="fas fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                        <!--Blog One Single End-->
                    </div>
                </div>
                <!--Start Sidebar-->
                <div class="col-xl-4">
                    <div class="sidebar sidebar--three">
                        <!--Start Sidebar Single-->
                        <div class="sidebar__single sidebar__search wow fadeInUp" data-wow-delay=".1s">
                            <form action="#" class="sidebar__search-form">
                                <input type="search" placeholder="Search...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!--End Sidebar Single-->


                        <!--Start Sidebar Single-->
                        <div class="sidebar__single sidebar__category wow fadeInUp" data-wow-delay=".1s">
                            <h3 class="sidebar__title">Categories</h3>
                            <ul class="sidebar__category-list list-unstyled">
                                <li><a href="#">
                                        Corporate car rental <span>(12)</span></a></li>
                                <li class="active"><a href="#">Parallax Effect
                                        <span>(15)</span></a></li>
                                <li><a href="#">Car rental with driver <span>(08)</span></a></li>
                                <li><a href="#">
                                        Airport transfer <span>(20)</span></a></li>
                                <li><a href="#">
                                        Fleet leasing <span>(14)</span></a></li>
                                <li><a href="#">
                                        Pick-Up Locations <span>(05)</span></a></li>
                            </ul>
                        </div>
                        <!--End Sidebar Single-->

                        <!--Start Sidebar Single-->
                        <div class="sidebar__single sidebar__post wow fadeInUp" data-wow-delay=".1s">
                            <h3 class="sidebar__title">Recent Post</h3>
                            <div class="sidebar__post-box">
                                <div class="sidebar__post-single">
                                    <div class="sidebar-post__img">
                                        <img src="{{ asset('assets/images/blog/recent-post-img-1.jpg') }}" alt="">
                                    </div>
                                    <div class="sidebar__post-content-box">
                                        <h3><a href="#">Regular maintenance cleaning or replacing air filters</a>
                                        </h3>
                                    </div>
                                </div>

                                <div class="sidebar__post-single">
                                    <div class="sidebar-post__img">
                                        <img src="{{ asset('assets/images/blog/recent-post-img-2.jpg') }}" alt="">
                                    </div>
                                    <div class="sidebar__post-content-box">
                                        <h3><a href="#">Water leakage can be due to a clogged drain line repaire</a>
                                        </h3>
                                    </div>
                                </div>

                                <div class="sidebar__post-single">
                                    <div class="sidebar-post__img">
                                        <img src="{{ asset('assets/images/blog/recent-post-img-3.jpg') }}" alt="">
                                    </div>
                                    <div class="sidebar__post-content-box">
                                        <h3><a href="#">Revitalising your people in to a retail downturn.</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Sidebar Single-->

                        <!--Start Sidebar Single-->
                        <div class="sidebar__single sidebar__tags wow fadeInUp" data-wow-delay=".1s">
                            <h3 class="sidebar__title">Tags Cloud</h3>
                            <ul class="sidebar__tags-list clearfix list-unstyled">
                                <li><a href="#">Growth Accelerator</a></li>
                                <li><a href="#">Management</a></li>
                                <li><a href="#">Analysis</a></li>
                                <li><a href="#">Planning</a></li>
                                <li><a href="#">Solution</a></li>
                                <li><a href="#">Advisory Service</a></li>
                            </ul>
                        </div>
                        <!--End Sidebar Single-->

                    </div>
                </div>
                <!--End Sidebar-->
            </div>
        </div>
    </section>
    <!--Blog Left Sidebar End -->



    <!--Gallery One Start -->
    <section class="gallery-one">
        <div class="gallery-one__carousel owl-theme owl-carousel">
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-1(1).jpg') }}" alt="">
                        <a href="{{ route('car-subscription') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-2(1).jpg') }}" alt="">
                        <a href="{{ route('car-subscription') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-3(1).jpg') }}" alt="">
                        <a href="{{ route('cart') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-4(1).jpg') }}" alt="">
                        <a href="{{ route('cart') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-5(1).jpg') }}" alt="">
                        <a href="{{ route('cart') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-6(1).jpg') }}" alt="">
                        <a href="{{ route('cart') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
        </div>
    </section>
    <!--Gallery One End -->

    <x-footer_style_one />
@endsection