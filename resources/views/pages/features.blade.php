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
                            <h1 class="text-white mb-0">Features</h1>
                            <div class="custom-breadcrumb">
                                <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                    <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="list-inline-item breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="list-inline-item breadcrumb-item active">Services</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--header section end-->

        <!--promo block with hover effect start-->
        <section class="promo-block ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <div class="single-promo-block promo-hover-bg-1 hover-image shadow-lg p-5 rounded">
                            <img src="{{asset('assets/img/promo-img-1.svg')}}" alt="promo" class="mb-3" width="100">
                            <div class="promo-block-content">
                                <h5>Creative Design</h5>
                                <p>Compellingly promote collaborative products without synergistic schemas. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="single-promo-block promo-hover-bg-2 hover-image shadow-lg p-5 rounded">
                            <img src="{{asset('assets/img/promo-img-2.svg')}}" alt="promo" class="mb-3" width="100">
                            <div class="promo-block-content">
                                <h5>Cyber Security</h5>
                                <p>Enthusiastically scale mission-critical imperatives rather than an expanded array.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="single-promo-block promo-hover-bg-3 hover-image shadow-lg p-5 rounded">
                            <img src="{{asset('assets/img/promo-img-3.svg')}}" alt="promo" class="mb-3" width="100">
                            <div class="promo-block-content">
                                <h5>Cloud Services</h5>
                                <p>Rapidiously create cooperative resources rather than client-based leadership skills.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--promo block with hover effect end-->

        <!--services section start-->
        <section class="services-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-5">
                            <h2>We Provide Best Services</h2>
                            <p class="lead">Efficiently aggregate end-to-end core competencies without maintainable ideas. Dynamically
                                foster tactical solutions without enabled value.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="services-single animated-hover text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                            <img src="{{asset('assets/img/consult.svg')}}" alt="consulting" width="80" class="mb-3">
                            <h5>Big Data Consulting</h5>
                            <p class="mb-0">Progressively empower business "outside the box" thinking with resource-leveling
                                partnerships.</p>
                            <a href="#" target="_blank" class="detail-link mt-4">Read more <span class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="services-single animated-hover text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                            <img src="{{asset('assets/img/machine-learning.svg')}}" alt="consulting" width="80" class="mb-3">
                            <h5>Machine Learning</h5>
                            <p class="mb-0">Progressively empower business "outside the box" thinking with resource-leveling
                                partnerships.</p>
                            <a href="#" target="_blank" class="detail-link mt-4">Read more <span class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="services-single animated-hover text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                            <img src="{{asset('assets/img/data-analytics.svg')}}" alt="consulting" width="80" class="mb-3">
                            <h5>Data Analytics</h5>
                            <p class="mb-0">Progressively empower business "outside the box" thinking with resource-leveling
                                partnerships.</p>
                            <a href="#" target="_blank" class="detail-link mt-4">Read more <span class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="services-single animated-hover text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                            <img src="{{asset('assets/img/data-security.svg')}}" alt="consulting" width="80" class="mb-3">
                            <h5>Data Security</h5>
                            <p class="mb-0">Progressively empower business "outside the box" thinking with resource-leveling
                                partnerships.</p>
                            <a href="#" target="_blank" class="detail-link mt-4">Read more <span class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="services-single animated-hover text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                            <img src="{{asset('assets/img/artificial-intelligence.svg')}}" alt="consulting" width="80" class="mb-3">
                            <h5>Artificial Intelligence</h5>
                            <p class="mb-0">Progressively empower business "outside the box" thinking with resource-leveling
                                partnerships.</p>
                            <a href="#" target="_blank" class="detail-link mt-4">Read more <span class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="services-single animated-hover text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                            <img src="{{asset('assets/img/internet-things.svg')}}" alt="consulting" width="80" class="mb-3">
                            <h5>Internet Of Things</h5>
                            <p class="mb-0">Progressively empower business "outside the box" thinking with resource-leveling
                                partnerships.</p>
                            <a href="#" target="_blank" class="detail-link mt-4">Read more <span class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--services section end-->

{{--        <!--contact us section start-->--}}
{{--        <section class="contact-us-section ptb-100">--}}
{{--            <div class="container">--}}
{{--                <div class="row justify-content-around">--}}
{{--                    <div class="col-md-6">--}}
{{--                        <div class="contact-us-form gray-light-bg rounded p-5">--}}
{{--                            <h4>Ready to get started?</h4>--}}
{{--                            <form action="#" method="POST" id="contactForm1" class="contact-us-form" novalidate="novalidate">--}}
{{--                                <div class="form-row">--}}
{{--                                    <div class="col-12">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input type="text" class="form-control" name="name" placeholder="Enter name" required="required">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-12">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <input type="email" class="form-control" name="email" placeholder="Enter email" required="required">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-12">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message"></textarea>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-12 mt-3">--}}
{{--                                        <button type="submit" class="btn secondary-solid-btn" id="btnContactUs">--}}
{{--                                            Send Message--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-5">--}}
{{--                        <div class="contact-us-content">--}}
{{--                            <h2>Looking for a excellent Business idea?</h2>--}}
{{--                            <p class="lead">Seamlessly deliver pandemic e-services and next-generation initiatives.</p>--}}

{{--                            <a href="#" class="btn outline-btn align-items-center">Get Directions <span class="ti-arrow-right pl-2"></span></a>--}}

{{--                            <hr class="my-5">--}}

{{--                            <h5>Our Headquarters</h5>--}}
{{--                            <address>--}}
{{--                                100 yellow house, Mn <br>--}}
{{--                                Factory, United State, 13420--}}
{{--                            </address>--}}
{{--                            <br>--}}
{{--                            <span>Phone: +1234567890123</span> <br>--}}
{{--                            <span>Email: <a href="mailto:email@yourdomain.com" class="link-color">email@yourdomain.com</a></span>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <!--contact us section end-->--}}


{{--        <!--client section start-->--}}
{{--        <div class="client-section ptb-100 gray-light-bg">--}}
{{--            <div class="container">--}}
{{--                <!--clients logo start-->--}}
{{--                <div class="row align-items-center">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <div class="owl-carousel owl-theme clients-carousel dot-indicator">--}}
{{--                            <div class="item single-client">--}}
{{--                                <img src="img/clients-logo-01.png" alt="client logo" class="client-img">--}}
{{--                            </div>--}}
{{--                            <div class="item single-client">--}}
{{--                                <img src="img/clients-logo-02.png" alt="client logo" class="client-img">--}}
{{--                            </div>--}}
{{--                            <div class="item single-client">--}}
{{--                                <img src="img/clients-logo-03.png" alt="client logo" class="client-img">--}}
{{--                            </div>--}}
{{--                            <div class="item single-client">--}}
{{--                                <img src="img/clients-logo-04.png" alt="client logo" class="client-img">--}}
{{--                            </div>--}}
{{--                            <div class="item single-client">--}}
{{--                                <img src="img/clients-logo-05.png" alt="client logo" class="client-img">--}}
{{--                            </div>--}}
{{--                            <div class="item single-client">--}}
{{--                                <img src="img/clients-logo-06.png" alt="client logo" class="client-img">--}}
{{--                            </div>--}}
{{--                            <div class="item single-client">--}}
{{--                                <img src="img/clients-logo-07.png" alt="client logo" class="client-img">--}}
{{--                            </div>--}}
{{--                            <div class="item single-client">--}}
{{--                                <img src="img/clients-logo-08.png" alt="client logo" class="client-img">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--clients logo end-->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!--client section start-->--}}


    </div>
    <!--body content wrap end-->
@endsection

