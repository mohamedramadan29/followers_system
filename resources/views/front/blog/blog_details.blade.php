@extends('front.layouts.master')
@section('title', ' تفاصيل التدوينة ')
@section('content')
    <!-- ======================= Blog Details Section Start ========================= -->
    <section class="blog-details padding-y-120 position-relative overflow-hidden">
        <div class="container container-two">
            <!-- blog details top Start -->
            <div class="blog-details-top mb-64">
                <div class="blog-details-top__info flx-align gap-3 mb-4">
                    {{-- <div class="blog-details-top__thumb flx-align gap-2">
                        <img src="{{ asset('assets/front/') }}/images/thumbs/blog-details-user.png" alt="">
                        <span class="text-heading fw-500">Michel Smith</span>
                    </div> --}}
                    <span class="blog-details-top__date flx-align gap-2">
                        <img src="{{ asset('assets/front/') }}/images/icons/clock.svg" alt="">
                        25 Jan 2024
                    </span>
                </div>
                <h2 class="blog-details-top__title mb-4 text-capitalize">How to hire a right business executive for
                    your company</h2>
                <p class="blog-details-top__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit proin mi
                    pellentesque lorem turpis feugiat non sed sed sed aliquam lectus sodales gravida turpis maassa odio
                    faucibus accumsan.</p>
            </div>
            <!-- blog details top End -->
            <div class="row gy-4">
                <div class="col-lg-8 pe-lg-5">
                    <!-- blog details content Start -->
                    <div class="blog-details-content">
                        <div class="blog-details-content__thumb mb-32">
                            <img src="{{ asset('assets/front/') }}/images/thumbs/blog-details-thumb1.png" alt="">
                        </div>
                        <p class="blog-details-content__desc mb-40">Design and development may seem like two separate
                            worlds, but they can work together seamlessly to create stunning and functional software. In
                            this post, we'll explore the benefits of integrating design and development early on in a
                            project.</p>

                        <h4 class="blog-details-content__title mb-24">Interview multiple candidates</h4>
                        <p class="blog-details-content__desc mb-40">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit proin mi pellentesque lorem turpis feugiat non sed sed sed aliquam lectus sodales
                            gravida turpis maassa.</p>

                        <div class="blog-details-content__thumbs mb-40">
                            <div class="row gy-4">
                                <div class="col-sm-5 col-6">
                                    <div class="blog-details-content__thumb">
                                        <img src="{{ asset('assets/front/') }}/images/thumbs/blog-details-thumb2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-7 col-6">
                                    <div class="blog-details-content__thumb">
                                        <img src="{{ asset('assets/front/') }}/images/thumbs/blog-details-thumb3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h5 class="blog-details-content__title mb-3">Search for the right experience</h5>
                        <p class="blog-details-content__desc mb-32">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit proin mi pellentesque lorem turpis feugiat non sed sed sed aliquam lectus sodales
                            gravida turpis maassa odio. we'll explore the importance of design in the software
                            development process and how it can lead to more successful projects.</p>
                        <p class="blog-details-content__desc mb-24">Lorem ipsum dolor sit amet consectetur. Ipsum vitae
                            tincidunt adipiscing sed tellus nulla sit ultrices. Arcu maecenas quam iaculis ullamcorper
                            id posuere. Leo congue nulla quam pharetra. Pellentesque morbi dictumst congue risus luctus.
                        </p>


                        <ul class="product-list mb-40">
                            <li class="product-list__item font-18 fw-500 text-heading">Morbi dictumst congue risus
                                luctus</li>
                            <li class="product-list__item font-18 fw-500 text-heading">Porttitor nibh est vulputate
                                vitae sem vitae.</li>
                            <li class="product-list__item font-18 fw-500 text-heading">Amet tellus nisl risus lorem
                                vulputate velit eget.</li>
                            <li class="product-list__item font-18 fw-500 text-heading">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit.</li>
                        </ul>

                        <!-- Quote Text Start -->
                        <div class="quote-text mb-40">
                            <img src="{{ asset('assets/front/') }}/images/icons/quote-icon.svg" alt="" class="quote-text__icon">
                            <p class="quote-text__desc mb-3 font-20 fw-500 text-heading">“Through their vision,
                                determination, and exacting standards, the winning young developers inspire not only
                                their peers in the Apple developer.</p>
                            <h6 class="quote-text__name">Esabela Marun</h6>
                        </div>
                        <!-- Quote Text Ebd -->

                        <h5 class="blog-details-content__title mb-3">Once you hire them, give them access for all tools
                            & resources for success</h5>
                        <p class="blog-details-content__desc mb-40">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit ut suspendisse convallis enim tincidunt nunc condimentum facilisi accumsan tempor
                            donec.</p>


                        <!-- Post Tag & Share Start -->
                        <div class="flx-between gap-2 mb-40 mt-40">
                            <div class="socail-share flx-align gap-3">
                                <span class="socail-share__text text-heading fw-500"> مشاركة المقال :  </span>
                                <ul class="social-icon-list colorful-style">
                                    <li class="social-icon-list__item">
                                        <a href="https://www.facebook.com/"
                                            class="social-icon-list__link text-heading font-16 flex-center"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="social-icon-list__item">
                                        <a href="https://www.twitter.com/"
                                            class="social-icon-list__link text-heading font-16 flex-center"> <i
                                                class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="social-icon-list__item">
                                        <a href="https://www.google.com/"
                                            class="social-icon-list__link text-heading font-16 flex-center"> <i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Post Tag & Share End -->


                    </div>
                    <!-- blog details content End-->
                </div>
                <div class="col-lg-4">
                    <!-- blog Sidebar Start -->
                    <div class="common-sidebar-wrapper">
                        {{-- <div class="common-sidebar p-0">
                            <form action="#" autocomplete="off">
                                <div class="search-box w-100">
                                    <input type="text" class="common-input border-0" placeholder="Type here...">
                                    <button type="submit" class="icon line-height-1 rounded-icon white-version">
                                        <img src="{{ asset('assets/front/') }}/images/icons/search-dark.svg" alt="">
                                    </button>
                                    <button type="submit" class="icon line-height-1 rounded-icon dark-version">
                                        <img src="{{ asset('assets/front/') }}/images/icons/search-dark-white.svg" alt="">
                                    </button>
                                </div>
                            </form>
                        </div> --}}

                        <div class="common-sidebar">
                            <h6 class="common-sidebar__title"> احدث المقالات  </h6>
                            <div class="latest-blog">
                                <div class="latest-blog__thumb">
                                    <a href="blog-details.html"> <img src="{{ asset('assets/front/') }}/images/thumbs/latest-blog1.png"
                                            class="cover-img" alt=""></a>
                                </div>
                                <div class="latest-blog__content">
                                    <span class="latest-blog__date font-14 mb-2">January 15, 2024</span>
                                    <h6 class="latest-blog__title fw-500 font-body font-16">
                                        <a href="blog-details.html">There are many variations of business
                                            consulting.</a>
                                    </h6>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="common-sidebar">
                            <h6 class="common-sidebar__title"> Categories </h6>
                            <ul class="category-list">
                                <li class="category-list__item">
                                    <a href="blog.html"
                                        class="category-list__link flx-align flex-nowrap gap-2 text-body hover-text-main">
                                        <span class="icon font-12"> <i class="fas fa-chevron-right"></i></span>
                                        <span class="text">WordPress (12)</span>
                                    </a>
                                </li>
                                <li class="category-list__item">
                                    <a href="blog.html"
                                        class="category-list__link flx-align flex-nowrap gap-2 text-body hover-text-main">
                                        <span class="icon font-12"> <i class="fas fa-chevron-right"></i></span>
                                        <span class="text">App & Saas (6)</span>
                                    </a>
                                </li>
                                <li class="category-list__item">
                                    <a href="blog.html"
                                        class="category-list__link flx-align flex-nowrap gap-2 text-body hover-text-main">
                                        <span class="icon font-12"> <i class="fas fa-chevron-right"></i></span>
                                        <span class="text">Web Development (6)</span>
                                    </a>
                                </li>
                                <li class="category-list__item">
                                    <a href="blog.html"
                                        class="category-list__link flx-align flex-nowrap gap-2 text-body hover-text-main">
                                        <span class="icon font-12"> <i class="fas fa-chevron-right"></i></span>
                                        <span class="text">Graphics (6)</span>
                                    </a>
                                </li>
                                <li class="category-list__item">
                                    <a href="blog.html"
                                        class="category-list__link flx-align flex-nowrap gap-2 text-body hover-text-main">
                                        <span class="icon font-12"> <i class="fas fa-chevron-right"></i></span>
                                        <span class="text">IOS/Android Design (6)</span>
                                    </a>
                                </li>
                                <li class="category-list__item">
                                    <a href="blog.html"
                                        class="category-list__link flx-align flex-nowrap gap-2 text-body hover-text-main">
                                        <span class="icon font-12"> <i class="fas fa-chevron-right"></i></span>
                                        <span class="text">Web Design (6)</span>
                                    </a>
                                </li>
                            </ul>
                        </div> --}}

                    </div>
                    <!-- blog Sidebar End-->
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Blog Details Section End ========================= -->

    <!-- =========================== Article Section Start ============================ -->
    <section class="article padding-y-120 section-bg">
        <div class="container container-two">
            <div class="section-heading style-left style-flex flx-between align-items-end gap-3">
                <div class="section-heading__inner">
                    <h3 class="section-heading__title">Browse all latest blogs and articles</h3>
                </div>
                <a href="blog.html" class="btn btn-outline-light btn-lg pill">Browse All Articles</a>
            </div>
            <div class="article-item-wrapper">
                <div class="article-item">
                    <div class="article-item__inner d-flex position-relative">
                        <div class="article-item__start">
                            <div class="user-info">
                                <div class="user-info__thumb">
                                    <img src="{{ asset('assets/front/') }}/images/thumbs/user-info-img1.png" alt="">
                                </div>
                                <span class="user-info__text mt-2 mb-1 font-14 text-heading">Posted by</span>
                                <h6 class="user-info__name font-16 font-body fw-600 mb-0">
                                    Ralph Edwards
                                </h6>
                            </div>
                        </div>
                        <div class="article-item__center d-flex align-items-center">
                            <div class="article-item__content">
                                <div class="article-item__top flx-align">
                                    <a href="blog.html" class="article-item__tag font-14">Startup</a>
                                    <a href="blog.html" class="article-item__tag font-14">Marketing</a>
                                    <span class="text-heading font-16 fw-500">June 24, 2024</span>
                                </div>
                                <h4 class="article-item__title mb-3">
                                    <a href="blog-details.html" class="link"> Data-Driven Insights Unlock The Hidden
                                        Potential</a>
                                </h4>
                                <p class="article-item__desc">Etiam id euismod odio. Ut euismod sem a lacus ringill a
                                    hendrerit. facilisi orbi a arcu turpis...</p>
                            </div>

                            <div class="article-item__thumb">
                                <img src="{{ asset('assets/front/') }}/images/thumbs/blog1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="article-item__end flex-shrink-0">
                        <a href="blog-details.html" class="btn-simple">Read More <span class="icon font-26"><i
                                    class="las la-arrow-right"></i></span> </a>
                    </div>
                </div>
                <div class="article-item">
                    <div class="article-item__inner d-flex position-relative">
                        <div class="article-item__start">
                            <div class="user-info">
                                <div class="user-info__thumb">
                                    <img src="{{ asset('assets/front/') }}/images/thumbs/user-info-img2.png" alt="">
                                </div>
                                <span class="user-info__text mt-2 mb-1 font-14 text-heading">Posted by</span>
                                <h6 class="user-info__name font-16 font-body fw-600 mb-0">
                                    Jacob Jones
                                </h6>
                            </div>
                        </div>
                        <div class="article-item__center d-flex align-items-center">
                            <div class="article-item__content">
                                <div class="article-item__top flx-align">
                                    <a href="blog.html" class="article-item__tag font-14">Startup</a>
                                    <a href="blog.html" class="article-item__tag font-14">Marketing</a>
                                    <span class="text-heading font-16 fw-500">June 24, 2024</span>
                                </div>
                                <h4 class="article-item__title mb-3">
                                    <a href="blog-details.html" class="link">we offer best training for individuals
                                        and teams</a>
                                </h4>
                                <p class="article-item__desc">Etiam id euismod odio. Ut euismod sem a lacus ringill a
                                    hendrerit. facilisi orbi a arcu turpis...</p>
                            </div>

                            <div class="article-item__thumb">
                                <img src="{{ asset('assets/front/') }}/images/thumbs/blog2.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="article-item__end flex-shrink-0">
                        <a href="blog-details.html" class="btn-simple">Read More <span class="icon font-26"><i
                                    class="las la-arrow-right"></i></span> </a>
                    </div>
                </div>
                <div class="article-item">
                    <div class="article-item__inner d-flex position-relative">
                        <div class="article-item__start">
                            <div class="user-info">
                                <div class="user-info__thumb">
                                    <img src="{{ asset('assets/front/') }}/images/thumbs/user-info-img1.png" alt="">
                                </div>
                                <span class="user-info__text mt-2 mb-1 font-14 text-heading">Posted by</span>
                                <h6 class="user-info__name font-16 font-body fw-600 mb-0">
                                    Jenny Wilson
                                </h6>
                            </div>
                        </div>
                        <div class="article-item__center d-flex align-items-center">
                            <div class="article-item__content">
                                <div class="article-item__top flx-align">
                                    <a href="blog.html" class="article-item__tag font-14">Startup</a>
                                    <a href="blog.html" class="article-item__tag font-14">Marketing</a>
                                    <span class="text-heading font-16 fw-500">June 24, 2024</span>
                                </div>
                                <h4 class="article-item__title mb-3">
                                    <a href="blog-details.html" class="link">The analytics feature is like having a
                                        personal fortune.</a>
                                </h4>
                                <p class="article-item__desc">Etiam id euismod odio. Ut euismod sem a lacus ringill a
                                    hendrerit. facilisi orbi a arcu turpis...</p>
                            </div>

                            <div class="article-item__thumb">
                                <img src="{{ asset('assets/front/') }}/images/thumbs/blog3.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="article-item__end flex-shrink-0">
                        <a href="blog-details.html" class="btn-simple">Read More <span class="icon font-26"><i
                                    class="las la-arrow-right"></i></span> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================== Article Section ENd ============================ -->

    <!-- ======================== Brand Section Start ========================= -->
    <div class="brand ">
        <div class="container container">
            <div class="brand-slider">
                <div class="brand-item d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/front/') }}/images/thumbs/brand-img1.png" alt="" class="white-version">
                    <img src="{{ asset('assets/front/') }}/images/thumbs/brand-white-img1.png" alt="" class="dark-version">
                </div>
                <div class="brand-item d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/front/') }}/images/thumbs/brand-img2.png" alt="" class="white-version">
                    <img src="{{ asset('assets/front/') }}/images/thumbs/brand-white-img2.png" alt="" class="dark-version">
                </div>
                <div class="brand-item d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/front/') }}/images/thumbs/brand-img3.png" alt="" class="white-version">
                    <img src="{{ asset('assets/front/') }}/images/thumbs/brand-white-img3.png" alt="" class="dark-version">
                </div>
                <div class="brand-item d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/front/') }}/images/thumbs/brand-img4.png" alt="" class="white-version">
                    <img src="{{ asset('assets/front/') }}/images/thumbs/brand-white-img4.png" alt="" class="dark-version">
                </div>
                <div class="brand-item d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/front/') }}/images/thumbs/brand-img5.png" alt="" class="white-version">
                    <img src="{{ asset('assets/front/') }}/images/thumbs/brand-white-img5.png" alt="" class="dark-version">
                </div>
                <div class="brand-item d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/front/') }}/images/thumbs/brand-img3.png" alt="" class="white-version">
                    <img src="{{ asset('assets/front/') }}/images/thumbs/brand-white-img3.png" alt="" class="dark-version">
                </div>
            </div>
        </div>
    </div>
    <!-- ======================== Brand Section End ========================= -->
@endsection
