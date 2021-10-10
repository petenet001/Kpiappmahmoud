@extends('app')


@section('main_content')
    <!--body content wrap start-->
    <div class="">

        <!--header section start-->
        <section class="hero-section ptb-100 gradient-overlay"
                 style="background: url('{{asset('assets/img/header-bg-5.jpg')}}')no-repeat center center / cover">
            <div class="hero-bottom-shape-two" style="background: url('{{asset('assets/img/hero-bottom-shape.svg')}}')no-repeat bottom center"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                            <h1 class="text-white mb-0">Pricing</h1>
                            <div class="custom-breadcrumb">
                                <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                    <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="list-inline-item breadcrumb-item active">Pricing</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--header section end-->

        <!--our pricing section start-->
        <section class="pricing-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Affordable Pricing and Packages</h2>
                            <p CLASS="lead">Efficiently aggregate end-to-end core competencies without maintainable ideas. Dynamically
                                foster tactical solutions without enabled value.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md">
                        <div class="card text-center single-pricing-pack">
                            <div class="pt-4"><h5>Basic</h5></div>
                            <div class="pricing-img mt-4">
                                <img src="img/basic.svg" alt="pricing img" class="img-fluid">
                            </div>
                            <div class="card-header py-4 border-0 pricing-header">
                                <div class="h1 text-center mb-0">$<span class="price font-weight-bolder">29</span></div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                    <li>Push Notifications</li>
                                    <li>Data Transfer</li>
                                    <li>SQL Database</li>
                                    <li>Search &amp; SEO Analytics</li>
                                    <li>24/7 Phone Support</li>
                                    <li>2 months technical support</li>
                                    <li>2+ profitable keyword</li>
                                </ul>
                                <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md">
                        <div class="card popular-price text-center single-pricing-pack">
                            <div class="pt-4"><h5>Standard</h5></div>
                            <div class="pricing-img mt-4">
                                <img src="img/standard.svg" alt="pricing img" class="img-fluid">
                            </div>
                            <div class="card-header py-4 border-0 pricing-header">
                                <div class="h1 text-center mb-0">$<span class="price font-weight-bolder">149</span></div>

                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                    <li>Push Notifications</li>
                                    <li>Data Transfer</li>
                                    <li>SQL Database</li>
                                    <li>Search &amp; SEO Analytics</li>
                                    <li>24/7 Phone Support</li>
                                    <li>1 Year technical support</li>
                                    <li>50+ profitable keyword</li>
                                </ul>
                                <a href="#" class="btn secondary-solid-btn mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md">
                        <div class="card text-center single-pricing-pack">
                            <div class="pt-4"><h5>Unlimited</h5></div>
                            <div class="pricing-img mt-4">
                                <img src="img/unlimited.svg" alt="pricing img" class="img-fluid">
                            </div>
                            <div class="card-header py-4 border-0 pricing-header">
                                <div class="h1 text-center mb-0">$<span class="price font-weight-bolder">39</span></div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled text-sm mb-4 pricing-feature-list">
                                    <li>Push Notifications</li>
                                    <li>Data Transfer</li>
                                    <li>SQL Database</li>
                                    <li>Search &amp; SEO Analytics</li>
                                    <li>24/7 Phone Support</li>
                                    <li>6 months technical support</li>
                                    <li>10+ profitable keyword</li>
                                </ul>
                                <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--our pricing section end-->

        <!--testimonial section start-->
        <section class="testimonial-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading mb-5 text-center">
                            <h2>Testimonials What Clients Say</h2>
                            <p class="lead">
                                Rapidiously morph transparent internal or "organic" sources whereas resource sucking
                                e-business. Conveniently innovate compelling internal.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="owl-carousel owl-theme client-testimonial custom-arrow custom-arrow-bottom-center mb-5">
                            <div class="item">
                                <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                                    <blockquote>
                                        Assertively procrastinate distributed relationships whereas equity invested intellectual capital everything energistically underwhelm proactive.
                                    </blockquote>
                                    <div class="client-ratting mt-2">
                                        <ul class="list-inline client-ratting-list">
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        </ul>
                                        <h6 class="font-weight-bold">5.0 <small class="font-weight-lighter">BizBite</small></h6>
                                    </div>
                                </div>
                                <div class="client-info-wrap d-flex align-items-center mt-5">
                                    <div class="client-img mr-3">
                                        <img src="img/client-1.jpg" alt="client" width="60" class="img-fluid rounded-circle shadow-sm"/>
                                    </div>
                                    <div class="client-info">
                                        <h5 class="mb-0">Austin Cesar</h5>
                                        <p class="mb-0">ThemeTags</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                                    <blockquote>
                                        Intrinsicly facilitate functional imperatives without next-generation meta-services. Compellingly revolutionize worldwide users vis-a-vis enterprise best practices.
                                    </blockquote>
                                    <div class="client-ratting mt-2">
                                        <ul class="list-inline client-ratting-list">
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        </ul>
                                        <h6 class="font-weight-bold">5.0 <small class="font-weight-lighter">BizBite</small></h6>
                                    </div>
                                </div>
                                <div class="client-info-wrap d-flex align-items-center mt-5">
                                    <div class="client-img mr-3">
                                        <img src="img/client-2.jpg" alt="client" width="60" class="img-fluid rounded-circle shadow-sm"/>
                                    </div>
                                    <div class="client-info">
                                        <h5 class="mb-0">Pirtle Karol</h5>
                                        <p class="mb-0">ThemeTags</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                                    <blockquote>
                                        Interactively grow backend scenarios through one paradigms. Distinctively and communicate efficient information without effective meta-services.
                                    </blockquote>
                                    <div class="client-ratting mt-2">
                                        <ul class="list-inline client-ratting-list">
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        </ul>
                                        <h6 class="font-weight-bold">5.0 <small class="font-weight-lighter">BizBite</small></h6>
                                    </div>
                                </div>
                                <div class="client-info-wrap d-flex align-items-center mt-5">
                                    <div class="client-img mr-3">
                                        <img src="img/client-3.jpg" alt="client" width="60" class="img-fluid rounded-circle shadow-sm"/>
                                    </div>
                                    <div class="client-info">
                                        <h5 class="mb-0">Aminul Islam</h5>
                                        <p class="mb-0">ThemeTags</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                                    <blockquote>
                                        Intrinsicly facilitate functional imperatives without next-generation meta-services. Compellingly revolutionize worldwide users vis-a-vis enterprise best practices.
                                    </blockquote>
                                    <div class="client-ratting mt-2">
                                        <ul class="list-inline client-ratting-list">
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                                        </ul>
                                        <h6 class="font-weight-bold">5.0 <small class="font-weight-lighter">BizBite</small></h6>
                                    </div>
                                </div>
                                <div class="client-info-wrap d-flex align-items-center mt-5">
                                    <div class="client-img mr-3">
                                        <img src="img/client-4.jpg" alt="client" width="60" class="img-fluid rounded-circle shadow-sm"/>
                                    </div>
                                    <div class="client-info">
                                        <h5 class="mb-0">Pirtle Karol</h5>
                                        <p class="mb-0">ThemeTags</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--testimonial section end-->


        <!--client section start-->
        <div class="client-section ptb-100 gray-light-bg">
            <div class="container">
                <!--clients logo start-->
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                            <div class="item single-client">
                                <img src="img/clients-logo-01.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-02.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-03.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-04.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-05.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-06.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-07.png" alt="client logo" class="client-img">
                            </div>
                            <div class="item single-client">
                                <img src="img/clients-logo-08.png" alt="client logo" class="client-img">
                            </div>
                        </div>
                    </div>
                </div>
                <!--clients logo end-->
            </div>
        </div>
        <!--client section start-->


    </div>
    <!--body content wrap end-->
@endsection

