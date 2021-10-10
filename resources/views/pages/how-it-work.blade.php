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
                            <h1 class="text-white mb-0">How it works</h1>
                            <div class="custom-breadcrumb">
                                <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                    <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="list-inline-item breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="list-inline-item breadcrumb-item active">About Us</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--header section end-->

        <!--promo section start-->
        <section class="promo-section pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <div class="single-promo-block p-3 rounded d-flex justify-content-between">
                            <div class="promo-block-icon mr-4">
                                <span class="fas fa-brain icon-md color-primary"></span>
                            </div>
                            <div class="promo-block-content">
                                <h5>Cyber Security</h5>
                                <p>Enthusiastically scale mission-critical imperatives rather than an expanded array.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="single-promo-block p-3 rounded d-flex justify-content-between">
                            <div class="promo-block-icon mr-4">
                                <span class="fas fa-bezier-curve icon-md color-primary"></span>
                            </div>
                            <div class="promo-block-content">
                                <h5>Creative Design</h5>
                                <p>Compellingly promote collaborative products without synergistic schemas. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="single-promo-block p-3 rounded d-flex justify-content-between">
                            <div class="promo-block-icon mr-4">
                                <span class="fas fa-life-ring icon-md color-primary"></span>
                            </div>
                            <div class="promo-block-content">
                                <h5>Cloud Services</h5>
                                <p>Rapidiously create cooperative resources rather than client-based leadership skills.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--promo section end-->

        <!--about us section start-->
        <section class="about-us-section ptb-100">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-12 col-lg-5">
                        <div class="video-promo-content mb-md-4 mb-lg-0">
                            <h2>First Class Business Solutions</h2>
                            <p>Interactively develop timely niche markets before extensive imperatives. Professionally
                                repurpose interoperable growth strategies before effective core competencies.</p>
                            <ul class="list-unstyled tech-feature-list">
                                <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Cost</strong>
                                    Accounting Fundamentals
                                </li>
                                <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Corporate</strong>
                                    Cash Management
                                </li>
                                <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>SEO</strong> Optimization Services</li>
                                <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span><strong>Company</strong> Brand Solutions</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="card border-0 shadow-sm text-white">
                            <img src="img/about-2.jpg" alt="video" class="img-fluid rounded shadow-sm">
                            <div class="card-img-overlay text-center">
                                <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="popup-youtube video-play-icon color-bip shadow"><span class="ti-control-play"></span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about us section end-->

        <!--our work process section start-->
        <section class="work-process-new ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Our work process</h2>
                            <p class="lead">Distinctively grow go forward manufactured products and optimal networks. Enthusiastically
                                disseminate outsourcing through revolutionary.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="work-process-wrap text-center">
                            <div class="single-work-process">
                                <div class="work-process-icon-wrap secondary-bg rounded">
                                    <i class="ti-vector icon-md text-white"></i>
                                    <span class="process-step primary-bg text-white shadow-sm">1</span>
                                </div>
                                <span class="work-process-divider"></span>
                                <div class="work-process-content mt-4">
                                    <h5>Generate Ideas</h5>
                                    <p>Compellingly harness reliable methodologies and web services. </p>
                                </div>
                            </div>
                            <div class="single-work-process">
                                <div class="work-process-icon-wrap secondary-bg rounded">
                                    <i class="ti-layout-list-thumb icon-md text-white"></i>
                                    <span class="process-step primary-bg text-white shadow-sm">2</span>
                                </div>
                                <span class="work-process-divider"></span>
                                <div class="work-process-content mt-4">
                                    <h5>Collect Contents</h5>
                                    <p>Proactively pursue high-quality cooperative applications.  </p>
                                </div>
                            </div>
                            <div class="single-work-process">
                                <div class="work-process-icon-wrap secondary-bg rounded">
                                    <i class="ti-palette icon-md text-white"></i>
                                    <span class="process-step primary-bg text-white shadow-sm">3</span>
                                </div>
                                <span class="work-process-divider"></span>
                                <div class="work-process-content mt-4">
                                    <h5>Create Design</h5>
                                    <p>Continually exploit worldwide products maximizing alignments. </p>
                                </div>
                            </div>
                            <div class="single-work-process">
                                <div class="work-process-icon-wrap secondary-bg rounded">
                                    <i class="ti-cup icon-md text-white"></i>
                                    <span class="process-step primary-bg text-white shadow-sm">4</span>
                                </div>
                                <span class="work-process-divider"></span>
                                <div class="work-process-content mt-4">
                                    <h5>Launch Project</h5>
                                    <p>Dramatically exploit strategic innovation market-driven schemas. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--our work process section end-->

        <!--team two section start-->
        <section class="team-two-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Meet our lovely team</h2>
                            <p class="lead">Distinctively grow go forward manufactured products and optimal networks. Globally administrate 24/7 interfaces and end-to-end platforms.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="staff-member">
                            <div class="card gray-light-bg text-center border-0">
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
                            <div class="card gray-light-bg text-center border-0">
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
                            <div class="card gray-light-bg text-center border-0">
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
                                        <a href="#" class="btn app-store-btn">View my profile</a>
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
        <section class="customer-testimonial-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-8">
                        <div class="section-heading text-center mb-4">
                            <h2>What People Says About Us</h2>
                            <p class="lead">Distinctively grow go forward manufactured products and optimal networks. Enthusiastically
                                disseminate outsourcing through revolutionary</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-5 col-lg-5">
                        <div class="owl-carousel owl-theme client-testimonial-1 custom-dot">
                            <div class="item">
                                <div class="testimonial-quote-wrap">
                                    <div class="client-say">
                                        <p><span class="fas fa-quote-left"></span> Interactively optimize
                                            fully researched expertise vis-a-vis plug-and-play relationships. Intrinsicly
                                            develop viral core competencies for fully tested customer service.
                                            Enthusiastically create next-generation growth strategies and.</p>
                                    </div>
                                    <div class="media author-info my-3">
                                        <div class="author-img mr-3">
                                            <img src="img/client-1.jpg" alt="client" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mb-0">John Charles</h5>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-quote-wrap">
                                    <div class="client-say">
                                        <p><span class="fas fa-quote-left"></span> Rapidiously develop user
                                            friendly growth strategies after extensive initiatives. Conveniently grow
                                            innovative benefits through fully tested deliverables. Rapidiously utilize
                                            focused platforms through end-to-end schemas.</p>
                                    </div>
                                    <div class="media author-info my-3">
                                        <div class="author-img mr-3">
                                            <img src="img/client-2.jpg" alt="client" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mb-0">Arabella Ora</h5>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-quote-wrap">
                                    <div class="client-say">
                                        <p><span class="fas fa-quote-left"></span> Objectively synthesize
                                            client-centered e-tailers for maintainable channels. Holisticly administrate
                                            customer directed vortals whereas tactical functionalities. Energistically
                                            monetize reliable imperatives through client-centric best practices.
                                            Collaboratively.</p>
                                    </div>
                                    <div class="media author-info my-3">
                                        <div class="author-img mr-3">
                                            <img src="img/client-3.jpg" alt="client" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mb-0">Jeremy Jere</h5>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-quote-wrap">
                                    <div class="client-say">
                                        <p><span class="fas fa-quote-left"></span> Enthusiastically innovate
                                            B2C data without clicks-and-mortar convergence. Monotonectally deliver
                                            compelling testing procedures vis-a-vis B2B testing procedures. Competently
                                            evisculate integrated resources whereas global processes. Enthusiastically.</p>
                                    </div>
                                    <div class="media author-info my-3">
                                        <div class="author-img mr-3">
                                            <img src="img/client-4.jpg" alt="client" class="img-fluid rounded-circle">
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mb-0">John Charles</h5>
                                            <span>BizBite</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-counter white-bg shadow-sm p-4 rounded text-center border-0">
                                    <span class="ti-medall-alt color-secondary icon-md"></span>
                                    <h3 class="mb-0">1600</h3>
                                    <p>Active users</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-counter white-bg shadow-sm p-4 rounded text-center border-0">
                                    <span class="ti-headphone-alt color-secondary icon-md"></span>
                                    <h3 class="mb-0">2500</h3>
                                    <p>Global client</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-counter white-bg shadow-sm p-4 rounded text-center border-0">
                                    <span class="ti-cup color-secondary icon-md"></span>
                                    <h3 class="mb-0">2150</h3>
                                    <p>Win award</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-counter white-bg shadow-sm p-4 rounded text-center border-0">
                                    <span class="ti-user color-secondary icon-md"></span>
                                    <h3 class="mb-0">2150</h3>
                                    <p>Clients satisfaction</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--testimonial section end-->


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
    <!--body content wrap end-->

@endsection

