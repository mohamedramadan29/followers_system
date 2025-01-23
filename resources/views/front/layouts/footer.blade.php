<div class="last_news_section">
    <button class="news_button" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
        aria-controls="offcanvasExample">
        <i class="bi bi-exclamation-triangle-fill"></i>
    </button>
</div>

@include('front.layouts.last_news_section')

<!-- ==================== Footer Start Here ==================== -->
@php
    use App\Models\admin\PublicSetting;
    $setting = PublicSetting::first();
@endphp

<footer class="footer-section ">
    <img src="{{ asset('assets/front/') }}/images/shapes/pattern.png" alt="" class="bg-pattern">
    <img src="{{ asset('assets/front/') }}/images/shapes/element1.png" alt="" class="element one">
    <img src="{{ asset('assets/front/') }}/images/shapes/element2.png" alt="" class="element two">
    <img src="{{ asset('assets/front/') }}/images/gradients/footer-gradient.png" alt="" class="bg--gradient">

    <div class="container container-two">
        <div class="row gy-5">
            <div class="col-xl-3 col-sm-6">
                <div class="footer-widget">
                    <div class="footer-widget__logo">
                        {{-- <a href="{{ url('/') }}"> متجر المتابعين </a> --}}
                        <h5 class="footer-widget__title text-white"> متجر المتابعين </h5>
                    </div>
                    <p class="footer-widget__desc">
                        نقدم لك خدمات التواصل الاجتماعي لتعزيز تواجدك بين منافسيك، أسهل وأبسط وأسرع خدمات سوشيال ميديا
                        في العالم العربي
                    </p>

                </div>
            </div>
            <div class="col-xl-2 col-sm-6 col-xs-6">
                <div class="footer-widget">
                    <h5 class="footer-widget__title text-white"> روابط </h5>
                    <ul class="footer-lists">
                        <li class="footer-lists__item"><a href="{{ url('/') }}" class="footer-lists__link">
                                الرئيسية
                            </a></li>
                        <li class="footer-lists__item"><a href="product-details.html" class="footer-lists__link">
                                الاقسام </a></li>
                        <li class="footer-lists__item"><a href="profile.html" class="footer-lists__link"> الخدمات </a>
                        </li>
                        <li class="footer-lists__item"><a href="{{ url('contact') }}" class="footer-lists__link">تواصل
                                معنا
                            </a>
                        </li>
                        <li class="footer-lists__item"><a href="{{ url('blog') }}" class="footer-lists__link"> المدونة
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-xs-6 ps-xl-5">
                <div class="footer-widget">
                    <h5 class="footer-widget__title text-white"> تابعنا </h5>
                    <div class="footer-widget__social">
                        <ul class="social-icon-list">
                            @if ($setting['facebook'] != '')
                                <li class="social-icon-list__item">
                                    <a href="{{ $setting['facebook'] }}" class="social-icon-list__link  flx-center"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                            @endif

                            @if ($setting['twitter'] != '')
                                <li class="social-icon-list__item">
                                    <a href="{{ $setting['twitter'] }}" class="social-icon-list__link  flx-center"> <i
                                            class="fab fa-twitter"></i></a>
                                </li>
                            @endif

                            @if ($setting['linkedin'] != '')
                                <li class="social-icon-list__item">
                                    <a href="{{ $setting['linkedin'] }}" class="social-icon-list__link  flx-center"> <i
                                            class="fab fa-linkedin-in"></i></a>
                                </li>
                            @endif

                            @if ($setting['pinterest'] != '')
                                <li class="social-icon-list__item">
                                    <a href="{{ $setting['pinterest'] }}" class="social-icon-list__link  flx-center">
                                        <i class="fab fa-pinterest-p"></i></a>
                                </li>
                            @endif

                            @if ($setting['youtube'] != '')
                                <li class="social-icon-list__item">
                                    <a href="{{ $setting['youtube'] }}" class="social-icon-list__link  flx-center"> <i
                                            class="fab fa-youtube"></i></a>
                                </li>
                            @endif

                            @if ($setting['instagram'] != '')
                                <li class="social-icon-list__item">
                                    <a href="{{ $setting['instagram'] }}" class="social-icon-list__link flx-center">
                                        <i class="fab fa-instagram"></i></a>
                                </li>
                            @endif

                            @if ($setting['whatsapp'] != '')
                                <li class="social-icon-list__item">
                                    <a href="{{ $setting['whatsapp'] }}" class="social-icon-list__link flx-center">
                                        <i class="fab fa-whatsapp"></i></a>
                                </li>
                            @endif

                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="footer-widget">
                    <h5 class="footer-widget__title text-white">اشترك معنا </h5>
                    <p class="footer-widget__desc"> اشترك معنا الان للحصول علي افضل العروض </p>
                    <form action="#" class="mt-4 subscribe-box d-flex align-items-center flex-column gap-2">
                        <input type="text" class="form-control common-input pill text-white"
                            placeholder=" ادخل البريد الالكتروني  ">
                        <button type="submit" class="btn btn-main btn-lg w-100 pill"> اشترك الان </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- bottom Footer -->
<div class="bottom-footer">
    <div class="container container-two">
        <div class="bottom-footer__inner flx-between gap-3">
            <p class="bottom-footer__text font-14">جميع الحقوق محفوظة © 2024 أرخص موقع زيادة متابعين </p>
            <div class="footer-links">
                <a href="{{ url('terms') }}" class="footer-link font-14"> الشروط والاحكام </a>
                <a href="{{ url('return-policy') }}" class="footer-link font-14"> سياسة الاستبدال و الاسترجاع </a>
                <a href="{{ url('privacy-policy') }}" class="footer-link font-14"> سياسة الاستخدام والخصوصية </a>
            </div>
        </div>
    </div>
</div>
<!-- ==================== Footer End Here ==================== -->

</main>

<!-- Jquery js -->
<script src="{{ asset('assets/front/') }}/js/jquery-3.7.1.min.js"></script>

<!-- Bootstrap Bundle Js -->
<script src="{{ asset('assets/front/') }}/js/boostrap.bundle.min.js"></script>
<!-- CountDown -->
<script src="{{ asset('assets/front/') }}/js/countdown.js"></script>
<!-- counter up -->
<script src="{{ asset('assets/front/') }}/js/counterup.min.js"></script>
<!-- Slick js -->
<script src="{{ asset('assets/front/') }}/js/slick.min.js"></script>
<!-- magnific popup -->
<script src="{{ asset('assets/front/') }}/js/jquery.magnific-popup.js"></script>
<!-- apex chart -->
<script src="{{ asset('assets/front/') }}/js/apexchart.js"></script>
<!-- marquee -->
<script src="{{ asset('assets/front/') }}/js/marquee.min.js"></script>

<!-- main js -->
<script src="{{ asset('assets/front/') }}/js/main.js"></script>
@toastifyJs

{!! NoCaptcha::renderJs() !!}
</body>

</html>
