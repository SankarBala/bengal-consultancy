@extends('frontend.layouts.app')


@section('content') 

<div class="slider_list owl-carousel">
    <div class="slider-area d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dreamit-slider-content">
                        <h4>বেঙ্গল কনসাল্টেন্সি এ স্বাগতম</h4>
                        <h1>ইমিগ্রেশন ও ভিসা এক্সপার্ট</h1>
                        <h3>পরামর্শকারী ও প্রতিনিধি</h3>
                        {{-- <p></p> --}}
                        <div class="slider-button">
                            <a class="bg-white text-dark" href="#">অ্যাপয়েন্টমেন্ট নিন</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->

<div class="feature-area">
    <div class="container">
        <div class="row margin-top">
            <div class="col-lg-4 col-md-6">
                <div class="dreamit-feature-box">
                    <div class="dreamit-feature-icon">
                        <i class="flaticon-content"></i>
                    </div>
                    <div class="feature-number">
                        <h4>01</h4>
                    </div>
                    <div class="feature-title">
                        <h2>অনলাইন অ্যাপয়েন্টমেন্ট</h2>
                    </div>
                    <div class="dreamit-feature-content">
                        Cupidatat non proident sunt culpa qui officia deserunt mollit anim.
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="dreamit-feature-box">
                    <div class="dreamit-feature-icon">
                        <i class="flaticon-lifebuoy"></i>
                    </div>
                    <div class="feature-number">
                        <h4>02</h4>
                    </div>
                    <div class="feature-title">
                        <h2>ভিসা এক্সপার্ট</h2>
                    </div>
                    <div class="dreamit-feature-content">
                        Cupidatat non proident sunt culpa qui officia deserunt mollit anim.
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="dreamit-feature-box">
                    <div class="dreamit-feature-icon">
                        <i class="flaticon-content-writing"></i>
                    </div>
                    <div class="feature-number">
                        <h4>03</h4>
                    </div>
                    <div class="feature-title">
                        <h2>অনলাইনেই আবেদন করুন</h2>
                    </div>
                    <div class="dreamit-feature-content">
                        Cupidatat non proident sunt culpa qui officia deserunt mollit anim.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->

<div class="about-area pt-70 pb-130">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6">
                <div class="dreamit-thumb">
                    <img src="{{ asset('frontend/assets/images/about-pic.png') }}" alt="">
                </div>
                <div class="dreamit-single-counter">
                    <div class="counter-text">
                        <h1 class="counter">30</h1>
                        <h3>+</h3>
                    </div>
                    <div class="counter-title">
                        <h4>completed visa</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pl-5 pt-50">
                <div class="dreamit-section-title pb-30">
                    <div class="dreamit-section-sub-title">
                        {{-- <h5>আমরাই সবচেয়ে সেরা ভিসা সরবারাহকারী</h5> --}}
                    </div>
                    <div class="dreamit-section-main-title">
                        <h1>আমরাই সবচেয়ে সেরা ভিসা সরবারাহকারী</h1>
                        {{-- <h2>Experienced Lawyers</h2> --}}
                    </div>
                    {{-- <div class="dreamit-section-bar"></div> --}}
                    <div class="dreamit-section-bold-text pt-30">
                        <p>We have been counselling students for educational word opportunities in Foreign countrie.
                        </p>
                    </div>
                    <div class="dreamit-section-text">
                        <p>There are may experienced engineer for your immigration service. We give the best
                            immigration service for you.</p>
                    </div>
                </div>
                <div class="dreamit-about-content">
                    <div class="dreamit-about-content-inner pb-2 d-flex">
                        <div class="dreamit-about-icon pr-4">
                            <i class="far fa-check-circle"></i>
                        </div>
                        <div class="about-content-text">
                            <p>We are committed to providing quality IT Services</p>
                        </div>
                    </div>
                    <div class="dreamit-about-content-inner pb-2 d-flex">
                        <div class="dreamit-about-icon pr-4">
                            <i class="far fa-check-circle"></i>
                        </div>
                        <div class="about-content-text">
                            <p>We are committed to providing quality IT Services</p>
                        </div>
                    </div>
                    <div class="dreamit-about-content-inner d-flex">
                        <div class="dreamit-about-icon pr-4">
                            <i class="far fa-check-circle"></i>
                        </div>
                        <div class="about-content-text">
                            <p>We are committed to providing quality IT Services</p>
                        </div>
                    </div>

                </div>
                <div class="about-button pt-4">
                    <a class="bg-primary" href="#">আমাদের সম্পর্কে আরও জানুন <i
                            class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->

