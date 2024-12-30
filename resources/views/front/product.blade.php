@extends('front.layouts.master')
@section('title')
{{ $service['name'] }}
@endsection
@section('content')

    <!-- ======================== Breadcrumb Two Section Start ===================== -->
    <section class="breadcrumb border-bottom p-0 d-block section-bg position-relative z-index-1">

        <div class="breadcrumb-two">
            <img src="{{ asset('assets/front/') }}/images/gradients/breadcrumb-gradient-bg.png" alt=""
                class="bg--gradient">
            <div class="container container-two">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="breadcrumb-two-content">

                            <ul class="breadcrumb-list flx-align gap-2 mb-2">
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <a href="index.html" class="breadcrumb-list__link text-body hover-text-main"> الرئيسية
                                    </a>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <span class="breadcrumb-list__icon font-10"><i class="fas fa-chevron-right"></i></span>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <a href="all-product.html" class="breadcrumb-list__link text-body hover-text-main">
                                        الخدمات </a>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <span class="breadcrumb-list__icon font-10"><i class="fas fa-chevron-right"></i></span>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <span class="breadcrumb-list__text"> خدمة زيادة متابعين انستقرام الأكثر طلباً + ضمان مدى
                                        الحياة </span>
                                </li>
                            </ul>

                            <h3 class="breadcrumb-two-content__title mb-3 text-capitalize"> خدمة زيادة متابعين انستقرام
                                الأكثر طلباً + ضمان مدى الحياة </h3>

                            <div class="breadcrumb-content flx-align gap-3">

                                <div class="breadcrumb-content__item text-heading fw-500 flx-align gap-2">
                                    <span class="icon">
                                        <img src="{{ asset('assets/front/') }}/images/icons/cart-icon.svg" alt=""
                                            class="white-version">
                                        <img src="{{ asset('assets/front/') }}/images/icons/cart-white.svg" alt=""
                                            class="dark-version w-20">
                                    </span>
                                    <span class="text"> 200 مبيعــة </span>
                                </div>
                                <div class="breadcrumb-content__item text-heading fw-500 flx-align gap-2">
                                    <span class="icon">
                                        <img src="{{ asset('assets/front/') }}/images/icons/check-icon.svg" alt=""
                                            class="white-version">
                                        <img src="{{ asset('assets/front/') }}/images/icons/check-icon-white.svg"
                                            alt="" class="dark-version">
                                    </span>
                                    <span class="text"> ضمان مدى الحياة </span>
                                </div>
                                <div class="breadcrumb-content__item text-heading fw-500 flx-align gap-2">
                                    <span class="icon">
                                        <img src="{{ asset('assets/front/') }}/images/icons/check-icon.svg" alt=""
                                            class="white-version">
                                        <img src="{{ asset('assets/front/') }}/images/icons/check-icon-white.svg"
                                            alt="" class="dark-version">
                                    </span>
                                    <span class="text"> 29 تقييم </span>
                                </div>
                            </div>
                            <div class="breadcrupm_price_section">
                                <h5 type="button" class="font-heading font-18"> السعر لكل <span class="numbers"> 50 </span>
                                </h5>
                                <h6 class="product-sidebar__title product_price"> 1.00 <span> ر.س </span> </h6>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================== Breadcrumb Two Section End ===================== -->

    <!-- ======================= Product Details Section Start ==================== -->
    <div class="product-details mt-32 padding-b-120">
        <div class="container container-two">
            <div class="row gy-4">
                <div class="col-lg-5">
                    <div class="product-details__thumb">
                        <img src="{{ asset('assets/front/') }}/images/tiktok.webp" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <!-- ======================= Product Sidebar Start ========================= -->
                    <div class="product-sidebar section-bg">
                        <div class="container container-two">
                            <div class="breadcrumb-tab flx-wrap align-items-start gap-lg-4 gap-2">
                                <ul class="nav tab-bordered nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-price-select-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-price-select" type="button" role="tab"
                                            aria-controls="pills-price-select" aria-selected="true"> الخيــــارات </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-product-details-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-product-details" type="button" role="tab"
                                            aria-controls="pills-product-details" aria-selected="true"> تفاصيــل المنتــج
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-rating-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-rating" type="button" role="tab"
                                            aria-controls="pills-rating" aria-selected="false">
                                            <span class="d-flex align-items-center gap-1">
                                                <span class="star-rating">
                                                    <span class="star-rating__item font-11"><i
                                                            class="fas fa-star"></i></span>
                                                    <span class="star-rating__item font-11"><i
                                                            class="fas fa-star"></i></span>
                                                    <span class="star-rating__item font-11"><i
                                                            class="fas fa-star"></i></span>
                                                    <span class="star-rating__item font-11"><i
                                                            class="fas fa-star"></i></span>
                                                    <span class="star-rating__item font-11"><i
                                                            class="fas fa-star"></i></span>
                                                </span>
                                                <span class="star-rating__text text-body"> 5.0</span>
                                                <span class="star-rating__text text-body"> (<span> 29 </span>
                                                    تقـــــيم)</span>
                                            </span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-price-select" role="tabpanel"
                                    aria-labelledby="pills-price-select-tab" tabindex="0">
                                    <br>
                                    <form action="#" autocomplete="off" method="post" class="form-select-product-details">
                                        <div class="col-sm-12 col-xs-12 mb-3">
                                            <label for="Stateee" class="form-label mb-2 font-18 font-heading fw-600"> حدد
                                                الخدمة </label>
                                            <div class="select-has-icon">
                                                <select class="common-input border" id="Stateee">
                                                    <option value="1"> حدد الخدمة </option>
                                                    <option value=""> الخدمة الاولي </option>
                                                    <option value=""> الخدمة الثانية </option>
                                                    <option value=""> الخدمة الثالثة </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-xs-12 mb-3">
                                            <label for="follower_num" class="form-label mb-2 font-18 font-heading fw-600">
                                                العدد المطلوب
                                            </label>
                                            <input type="numbers" name="followers_num" class="common-input"
                                                id="follower_num" placeholder=" ادخل العدد المطلوب  ">
                                        </div>
                                        <div class="col-sm-12 col-xs-12 mb-3">
                                            <label for="account_link" class="form-label mb-2 font-18 font-heading fw-600">
                                                الرابط </label>
                                            <input type="text" name="account_link"
                                                class="common-input common-input--grayBg border" id="account_link"
                                                placeholder="  ضع رابط الحساب هنا  ">
                                        </div>
                                        <div class="col-sm-12 col-xs-12 mb-3 last_price">
                                            <div class="price_section">
                                                <p>   <img src="{{ asset('assets/front/images/money1.svg') }}" alt=""> السعر </p>
                                                <h4 class="price">  20 <span> ر.س </span> </h4>
                                            </div>
                                        </div>
                                        <button type="button"
                                            class="btn btn-main d-flex w-100 justify-content-center align-items-center gap-2 pill px-sm-5 mt-32">
                                            طلب الخدمة الان
                                            <img src="{{ asset('assets/front/') }}/images/icons/add-to-cart.svg"
                                                alt="">
                                        </button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-product-details" role="tabpanel"
                                    aria-labelledby="pills-product-details-tab" tabindex="0">
                                    <!-- Product Details Content Start -->
                                    <div class="product-details">

                                        <p class="product-details__desc">

                                            خدمة زيادة متابعين انستقرام الأكثر طلباً + ضمان + متابعين لديهم صور شخصية
                                            ومتابعين ومنشورات وينشرون باستمرار + ضمان عدم نقصان + الأفضل على الإطلاق
                                        </p>

                                        <div class="product-details__item">
                                            <h5 class="product-details__title mb-3"> مميزات خدمتنا </h5>
                                            <ul class="product-list">
                                                <li class="product-list__item"> متابعون آمنون وفعّالون: نضمن جودة الخدمة مع
                                                    الحفاظ على أمان حسابك بالكامل. </li>
                                                <li class="product-list__item"> دعم فني دائم: فريقنا متاح على مدار الساعة
                                                    لضمان تجربة سلسة وخالية من المشاكل. </li>
                                                <li class="product-list__item"> سرعة التنفيذ: تحقيق النتائج بشكل فوري لضمان
                                                    رضاك التام. </li>
                                                <li class="product-list__item"> أسعار تنافسية: خدمات بجودة عالية وبأسعار
                                                    تناسب الجميع. </li>
                                            </ul>
                                        </div>
                                        <div class="product-details__item">
                                            <h5 class="product-details__title mb-3"> الأمان والخصوصية </h5>
                                            <ul class="product-list">
                                                <li class="product-list__item"> تجربة آمنة تمامًا: نلتزم بأعلى معايير
                                                    الأمان لضمان خصوصية حسابك وحمايته أثناء الخدمة. </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Product Details Content End -->
                                </div>
                                <br>
                                <div class="tab-pane fade" id="pills-rating" role="tabpanel"
                                    aria-labelledby="pills-rating-tab" tabindex="0">
                                    <div class="product-review-wrapper">
                                        <div class="product-review">
                                            <div class="product-review__top flx-between">
                                                <div class="product-review__rating flx-align">
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i>
                                                            </li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i>
                                                            </li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i>
                                                            </li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i>
                                                            </li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                        <span class="star-rating__text text-body"> 5.0</span>
                                                    </div>
                                                </div>
                                                <div class="product-review__date">
                                                    بواسطة <a href="#" class="product-review__user text--base"> محمد
                                                        رمضان </a>
                                                    منذ شهرين
                                                </div>
                                            </div>
                                            <div class="product-review__body">
                                                <p class="product-review__desc"> تعامل رائع ومضمون .. عن نفسي مو اول مره
                                                    اتعامل معهم في مصداقيه وارتحت معاهم يشهد الله ♥️ </p>
                                            </div>
                                        </div>
                                        <div class="product-review">
                                            <div class="product-review__top flx-between">
                                                <div class="product-review__rating flx-align">
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i>
                                                            </li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i>
                                                            </li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i>
                                                            </li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i>
                                                            </li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                        <span class="star-rating__text text-body"> 5.0</span>
                                                    </div>
                                                </div>
                                                <div class="product-review__date">
                                                    بواسطة <a href="#" class="product-review__user text--base"> محمد
                                                        رمضان </a>
                                                    منذ شهرين
                                                </div>
                                            </div>
                                            <div class="product-review__body">
                                                <p class="product-review__desc"> تعامل رائع ومضمون .. عن نفسي مو اول مره
                                                    اتعامل معهم في مصداقيه وارتحت معاهم يشهد الله ♥️ </p>
                                            </div>
                                        </div>
                                        <div class="product-review">
                                            <div class="product-review__top flx-between">
                                                <div class="product-review__rating flx-align">
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i>
                                                            </li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i>
                                                            </li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i>
                                                            </li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i>
                                                            </li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                        <span class="star-rating__text text-body"> 5.0</span>
                                                    </div>
                                                </div>
                                                <div class="product-review__date">
                                                    بواسطة <a href="#" class="product-review__user text--base"> محمد
                                                        رمضان </a>
                                                    منذ شهرين
                                                </div>
                                            </div>
                                            <div class="product-review__body">
                                                <p class="product-review__desc"> تعامل رائع ومضمون .. عن نفسي مو اول مره
                                                    اتعامل معهم في مصداقيه وارتحت معاهم يشهد الله ♥️ </p>
                                            </div>
                                        </div>

                                        <div class="product-review">
                                            <div class="product-review__top flx-between">
                                                <div class="product-review__rating flx-align">
                                                    <div class="d-flex align-items-center gap-1">
                                                        <ul class="star-rating">
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i>
                                                            </li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i>
                                                            </li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i>
                                                            </li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i>
                                                            </li>
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i>
                                                            </li>
                                                        </ul>
                                                        <span class="star-rating__text text-body"> 5.0</span>
                                                    </div>
                                                </div>
                                                <div class="product-review__date">
                                                    بواسطة <a href="#" class="product-review__user text--base"> محمد
                                                        رمضان </a>
                                                    منذ شهرين
                                                </div>
                                            </div>
                                            <div class="product-review__body">
                                                <p class="product-review__desc"> تعامل رائع ومضمون .. عن نفسي مو اول مره
                                                    اتعامل معهم في مصداقيه وارتحت معاهم يشهد الله ♥️ </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-comments" role="tabpanel"
                                    aria-labelledby="pills-comments-tab" tabindex="0">
                                </div>



                            </div>
                        </div>
                    </div>

                </div>
                <!-- ======================= Product Sidebar End ========================= -->
            </div>
        </div>
    </div>
    </div>
    <!-- ======================= Product Details Section End ==================== -->
    <!-- =========================== Arrival Product Section Start ========================== -->
    <section class="arrival-product padding-y-120 section-bg position-relative z-index-1">
        <img src="{{ asset('assets/front/') }}/images/gradients/product-gradient.png" alt=""
            class="bg--gradient white-version">

        <img src="{{ asset('assets/front/') }}/images/shapes/element2.png" alt="" class="element one">

        <div class="container container-two">
            <div class="section-heading">
                <h3 class="section-heading__title"> اشتري المستخدمون ايضا </h3>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab"
                    tabindex="0">
                    <div class="row gy-4">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="product-item ">
                                <div class="product-item__thumb d-flex">
                                    <a href="{{ url('product/') }}" class="link w-100">
                                        <img src="{{ asset('assets/front/') }}/images/serv.webp" alt=""
                                            class="cover-img">
                                    </a>
                                    <button type="button" class="product-item__wishlist"><i
                                            class="fas fa-heart"></i></button>
                                </div>
                                <div class="product-item__content">
                                    <h6 class="product-item__title">
                                        <a href="{{ url('product/') }}" class="link"> زيادة لايكات انستقرام سريعة جداً
                                            (الأرخص على الاطلاق) + ضمان </a>
                                    </h6>
                                    <div class="product-item__info flx-between gap-2">

                                        <div class="flx-align gap-2">
                                            <h6 class="product-item__price mb-0">$120</h6>
                                            <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                        </div>
                                    </div>
                                    <div class="product-item__bottom flx-between gap-2">
                                        <div>
                                            <span class="product-item__sales font-14 mb-2">1200 مبيعة</span>
                                            <div class="d-flex align-items-center gap-1">
                                                <ul class="star-rating">
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                </ul>
                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="product-item ">
                                <div class="product-item__thumb d-flex">
                                    <a href="{{ url('product/') }}" class="link w-100">
                                        <img src="{{ asset('assets/front/') }}/images/serv.webp" alt=""
                                            class="cover-img">
                                    </a>
                                    <button type="button" class="product-item__wishlist"><i
                                            class="fas fa-heart"></i></button>
                                </div>
                                <div class="product-item__content">
                                    <h6 class="product-item__title">
                                        <a href="{{ url('product/') }}" class="link"> زيادة لايكات انستقرام سريعة جداً
                                            (الأرخص على الاطلاق) + ضمان </a>
                                    </h6>
                                    <div class="product-item__info flx-between gap-2">

                                        <div class="flx-align gap-2">
                                            <h6 class="product-item__price mb-0">$120</h6>
                                            <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                        </div>
                                    </div>
                                    <div class="product-item__bottom flx-between gap-2">
                                        <div>
                                            <span class="product-item__sales font-14 mb-2">1200 مبيعة</span>
                                            <div class="d-flex align-items-center gap-1">
                                                <ul class="star-rating">
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                </ul>
                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="product-item ">
                                <div class="product-item__thumb d-flex">
                                    <a href="{{ url('product/') }}" class="link w-100">
                                        <img src="{{ asset('assets/front/') }}/images/serv.webp" alt=""
                                            class="cover-img">
                                    </a>
                                    <button type="button" class="product-item__wishlist"><i
                                            class="fas fa-heart"></i></button>
                                </div>
                                <div class="product-item__content">
                                    <h6 class="product-item__title">
                                        <a href="{{ url('product/') }}" class="link"> زيادة لايكات انستقرام سريعة جداً
                                            (الأرخص على الاطلاق) + ضمان </a>
                                    </h6>
                                    <div class="product-item__info flx-between gap-2">

                                        <div class="flx-align gap-2">
                                            <h6 class="product-item__price mb-0">$120</h6>
                                            <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                        </div>
                                    </div>
                                    <div class="product-item__bottom flx-between gap-2">
                                        <div>
                                            <span class="product-item__sales font-14 mb-2">1200 مبيعة</span>
                                            <div class="d-flex align-items-center gap-1">
                                                <ul class="star-rating">
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                </ul>
                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="product-item ">
                                <div class="product-item__thumb d-flex">
                                    <a href="{{ url('product/') }}" class="link w-100">
                                        <img src="{{ asset('assets/front/') }}/images/serv.webp" alt=""
                                            class="cover-img">
                                    </a>
                                    <button type="button" class="product-item__wishlist"><i
                                            class="fas fa-heart"></i></button>
                                </div>
                                <div class="product-item__content">
                                    <h6 class="product-item__title">
                                        <a href="{{ url('product/') }}" class="link"> زيادة لايكات انستقرام سريعة جداً
                                            (الأرخص على الاطلاق) + ضمان </a>
                                    </h6>
                                    <div class="product-item__info flx-between gap-2">

                                        <div class="flx-align gap-2">
                                            <h6 class="product-item__price mb-0">$120</h6>
                                            <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                        </div>
                                    </div>
                                    <div class="product-item__bottom flx-between gap-2">
                                        <div>
                                            <span class="product-item__sales font-14 mb-2">1200 مبيعة</span>
                                            <div class="d-flex align-items-center gap-1">
                                                <ul class="star-rating">
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                </ul>
                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="product-item ">
                                <div class="product-item__thumb d-flex">
                                    <a href="{{ url('product/') }}" class="link w-100">
                                        <img src="{{ asset('assets/front/') }}/images/serv.webp" alt=""
                                            class="cover-img">
                                    </a>
                                    <button type="button" class="product-item__wishlist"><i
                                            class="fas fa-heart"></i></button>
                                </div>
                                <div class="product-item__content">
                                    <h6 class="product-item__title">
                                        <a href="{{ url('product/') }}" class="link"> زيادة لايكات انستقرام سريعة جداً
                                            (الأرخص على الاطلاق) + ضمان </a>
                                    </h6>
                                    <div class="product-item__info flx-between gap-2">

                                        <div class="flx-align gap-2">
                                            <h6 class="product-item__price mb-0">$120</h6>
                                            <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                        </div>
                                    </div>
                                    <div class="product-item__bottom flx-between gap-2">
                                        <div>
                                            <span class="product-item__sales font-14 mb-2">1200 مبيعة</span>
                                            <div class="d-flex align-items-center gap-1">
                                                <ul class="star-rating">
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                </ul>
                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="product-item ">
                                <div class="product-item__thumb d-flex">
                                    <a href="{{ url('product/') }}" class="link w-100">
                                        <img src="{{ asset('assets/front/') }}/images/serv.webp" alt=""
                                            class="cover-img">
                                    </a>
                                    <button type="button" class="product-item__wishlist"><i
                                            class="fas fa-heart"></i></button>
                                </div>
                                <div class="product-item__content">
                                    <h6 class="product-item__title">
                                        <a href="{{ url('product/') }}" class="link"> زيادة لايكات انستقرام سريعة جداً
                                            (الأرخص على الاطلاق) + ضمان </a>
                                    </h6>
                                    <div class="product-item__info flx-between gap-2">

                                        <div class="flx-align gap-2">
                                            <h6 class="product-item__price mb-0">$120</h6>
                                            <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                        </div>
                                    </div>
                                    <div class="product-item__bottom flx-between gap-2">
                                        <div>
                                            <span class="product-item__sales font-14 mb-2">1200 مبيعة</span>
                                            <div class="d-flex align-items-center gap-1">
                                                <ul class="star-rating">
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                </ul>
                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="product-item ">
                                <div class="product-item__thumb d-flex">
                                    <a href="{{ url('product/') }}" class="link w-100">
                                        <img src="{{ asset('assets/front/') }}/images/serv.webp" alt=""
                                            class="cover-img">
                                    </a>
                                    <button type="button" class="product-item__wishlist"><i
                                            class="fas fa-heart"></i></button>
                                </div>
                                <div class="product-item__content">
                                    <h6 class="product-item__title">
                                        <a href="{{ url('product/') }}" class="link"> زيادة لايكات انستقرام سريعة جداً
                                            (الأرخص على الاطلاق) + ضمان </a>
                                    </h6>
                                    <div class="product-item__info flx-between gap-2">

                                        <div class="flx-align gap-2">
                                            <h6 class="product-item__price mb-0">$120</h6>
                                            <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                        </div>
                                    </div>
                                    <div class="product-item__bottom flx-between gap-2">
                                        <div>
                                            <span class="product-item__sales font-14 mb-2">1200 مبيعة</span>
                                            <div class="d-flex align-items-center gap-1">
                                                <ul class="star-rating">
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                </ul>
                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="product-item ">
                                <div class="product-item__thumb d-flex">
                                    <a href="{{ url('product/') }}" class="link w-100">
                                        <img src="{{ asset('assets/front/') }}/images/serv.webp" alt=""
                                            class="cover-img">
                                    </a>
                                    <button type="button" class="product-item__wishlist"><i
                                            class="fas fa-heart"></i></button>
                                </div>
                                <div class="product-item__content">
                                    <h6 class="product-item__title">
                                        <a href="{{ url('product/') }}" class="link"> زيادة لايكات انستقرام سريعة جداً
                                            (الأرخص على الاطلاق) + ضمان </a>
                                    </h6>
                                    <div class="product-item__info flx-between gap-2">

                                        <div class="flx-align gap-2">
                                            <h6 class="product-item__price mb-0">$120</h6>
                                            <span class="product-item__prevPrice text-decoration-line-through">$259</span>
                                        </div>
                                    </div>
                                    <div class="product-item__bottom flx-between gap-2">
                                        <div>
                                            <span class="product-item__sales font-14 mb-2">1200 مبيعة</span>
                                            <div class="d-flex align-items-center gap-1">
                                                <ul class="star-rating">
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                    <li class="star-rating__item font-11"><i class="fas fa-star"></i></li>
                                                </ul>
                                                <span class="star-rating__text text-heading fw-500 font-14"> (16)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================== Arrival Product Section End ========================== -->




@endsection
