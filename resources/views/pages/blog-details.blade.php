@extends('layouts.layoutCommon')
@section('title', 'Blog Details')

@section('content')

    <x-pageHeader title="Blog Details" subtitle="Blog Details" />

    <!--Blog Details Start -->
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-details__left">
                        <div class="blog-details__img">
                            <img src="{{ asset('assets/images/blog/blog-details-img-1.jpg') }}" alt="">
                            <div class="blog-details__date">
                                <p>12<br>Nov</p>
                            </div>
                        </div>
                        <div class="blog-details__content">
                            <div class="blog-details__user-and-meta">
                                <div class="blog-details__user">
                                    <p><span class="icon-user"></span>By Admin</p>
                                </div>
                                <ul class="blog-details__meta list-unstyled">
                                    <li>
                                        <a href="#"><span class="icon-comments"></span>Comments (05)</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon-clock"></span>4 Min Read</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="blog-details__title">Where Early Adopters And Innovation Seekers Find Lively
                                Imaginative Tech.
                            </h3>
                            <p class="blog-details__text-1">Out enigma ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute inure dolor in
                                the reprehenderit in voluptate velit esse cillum dolore eu fugiat null pariatur.
                                Excepteur snit occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.</p>
                            <p class="blog-details__text-2">The wise man therefore always holds in these matters to
                                this principle of selection. He rejects pleasures to secure other greater pleasures,
                                or else he endures pains to avoid worse pains to the selection point.</p>
                            <div class="blog-details__author-box">
                                <h4 class="blog-details__author-text">“Sed do eiusmod tempor incididunt labore et
                                    dolore magna aliqua. Uther enim minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi aliquip commodo consequat. Duis aute irure dolor in reprehenderit
                                    in voluptate”</h4>
                                <p class="blog-details__author-name">Kane Williamson<span> / CEO</span></p>
                            </div>
                            <h3 class="blog-details__title-2">Rental cost of sport and other
                                cars</h3>
                            <p class="blog-details__text-3">Out enigma ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute inure dolor in
                                the reprehenderit in voluptate velit esse cillum dolore eu fugiat null pariatur.
                                Excepteur snit occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.</p>
                            <div class="blog-details__img-box">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="blog-details__img-box-img">
                                            <img src="{{ asset('assets/images/blog/blog-details-img-box-img-1.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="blog-details__img-box-img">
                                            <img src="{{ asset('assets/images/blog/blog-details-img-box-img-2.jpg') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-details__tag-and-share">
                                <div class="blog-details__tag">
                                    <h3 class="blog-details__tag-title">Tags :</h3>
                                    <ul class="blog-details__tag-list list-unstyled">
                                        <li>
                                            <a href="#">Tesla</a>
                                        </li>
                                        <li>
                                            <a href="#">Honda</a>
                                        </li>
                                        <li>
                                            <a href="#">Audi</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-details__share-box">
                                    <h3 class="blog-details__share-title">Share :</h3>
                                    <div class="blog-details__share">
                                        <a href="#"><span class="icon-facebook"></span></a>
                                        <a href="#"><span class="icon-instagram-1"></span></a>
                                        <a href="#"><span class="icon-instagram"></span></a>
                                        <a href="#"><span class="icon-instagram-2"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-one">
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="{{ asset('assets/images/blog/comment-1-1.jpg') }}" alt="">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Theresa Webb</h3>
                                        <span>02 June 2024 at 03:30 pm</span>
                                        <p>The wise man therefore always holds in these matters to this principle of
                                            selection. He rejects pleasures to secure other greater pleasures, or
                                            else he endures pains to avoid worse pains to the selection point. But
                                            in certain to all this circumstances</p>
                                        <div class="comment-one__btn-box">
                                            <a href="{{ route('blog-details') }}" class="comment-one__btn"><span
                                                    class="icon-share-alt"></span>Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="{{ asset('assets/images/blog/comment-1-2.jpg') }}" alt="">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Cameron Williamson</h3>
                                        <span>02 June 2024 at 03:30 pm</span>
                                        <p>The wise man therefore always holds in these matters to this principle of
                                            selection. He rejects pleasures to secure other greater pleasures, or
                                            else he endures pains to avoid worse pains to the selection point. But
                                            in certain to all this circumstances</p>
                                        <div class="comment-one__btn-box">
                                            <a href="{{ route('blog-details') }}" class="comment-one__btn"><span
                                                    class="icon-share-alt"></span>Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-form">
                                <h3 class="comment-form__title">Leave A Comment</h3>
                                <p class="comment-form__text">By using form u agree with the message sorage, you can
                                    contact us directly now</p>
                                <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated"
                                    novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Your Name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Your Email" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box text-message-box">
                                                <textarea name="message" placeholder="Write your messege"></textarea>
                                            </div>
                                            <div class="comment-form__btn-box">
                                                <button type="submit" class="thm-btn comment-form__btn">submit
                                                    now <span class="fas fa-arrow-right"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
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
    <!--Blog Details Start-->

    <!--Gallery One Start -->
    <section class="gallery-one">
        <div class="gallery-one__carousel owl-theme owl-carousel">
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-1(2).png') }}" alt="">
                        <a href="{{ route('car-subscription') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-2(2).png') }}" alt="">
                        <a href="{{ route('car-subscription') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-3(2).png') }}" alt="">
                        <a href="{{ route('cart') }}"><span class="fab fa-instagram"></span></a>
                    </div>
                </div>
            </div>
            <!--Gallery One Single End-->
            <!--Gallery One Single Start-->
            <div class="item">
                <div class="gallery-one__single">
                    <div class="gallery-one__img">
                        <img src="{{ asset('assets/images/gallery/gallery-1-4(2).png') }}" alt="">
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
                        <img src="{{ asset('assets/images/gallery/gallery-1-6(2).png') }}" alt="">
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