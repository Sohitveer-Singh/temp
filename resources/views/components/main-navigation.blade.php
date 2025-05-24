<?php
$contact_phone = getenv('CONTACT_PHONE');
$contact_email = getenv('CONTACT_EMAIL');
?>
<!-- search popup start -->
<!--
<div class="search__popup">
    <div class="container">
        <div class="row gx-30">
            <div class="col-xxl-12">
                <div class="search__wrapper">
                    <div class="search__top d-flex justify-content-between align-items-center">
                        <div class="search__logo">
                            <a href="index.html">
                                <img src="assets/img/logo/logo-white.png" alt="img">
                            </a>
                        </div>
                        <div class="search__close">
                            <button type="button" class="search__close-btn search-close-btn">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                    <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                          stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="search__form">
                        <form action="index.html#">
                            <div class="search__input">
                                <input class="search-input-field focus:outline-none shadow-none" type="text" placeholder="Type here to search...">
                                <span class="search-focus-border"></span>
                                <button type="submit">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path
                                            d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->
<!-- search popup end -->
<!-- rr-offcanvus-area-start -->
<div class="rroffcanvas-area">
    <div class="rroffcanvas">
        <div class="rroffcanvas__close-btn">
            <button class="close-btn"><i class="fal fa-times"></i></button>
        </div>
        <div class="rroffcanvas__logo">
            <a href="/">
                <img src="{{ asset('assets/img/logo/logo-bgwhite.png') }}" alt="Logo">
            </a>
        </div>
        <div class="rr-main-menu-mobile d-xl-none"></div>

        <nav class="-mx-3 flex flex-1 justify-start">
            @auth
                <div class="ms-2 mb-5 text-white">
                    <div class="py-2 text-xs text-gray-400">{{ __('Manage Account') }}</div>

                    <a href="{{ route('profile.show') }}" class="mb-4">{{ __('Profile') }}</a>
                    @if(\Illuminate\Support\Facades\Auth::user()->id===1)
                        <div class="mt-3">

                        <a href="{{ route('dashboard') }}">
                            {{ __('Dashboard') }}
                        </a>
                        </div>
                    @endif
                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <a href="{{ route('api-tokens.index') }}">{{ __('API Tokens') }}</a>
                    @endif

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data class="mt-4">
                        @csrf
                        <a href="{{ route('logout') }}" @click.prevent="$root.submit();">{{ __('Log Out') }}</a>
                    </form>
                </div>
            @else
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="rounded w-100 text-center ms-1 px-3 py-2 text-black ring-1 ring-white bg-white transition hover:text-black/70 focus-visible:bg-[#ccc] focus:bg-black focus:text-white">
                        Log in
                    </a>
                @endif
                {{-- @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="rounded w-100 text-center ms-1 px-3 py-2 text-black ring-1 ring-white bg-white transition hover:text-black/70 focus-visible:bg-[#ccc] focus:bg-black focus:text-white">
                        Register
                    </a>
                @endif --}}
            @endauth
        </nav>

        <div class="rroffcanvas__contact-info mt-6">
            <div class="rroffcanvas__contact-title">
                <h5>Contact us</h5>
            </div>
            <ul>
                <li>
                    <i class="fa-light fa-location-dot"></i>
                    <a href="#" target="_blank">Patiala, Punjab</a>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:{{ $contact_email }}">{{ $contact_email }}</a>
                </li>
                <li>
                    <i class="fal fa-phone-alt"></i>
                    <a href="tel:{{ $contact_phone }}">{{ $contact_phone }}</a>
                </li>
            </ul>
        </div>

        <div class="rroffcanvas__social">
            <div class="social-icon">
                <a href="/"><i class="fab fa-twitter"></i></a>
                <a href="/"><i class="fab fa-instagram"></i></a>
                <a href="/"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="body-overlay"></div>
