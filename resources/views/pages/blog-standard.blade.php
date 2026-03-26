@extends('layouts.layoutCommon')
@section('title', 'Blog Standard')

@section('content')


    <x-pageHeader title="Blog Standard" subtitle="Blog Standard" />

    <!--Blog List Start -->
    <section class="blog-list">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-list__left">
                        <!--Blog List Single Start-->
                        <div class="blog-list__single">
                            <div class="blog-list__img">
                                <img src="{{ asset('assets/images/blog/blog-list-1-1.jpg') }}" alt="">
                                <div class="blog-list__date">
                                    <p>12<br>Nov</p>
                                </div>
                            </div>
                            <div class="blog-list__content">
                                <div class="blog-list__user-and-meta">
                                    <div class="blog-list__user">
                                        <p><span class="icon-user"></span>By Admin</p>
                                    </div>
                                    <ul class="blog-list__meta list-unstyled">
                                        <li>
                                            <a href="#"><span class="icon-comments"></span>Comments (05)</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-clock"></span>4 Min Read</a>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="blog-list__title"><a href="{{ route('blog-details') }}">Car service is essential
                                        for maintaining longevity of vehicle.</a></h3>
                                <p class="blog-list__text">Out enigma ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute inure dolor
                                    in the reprehenderit in voluptate velit esse cillum dolore eu fugiat null
                                    pariatur. Excepteur snit occaecat cupidatat non proident, sunt in culpa qui
                                    officia deserunt mollit anim id est laborum.</p>
                                <a href="{{ route('blog-details') }}" class="blog-list__read-more">Learn More<span
                                        class="icon-arrow-right"></span></a>
                            </div>
                        </div>
                        <!--Blog List Single End-->
                        <!--Blog List Single Start-->
                        <div class="blog-list__single">
                            <div class="blog-list__img">
                                <img src="{{ asset('assets/images/blog/blog-list-1-2.jpg') }}" alt="">
                                <div class="blog-list__date">
                                    <p>15<br>Aug</p>
                                </div>
                            </div>
                            <div class="blog-list__content">
                                <div class="blog-list__user-and-meta">
                                    <div class="blog-list__user">
                                        <p><span class="icon-user"></span>By Admin</p>
                                    </div>
                                    <ul class="blog-list__meta list-unstyled">
                                        <li>
                                            <a href="#"><span class="icon-comments"></span>Comments (05)</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-clock"></span>4 Min Read</a>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="blog-list__title"><a href="{{ route('blog-details') }}">experience freedom on
                                        our Gorent booking service</a></h3>
                                <p class="blog-list__text">Out enigma ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute inure dolor
                                    in the reprehenderit in voluptate velit esse cillum dolore eu fugiat null
                                    pariatur. Excepteur snit occaecat cupidatat non proident, sunt in culpa qui
                                    officia deserunt mollit anim id est laborum.</p>
                                <a href="{{ route('blog-details') }}" class="blog-list__read-more">Learn More<span
                                        class="icon-arrow-right"></span></a>
                            </div>
                        </div>
                        <!--Blog List Single End-->
                        <!--Blog List Single Start-->
                        <div class="blog-list__single">
                            <div class="blog-list__img">
                                <img src="{{ asset('assets/images/blog/blog-list-1-3.jpg') }}" alt="">
                                <div class="blog-list__date">
                                    <p>22<br>Feb</p>
                                </div>
                            </div>
                            <div class="blog-list__content">
                                <div class="blog-list__user-and-meta">
                                    <div class="blog-list__user">
                                        <p><span class="icon-user"></span>By Admin</p>
                                    </div>
                                    <ul class="blog-list__meta list-unstyled">
                                        <li>
                                            <a href="#"><span class="icon-comments"></span>Comments (05)</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-clock"></span>4 Min Read</a>
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="blog-list__title"><a href="{{ route('blog-details') }}">Committed to providing
                                        our
                                        customers with
                                        ultimate service.</a></h3>
                                <p class="blog-list__text">Out enigma ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute inure dolor
                                    in the reprehenderit in voluptate velit esse cillum dolore eu fugiat null
                                    pariatur. Excepteur snit occaecat cupidatat non proident, sunt in culpa qui
                                    officia deserunt mollit anim id est laborum.</p>
                                <a href="{{ route('blog-details') }}" class="blog-list__read-more">Learn More<span
                                        class="icon-arrow-right"></span></a>
                            </div>
                        </div>
                        <!--Blog List Single End-->
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

                <!--Start Sidebar-->
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
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
    <!--Blog List Start-->

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