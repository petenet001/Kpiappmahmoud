@extends('app')


@section('main_content')
    <!-- START MAIN CONTENT -->
    <div class="">
        <!--hero section start-->
        <section class="hero-equal-height pt-165 pb-100" style="background: url('{{asset("assets/img/hero-section-bg.svg")}}')no-repeat center center / cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-6">
                        <div class="hero-slider-content z-index position-relative">
                            <h1>Trusted Business Partner Everything in one
                                Platform</h1>
                            <p class="lead">Holisticly procrastinate mission-critical convergence with reliable customer service. Assertively underwhelm idea-sharing for impactful solutions. </p>

                            <div class="action-btns mt-3">
                                <a href="#" class="btn accent-solid-btn">Get Start Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="hero-animation-img">
                            <img src="{{asset('assets/img/hero-animation-01.svg')}}" alt="hero" class="img-fluid d-none d-lg-block animation-two" width="230">
                            <img src="{{asset('assets/img/hero-animation-04.svg')}}" alt="hero" class="animation-one">
                            <img src="{{asset('assets/img/hero-animation-06.svg')}}" alt="hero" class="img-fluid d-none d-lg-block animation-four" width="200">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->

        <!--promo section start-->
        <section class="promo-block ptb-100">
            <div class="container">
                <div class="row justify-content-around justify-content-center">
                    <div class="col-md-6 col-lg-4  dot-bg-shape dot-bg-1">
                        <div class="single-promo-block promo-hover-bg-1 hover-image p-5 text-center box-1 rounded">
                            <div class="promo-block-icon mb-3">
                                <span class="fab fa-superpowers icon-md color-primary"></span>
                            </div>
                            <div class="promo-block-content">
                                <h5>Creative Design</h5>
                                <h1> {{Request::segment(1)}}</h1>
                                <p>Dramatically incentivize mission-critical process improvements through extensive benefits.</p>
                                <a href="#" class="btn accent-solid-btn mt-3">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4  dot-bg-shape dot-bg-2">
                        <div class="single-promo-block promo-hover-bg-2 hover-image p-5 text-center box-1 rounded">
                            <div class="promo-block-icon mb-3">
                                <span class="far fa-clock icon-md color-primary"></span>
                            </div>
                            <div class="promo-block-content">
                                <h5>Cyber Security</h5>
                                <p>Conveniently synergize worldwide functionalities via global e-commerce distinctively actualize.</p>

                                <a href="#" class="btn accent-solid-btn mt-3">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4  dot-bg-shape dot-bg-3">
                        <div class="single-promo-block promo-hover-bg-3 hover-image p-5 text-center box-1 rounded">
                            <div class="promo-block-icon mb-3">
                                <span class="far fa-clock icon-md color-primary"></span>
                            </div>
                            <div class="promo-block-content">
                                <h5>Cyber Security</h5>
                                <p>Interactively visualize B2C e-markets with standards compliant e-commerce compliant experiences.</p>

                                <a href="#" class="btn accent-solid-btn mt-3">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--promo section end-->


        <!--about us section start-->
        <section class="about-us-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-1">
                            <h2>About Us</h2>
                            <p class="lead">Distinctively grow go forward manufactured products and optimal networks. Enthusiastically
                                disseminate user-centric outsourcing revolutionary</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="feature-tabs-wrap">
                            <ul class="nav nav-tabs border-bottom-0 feature-tabs feature-tabs-center d-flex justify-content-center" data-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" href="#feature-tab-1"
                                       data-toggle="tab">
                                        <h6 class="mb-0">About Us</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center active" href="#feature-tab-2"
                                       data-toggle="tab">
                                        <h6 class="mb-0">Our Services</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" href="#feature-tab-3"
                                       data-toggle="tab">
                                        <h6 class="mb-0">Our Features</h6>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content feature-tab-content">
                                <div class="tab-pane" id="feature-tab-1">
                                    <div class="row justify-content-around">
                                        <div class="col-md-12 col-lg-5">
                                            <div class="about-content-right mb-md-4 mb-lg-0 my-md-3 my-lg-3 my-sm-0">
                                                <p>Objectively productivate installed base technology whereas user friendly ROI.
                                                    Phosfluorescently innovate functionalized potentialities revolutionize client-based applications.</p>

                                                <p>Holisticly utilize emerging leadership skills whereas multifunctional customer service. Energistically functional bandwidth without granular mindshare. Monotonectally visualize user-centric methodologies low-risk.</p>

                                                <ul class="list-unstyled tech-feature-list">
                                                    <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Corporate</strong> Cash Management</li>
                                                    <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>SEO</strong> Optimization Services</li>
                                                    <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Company</strong> Brand Solutions</li>
                                                </ul>

                                                <a href="#" class="mt-4 btn secondary-solid-btn">Contact With Us</a>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6">
                                            <div class="img-wrap my-md-3 my-lg-3 my-sm-0">
                                                <img src="img/about-1.jpg" alt="about" class="img-fluid rounded shadow-sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane active" id="feature-tab-2">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm rounded white-bg">
                                                <img src="{{asset('img/consult.svg')}}" alt="consulting" width="80" class="mb-3">
                                                <h5>Big Data Consulting</h5>
                                                <p class="mb-0">Progressively empower business "outside the box" thinking with resource-leveling
                                                    partnerships.</p>
                                                <a href="#" target="_blank" class="detail-link mt-4">Read more <span class="ti-arrow-right"></span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm rounded white-bg">
                                                <img src="{{asset('img/machine-learning.svg')}}" alt="consulting" width="80" class="mb-3">
                                                <h5>Machine Learning</h5>
                                                <p class="mb-0">Progressively empower business "outside the box" thinking with resource-leveling
                                                    partnerships.</p>
                                                <a href="#" target="_blank" class="detail-link mt-4">Read more <span class="ti-arrow-right"></span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm rounded white-bg">
                                                <img src="{{asset('img/data-analytics.svg')}}" alt="consulting" width="80" class="mb-3">
                                                <h5>Data Analytics</h5>
                                                <p class="mb-0">Progressively empower business "outside the box" thinking with resource-leveling
                                                    partnerships.</p>
                                                <a href="#" target="_blank" class="detail-link mt-4">Read more <span class="ti-arrow-right"></span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm rounded white-bg">
                                                <img src="{{asset('img/data-security.svg')}}" alt="consulting" width="80" class="mb-3">
                                                <h5>Data Security</h5>
                                                <p class="mb-0">Progressively empower business "outside the box" thinking with resource-leveling
                                                    partnerships.</p>
                                                <a href="#" target="_blank" class="detail-link mt-4">Read more <span class="ti-arrow-right"></span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm rounded white-bg">
                                                <img src="{{asset('img/artificial-intelligence.svg')}}" alt="consulting" width="80" class="mb-3">
                                                <h5>Artificial Intelligence</h5>
                                                <p class="mb-0">Progressively empower business "outside the box" thinking with resource-leveling
                                                    partnerships.</p>
                                                <a href="#" target="_blank" class="detail-link mt-4">Read more <span class="ti-arrow-right"></span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm rounded white-bg">
                                                <img src="{{asset('img/internet-things.svg')}}" alt="consulting" width="80" class="mb-3">
                                                <h5>Internet Of Things</h5>
                                                <p class="mb-0">Progressively empower business "outside the box" thinking with resource-leveling
                                                    partnerships.</p>
                                                <a href="#" target="_blank" class="detail-link mt-4">Read more <span class="ti-arrow-right"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="feature-tab-3">
                                    <div class="row justify-content-around">
                                        <div class="col-md-12 col-lg-5">
                                            <div class="img-wrap my-md-3 my-lg-3 my-sm-0">
                                                <img src="{{asset('img/about-2.jpg')}}" alt="about" class="img-fluid rounded shadow-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-6">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="single-promo-block rounded my-3">
                                                        <div class="promo-block-icon mr-4">
                                                            <span class="fas fa-brain icon-sm color-primary mb-3"></span>
                                                        </div>
                                                        <div class="promo-block-content">
                                                            <h5>Cyber Security</h5>
                                                            <p>Enthusiastically scale mission-critical imperatives rather than array.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="single-promo-block rounded my-3">
                                                        <div class="promo-block-icon mr-4">
                                                            <span class="fas fa-bezier-curve icon-sm color-primary mb-3"></span>
                                                        </div>
                                                        <div class="promo-block-content">
                                                            <h5>Creative Design</h5>
                                                            <p>Compellingly promote collaborative products without synergistic. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="single-promo-block rounded my-3">
                                                        <div class="promo-block-icon mr-4">
                                                            <span class="fas fa-headset icon-sm color-primary mb-3"></span>
                                                        </div>
                                                        <div class="promo-block-content">
                                                            <h5>Consultancy</h5>
                                                            <p>Compellingly promote collaborative products without synergistic. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="single-promo-block rounded my-3">
                                                        <div class="promo-block-icon mr-4">
                                                            <span class="fas fa-comments icon-sm color-primary mb-3"></span>
                                                        </div>
                                                        <div class="promo-block-content">
                                                            <h5>Communication</h5>
                                                            <p>Compellingly promote collaborative products without synergistic. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about us section end-->

        <!--counter section start-->
        <section class="call-to-action ptb-100 gradient-overlay" style="background: url('{{asset('img/slider-img-2.jpg')}}')no-repeat top center / cover fixed">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="call-to-action-content text-white text-center">
                            <h2 class="text-white mb-1">More Traffic For Your Business?</h2>
                            <p class="lead">Credibly redefine high-payoff web services after holistic experiences. Dramatically enable go forward e-tailers for dramatically pursue action items whereas.</p>
                            <a href="#" class="btn solid-white-btn mt-3">Contact With Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--counter section end-->

        <!--our work or portfolio section start-->
        <section class="our-portfolio-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Check Our Quality Work</h2>
                            <p class="lead">Dynamically pursue reliable convergence rather than 24/7 process improvements. Intrinsicly
                                develop end-to-end customer service without extensive data.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center pb-2">
                            <button type="button" class="filter-btn" data-mixitup-control data-filter="all">All</button>
                            <button type="button" class="filter-btn" data-mixitup-control data-filter=".branding">Branding</button>
                            <button type="button" class="filter-btn" data-mixitup-control data-filter=".animation">Animation</button>
                            <button type="button" class="filter-btn" data-mixitup-control data-filter=".other">Others</button>
                        </div>
                        <div class="portfolio-container" id="MixItUp">
                            <div class="mix portfolio-item branding" data-ref="mixitup-target">
                                <div class="portfolio-wrapper">
                                    <a href="#" target="_blank">
                                        <div class="content-overlay"></div>
                                        <img class="img-fluid" src="img/portfolios/3.jpg" alt="portfolio"/>
                                        <div class="content-details fadeIn-bottom text-white">
                                            <h5 class="text-white mb-1">Creative Design</h5>
                                            <p>Design</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="mix portfolio-item other animation" data-ref="mixitup-target">
                                <div class="portfolio-wrapper">
                                    <a href="#" target="_blank">
                                        <div class="content-overlay"></div>
                                        <img class="img-fluid" src="img/portfolios/2.jpg" alt="portfolio"/>
                                        <div class="content-details fadeIn-bottom text-white">
                                            <h5 class="text-white mb-1">Web UI/UX Design</h5>
                                            <p>Web, Design</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="mix portfolio-item animation" data-ref="mixitup-target">
                                <div class="portfolio-wrapper">
                                    <a href="#" target="_blank">
                                        <div class="content-overlay"></div>
                                        <img class="img-fluid" src="img/portfolios/4.jpg" alt="portfolio"/>
                                        <div class="content-details fadeIn-bottom text-white">
                                            <h5 class="text-white mb-1">Corporate Flyer Design</h5>
                                            <p>Flyer Design</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="mix portfolio-item branding" data-ref="mixitup-target">
                                <div class="portfolio-wrapper">
                                    <a href="#" target="_blank">
                                        <div class="content-overlay"></div>
                                        <img class="img-fluid" src="img/portfolios/1.jpg" alt="portfolio"/>
                                        <div class="content-details fadeIn-bottom text-white">
                                            <h5 class="text-white mb-1">Web UI/UX Design</h5>
                                            <p>Web, Design</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="mix portfolio-item animation other" data-ref="mixitup-target">
                                <div class="portfolio-wrapper">
                                    <a href="#" target="_blank">
                                        <div class="content-overlay"></div>
                                        <img class="img-fluid" src="img/portfolios/5.jpg" alt="portfolio"/>
                                        <div class="content-details fadeIn-bottom text-white">
                                            <h5 class="text-white mb-1">Wall Painting Design</h5>
                                            <p>Painting Design</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="mix portfolio-item branding " data-ref="mixitup-target">
                                <div class="portfolio-wrapper">
                                    <a href="#" target="_blank">
                                        <div class="content-overlay"></div>
                                        <img class="img-fluid" src="img/portfolios/6.jpg" alt="portfolio"/>
                                        <div class="content-details fadeIn-bottom text-white">
                                            <h5 class="text-white mb-1">Corporate Identity Design</h5>
                                            <p>Corporate Design</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="gap"></div>
                            <div class="gap"></div>
                            <div class="gap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--our work or portfolio section end-->

        <!--team two section start-->
        <section class="team-two-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Meet Our Lovely Team</h2>
                            <p class="lead">Distinctively grow go forward manufactured products and optimal networks. Enthusiastically
                                disseminate user-centric outsourcing through revolutionary</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="staff-member">
                            <div class="card text-center">
                                <img src="img/team-1.png" alt="team image" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="teacher mb-0">Richard Ford</h5>
                                    <span>Instructor of Mathematics</span>
                                    <ul class="list-inline pt-2 social">
                                        <li class="list-inline-item"><a href="#" target="_blank"><span
                                                        class="ti-facebook"></span></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank"><span
                                                        class="ti-linkedin"></span></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank"><span
                                                        class="ti-dribbble"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="overlay d-flex align-items-center justify-content-center">
                                <div class="overlay-inner">
                                    <p class="teacher-quote">"Dramatically leverage existing fully researched platforms vis-a-vis viral." </p><a
                                            href="#" class="teacher-name">
                                        <h5 class="mb-0 teacher text-white">Richard Ford</h5></a>
                                    <span class="teacher-field text-white">Instructor of Mathematics</span>
                                    <ul class="list-inline py-4 social">
                                        <li class="list-inline-item"><a href="#" target="_blank"><span
                                                        class="ti-facebook"></span></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank"><span
                                                        class="ti-linkedin"></span></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank"><span
                                                        class="ti-dribbble"></span></a></li>
                                    </ul>
                                    <p class="teacher-see-profile">
                                        <a href="#" class="btn outline-white-btn">View my profile</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="staff-member">
                            <div class="card text-center">
                                <img src="img/team-3.png" alt="team image" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="teacher mb-0">Kely Roy</h5>
                                    <span>Lead Designer</span>
                                    <ul class="list-inline pt-2 social">
                                        <li class="list-inline-item"><a href="#" target="_blank"><span
                                                        class="ti-facebook"></span></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank"><span
                                                        class="ti-linkedin"></span></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank"><span
                                                        class="ti-dribbble"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="overlay d-flex align-items-center justify-content-center">
                                <div class="overlay-inner">
                                    <p class="teacher-quote">"Credibly extend high-payoff web-readiness via top-line relationships." </p><a
                                            href="#" class="teacher-name">
                                        <h5 class="mb-0 teacher text-white">Kely Roy</h5></a><span class="teacher-field text-white">Lead Designer</span>
                                    <ul class="list-inline py-4 social">
                                        <li class="list-inline-item"><a href="#" target="_blank"><span
                                                        class="ti-facebook"></span></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank"><span
                                                        class="ti-linkedin"></span></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank"><span
                                                        class="ti-dribbble"></span></a></li>
                                    </ul>
                                    <p class="teacher-see-profile">
                                        <a href="#" class="btn outline-white-btn">View my profile</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="staff-member">
                            <div class="card text-center">
                                <img src="img/team-2.png" alt="team image" class="img-fluid">
                                <div class="card-body">
                                    <h5 class="teacher mb-0">Gerald Nichols</h5>
                                    <span>Managing Director</span>
                                    <ul class="list-inline pt-2 social">
                                        <li class="list-inline-item"><a href="#" target="_blank"><span
                                                        class="ti-facebook"></span></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank"><span
                                                        class="ti-linkedin"></span></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank"><span
                                                        class="ti-dribbble"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="overlay d-flex align-items-center justify-content-center">
                                <div class="overlay-inner">
                                    <p class="teacher-quote">"Authoritatively evolve stand-alone e-tailers whereas prospective partnerships." </p><a
                                            href="#" class="teacher-name">
                                        <h5 class="mb-0 teacher text-white">Gerald Nichols</h5></a>
                                    <span class="teacher-field text-white">Managing Director</span>
                                    <ul class="list-inline py-4 social">
                                        <li class="list-inline-item"><a href="#" target="_blank"><span
                                                        class="ti-facebook"></span></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank"><span
                                                        class="ti-linkedin"></span></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank"><span
                                                        class="ti-dribbble"></span></a></li>
                                    </ul>
                                    <p class="teacher-see-profile">
                                        <a href="#" class="btn outline-white-btn">View my profile</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--team two section end-->

        <!--testimonial section start-->
        <section class="testimonial-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading mb-5 text-center">
                            <h2>Testimonials what clients say</h2>
                            <p class="lead">
                                Rapidiously morph transparent internal or "organic" sources whereas resource sucking
                                e-business. Conveniently innovate compelling internal.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-lg-4">
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
                    <div class="col-md-4 col-lg-4">
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
                    <div class="col-md-4 col-lg-4">
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
                </div>

            </div>
        </section>
        <!--testimonial section end-->

