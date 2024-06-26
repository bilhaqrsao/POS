<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ThemeMarch">
    <!-- Favicon Icon -->
    <link rel="icon" href="{{ asset('public_assets/img/favicon.png')}}">
    <!-- Site Title -->
    <title>Posing Landing Page</title>
    <link rel="stylesheet" href="{{ asset('public_assets/css/plugins/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public_assets/css/plugins/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('public_assets/css/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('public_assets/css/style.css')}}">
    @livewireStyles
</head>

<body>
    <div class="cs-preloader cs-white_bg cs-center">
        <div class="cs-preloader_in">
            <img src="{{ asset('public_assets/img/logo_mini.svg')}}" alt="Logo">
        </div>
    </div>
    <!-- Start Header Section -->
    @livewire('public.components.header')
    <!-- End Header Section -->

    {{ $slot }}

    <!-- Start Footer -->
    @livewire('public.components.footer')
    <!-- End Footer -->

    <!-- Start Login Modal -->
    <div class="cs-modal" data-modal="login">
        <div class="cs-close_overlay"></div>
        <div class="cs-modal_in">
            <div class="cs-modal_container cs-white_bg">
                <button class="cs-close_modal cs-center cs-primary_bg">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.7071 1.70711C12.0976 1.31658 12.0976 0.683417 11.7071 0.292893C11.3166 -0.0976311 10.6834 -0.0976311 10.2929 0.292893L11.7071 1.70711ZM0.292893 10.2929C-0.0976311 10.6834 -0.0976311 11.3166 0.292893 11.7071C0.683417 12.0976 1.31658 12.0976 1.70711 11.7071L0.292893 10.2929ZM1.70711 0.292893C1.31658 -0.0976311 0.683417 -0.0976311 0.292893 0.292893C-0.0976311 0.683417 -0.0976311 1.31658 0.292893 1.70711L1.70711 0.292893ZM10.2929 11.7071C10.6834 12.0976 11.3166 12.0976 11.7071 11.7071C12.0976 11.3166 12.0976 10.6834 11.7071 10.2929L10.2929 11.7071ZM10.2929 0.292893L0.292893 10.2929L1.70711 11.7071L11.7071 1.70711L10.2929 0.292893ZM0.292893 1.70711L10.2929 11.7071L11.7071 10.2929L1.70711 0.292893L0.292893 1.70711Z"
                            fill="white" />
                    </svg>
                </button>
                <div class="cs-height_95 cs-height_lg_70"></div>
                <div class="cs-login">
                    <div class="cs-login_left">
                        <img src="public_assets/img/about_img_1.png" alt="Login Thumb">
                    </div>
                    <div class="cs-login_right">
                        <form class="cs-login_form">
                            <h2>Login in to your posing account</h2>
                            <div class="cs-height_30 cs-height_lg_30"></div>
                            <input type="text" class="cs-form_field cs-border_color" placeholder="Email address">
                            <div class="cs-height_20 cs-height_lg_20"></div>
                            <input type="password" class="cs-form_field cs-border_color" placeholder="Password">
                            <div class="cs-height_20 cs-height_lg_20"></div>
                            <div class="cs-login_meta">
                                <div>
                                    <div class="cs-check">
                                        <input type="checkbox">
                                        <label>Remember me</label>
                                    </div>
                                </div>
                                <div><span class="cs-text_btn cs-modal_btn" data-modal="forgot"><span>Forgot
                                            Password?</span></span></div>
                            </div>
                            <div class="cs-height_20 cs-height_lg_20"></div>
                            <button class="cs-btn cs-size_md w-100"><span>Login</span></button>
                            <div class="cs-height_20 cs-height_lg_20"></div>
                            <p class="cs-m0">
                                Don't have an account?
                                <span class="cs-text_btn cs-modal_btn"
                                    data-modal="register"><span>Register</span></span>
                            </p>
                            <div class="cs-height_30 cs-height_lg_30"></div>
                            <div class="cs-or"><span>or</span></div>
                            <div class="cs-height_40 cs-height_lg_30"></div>
                            <div class="cs-social_btns cs-style2">
                                <a href="#" target="_blank" class="cs-center cs-color1">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.3187 8.34992C16.329 7.78817 16.2694 7.22728 16.1411 6.67969H8.31738V9.71004H12.9094C12.8229 10.2417 12.6273 10.7506 12.3343 11.206C12.0413 11.6614 11.657 12.0539 11.2047 12.3596V12.4629L13.6785 14.3399L13.8506 14.3562C15.4248 12.9335 16.3326 10.8362 16.3326 8.34992"
                                            fill="currentColor" />
                                        <path
                                            d="M8.3182 16.3333C10.567 16.3333 12.4577 15.6097 13.8375 14.3556L11.2055 12.359C10.3535 12.9194 9.34397 13.2048 8.3182 13.1751C7.26397 13.1691 6.23842 12.838 5.38719 12.2286C4.53597 11.6192 3.90232 10.7625 3.57621 9.78021H3.47904L0.905385 11.7306L0.87207 11.8231C1.56522 13.1759 2.62872 14.3132 3.94369 15.1077C5.25865 15.9023 6.77328 16.3228 8.3182 16.3224"
                                            fill="currentColor" />
                                        <path
                                            d="M3.58123 9.78285C3.39838 9.26292 3.30457 8.71693 3.3036 8.16701C3.30991 7.61843 3.40359 7.07419 3.58123 6.55392V6.4451L0.977035 4.46204L0.890987 4.50285C0.305173 5.64191 0 6.89966 0 8.17517C0 9.45068 0.305173 10.7084 0.890987 11.8475L3.59513 9.79643"
                                            fill="currentColor" />
                                        <path
                                            d="M8.3182 3.15874C9.51172 3.14118 10.6659 3.57696 11.5387 4.37471L13.893 2.12507C12.3845 0.738085 10.3868 -0.0232452 8.3182 0.000541035C6.77299 0.000338841 5.25817 0.421321 3.94318 1.21638C2.62818 2.01144 1.56484 3.14925 0.87207 4.50256L3.56509 6.55363C3.89512 5.57159 4.5313 4.71575 5.38401 4.10671C6.23672 3.49766 7.263 3.16608 8.3182 3.15874Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                                <a href="#" target="_blank" class="cs-center cs-color2">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.98623 8.86489e-07C6.08929 0.0017225 4.2548 0.695882 2.81063 1.95834C1.36645 3.2208 0.406756 4.9693 0.103097 6.89129C-0.200562 8.81328 0.171598 10.7835 1.15306 12.4497C2.13452 14.1159 3.66128 15.3695 5.46047 15.9865C5.85983 16.0616 6.00621 15.8084 6.00621 15.5917C6.00621 15.3749 6.00621 14.7482 6.00621 14.0636C3.78364 14.5593 3.31323 13.0957 3.31323 13.0957C2.94942 12.1471 2.42671 11.896 2.42671 11.896C1.70119 11.3874 2.48102 11.3981 2.48102 11.3981C3.28391 11.4561 3.70628 12.2415 3.70628 12.2415C4.41926 13.497 5.57552 13.1343 6.03132 12.924C6.06674 12.5076 6.24709 12.1183 6.53938 11.8273C4.76426 11.6127 2.89715 10.9173 2.89715 7.77327C2.88686 6.95809 3.18172 6.16998 3.72093 5.57139C3.47672 4.8644 3.50436 4.08841 3.79826 3.40163C3.79826 3.40163 4.46943 3.18701 5.99574 4.2429C7.30617 3.87376 8.68931 3.87376 9.99974 4.2429C11.524 3.18057 12.193 3.40163 12.193 3.40163C12.4882 4.08798 12.5166 4.86423 12.2725 5.57139C12.8118 6.16972 13.1061 6.95818 13.0941 7.77327C13.0941 10.9238 11.2249 11.617 9.44563 11.8209C9.73208 12.0763 9.98718 12.5742 9.98718 13.3404C9.98718 14.437 9.98718 15.3212 9.98718 15.5917C9.98718 15.8063 10.1314 16.0659 10.535 15.9844C12.3355 15.3685 13.8638 14.115 14.8462 12.4482C15.8286 10.7813 16.2009 8.81009 15.8966 6.88721C15.5922 4.96432 14.6311 3.21536 13.1852 1.95347C11.7392 0.691575 9.90298 -0.000904397 8.00507 8.86489e-07H7.98623Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                                <a href="#" target="_blank" class="cs-center cs-color3">
                                    <svg width="8" height="16" viewBox="0 0 8 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.8194 2.64177H8V0.194847C7.30745 0.0755463 6.6076 0.0104213 5.90608 0C3.76786 0 2.37343 1.3769 2.37343 3.86767V6.05804H0V8.93201H2.36884V16H5.2921V8.93201H7.47003L7.88545 6.05804H5.28904V4.19403C5.29668 3.40816 5.65865 2.64177 6.8194 2.64177Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                                <a href="#" target="_blank" class="cs-center cs-color4">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.319909 5.44236L3.65951 5.38763L3.83385 16.276L0.494274 16.3328L0.319909 5.44236ZM1.90356 0.00028458C2.28658 -0.00632752 2.66294 0.102414 2.985 0.312783C3.30707 0.523153 3.56037 0.825679 3.71289 1.1821C3.86542 1.53852 3.9103 1.93284 3.84185 2.31514C3.77341 2.69744 3.59474 3.05054 3.32841 3.32981C3.06208 3.60908 2.72006 3.80197 2.34563 3.88406C1.97121 3.96615 1.5812 3.93375 1.22493 3.79098C0.868658 3.6482 0.562148 3.40144 0.344156 3.08194C0.126164 2.76244 0.00650348 2.38456 0.00028934 1.99606C-0.00410782 1.73821 0.0416518 1.48201 0.134953 1.24211C0.228253 1.00221 0.367265 0.783325 0.544035 0.597964C0.720806 0.412604 0.93185 0.26441 1.16513 0.161854C1.39842 0.0592974 1.64934 0.00439659 1.90356 0.00028458Z"
                                            fill="currentColor" />
                                        <path
                                            d="M5.75391 5.35233L8.95236 5.2997L8.97726 6.78813H9.02292C9.45256 5.92498 10.5277 5.00288 12.1529 4.97762C15.5298 4.92078 16.1898 7.16707 16.2376 10.0997L16.333 16.0723L12.9976 16.127L12.9125 10.8302C12.8918 9.56706 12.844 7.94392 11.1317 7.97128C9.41936 7.99865 9.1516 9.38179 9.17443 10.8028L9.26161 16.1881L5.92825 16.2428L5.75391 5.35233Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="cs-height_100 cs-height_lg_70"></div>
            </div>
        </div>
    </div>
    <!-- End Login Modal -->

    <!-- Start Register Modal -->
    <div class="cs-modal" data-modal="register">
        <div class="cs-close_overlay"></div>
        <div class="cs-modal_in">
            <div class="cs-modal_container cs-white_bg">
                <button class="cs-close_modal cs-center cs-primary_bg">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.7071 1.70711C12.0976 1.31658 12.0976 0.683417 11.7071 0.292893C11.3166 -0.0976311 10.6834 -0.0976311 10.2929 0.292893L11.7071 1.70711ZM0.292893 10.2929C-0.0976311 10.6834 -0.0976311 11.3166 0.292893 11.7071C0.683417 12.0976 1.31658 12.0976 1.70711 11.7071L0.292893 10.2929ZM1.70711 0.292893C1.31658 -0.0976311 0.683417 -0.0976311 0.292893 0.292893C-0.0976311 0.683417 -0.0976311 1.31658 0.292893 1.70711L1.70711 0.292893ZM10.2929 11.7071C10.6834 12.0976 11.3166 12.0976 11.7071 11.7071C12.0976 11.3166 12.0976 10.6834 11.7071 10.2929L10.2929 11.7071ZM10.2929 0.292893L0.292893 10.2929L1.70711 11.7071L11.7071 1.70711L10.2929 0.292893ZM0.292893 1.70711L10.2929 11.7071L11.7071 10.2929L1.70711 0.292893L0.292893 1.70711Z"
                            fill="white" />
                    </svg>
                </button>
                <div class="cs-height_95 cs-height_lg_70"></div>
                <div class="cs-login">
                    <div class="cs-login_left">
                        <img src="public_assets/img/retail-store.png" alt="Login Thumb">
                    </div>
                    <div class="cs-login_right">
                        <form class="cs-login_form">
                            <h2>Create your new account</h2>
                            <div class="cs-height_30 cs-height_lg_30"></div>
                            <input type="text" class="cs-form_field cs-border_color" placeholder="Your Name">
                            <div class="cs-height_20 cs-height_lg_20"></div>
                            <input type="text" class="cs-form_field cs-border_color" placeholder="Email address">
                            <div class="cs-height_20 cs-height_lg_20"></div>
                            <input type="password" class="cs-form_field cs-border_color" placeholder="Password">
                            <div class="cs-height_20 cs-height_lg_20"></div>
                            <div class="cs-login_meta">
                                <div class="cs-check">
                                    <input type="checkbox">
                                    <label>I agree to the terms of service</label>
                                </div>
                            </div>
                            <div class="cs-height_20 cs-height_lg_20"></div>
                            <button class="cs-btn cs-size_md w-100"><span>Register</span></button>
                            <div class="cs-height_20 cs-height_lg_20"></div>
                            <p class="cs-m0">
                                Already have an account?
                                <span class="cs-text_btn cs-modal_btn" data-modal="login"><span>Login</span></span>
                            </p>
                            <div class="cs-height_30 cs-height_lg_30"></div>
                            <div class="cs-or"><span>or</span></div>
                            <div class="cs-height_40 cs-height_lg_30"></div>
                            <div class="cs-social_btns cs-style2">
                                <a href="#" target="_blank" class="cs-center cs-color1">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.3187 8.34992C16.329 7.78817 16.2694 7.22728 16.1411 6.67969H8.31738V9.71004H12.9094C12.8229 10.2417 12.6273 10.7506 12.3343 11.206C12.0413 11.6614 11.657 12.0539 11.2047 12.3596V12.4629L13.6785 14.3399L13.8506 14.3562C15.4248 12.9335 16.3326 10.8362 16.3326 8.34992"
                                            fill="currentColor" />
                                        <path
                                            d="M8.3182 16.3333C10.567 16.3333 12.4577 15.6097 13.8375 14.3556L11.2055 12.359C10.3535 12.9194 9.34397 13.2048 8.3182 13.1751C7.26397 13.1691 6.23842 12.838 5.38719 12.2286C4.53597 11.6192 3.90232 10.7625 3.57621 9.78021H3.47904L0.905385 11.7306L0.87207 11.8231C1.56522 13.1759 2.62872 14.3132 3.94369 15.1077C5.25865 15.9023 6.77328 16.3228 8.3182 16.3224"
                                            fill="currentColor" />
                                        <path
                                            d="M3.58123 9.78285C3.39838 9.26292 3.30457 8.71693 3.3036 8.16701C3.30991 7.61843 3.40359 7.07419 3.58123 6.55392V6.4451L0.977035 4.46204L0.890987 4.50285C0.305173 5.64191 0 6.89966 0 8.17517C0 9.45068 0.305173 10.7084 0.890987 11.8475L3.59513 9.79643"
                                            fill="currentColor" />
                                        <path
                                            d="M8.3182 3.15874C9.51172 3.14118 10.6659 3.57696 11.5387 4.37471L13.893 2.12507C12.3845 0.738085 10.3868 -0.0232452 8.3182 0.000541035C6.77299 0.000338841 5.25817 0.421321 3.94318 1.21638C2.62818 2.01144 1.56484 3.14925 0.87207 4.50256L3.56509 6.55363C3.89512 5.57159 4.5313 4.71575 5.38401 4.10671C6.23672 3.49766 7.263 3.16608 8.3182 3.15874Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                                <a href="#" target="_blank" class="cs-center cs-color2">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.98623 8.86489e-07C6.08929 0.0017225 4.2548 0.695882 2.81063 1.95834C1.36645 3.2208 0.406756 4.9693 0.103097 6.89129C-0.200562 8.81328 0.171598 10.7835 1.15306 12.4497C2.13452 14.1159 3.66128 15.3695 5.46047 15.9865C5.85983 16.0616 6.00621 15.8084 6.00621 15.5917C6.00621 15.3749 6.00621 14.7482 6.00621 14.0636C3.78364 14.5593 3.31323 13.0957 3.31323 13.0957C2.94942 12.1471 2.42671 11.896 2.42671 11.896C1.70119 11.3874 2.48102 11.3981 2.48102 11.3981C3.28391 11.4561 3.70628 12.2415 3.70628 12.2415C4.41926 13.497 5.57552 13.1343 6.03132 12.924C6.06674 12.5076 6.24709 12.1183 6.53938 11.8273C4.76426 11.6127 2.89715 10.9173 2.89715 7.77327C2.88686 6.95809 3.18172 6.16998 3.72093 5.57139C3.47672 4.8644 3.50436 4.08841 3.79826 3.40163C3.79826 3.40163 4.46943 3.18701 5.99574 4.2429C7.30617 3.87376 8.68931 3.87376 9.99974 4.2429C11.524 3.18057 12.193 3.40163 12.193 3.40163C12.4882 4.08798 12.5166 4.86423 12.2725 5.57139C12.8118 6.16972 13.1061 6.95818 13.0941 7.77327C13.0941 10.9238 11.2249 11.617 9.44563 11.8209C9.73208 12.0763 9.98718 12.5742 9.98718 13.3404C9.98718 14.437 9.98718 15.3212 9.98718 15.5917C9.98718 15.8063 10.1314 16.0659 10.535 15.9844C12.3355 15.3685 13.8638 14.115 14.8462 12.4482C15.8286 10.7813 16.2009 8.81009 15.8966 6.88721C15.5922 4.96432 14.6311 3.21536 13.1852 1.95347C11.7392 0.691575 9.90298 -0.000904397 8.00507 8.86489e-07H7.98623Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                                <a href="#" target="_blank" class="cs-center cs-color3">
                                    <svg width="8" height="16" viewBox="0 0 8 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.8194 2.64177H8V0.194847C7.30745 0.0755463 6.6076 0.0104213 5.90608 0C3.76786 0 2.37343 1.3769 2.37343 3.86767V6.05804H0V8.93201H2.36884V16H5.2921V8.93201H7.47003L7.88545 6.05804H5.28904V4.19403C5.29668 3.40816 5.65865 2.64177 6.8194 2.64177Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                                <a href="#" target="_blank" class="cs-center cs-color4">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.319909 5.44236L3.65951 5.38763L3.83385 16.276L0.494274 16.3328L0.319909 5.44236ZM1.90356 0.00028458C2.28658 -0.00632752 2.66294 0.102414 2.985 0.312783C3.30707 0.523153 3.56037 0.825679 3.71289 1.1821C3.86542 1.53852 3.9103 1.93284 3.84185 2.31514C3.77341 2.69744 3.59474 3.05054 3.32841 3.32981C3.06208 3.60908 2.72006 3.80197 2.34563 3.88406C1.97121 3.96615 1.5812 3.93375 1.22493 3.79098C0.868658 3.6482 0.562148 3.40144 0.344156 3.08194C0.126164 2.76244 0.00650348 2.38456 0.00028934 1.99606C-0.00410782 1.73821 0.0416518 1.48201 0.134953 1.24211C0.228253 1.00221 0.367265 0.783325 0.544035 0.597964C0.720806 0.412604 0.93185 0.26441 1.16513 0.161854C1.39842 0.0592974 1.64934 0.00439659 1.90356 0.00028458Z"
                                            fill="currentColor" />
                                        <path
                                            d="M5.75391 5.35233L8.95236 5.2997L8.97726 6.78813H9.02292C9.45256 5.92498 10.5277 5.00288 12.1529 4.97762C15.5298 4.92078 16.1898 7.16707 16.2376 10.0997L16.333 16.0723L12.9976 16.127L12.9125 10.8302C12.8918 9.56706 12.844 7.94392 11.1317 7.97128C9.41936 7.99865 9.1516 9.38179 9.17443 10.8028L9.26161 16.1881L5.92825 16.2428L5.75391 5.35233Z"
                                            fill="currentColor" />
                                    </svg>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="cs-height_100 cs-height_lg_70"></div>
            </div>
        </div>
    </div>
    <!-- End Register Modal -->

    <!-- Start Login Modal -->
    <div class="cs-modal" data-modal="forgot">
        <div class="cs-close_overlay"></div>
        <div class="cs-modal_in">
            <div class="cs-modal_container cs-white_bg">
                <button class="cs-close_modal cs-center cs-primary_bg">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.7071 1.70711C12.0976 1.31658 12.0976 0.683417 11.7071 0.292893C11.3166 -0.0976311 10.6834 -0.0976311 10.2929 0.292893L11.7071 1.70711ZM0.292893 10.2929C-0.0976311 10.6834 -0.0976311 11.3166 0.292893 11.7071C0.683417 12.0976 1.31658 12.0976 1.70711 11.7071L0.292893 10.2929ZM1.70711 0.292893C1.31658 -0.0976311 0.683417 -0.0976311 0.292893 0.292893C-0.0976311 0.683417 -0.0976311 1.31658 0.292893 1.70711L1.70711 0.292893ZM10.2929 11.7071C10.6834 12.0976 11.3166 12.0976 11.7071 11.7071C12.0976 11.3166 12.0976 10.6834 11.7071 10.2929L10.2929 11.7071ZM10.2929 0.292893L0.292893 10.2929L1.70711 11.7071L11.7071 1.70711L10.2929 0.292893ZM0.292893 1.70711L10.2929 11.7071L11.7071 10.2929L1.70711 0.292893L0.292893 1.70711Z"
                            fill="white" />
                    </svg>
                </button>
                <div class="cs-height_95 cs-height_lg_70"></div>
                <div class="cs-login">
                    <div class="cs-login_left">
                        <img src="public_assets/img/about_img_1.png" alt="Login Thumb">
                    </div>
                    <div class="cs-login_right">
                        <form class="cs-login_form">
                            <h2>Forgot your Password</h2>
                            <div class="cs-height_30 cs-height_lg_30"></div>
                            <input type="text" class="cs-form_field cs-border_color" placeholder="Email address">
                            <div class="cs-height_20 cs-height_lg_20"></div>
                            <button class="cs-btn cs-size_md w-100"><span>Send Me Email</span></button>
                            <div class="cs-height_20 cs-height_lg_20"></div>
                            <p class="cs-m0">
                                Don't have an account?
                                <span class="cs-text_btn cs-modal_btn"
                                    data-modal="register"><span>Register</span></span>
                            </p>
                        </form>
                    </div>
                </div>
                <div class="cs-height_100 cs-height_lg_70"></div>
            </div>
        </div>
    </div>
    <!-- End Login Modal -->

    <!-- Start Blog Details -->
    <div class="cs-modal" data-modal="details">
        <div class="cs-close_overlay"></div>
        <div class="cs-modal_in">
            <div class="cs-modal_container cs-white_bg">
                <button class="cs-close_modal cs-center cs-primary_bg">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.7071 1.70711C12.0976 1.31658 12.0976 0.683417 11.7071 0.292893C11.3166 -0.0976311 10.6834 -0.0976311 10.2929 0.292893L11.7071 1.70711ZM0.292893 10.2929C-0.0976311 10.6834 -0.0976311 11.3166 0.292893 11.7071C0.683417 12.0976 1.31658 12.0976 1.70711 11.7071L0.292893 10.2929ZM1.70711 0.292893C1.31658 -0.0976311 0.683417 -0.0976311 0.292893 0.292893C-0.0976311 0.683417 -0.0976311 1.31658 0.292893 1.70711L1.70711 0.292893ZM10.2929 11.7071C10.6834 12.0976 11.3166 12.0976 11.7071 11.7071C12.0976 11.3166 12.0976 10.6834 11.7071 10.2929L10.2929 11.7071ZM10.2929 0.292893L0.292893 10.2929L1.70711 11.7071L11.7071 1.70711L10.2929 0.292893ZM0.292893 1.70711L10.2929 11.7071L11.7071 10.2929L1.70711 0.292893L0.292893 1.70711Z"
                            fill="white" />
                    </svg>
                </button>
                <div class="cs-height_60 cs-height_lg_60"></div>
                <div class="cs-blog_details">
                    <ul class="cs-post_meta cs-mp0">
                        <li>
                            <span class="cs-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512">
                                    <path fill="currentColor"
                                        d="M313.6 304c-28.7 0-42.5 16-89.6 16c-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4c14.6 0 38.3 16 89.6 16c51.7 0 74.9-16 89.6-16c47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0S80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96s-96-43.1-96-96s43.1-96 96-96z" />
                                    </svg>
                            </span>
                            admin
                        </li>
                        <li>
                            <span class="cs-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em"
                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512">
                                    <path fill="currentColor"
                                        d="M152 64h144V24c0-13.25 10.7-24 24-24s24 10.75 24 24v40h40c35.3 0 64 28.65 64 64v320c0 35.3-28.7 64-64 64H64c-35.35 0-64-28.7-64-64V128c0-35.35 28.65-64 64-64h40V24c0-13.25 10.7-24 24-24s24 10.75 24 24v40zM48 448c0 8.8 7.16 16 16 16h320c8.8 0 16-7.2 16-16V192H48v256z" />
                                    </svg>
                            </span>
                            12.09.2022
                        </li>
                    </ul>
                    <h2>Point of sale software card of using a payroll software all for your company!</h2>
                    <img src="public_assets/img/post_details_1.jpeg" alt="Details" class="cs-radius_10 w-100">
                    <h3>How to used point of sale software card?</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ventore veritatis et quasi architecto beatae vitae dicta sunt
                        explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur fugit, consequuntur magni
                        dolores eos qui ratione voluptatem sequi nesciuntBut in certain circumstances and owing to the
                        claims.</p>
                    <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is
                        pain, but because occasionally circumstances occ in which toil and pain can procure him some
                        great pleasure. To take a trivial example, which of us ever undertakes laborious physical
                        exercise, except to obtain some advantage from it? But who has any right to find fault with a
                        man who chooses.</p>
                    <div class="cs-height_10 cs-height_lg_10"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="public_assets/img/post_details_2.jpeg" alt="Details" class="cs-radius_10 w-100">
                        </div>
                        <div class="col-lg-6">
                            <img src="public_assets/img/post_details_3.jpeg" alt="Details" class="cs-radius_10 w-100">
                        </div>
                    </div>
                    <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of
                        choice is untrammelled and when nothing prevents our being able to do what we like best, every
                        pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the
                        claims of duty or the obligations of business it will frequently occur that pleasures have.</p>
                    <div class="cs-height_10 cs-height_lg_10"></div>
                    <blockquote>
                        <svg width="33" height="23" viewBox="0 0 33 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.2387 0H0.955626C0.427792 0 0 0.411081 0 0.918297V12.7215C0 13.2287 0.427792 13.6398 0.955626 13.6398H6.14139V21.574C6.14139 22.081 6.56918 22.4923 7.09702 22.4923H10.168C10.5791 22.4923 10.9444 22.2393 11.0743 21.8643L14.145 13.0121C14.1776 12.9183 14.1943 12.8203 14.1943 12.7215V0.918297C14.1943 0.411081 13.7665 0 13.2387 0V0ZM12.283 12.5725L9.47911 20.6555H8.05264V12.7215C8.05264 12.2143 7.62485 11.8032 7.09702 11.8032H1.91125V1.83659H12.283V12.5725Z"
                                fill="black" />
                            <path
                                d="M31.6635 0H19.3804C18.8526 0 18.4248 0.411081 18.4248 0.918297V12.7215C18.4248 13.2287 18.8526 13.6398 19.3804 13.6398H24.5664V21.574C24.5664 22.081 24.9942 22.4923 25.5221 22.4923H28.5928C29.0041 22.4923 29.3692 22.2393 29.4994 21.8643L32.5701 13.0121C32.6024 12.9183 32.6191 12.8203 32.6191 12.7215V0.918297C32.6191 0.411081 32.1913 0 31.6635 0V0ZM30.7078 12.5725L27.9039 20.6555H26.4777V12.7215C26.4777 12.2143 26.0497 11.8032 25.5221 11.8032H20.3361V1.83659H30.7078V12.5725Z"
                                fill="black" />
                        </svg>
                        <p>The best point of sale software used good and very fast .Time saving or effective software
                            Pos ut
                            omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                            illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                        <small>Mixon Max</small>
                    </blockquote>
                    <h3>Cost Effective and Good software </h3>
                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model
                        text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various
                        versions have evolved over the years, sometimes by accident, sometimes on purpose to the claims
                        of duty or the obligations of business it will frequently occur that pleasures have.</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Our Approach</h3>
                            <p>Pos cost effective unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem quae ab illo inventore veritatis et quasi</p>
                            <ul>
                                <li>Eagy to used and time saving</li>
                                <li>Effective cast pament</li>
                                <li>High speed process</li>
                                <li>Customer data saved</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <img src="public_assets/img/post_details_4.jpeg" alt="Details" class="cs-radius_10 w-100">
                        </div>
                    </div>
                </div>
                <div id="comments" class="comments-area">
                    <div class="cs-comment_wrapper">
                        <h2 class="comments-title">Comments (3)</h2>
                        <ol class="comment-list">
                            <li>
                                <div class="comment-body">
                                    <div class="comment-author">
                                        <img alt="Avatar" src="public_assets/img/avatar_4.png" class="avatar">
                                        <cite class="fn"><a href="#">Menila</a></cite>
                                    </div>
                                    <div class="comment-meta"><a href="#">20 Apr, 2020</a> </div>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt but in certain
                                        circumstances.</p>
                                    <div class="reply"><a href="#">Reply</a></div>
                                </div>
                                <ol class="children">
                                    <li>
                                        <div class="comment-body">
                                            <div class="comment-author">
                                                <img alt="Avatar" src="public_assets/img/avatar_5.png" class="avatar">
                                                <cite class="fn"><a href="#">Karla Swit</a></cite>
                                            </div>
                                            <div class="comment-meta"><a href="#">9 May, 2020</a> </div>
                                            <p>YSed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                                                illo inventore veritatis et quasi architecto beatae vitae dicta sunt but
                                                in certain circumstances.</p>
                                            <div class="reply"><a href="#">Reply</a></div>
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <div class="comment-body">
                                    <div class="comment-author">
                                        <img alt="Avatar" src="public_assets/img/avatar_6.png" class="avatar">
                                        <cite class="fn"><a href="#">George Steven</a></cite>
                                    </div>
                                    <div class="comment-meta"><a href="#">November 24, 2020</a> </div>
                                    <p>Great work</p>
                                    <div class="reply"><a href="#">Reply</a></div>
                                </div>
                            </li><!-- #comment-## -->
                        </ol><!-- .comment-list -->
                    </div>
                    <div class="comment-respond">
                        <h3 class="comment-reply-title">Write Your Comment</h3>
                        <form id="commentform">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" class="cs-form_field cs-border_color" placeholder="Name">
                                    <div class="cs-height_20 cs-height_lg_20"></div>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" class="cs-form_field cs-border_color" placeholder="Email">
                                    <div class="cs-height_20 cs-height_lg_20"></div>
                                </div>
                                <div class="col-lg-12">
                                    <textarea cols="30" rows="10" class="cs-form_field cs-border_color"
                                        placeholder="Write your comment"></textarea>
                                    <div class="cs-height_20 cs-height_lg_20"></div>
                                </div>
                                <div class="col-lg-12">
                                    <button class="cs-btn cs-size_md"><span>Post Comment</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="cs-height_70 cs-height_lg_60"></div>
            </div>
        </div>
    </div>
    <!-- End Blog Details -->

    <!-- Script -->
    <script src="{{ asset('public_assets/js/plugins/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('public_assets/js/plugins/jquery.slick.min.js')}}"></script>
    <script src="{{ asset('public_assets/js/plugins/jquery.counter.min.js')}}"></script>
    <script src="{{ asset('public_assets/js/plugins/wow.min.js')}}"></script>
    <script src="{{ asset('public_assets/js/main.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
</body>

</html>
