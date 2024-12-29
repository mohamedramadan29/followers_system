@php

    $publicsetting = \App\Models\admin\PublicSetting::first();

@endphp
<!-- ========== App Menu Start ========== -->
<div class="main-nav">
    <!-- Sidebar Logo -->
    <div class="logo-box">
        <a href="{{ url('admin/dashboard') }}" class="logo-dark">
            <img src="{{ asset('assets/uploads/PublicSetting/' . $publicsetting['website_logo']) }}" class="logo-sm"
                alt="logo sm">
            <img src="{{ asset('assets/uploads/PublicSetting/' . $publicsetting['website_logo']) }}" class="logo-lg"
                alt="logo dark">
        </a>

        <a href="{{ url('admin/dashboard') }}" class="logo-light">
            <img src="{{ asset('assets/uploads/PublicSetting/' . $publicsetting['website_logo']) }}" class="logo-sm"
                alt="logo sm">
            <img style="height: 85px !important;"
                src="{{ asset('assets/uploads/PublicSetting/' . $publicsetting['website_logo']) }}" class="logo-lg"
                alt="logo light">
        </a>
    </div>

    <!-- Menu Toggle Button (sm-hover) -->
    <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
        <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone" class="button-sm-hover-icon"></iconify-icon>
    </button>

    <div class="scrollbar" data-simplebar>
        <ul class="navbar-nav" id="navbar-nav">

            <li class="menu-title"> العام</li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin/dashboard') }}">
                    <span class="nav-icon">
                        <i class="bi bi-house-door-fill"></i>
                    </span>
                    <span class="nav-text"> الرئيسية </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarProviders" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarProviders">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:t-shirt-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> مزودي الخدمات  </span>
                </a>
                <div class="collapse" id="sidebarProviders">
                    <ul class="nav sub-navbar-nav">

                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ url('admin/providers') }}">  مزودي الخدمات  </a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ url('admin/provider/add') }}">  اضافة مزود جديد   </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarProducts" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarProducts">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:t-shirt-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> الخدمات </span>
                </a>
                <div class="collapse" id="sidebarProducts">
                    <ul class="nav sub-navbar-nav">

                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ url('admin/products') }}"> جميع الخدمات </a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ url('admin/product/add') }}"> اضف خدمة جديدة </a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarCategory" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarCategory">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:clipboard-list-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> التصنيفات </span>
                </a>
                <div class="collapse" id="sidebarCategory">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ url('admin/main-categories') }}"> التصنيفات الرئيسية </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarfaqs" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarfaqs">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:question-circle-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text">الاسئلة الشائعة للمتجر </span>
                </a>
                <div class="collapse" id="sidebarfaqs">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ url('admin/faqs') }}"> الاسئلة الشائعة للمتجر </a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ url('admin/faq/add') }}"> اضافة سوال جديد </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebaradvs" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarBrands">
                    <span class="nav-icon">
                        <i class="bi bi-car-front-fill"></i>
                    </span>
                    <span class="nav-text"> المدونة </span>
                </a>
                <div class="collapse" id="sidebaradvs">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ url('admin/blog_category') }}"> اقسام المدونة </a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ url('admin/blogs') }}"> التدوينات </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarterms" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarterms">
                    <span class="nav-icon">
                        <i class="bi bi-car-front-fill"></i>
                    </span>
                    <span class="nav-text">  سياسات الموقع  </span>
                </a>
                <div class="collapse" id="sidebarterms">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ url('admin/terms') }}">  الشروط والاحكام </a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ url('admin/return-policy') }}">  سياسة الاستبدال و الاسترجاع </a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ url('admin/privacy-policy') }}"> سياسة الاستخدام والخصوصية </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin/reviews') }}">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:chat-square-like-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> آراء العملاء </span>
                </a>
            </li>


            <li class="menu-title mt-2"> اعدادات الموقع</li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin/public-setting/update') }}">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:settings-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> الاعدادات العامة </span>
                </a>
            </li>


            <li class="menu-title mt-2"> المستخدمين</li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebaradminprofile" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarCustomers">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:chat-square-like-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> حسابي </span>
                </a>
                <div class="collapse" id="sidebaradminprofile">
                    <ul class="nav sub-navbar-nav">

                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ url('admin/update_admin_details') }}"> تعديل البيانات
                            </a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ url('admin/update_admin_password') }}"> تعديل كلمة
                                المرور </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarCustomers" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarCustomers">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:users-group-two-rounded-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> العملاء </span>
                </a>
                <div class="collapse" id="sidebarCustomers">
                    <ul class="nav sub-navbar-nav">

                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="customer-list.html"> جميع العملاء </a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="customer-detail.html">Details</a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link menu-arrow" href="#sidebarbanners" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarbanners">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:case-round-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> البانرات الرئيسية </span>
                </a>
                <div class="collapse" id="sidebarbanners">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ url('admin/banners') }}">التفاصيل </a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
</div>
<!-- ========== App Menu End ========== -->
