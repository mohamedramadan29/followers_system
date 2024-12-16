@extends('front.layouts.master')
@section('title', ' اتصل بنا  ')
@section('content')

<!-- ======================== Breadcrumb Two Section Start ===================== -->
<section class="breadcrumb border-bottom p-0 d-block section-bg position-relative z-index-1">

    <div class="breadcrumb-two">
        <img src="{{ asset('assets/front/') }}/images/gradients/breadcrumb-gradient-bg.png" alt="" class="bg--gradient">
        <div class="container container-two">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb-two-content text-center">

                        <ul class="breadcrumb-list flx-align gap-2 mb-2 justify-content-center">
                            <li class="breadcrumb-list__item font-14 text-body">
                                <a href="index.html" class="breadcrumb-list__link text-body hover-text-main">الرئيسية </a>
                            </li>
                            <li class="breadcrumb-list__item font-14 text-body">
                                <span class="breadcrumb-list__icon font-10"><i class="fas fa-chevron-right"></i></span>
                            </li>
                            <li class="breadcrumb-list__item font-14 text-body">
                                <span class="breadcrumb-list__text">تواصل معنا</span>
                            </li>
                        </ul>

                        <h3 class="breadcrumb-two-content__title mb-0 text-capitalize"> تواصل معنا </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======================== Breadcrumb Two Section End ===================== -->

<!-- =========================== Contact Section Start ========================== -->
<section class="contact padding-t-120 padding-b-60 section-bg position-relative z-index-1 overflow-hidden">
    <img src="{{ asset('assets/front/') }}/images/gradients/banner-two-gradient.png" alt="" class="bg--gradient">
    <img src="{{ asset('assets/front/') }}/images/shapes/pattern-five.png" class="position-absolute end-0 top-0 z-index--1" alt="">

    <div class="container container-two">
        <div class="row gy-4">
            <div class="col-lg-5">
                <div class="contact-info">
                    <h3 class="contact-info__title"> تواصل معنا </h3>
                    <p class="contact-info__desc"> نتشرف بتواصلكم معنا وسيتم الرد على استفساراتكم في أقرب وقت ممكن. </p>

                    <div class="contact-info__item-wrapper flx-between gap-4">
                        <div class="contact-info__item">
                            <span class="contact-info__text text-capitalize d-block mb-1"> رقم الهاتف  </span>
                            <a href="tel:01812345678" class="contact-info__link font-24 fw-500 text-heading hover-text-main">01866777778</a>
                        </div>
                        <div class="contact-info__item">
                            <span class="contact-info__text text-capitalize d-block mb-1"> البريد الالكتروني  </span>
                            <a href="tel:dpmarket@gmail.com" class="contact-info__link font-24 fw-500 text-heading hover-text-main">gmail@gmail.com</a>
                        </div>
                    </div>

                    <div class="mt-24">
                        <ul class="social-icon-list">
                            <li class="social-icon-list__item">
                                <a href="https://www.facebook.com/" class="social-icon-list__link text-heading flx-center"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="social-icon-list__item">
                                <a href="https://www.twitter.com/" class="social-icon-list__link text-heading flx-center"> <i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="social-icon-list__item">
                                <a href="https://www.linkedin.com/" class="social-icon-list__link text-heading flx-center"> <i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="social-icon-list__item">
                                <a href="https://www.pinterest.com/" class="social-icon-list__link text-heading flx-center"> <i class="fab fa-pinterest-p"></i></a>
                            </li>
                            <li class="social-icon-list__item">
                                <a href="https://www.pinterest.com/" class="social-icon-list__link text-heading flx-center"> <i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-lg-7 ps-lg-5">
                <div class="card common-card p-sm-4">
                    <div class="card-body">
                        <form action="#" autocomplete="off" method="POST">
                            <div class="row gy-4">
                                <div class="col-sm-6 col-xs-6">
                                    <label for="name" class="form-label mb-2 font-18 font-heading fw-600"> الاسم  </label>
                                    <input type="text" class="common-input common-input--grayBg border" id="name" placeholder="اكتب الاسم ">
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <label for="email" class="form-label mb-2 font-18 font-heading fw-600">البريد الالكتروني </label>
                                    <input type="email" class="common-input common-input--grayBg border" id="email" placeholder=" ادخل البريد الالكتروني ">
                                </div>
                                <div class="col-sm-12">
                                    <label for="message" class="form-label mb-2 font-18 font-heading fw-600">رسالتك </label>
                                    <textarea class="common-input common-input--grayBg border" id="message" placeholder=" اكتب رسالتك  "></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <button class="btn btn-main btn-lg pill w-100"> ارسل رسالتك  </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========================== Contact Section End ========================== -->

 
@endsection