{{--        <!--blog section start-->--}}
{{--        <section class="our-blog-section ptb-100 gray-light-bg">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-8">--}}
{{--                        <div class="section-heading mb-5">--}}
{{--                            <h2>Our Latest News</h2>--}}
{{--                            <p class="lead">--}}
{{--                                Enthusiastically drive revolutionary opportunities before emerging leadership. Distinctively--}}
{{--                                transform tactical methods of empowerment via resource.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-4">--}}
{{--                        <div class="single-blog-card card border-0 shadow-sm">--}}
{{--                            <span class="category position-absolute badge badge-pill badge-primary">Lifestyle</span>--}}
{{--                            <img src="img/blog/1.jpg" class="card-img-top position-relative" alt="blog">--}}
{{--                            <div class="card-body">--}}
{{--                                <h3 class="h5 mb-2 card-title"><a href="#">Appropriately productize fully</a></h3>--}}
{{--                                <div class="post-meta mb-2">--}}
{{--                                    <ul class="list-inline meta-list">--}}
{{--                                        <li class="list-inline-item">Jan 21, 2019</li>--}}
{{--                                        <li class="list-inline-item"><span>45</span> Comments</li>--}}
{{--                                        <li class="list-inline-item"><span>10</span> Share</li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <p class="card-text">Some quick example text to build on the card title and make up the bulk.</p>--}}
{{--                                <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <div class="single-blog-card card border-0 shadow-sm">--}}
{{--                            <span class="category position-absolute badge badge-pill badge-danger">Technology</span>--}}
{{--                            <img src="img/blog/2.jpg" class="card-img-top position-relative" alt="blog">--}}
{{--                            <div class="card-body">--}}
{{--                                <h3 class="h5 mb-2 card-title"><a href="#">Quickly formulate backend</a></h3>--}}
{{--                                <div class="post-meta mb-2">--}}
{{--                                    <ul class="list-inline meta-list">--}}
{{--                                        <li class="list-inline-item">May 26, 2019</li>--}}
{{--                                        <li class="list-inline-item"><span>30</span> Comments</li>--}}
{{--                                        <li class="list-inline-item"><span>5</span> Share</li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <p class="card-text">Synergistically engage effective ROI after customer directed partnerships.</p>--}}
{{--                                <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-4">--}}
{{--                        <div class="single-blog-card card border-0 shadow-sm">--}}
{{--                            <span class="category position-absolute badge badge-pill badge-info">Science</span>--}}
{{--                            <img src="img/blog/3.jpg" class="card-img-top" alt="blog">--}}
{{--                            <div class="card-body">--}}
{{--                                <h3 class="h5 mb-2 card-title"><a href="#">Objectively extend extensive</a></h3>--}}
{{--                                <div class="post-meta mb-2">--}}
{{--                                    <ul class="list-inline meta-list">--}}
{{--                                        <li class="list-inline-item">Apr 25, 2019</li>--}}
{{--                                        <li class="list-inline-item"><span>41</span> Comments</li>--}}
{{--                                        <li class="list-inline-item"><span>30</span> Share</li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <p class="card-text">Holisticly mesh open-source leadership rather than proactive users. </p>--}}
{{--                                <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <!--blog section end-->--}}


        <!--client section start-->


        <div class="client-section ptb-100">
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
    <!-- End MAIN CONTENT -->
@endsection