<!-- rr-offcanvus-area-end -->
<!-- header top area start -->
<div class="rr-header-top hidden xl:block relative p-2">
    <div class="container mx-auto">
        <div class="rr-header-before">
            <div class="flex items-center">
                <div class="xxl:w-7/12 xl:w-7/12 lg:w-7/12">
                    <div class="rr-header-top-info text-right">
                        <ul class="flex items-center space-x-6">
                            <li>
                                <b><span><i class="fa-regular fa-clock"></i></span> Monday - Friday, 8:00am- 5:00 pm</b>
                            </li>
                            <li>
                                <a href="tel:{{ env('CONTACT_PHONE') }}" class="flex items-center text-gray-700 hover:underline">
                                    <span>
                                        <img src="{{ asset('assets/img/header/call.svg') }}" alt="" class="mr-2">
                                    </span>
                                    {{ env('CONTACT_PHONE') }}
                                </a>

                            </li>
                            <li>
                                <a href="" class="flex items-center text-gray-700 hover:underline">
                                    <span><i class="fa-regular fa-location-dot mr-2"></i></span>
                                    Patiala, Punjab
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="xxl:w-5/12 xl:w-5/12 lg:w-auto flex justify-end text-right">
                    <div class="rr-header-2-top-info flex items-center">
                        <!--<div class="rr-header-2-lang rr-header-lang-main hidden md:block mr-4">
                            <select class="hidden">
                                <option>English</option>
                                <option>Bangla</option>
                                <option>French</option>
                            </select>
                            <div class="nice-select" tabindex="0"><span class="current">English</span>
                                <ul class="list z-index-2">
                                    <li data-value="English" class="option selected focus">English</li>
                                    <li data-value="Bangla" class="option">Bangla</li>
                                    <li data-value="French" class="option">French</li>
                                </ul>
                            </div>
                        </div>-->
                        <div class="rr-header-main-social flex items-center">
                            <div class="rr-header-social ml-5 flex space-x-4">
                                <a href="/" class="flex items-center justify-center w-8 h-8 rounded-full">
                                    <i class="fa fa-facebook-f"></i>
                                </a>
                                <a href="/" class="flex items-center justify-center w-8 h-8 rounded-full">
                                    <i class="fa fa-twitter"></i>
                                </a>

                                <a href="/" class="flex items-center justify-center w-8 h-8 rounded-full">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- header top area end -->
<header class="rr-header-main z-index-3">
    <!-- header area start -->
    <div id="header-sticky" class="rr-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-5 col-5">
                    <div class="rr-header-logo">
                        <a href="{{route('home')}}"><img src="{{ asset('assets/img/logo/logo-final.png')}}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-1 col-1">
                    <div class="rr-header-main-menu d-none d-xl-block mr-16 p-relative">
                        <nav class="rr-main-menu-content text-end rr-header-1-before">
                            <ul>
                                <li>
                                    <a href="{{route('home')}}">Home</a>
                                </li>
                                <li><a href="/#about">about us</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-6">
                    <div class="rr-header-right d-flex align-items-center justify-content-center p-relative">
                        <div class="rr-header-contat d-none d-md-block ml-35">
                            @if (Route::has('login'))
                                <nav class="-mx-3 flex flex-1 justify-end">
                                    @auth
                                        <div class="me-3 relative">
                                            <x-dropdown align="right" width="48">
                                                <x-slot name="trigger">



                                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                            <span class="font-semibold text-2xl pr-5">{{ Auth::user()->name }}</span>

                                                            <img class="h-10 w-10 rounded-full object-cover bg-red-800" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                                        </button>
                                                    @else
                                                        <span class="inline-flex rounded-md outline-2 justify-content-between">
                                                                <span class="pr-5">{{ Auth::user()->name }}</span>
                                                            <button type="button" class="inline-flex items-center px-10 py-6 border-2 border-gray-500 text-xl leading-6 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                                            {{ Auth::user()->name }}

                                                                <svg class="ms-2 -me-0.5 h-10 w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                                </svg>
                                                            </button>
                                                        </span>

                                                    @endif
                                                </x-slot>
                                                <x-slot name="content">
                                                    <!-- Account Management -->
                                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                                        {{ __('Manage Account') }}
                                                    </div>
                                                    @if(\Illuminate\Support\Facades\Auth::user()->id===1)

                                                    <x-dropdown-link href="{{ route('dashboard') }}">
                                                        {{ __('Dashboard') }}
                                                    </x-dropdown-link>
                                                    @endif
                                                    <x-dropdown-link href="{{ route('profile.show') }}">
                                                        {{ __('Profile') }}
                                                    </x-dropdown-link>

                                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                                        <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                                            {{ __('API Tokens') }}
                                                        </x-dropdown-link>
                                                    @endif

                                                    <div class="border-t border-gray-200"></div>

                                                    <!-- Authentication -->
                                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                                        @csrf

                                                        <x-dropdown-link href="{{ route('logout') }}"
                                                                         @click.prevent="$root.submit();">
                                                            {{ __('Log Out') }}
                                                        </x-dropdown-link>
                                                    </form>
                                                </x-slot>
                                            </x-dropdown>
                                        </div>
                                    @else
                                        <a
                                            href="{{ route('login') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                        >
                                            Log in
                                        </a>

                                        {{-- @if (Route::has('register'))
                                            <a
                                                href="{{ route('register') }}"
                                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                            >
                                                Register
                                            </a>
                                        @endif --}}
                                    @endauth
                                </nav>
                            @endif

                        </div>
                        <div class="rr-header-bar d-xl-none">
                            <button class="rr-menu-bar"><i class="fa-solid fa-bars"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header area end -->

</header>
