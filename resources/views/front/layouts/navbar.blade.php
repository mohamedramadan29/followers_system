@php

    $publicsetting = \App\Models\admin\PublicSetting::first();

@endphp

<!-- ==================== Mobile Menu Start Here ==================== -->
<div class="mobile-menu d-lg-none d-block">
    <button type="button" class="close-button"> <i class="las la-times"></i> </button>
    <div class="mobile-menu__inner">
        <a href="{{ url('/') }}" class="mobile-menu__logo">
            <img width="60px" src="{{ asset('assets/uploads/PublicSetting/' . $publicsetting['website_logo']) }}"
                alt="{{ $publicsetting['website_name'] }}" class="white-version">
            <img width="60px" src="{{ asset('assets/uploads/PublicSetting/' . $publicsetting['website_logo']) }}"
                alt="{{ $publicsetting['website_name'] }}" class="dark-version">
        </a>
        <div class="mobile-menu__menu">

            <ul class="nav-menu flx-align nav-menu--mobile">
                <li class="nav-menu__item">
                    <a href="{{ url('/') }}" class="nav-menu__link">الرئيسية </a>
                </li>
                <li class="nav-menu__item">
                    <a href="{{ url('category') }}" class="nav-menu__link"> الاكثر مبيعا </a>
                </li>
                <li class="nav-menu__item">
                    <a href="{{ url('contact') }}" class="nav-menu__link"> فيسبوك </a>
                </li>
                <li class="nav-menu__item">
                    <a href="{{ url('contact') }}" class="nav-menu__link"> انستجرام </a>
                </li>
                <li class="nav-menu__item">
                    <a href="{{ url('contact') }}" class="nav-menu__link"> تيك توك </a>
                </li>
                <li class="nav-menu__item">
                    <a href="{{ url('contact') }}" class="nav-menu__link"> اتصل بنا </a>
                </li>

            </ul>
            <div class="header-right__inner d-lg-none my-3 gap-1 d-flex flx-align">
                <a href="{{ url('register') }}" class="btn btn-main pill">
                    <span class="icon-left icon">
                        <img src="{{ asset('assets/front/') }}/images/icons/user.svg" alt="">
                    </span> سجل الان
                </a>

            </div>
        </div>
    </div>
</div>
<!-- ==================== Mobile Menu End Here ==================== -->

<main class="change-gradient">
    <!-- ==================== Header Start Here ==================== -->
    <header class="header">
        <div class="container container-full">
            <nav class="header-inner flx-between">
                <!-- Logo Start -->
                <div class="logo">
                    <a href="{{ url('/') }}" class="link white-version">
                        <img src="{{ asset('assets/uploads/PublicSetting/' . $publicsetting['website_logo']) }}"
                            alt="{{ $publicsetting['website_name'] }}">
                    </a>
                    <a href="{{ url('/') }}" class="link dark-version">
                        <img src="{{ asset('assets/uploads/PublicSetting/' . $publicsetting['website_logo']) }}"
                            alt="{{ $publicsetting['website_name'] }}">
                    </a>
                </div>
                <!-- Logo End  -->

                <!-- Menu Start  -->
                <div class="header-menu d-lg-block d-none">

                    <ul class="nav-menu flx-align ">
                        <li class="nav-menu__item">
                            <a href="{{ url('/') }}" class="nav-menu__link">الرئيسية </a>
                        </li>

                        <li class="nav-menu__item">
                            <a href="{{ url('category') }}" class="nav-menu__link"> الاكثر مبيعا </a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="{{ url('contact') }}" class="nav-menu__link"> فيسبوك </a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="{{ url('contact') }}" class="nav-menu__link"> انستجرام </a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="{{ url('contact') }}" class="nav-menu__link"> تيك توك </a>
                        </li>
                        <li class="nav-menu__item">
                            <a href="{{ url('contact') }}" class="nav-menu__link"> اتصل بنا </a>
                        </li>
                    </ul>
                </div>
                <!-- Menu End  -->
                <!-- Header Right start -->
                <div class="header-right flx-align">
                    <div class="header-right__inner gap-3 flx-align d-lg-flex d-none">
                        <a href="{{ url('register') }}" class="btn btn-main pill">
                            <span class="icon-left icon">
                                <img src="{{ asset('assets/front/') }}/images/icons/user.svg" alt="">
                            </span>سجل الان
                        </a>
                    </div>
                    <div class="user-profile ">
                        <button class="user-profile__button flex-align">
                            <span class="user-profile__thumb">
                                <img src="{{ asset('assets/front/') }}/images/thumbs/user-profile.png" class="cover-img" alt="">
                            </span>
                        </button>
                        <ul class="user-profile-dropdown">
                            <li class="sidebar-list__item">
                                <a href="{{ route('profile') }}" class="sidebar-list__link">
                                    <span class="sidebar-list__icon">
                                        <img src="{{ asset('assets/front/') }}/images/icons/sidebar-icon2.svg" alt="" class="icon">
                                        <img src="{{ asset('assets/front/') }}/images/icons/sidebar-icon-active2.svg" alt=""
                                            class="icon icon-active">
                                    </span>
                                    <span class="text"> حسابي  </span>
                                </a>
                            </li>
                            <li class="sidebar-list__item">
                                <a href="{{ route('profile') }}" class="sidebar-list__link">
                                    <span class="sidebar-list__icon">
                                        <img src="{{ asset('assets/front/') }}/images/icons/sidebar-icon10.svg" alt=""
                                        class="icon">
                                    <img src="{{ asset('assets/front/') }}/images/icons/sidebar-icon-active10.svg" alt=""
                                        class="icon icon-active">
                                    </span>
                                    <span class="text"> تعديل الملف الشخصي  </span>
                                </a>
                            </li>

                            <li class="sidebar-list__item">
                                <a href="{{ route('profile') }}" class="sidebar-list__link">
                                    <span class="sidebar-list__icon">
                                        <img src="{{ asset('assets/front/') }}/images/icons/sidebar-icon2.svg" alt="" class="icon">
                                        <img src="{{ asset('assets/front/') }}/images/icons/sidebar-icon-active2.svg" alt=""
                                            class="icon icon-active">
                                    </span>
                                    <span class="text"> الرصيد  </span>
                                </a>
                            </li>

                            <li class="sidebar-list__item">
                                <a href="{{ route('profile') }}" class="sidebar-list__link">
                                    <span class="sidebar-list__icon">
                                        <img src="{{ asset('assets/front/') }}/images/icons/sidebar-icon2.svg" alt="" class="icon">
                                        <img src="{{ asset('assets/front/') }}/images/icons/sidebar-icon-active2.svg" alt=""
                                            class="icon icon-active">
                                    </span>
                                    <span class="text"> التنبيهات   </span>
                                </a>
                            </li>
                            <li class="sidebar-list__item">
                                <a href="login.html" class="sidebar-list__link">
                                    <span class="sidebar-list__icon">
                                        <img src="{{ asset('assets/front/') }}/images/icons/sidebar-icon13.svg" alt=""
                                            class="icon">
                                        <img src="{{ asset('assets/front/') }}/images/icons/sidebar-icon-active13.svg" alt=""
                                            class="icon icon-active">
                                    </span>
                                    <span class="text">تسجيل خروج</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <button type="button" class="toggle-mobileMenu d-lg-none"> <i class="las la-bars"></i> </button>
                </div>

                <!-- Header Right End  -->
            </nav>
        </div>
    </header>
    <!-- ==================== Header End Here ==================== -->
