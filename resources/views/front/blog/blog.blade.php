@extends('front.layouts.master')
@section('title', 'المدونة ')
@section('content')
    <!-- ======================== Breadcrumb Two Section Start ===================== -->
    <section class="breadcrumb border-bottom p-0 d-block section-bg position-relative z-index-1">

        <div class="breadcrumb-two">
            <img src="{{ asset('assets/front/') }}/images/gradients/breadcrumb-gradient-bg.png" alt=""
                class="bg--gradient">
            <div class="container container-two">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="breadcrumb-two-content text-center">

                            <ul class="breadcrumb-list flx-align gap-2 mb-2 justify-content-center">
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <a href="{{ url('/') }}" class="breadcrumb-list__link text-body hover-text-main"> الرئيسيــة
                                    </a>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <span class="breadcrumb-list__icon font-10"><i class="fas fa-chevron-left"></i></span>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <span class="breadcrumb-list__text"> المدونــة </span>
                                </li>
                            </ul>

                            <h3 class="breadcrumb-two-content__title mb-0 text-capitalize"> المدونـــة
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================== Breadcrumb Two Section End ===================== -->

    <!-- =========================== Blog Section Start ========================== -->
    <section class="blog padding-y-120 section-bg position-relative z-index-1 overflow-hidden">
        <img src="{{ asset('assets/front/') }}/images/shapes/pattern-five.png"
            class="position-absolute end-0 top-0 z-index--1" alt="">
        <div class="container container-two">
            <div class="row gy-4">
                <div class="col-lg-4 col-sm-6">
                    <div class="post-item">
                        <div class="post-item__thumb">
                            <a href="{{ url('blog/1') }}" class="link">
                                <img src="{{ asset('assets/front/') }}/images/thumbs/blog1.png" class="cover-img"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-item__content">
                            <div class="post-item__top flx-align">
                                <a href="{{ url('blog/1') }}" class="post-item__tag pill font-14 text-heading fw-500 hover-text-main">
                                    اسم القسـم </a>
                                <div class="post-item__date font-14 flx-align gap-2 font-14 text-heading fw-500">
                                    <span class="icon">
                                        <img src="{{ asset('assets/front/') }}/images/icons/calendar.svg" alt=""
                                            class="white-version">
                                        <img src="{{ asset('assets/front/') }}/images/icons/calendar-white.svg"
                                            alt="" class="dark-version">
                                    </span>
                                    <span class="text">Jan 17, 2024</span>
                                </div>
                            </div>
                            <h5 class="post-item__title">
                                <a href="{{ url('blog/1') }}" class="link">How to hire a right business executive for
                                    your company</a>
                            </h5>
                            <a href="{{ url('blog/1') }}" class="btn btn-outline-light pill fw-600"> قراءة المزيد </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="post-item">
                        <div class="post-item__thumb">
                            <a href="blog-details.html" class="link">
                                <img src="{{ asset('assets/front/') }}/images/thumbs/blog2.png" class="cover-img"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-item__content">
                            <div class="post-item__top flx-align">
                                <a href="blog.html"
                                    class="post-item__tag pill font-14 text-heading fw-500 hover-text-main">Workshop</a>
                                <div class="post-item__date font-14 flx-align gap-2 font-14 text-heading fw-500">
                                    <span class="icon">
                                        <img src="{{ asset('assets/front/') }}/images/icons/calendar.svg" alt=""
                                            class="white-version">
                                        <img src="{{ asset('assets/front/') }}/images/icons/calendar-white.svg"
                                            alt="" class="dark-version">
                                    </span>
                                    <span class="text">Jan 17, 2024</span>
                                </div>
                            </div>
                            <h5 class="post-item__title">
                                <a href="blog-details.html" class="link">The Gig Economy: Adapting to a Flexible
                                    Workforce</a>
                            </h5>
                            <a href="blog-details.html" class="btn btn-outline-light pill fw-600">Read More </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="post-item">
                        <div class="post-item__thumb">
                            <a href="blog-details.html" class="link">
                                <img src="{{ asset('assets/front/') }}/images/thumbs/blog3.png" class="cover-img"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-item__content">
                            <div class="post-item__top flx-align">
                                <a href="blog.html"
                                    class="post-item__tag pill font-14 text-heading fw-500 hover-text-main">Project
                                    Management</a>
                                <div class="post-item__date font-14 flx-align gap-2 font-14 text-heading fw-500">
                                    <span class="icon">
                                        <img src="{{ asset('assets/front/') }}/images/icons/calendar.svg" alt=""
                                            class="white-version">
                                        <img src="{{ asset('assets/front/') }}/images/icons/calendar-white.svg"
                                            alt="" class="dark-version">
                                    </span>
                                    <span class="text">Jan 17, 2024</span>
                                </div>
                            </div>
                            <h5 class="post-item__title">
                                <a href="blog-details.html" class="link">The Future of Remote Work: Strategies for
                                    Success</a>
                            </h5>
                            <a href="blog-details.html" class="btn btn-outline-light pill fw-600">Read More </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="post-item">
                        <div class="post-item__thumb">
                            <a href="blog-details.html" class="link">
                                <img src="{{ asset('assets/front/') }}/images/thumbs/blog3.png" class="cover-img"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-item__content">
                            <div class="post-item__top flx-align">
                                <a href="blog.html"
                                    class="post-item__tag pill font-14 text-heading fw-500 hover-text-main">Project
                                    Management</a>
                                <div class="post-item__date font-14 flx-align gap-2 font-14 text-heading fw-500">
                                    <span class="icon">
                                        <img src="{{ asset('assets/front/') }}/images/icons/calendar.svg" alt=""
                                            class="white-version">
                                        <img src="{{ asset('assets/front/') }}/images/icons/calendar-white.svg"
                                            alt="" class="dark-version">
                                    </span>
                                    <span class="text">Jan 17, 2024</span>
                                </div>
                            </div>
                            <h5 class="post-item__title">
                                <a href="blog-details.html" class="link">The Future of Remote Work: Strategies for
                                    Success</a>
                            </h5>
                            <a href="blog-details.html" class="btn btn-outline-light pill fw-600">Read More </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="post-item">
                        <div class="post-item__thumb">
                            <a href="blog-details.html" class="link">
                                <img src="{{ asset('assets/front/') }}/images/thumbs/blog1.png" class="cover-img"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-item__content">
                            <div class="post-item__top flx-align">
                                <a href="blog.html"
                                    class="post-item__tag pill font-14 text-heading fw-500 hover-text-main">Hiring</a>
                                <div class="post-item__date font-14 flx-align gap-2 font-14 text-heading fw-500">
                                    <span class="icon">
                                        <img src="{{ asset('assets/front/') }}/images/icons/calendar.svg" alt=""
                                            class="white-version">
                                        <img src="{{ asset('assets/front/') }}/images/icons/calendar-white.svg"
                                            alt="" class="dark-version">
                                    </span>
                                    <span class="text">Jan 17, 2024</span>
                                </div>
                            </div>
                            <h5 class="post-item__title">
                                <a href="blog-details.html" class="link">How to hire a right business executive for
                                    your company</a>
                            </h5>
                            <a href="blog-details.html" class="btn btn-outline-light pill fw-600">Read More </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="post-item">
                        <div class="post-item__thumb">
                            <a href="blog-details.html" class="link">
                                <img src="{{ asset('assets/front/') }}/images/thumbs/blog2.png" class="cover-img"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-item__content">
                            <div class="post-item__top flx-align">
                                <a href="blog.html"
                                    class="post-item__tag pill font-14 text-heading fw-500 hover-text-main">Workshop</a>
                                <div class="post-item__date font-14 flx-align gap-2 font-14 text-heading fw-500">
                                    <span class="icon">
                                        <img src="{{ asset('assets/front/') }}/images/icons/calendar.svg" alt=""
                                            class="white-version">
                                        <img src="{{ asset('assets/front/') }}/images/icons/calendar-white.svg"
                                            alt="" class="dark-version">
                                    </span>
                                    <span class="text">Jan 17, 2024</span>
                                </div>
                            </div>
                            <h5 class="post-item__title">
                                <a href="blog-details.html" class="link">The Gig Economy: Adapting to a Flexible
                                    Workforce</a>
                            </h5>
                            <a href="blog-details.html" class="btn btn-outline-light pill fw-600">Read More </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="post-item">
                        <div class="post-item__thumb">
                            <a href="blog-details.html" class="link">
                                <img src="{{ asset('assets/front/') }}/images/thumbs/blog1.png" class="cover-img"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-item__content">
                            <div class="post-item__top flx-align">
                                <a href="blog.html"
                                    class="post-item__tag pill font-14 text-heading fw-500 hover-text-main">Hiring</a>
                                <div class="post-item__date font-14 flx-align gap-2 font-14 text-heading fw-500">
                                    <span class="icon">
                                        <img src="{{ asset('assets/front/') }}/images/icons/calendar.svg" alt=""
                                            class="white-version">
                                        <img src="{{ asset('assets/front/') }}/images/icons/calendar-white.svg"
                                            alt="" class="dark-version">
                                    </span>
                                    <span class="text">Jan 17, 2024</span>
                                </div>
                            </div>
                            <h5 class="post-item__title">
                                <a href="blog-details.html" class="link">How to hire a right business executive for
                                    your company</a>
                            </h5>
                            <a href="blog-details.html" class="btn btn-outline-light pill fw-600">Read More </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="post-item">
                        <div class="post-item__thumb">
                            <a href="blog-details.html" class="link">
                                <img src="{{ asset('assets/front/') }}/images/thumbs/blog2.png" class="cover-img"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-item__content">
                            <div class="post-item__top flx-align">
                                <a href="blog.html"
                                    class="post-item__tag pill font-14 text-heading fw-500 hover-text-main">Workshop</a>
                                <div class="post-item__date font-14 flx-align gap-2 font-14 text-heading fw-500">
                                    <span class="icon">
                                        <img src="{{ asset('assets/front/') }}/images/icons/calendar.svg" alt=""
                                            class="white-version">
                                        <img src="{{ asset('assets/front/') }}/images/icons/calendar-white.svg"
                                            alt="" class="dark-version">
                                    </span>
                                    <span class="text">Jan 17, 2024</span>
                                </div>
                            </div>
                            <h5 class="post-item__title">
                                <a href="blog-details.html" class="link">The Gig Economy: Adapting to a Flexible
                                    Workforce</a>
                            </h5>
                            <a href="blog-details.html" class="btn btn-outline-light pill fw-600">Read More </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="post-item">
                        <div class="post-item__thumb">
                            <a href="blog-details.html" class="link">
                                <img src="{{ asset('assets/front/') }}/images/thumbs/blog3.png" class="cover-img"
                                    alt="">
                            </a>
                        </div>
                        <div class="post-item__content">
                            <div class="post-item__top flx-align">
                                <a href="blog.html"
                                    class="post-item__tag pill font-14 text-heading fw-500 hover-text-main">Project
                                    Management</a>
                                <div class="post-item__date font-14 flx-align gap-2 font-14 text-heading fw-500">
                                    <span class="icon">
                                        <img src="{{ asset('assets/front/') }}/images/icons/calendar.svg" alt=""
                                            class="white-version">
                                        <img src="{{ asset('assets/front/') }}/images/icons/calendar-white.svg"
                                            alt="" class="dark-version">
                                    </span>
                                    <span class="text">Jan 17, 2024</span>
                                </div>
                            </div>
                            <h5 class="post-item__title">
                                <a href="blog-details.html" class="link">The Future of Remote Work: Strategies for
                                    Success</a>
                            </h5>
                            <a href="blog-details.html" class="btn btn-outline-light pill fw-600">Read More </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination Start -->
            <nav aria-label="Page navigation example">
                <ul class="pagination common-pagination">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link flx-align gap-2 flex-nowrap" href="#"> التالــي
                            <span class="icon line-height-1 font-20"><i class="las la-arrow-left"></i></span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- Pagination End -->


        </div>
    </section>
    <!-- =========================== Blog Section End ========================== -->

    <!-- ======================== Brand Section Start ========================= -->
    <div class="brand ">
        <div class="container container">
            <div class="brand-slider">
                <div class="brand-item d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/front/') }}/images/thumbs/brand-img1.png" alt=""
                        class="white-version">
                    <img src="{{ asset('assets/front/') }}/images/thumbs/brand-white-img1.png" alt=""
                        class="dark-version">
                </div>
                <div class="brand-item d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/front/') }}/images/thumbs/brand-img2.png" alt=""
                        class="white-version">
                    <img src="{{ asset('assets/front/') }}/images/thumbs/brand-white-img2.png" alt=""
                        class="dark-version">
                </div>
                <div class="brand-item d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/front/') }}/images/thumbs/brand-img3.png" alt=""
                        class="white-version">
                    <img src="{{ asset('assets/front/') }}/images/thumbs/brand-white-img3.png" alt=""
                        class="dark-version">
                </div>
                <div class="brand-item d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/front/') }}/images/thumbs/brand-img4.png" alt=""
                        class="white-version">
                    <img src="{{ asset('assets/front/') }}/images/thumbs/brand-white-img4.png" alt=""
                        class="dark-version">
                </div>
                <div class="brand-item d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/front/') }}/images/thumbs/brand-img5.png" alt=""
                        class="white-version">
                    <img src="{{ asset('assets/front/') }}/images/thumbs/brand-white-img5.png" alt=""
                        class="dark-version">
                </div>
                <div class="brand-item d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/front/') }}/images/thumbs/brand-img3.png" alt=""
                        class="white-version">
                    <img src="{{ asset('assets/front/') }}/images/thumbs/brand-white-img3.png" alt=""
                        class="dark-version">
                </div>
            </div>
        </div>
    </div>
    <!-- ======================== Brand Section End ========================= -->
@endsection
