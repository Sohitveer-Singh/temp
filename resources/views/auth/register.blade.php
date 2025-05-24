<x-main-layout>
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb__area breadcrumb__height fix p-relative" data-bg-color="#F6F8FF">
        <div class="breadcrumb__shap">
            <div class="shap">
                <img src="assets/img/error/shap.png" alt="">
            </div>
            <div class="shap-2">
                <img src="assets/img/error/shape-2.png" alt="">
            </div>
            <div class="shap-3">
                <img src="assets/img/error/shape-3.png" alt="">
            </div>
            <div class="shap-4">
                <img src="assets/img/error/shape-4.png" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row gx-30">
                <div class="col-xl-12 col-md-12 text-center">
                    <div class="breadcrumb__content z-index">
                        <div class="breadcrumb__section-title-box">
                            <h3 class="breadcrumb__title">Sign Up</h3>
                        </div>
                        <div class="breadcrumb__list">
                            <span><a href="/">Home</a></span>
                            <span class="dvdr"><i class="fa-regular fa-chevron-right"></i></span>
                            <span>Sign Up</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- rr-register area start  -->
    <div class="rr-register-area pt-120 pb-120">
        <div class="container container-small">
            <div class="row justify-content-center">
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-1 col-12"></div>

                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-10 col-12">
                    <div class="rr-register-all-content">
                        <div class="rr-register-title-wrapper text-center mb-40">
                            <h3 class="rr-register-title">Welcome</h3>
                            <p>Set your Credentials to make your account</p>
                        </div>


                        <form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        <x-label for="name" value="{{ __('Name') }}" />
        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        @error('name')
            <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
        @enderror
    </div>

    <div class="mt-4">
        <x-label for="email" value="{{ __('Phone No') }}" />
        <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autocomplete="email" />
        @error('email')
            <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
        @enderror
    </div>

    <div class="mt-4">
        <x-label for="password" value="{{ __('Password') }}" />
        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
        @error('password')
            <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
        @enderror
    </div>

    <div class="mt-4">
        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
        <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
        @error('password_confirmation')
            <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
        @enderror
    </div>


    <div class="flex items-center justify-center mt-4">
        <x-button class="w-100 py-4 rounded-0 bg-[#1B7262] justify-content-center text-2xl">
            {{ __('Register') }}
        </x-button>
    </div>
</form>
                        <div class="rr-register-sign-social text-center mt-16">
                            <h5>Don’t have an account? <a href="{{ route('login')}}">  {{ __('Sign In') }}</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-1 col-12"></div>
            </div>
        </div>
    </div>
    <!-- rr-register area end  -->
</main>
</x-main-layout>