<div class="service-area pt-100 pb-75">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 ptl-rsp">
                <div class="dreamit-section-title pb-30">
                    <div class="dreamit-section-sub-title">
                        <h5>আপনার পছন্দের সকল ভিসা</h5>
                    </div>
                    <div class="dreamit-section-main-title">
                        <h1 class="text-white my-4">১০০% নিরাপত্তার সাথে প্রদান করে থাকি</h1>
                    </div>
                    {{-- <div class="dreamit-section-bar"></div> --}}
                    <div class="dreamit-section-bold-text pt-30">
                        {{-- <p class="text-white"></p> --}}
                    </div>
                    <div class="section-button pt-35">
                        {{-- <a href="#">all service <i class="fas fa-chevron-right"></i></a> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="service_list owl-carousel">
                    <div class="col-lg-12">
                        <div class="dreamit-service-box">
                            <div class="dreamit-service-icon">
                                <i class="flaticon-ui"></i>
                            </div>
                            <div class="service-title pt-3">
                                <h2>পারিবারিক ভিসা</h2>
                            </div>
                            <div class="service-content">
                                <p>Nullam tincidunt augue eget dui volu tpat, vitae ultri ces lectus posuere. Duis
                                    urna lacus, efficitur non.</p>
                            </div>
                            {{-- <div class="service-button">
                                <a href="#">read more <i class="fas fa-chevron-right"></i></a>
                            </div> --}}
                        </div>
                        
                    </div>
                    <div class="col-lg-12">
                        <div class="dreamit-service-box">
                            <div class="dreamit-service-icon">
                                <i class="flaticon-ui"></i>
                            </div>
                            <div class="service-title pt-3">
                                <h2>শিক্ষানবিশ ভিসা</h2>
                            </div>
                            <div class="service-content">
                                <p>Nullam tincidunt augue eget dui volu tpat, vitae ultri ces lectus posuere. Duis
                                    urna lacus, efficitur non.</p>
                            </div>
                            {{-- <div class="service-button">
                                <a href="#">read more <i class="fas fa-chevron-right"></i></a>
                            </div> --}}
                        </div>
                        
                    </div>
                    <div class="col-lg-12">
                        <div class="dreamit-service-box">
                            <div class="dreamit-service-icon">
                                <i class="flaticon-ui"></i>
                            </div>
                            <div class="service-title pt-3">
                                <h2>ভ্রমন ভিসা</h2>
                            </div>
                            <div class="service-content">
                                <p>Nullam tincidunt augue eget dui volu tpat, vitae ultri ces lectus posuere. Duis
                                    urna lacus, efficitur non.</p>
                            </div>
                            {{-- <div class="service-button">
                                <a href="#">read more <i class="fas fa-chevron-right"></i></a>
                            </div> --}}
                        </div>
                        
                    </div>
                    <div class="col-lg-12">
                        <div class="dreamit-service-box">
                            <div class="dreamit-service-icon">
                                <i class="flaticon-ui"></i>
                            </div>
                            <div class="service-title pt-3">
                                <h2>চাকুরির ভিসা</h2>
                            </div>
                            <div class="service-content">
                                <p>Nullam tincidunt augue eget dui volu tpat, vitae ultri ces lectus posuere. Duis
                                    urna lacus, efficitur non.</p>
                            </div>
                            {{-- <div class="service-button">
                                <a href="#">read more <i class="fas fa-chevron-right"></i></a>
                            </div> --}}
                        </div>
                        
                    </div>
                    <div class="col-lg-12">
                        <div class="dreamit-service-box">
                            <div class="dreamit-service-icon">
                                <i class="flaticon-ui"></i>
                            </div>
                            <div class="service-title pt-3">
                                <h2>ব্যবসায়িক ভিসা</h2>
                            </div>
                            <div class="service-content">
                                <p>Nullam tincidunt augue eget dui volu tpat, vitae ultri ces lectus posuere. Duis
                                    urna lacus, efficitur non.</p>
                            </div>
                            {{-- <div class="service-button">
                                <a href="#">read more <i class="fas fa-chevron-right"></i></a>
                            </div> --}}
                        </div>
                        
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!--==================================================-->
<div class="country-area pt-70 pb-75">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="dreamit-section-title pb-20 text-center">
                    <div class="dreamit-section-sub-title">
                        {{-- <h5>CHOOSE COUNTRY</h5> --}}
                    </div>
                    <div class="dreamit-section-main-title">
                        {{-- <h1 class="text-black">Immigration - Choose</h1> --}}
                        <h2 class="text-black">আপনার পছন্দের দেশ </h2>
                    </div>
                    {{-- <div class="dreamit-section-bar center mt-3"></div> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="country_list owl-carousel ">

                @foreach ($countries as $country)
                    <div class="dreamit-single-box">
                        <div class="dreamit-country-box">
                            <div class="dreamit-country-thumb">
                                <img src="{{ Storage::url($country->banner) }}" alt="">
                            </div>
                            <div class="country-flag-img">
                                <img src="{{ Storage::url($country->national_flag) }}" alt="">
                            </div>
                            <div class="country-content">
                                <div class="country-title pt-3">
                                    <h2>{{ $country->name }}</h2>
                                </div>
                                <div class="country-content-text">
                                    <p>{!! Str::limit($country->content, 300, ' ...') !!}</p>
                                </div>
                                <div class="country-button">
                                    <a class="text-danger" href="#">বিস্তারিত দেখুন <i
                                            class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!--==================================================-->

<div class="counter-area pt-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="dreamit-section-title pb-30 text-center">
                    <div class="dreamit-section-sub-title">
                        {{-- <h5>WHY CHOOSE US</h5> --}}
                    </div>
                    <div class="dreamit-section-main-title">
                        <h2 class="black">কেন আমদেরকেই পছন্দ করবেন?</h2>
                    </div>
                    {{-- <div class="dreamit-section-bar center mt-3"></div> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-counter-text">
                    <div class="counter-icon">
                        <i class="flaticon-compass"></i>
                    </div>
                    <div class="counter-content">
                        <h1 class="counter">100</h1>
                        <h3>+</h3>
                    </div>
                    <div class="counter-title-style-2">
                        <h4>ক্লাইয়েন্ট</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-counter-text">
                    <div class="counter-icon">
                        <i class="flaticon-global"></i>
                    </div>
                    <div class="counter-content">
                        <h1 class="counter">80</h1>
                        <h3>+</h3>
                    </div>
                    <div class="counter-title-style-2">
                        <h4>ভিসা কনফার্ম</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-counter-text">
                    <div class="counter-icon">
                        <i class="flaticon-time"></i>
                    </div>
                    <div class="counter-content">
                        <h1 class="counter">200</h1>
                        <h3>+</h3>
                    </div>
                    <div class="counter-title-style-2">
                        <h4>এমবেসি</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-counter-text">
                    <div class="counter-icon">
                        <i class="flaticon-ui"></i>
                    </div>
                    <div class="counter-content">
                        <h1 class="counter">10</h1>
                        <h3>+</h3>
                    </div>
                    <div class="counter-title-style-2">
                        <h4>দেশ</h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection