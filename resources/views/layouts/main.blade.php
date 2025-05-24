<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <!-- CSS Links -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- Add this in your <head> section -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased">
<x-banner />

<div class="min-h-screen bg-gray-100">
{{--    <x-preloader/>--}}
    <x-back-to-top/>
    <x-main-navigation/>
    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
    <footer id="contact">
        <div class="rr-footer-main p-relative fix">
            <!-- footer area start -->
            <div class="rr-footer-area pt-85 p-relative" data-bg-color="#1B7261">
                <div class="container">
                    <div class="row gx-30">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50 wow rrfadeUp" data-wow-duration=".9s"
                             data-wow-delay=".3s">
                            <div class="rr-footer-widget footer-cols-1">
                                <div class="rr-footer-logo pb-20">
                                    <a href=""><img src="{{asset('assets/img/logo/logo-bgwhite.png')}}" alt="img" width=300></a>
                                </div>
                                <div class="rr-footer-widget-content mb-25">
                                    <p style="text-align: justify">With a dedicated team of professionals, we ensure a personalized experience tailored to your unique preferences. Our extensive database features profiles that prioritize compatibility, shared values, and mutual interests.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50 wow rrfadeUp" data-wow-duration=".9s"
                             data-wow-delay=".5s">
                            <div class="rr-footer-widget footer-cols-2">
                                <h4 class="rr-footer-title">Information</h4>
                                <div class="rr-footer-list ">
                                    <ul>
                                        <li><a href="/#about">About Us</a></li>
                                        <li><a href="/#services">Our Services</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50 wow rrfadeUp" data-wow-duration=".9s"
                             data-wow-delay=".3s">
                            <div class="rr-footer-widget footer-cols-1">
                                <h4 class="rr-footer-title">Contact</h4>
                                <div class="rr-footer-widget-content mb-25">
                                    <p>Would you have any enquiries.Please feel free to contuct us</p>
                                    <div class="rr-footer-widget-content-item">
                                        <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.4 1H13.6C14.37 1 15 1.63 15 2.4V10.8C15 11.57 14.37 12.2 13.6 12.2H2.4C1.63 12.2 1 11.57 1 10.8V2.4C1 1.63 1.63 1 2.4 1Z"
                                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M15 2.3999L8 7.2999L1 2.3999" stroke="white" stroke-width="1.5"
                                                  stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <?php
                                        $contact_phone = getenv('CONTACT_PHONE');
                                        $contact_email = getenv('CONTACT_EMAIL');
                                        ?>
                                        <a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a>
                                    </div>
                                    <div class="rr-footer-widget-content-item">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.67161 3.67583C10.3263 3.80331 10.9279 4.12286 11.3995 4.59359C11.8712 5.06432 12.1913 5.66481 12.319 6.3182M9.67161 1C11.0317 1.15081 12.3 1.75871 13.2683 2.72391C14.2365 3.6891 14.8472 4.95421 15 6.31151M14.3298 11.6498V13.6567C14.3305 13.843 14.2923 14.0274 14.2175 14.1981C14.1427 14.3688 14.033 14.522 13.8955 14.648C13.758 14.7739 13.5956 14.8698 13.4187 14.9295C13.2419 14.9892 13.0546 15.0113 12.8686 14.9946C10.8062 14.7709 8.8251 14.0675 7.08449 12.9409C5.46509 11.9138 4.09211 10.5434 3.06307 8.92713C1.93035 7.18196 1.22544 5.19502 1.00544 3.12728C0.988691 2.94229 1.01072 2.75585 1.07012 2.57982C1.12952 2.4038 1.22499 2.24204 1.35046 2.10486C1.47592 1.96768 1.62863 1.85808 1.79886 1.78303C1.96909 1.70798 2.15312 1.66913 2.33921 1.66896H4.34993C4.6752 1.66576 4.99053 1.78072 5.23716 1.99242C5.48379 2.20411 5.64488 2.49809 5.6904 2.81956C5.77527 3.4618 5.93266 4.0924 6.15957 4.69933C6.24974 4.93876 6.26926 5.19898 6.2158 5.44915C6.16235 5.69932 6.03816 5.92895 5.85796 6.11083L5.00676 6.9604C5.96088 8.63517 7.35021 10.0218 9.02818 10.9741L9.87939 10.1246C10.0616 9.94471 10.2917 9.82076 10.5423 9.76741C10.793 9.71405 11.0537 9.73353 11.2936 9.82354C11.9017 10.05 12.5335 10.2071 13.177 10.2918C13.5025 10.3376 13.7999 10.5013 14.0124 10.7517C14.225 11.0021 14.3379 11.3217 14.3298 11.6498Z"
                                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <a href="tel:<?php echo $contact_phone; ?>"><?php echo $contact_phone; ?></a>
                                    </div>
                                    <div class="rr-footer-widget-content-item">
                                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 3.6V14L5.45455 11.4L10.5455 14L15 11.4V1L10.5455 3.6L5.45455 1L1 3.6Z"
                                                  stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M5.45453 1V11.4" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                  stroke-linejoin="round" />
                                            <path d="M10.5455 3.6001V14.0001" stroke="white" stroke-width="1.5"
                                                  stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <a href=""> Patiala, Punjab</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50 wow rrfadeUp" data-wow-duration=".9s"
                             data-wow-delay=".7s">
                            <div class="rr-footer-widget footer-cols-3">
                                <h4 class="rr-footer-title">Instagram</h4>
                                <div class="rr-footer__widget-gallery-wrap">
                                    <div class="row gx-5">
                                        <div class="col-xl-4 col-lg-4 col-md-3 col-4  p-1">
                                            <div class="rr-footer__widget-gallery p-relative">
                                                <a href="{{asset('assets/img/gallery/img-xl.jpg')}}" class="our-gallery__item popup-image">
                                                    <img src="{{asset('assets/img/gallery/img.jpg')}}" alt="image not found">
                                                    <span><i class="fa-solid fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-3 col-4  p-1">
                                            <div class="rr-footer__widget-gallery p-relative">
                                                <a href="{{asset('assets/img/gallery/img-2-xl.jpg')}}" class="our-gallery__item popup-image">
                                                    <img src="{{asset('assets/img/gallery/img-2.jpg')}}" alt="image not found">
                                                    <span><i class="fa-solid fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-3 col-4  p-1">
                                            <div class="rr-footer__widget-gallery p-relative">
                                                <a href="{{asset('assets/img/gallery/img-3-xl.jpg')}}" class="our-gallery__item popup-image">
                                                    <img src="{{asset('assets/img/gallery/img-3.jpg')}}" alt="image not found">
                                                    <span><i class="fa-solid fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-3 col-4  p-1">
                                            <div class="rr-footer__widget-gallery p-relative">
                                                <a href="{{asset('assets/img/gallery/img-4-xl.jpg')}}" class="our-gallery__item popup-image">
                                                    <img src="{{asset('assets/img/gallery/img-4.jpg')}}" alt="image not found">
                                                    <span><i class="fa-solid fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-3 col-4  p-1">
                                            <div class="rr-footer__widget-gallery p-relative">
                                                <a href="{{asset('assets/img/gallery/img-5-xl.jpg')}}" class="our-gallery__item popup-image">
                                                    <img src="{{asset('assets/img/gallery/img-11.jpg')}}" alt="image not found">
                                                    <span><i class="fa-solid fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-3 col-4  p-1">
                                            <div class="rr-footer__widget-gallery p-relative">
                                                <a href="{{asset('assets/img/gallery/img-6-xl.jpg')}}" class="our-gallery__item popup-image">
                                                    <img src="{{asset('assets/img/gallery/img-6.jpg')}}" alt="image not found"><span><i
                                                            class="fa-solid fa-plus"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer area end -->

            <!-- copy-right area start -->
            <div class="rr-copyright-area p-relative" data-bg-color="#051145">
                <div class="container rr-copyright-space">
                    <div class="row align-items-center">
                        <div class="col-xl-12 wow rrfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                            <div class="rr-copyright-left text-center">
                                <p>© 2024 Design By Digital Marketing Online Solution. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- copy-right area end -->
        </div>
    </footer>
</div>

@stack('modals')

@livewireScripts
<!-- JS here -->
<script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
<script src="{{ asset('assets/js/vendor/waypoints.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-bundle.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/nice-select.js') }}"></script>
<script src="{{ asset('assets/js/purecounter.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/smooth-scroll.js') }}"></script>
<script src="{{ asset('assets/js/ajax-form.js') }}"></script>
<script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
