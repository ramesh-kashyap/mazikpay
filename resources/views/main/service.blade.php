

@include('layouts.mainsite.header')

    <!-- ================> Page header start here <================== -->
    <section class="page-header bg--cover" style="background-image:url({{asset('')}}assets/images/header/1.png)">
        <div class="container">
            <div class="page-header__content" data-aos="fade-right" data-aos-duration="1000">
                <h2>Services</h2>
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__shape">
                <span class="page-header__shape-item page-header__shape-item--1"><img
                        src="{{asset('')}}assets/images/header/2.png" alt="shape-icon"></span>
            </div>
        </div>
    </section>
    <!-- ================> Page header end here <================== -->




    <!-- ===============>> Service section start here <<================= -->
    <section class="service padding-top padding-bottom">
        <div class="section-header section-header--max50">
            <h2 class="mb-15 mt-minus-5"><span>services </span>We offer</h2>
            <p>We offer the best services around - from installations to repairs, maintenance, and more!</p>
        </div>
        <div class="container">
            <div class="service__wrapper">
                <div class="row g-4 align-items-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="service__item" data-aos="fade-up" data-aos-duration="800">
                            <div class="service__item-inner text-center">
                                <div class="service__thumb mb-30">
                                    <div class="service__thumb-inner">
                                        <img class="dark" src="{{asset('')}}assets/images/service/1.png"
                                            alt="service-icon">
                                    </div>
                                </div>
                                <div class="service__content">
                                    <h5 class="mb-15"> <a class="stretched-link" href="service-details.html">Strategy
                                            Consulting</a> </h5>
                                    <p class="mb-0">A social assistant that's flexible can accommodate your schedule and
                                        needs, making
                                        life easier.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="service__item" data-aos="fade-up" data-aos-duration="1000">
                            <div class="service__item-inner text-center">
                                <div class="service__thumb mb-30">
                                    <div class="service__thumb-inner">
                                        <img class="dark" src="{{asset('')}}assets/images/service/2.png"
                                            alt="service-icon">
                                    </div>
                                </div>
                                <div class="service__content">
                                    <h5 class="mb-15"> <a class="stretched-link" href="service-details.html"> Financial
                                            Advisory</a> </h5>
                                    <p class="mb-0">Modules transform smart trading by automating processes and
                                        improving decision-making.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="service__item" data-aos="fade-up" data-aos-duration="1200">
                            <div class="service__item-inner text-center">
                                <div class="service__thumb mb-30">
                                    <div class="service__thumb-inner">
                                        <img class="dark" src="{{asset('')}}assets/images/service/3.png"
                                            alt="service-icon">
                                    </div>
                                </div>
                                <div class="service__content">
                                    <h5 class="mb-15"> <a class="stretched-link"
                                            href="service-details.html">Management</a> </h5>
                                    <p class="mb-0">There, it's me, your friendly neighborhood reporter's news analyst
                                        processes and
                                        improving</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="service__item" data-aos="fade-up" data-aos-duration="800">
                            <div class="service__item-inner text-center">
                                <div class="service__thumb mb-30">
                                    <div class="service__thumb-inner">
                                        <img class="dark" src="{{asset('')}}assets/images/service/4.png"
                                            alt="service-icon">
                                    </div>
                                </div>
                                <div class="service__content">
                                    <h5 class="mb-15"> <a class="stretched-link" href="service-details.html">Supply
                                            Optimization </a>
                                    </h5>
                                    <p class="mb-0">Hey, have you checked out that new cryptocurrency platform? It's
                                        pretty cool and easy
                                        to use!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="service__item" data-aos="fade-up" data-aos-duration="1000">
                            <div class="service__item-inner text-center">
                                <div class="service__thumb mb-30">
                                    <div class="service__thumb-inner">
                                        <img class="dark" src="{{asset('')}}assets/images/service/5.png"
                                            alt="service-icon">
                                    </div>
                                </div>
                                <div class="service__content">
                                    <h5 class="mb-15"> <a class="stretched-link" href="service-details.html">HR
                                            consulting</a> </h5>
                                    <p class="mb-0">Hey guys, just a quick update on exchange orders. There have been
                                        some changes
                                        currency!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="service__item" data-aos="fade-up" data-aos-duration="1200">
                            <div class="service__item-inner text-center">
                                <div class="service__thumb mb-30">
                                    <div class="service__thumb-inner">
                                        <img class="dark" src="{{asset('')}}assets/images/service/6.png"
                                            alt="service-icon">
                                    </div>
                                </div>
                                <div class="service__content">
                                    <h5 class="mb-15"> <a class="stretched-link" href="service-details.html">Marketing
                                            consulting</a>
                                    </h5>
                                    <p class="mb-0">Hey! Just wanted to let you know that the price notification module
                                        processes is now
                                        live!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="service__shape">
            <span class="service__shape-item service__shape-item--1"><img src="{{asset('')}}assets/images/icon/1.png"
                    alt="shape-icon"></span>
        </div>
    </section>
    <!-- ===============>> Service section start here <<================= -->





    <!-- ===============>> Testimonial section start here <<================= -->
    <section class="testimonial padding-top padding-bottom-style2 bg-color">
        <div class="container">
            <div class="section-header d-md-flex align-items-center justify-content-between">
                <div class="section-header__content">
                    <h2 class="mb-15">connect with <span>our Clients </span></h2>
                    <p class="mb-0">We love connecting with our clients to hear about their experiences and how we can
                        improve.
                    </p>
                </div>
                <div class="section-header__action">
                    <div class="swiper-nav">
                        <button class="swiper-nav__btn testimonial__slider-prev"><i
                                class="fa-solid fa-angle-left"></i></button>
                        <button class="swiper-nav__btn testimonial__slider-next active"><i
                                class="fa-solid fa-angle-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="testimonial__wrapper" data-aos="fade-up" data-aos-duration="1000">
                <div class="testimonial__slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial__item testimonial__item--style1">
                                <div class="testimonial__item-inner">
                                    <div class="testimonial__item-content">
                                        <p class="mb-0">
                                            The above testimonial is about Martha Chumo, who taught herself to code in
                                            one summer. This
                                            testimonial example works because it allows prospective customers to see
                                            themselves in
                                            Codeacademy’s current customer base.
                                        </p>
                                        <div class="testimonial__footer">
                                            <div class="testimonial__author">
                                                <div class="testimonial__author-thumb">
                                                    <img src="{{asset('')}}assets/images/testimonial/1.png"
                                                        alt="author">
                                                </div>
                                                <div class="testimonial__author-designation">
                                                    <h6>Mobarok Hossain</h6>
                                                    <span>Trade Master</span>
                                                </div>
                                            </div>
                                            <div class="testimonial__quote">
                                                <span><i class="fa-solid fa-quote-right"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__item testimonial__item--style1">
                                <div class="testimonial__item-inner">
                                    <div class="testimonial__item-content">
                                        <p class="mb-0">
                                            In the above testimonial, a customer named Jeanine shares her experience
                                            with Briogeo’s products.
                                            While the post is scattered with too many product mentions, it takes full
                                            advantage of its real
                                            estate by allowing the writer to tell
                                        </p>
                                        <div class="testimonial__footer">
                                            <div class="testimonial__author">
                                                <div class="testimonial__author-thumb">
                                                    <img src="{{asset('')}}assets/images/testimonial/2.png"
                                                        alt="author">
                                                </div>
                                                <div class="testimonial__author-designation">
                                                    <h6>Guy Hawkins</h6>
                                                    <span>Trade Boss</span>
                                                </div>
                                            </div>
                                            <div class="testimonial__quote">
                                                <span><i class="fa-solid fa-quote-right"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial__item testimonial__item--style1">
                                <div class="testimonial__item-inner">
                                    <div class="testimonial__item-content">
                                        <p class="mb-0">
                                            The above testimonial is about Martha Chumo, who taught herself to code in
                                            one summer. This
                                            testimonial example works because it allows prospective customers to see
                                            themselves in
                                            Codeacademy’s current customer base.
                                        </p>
                                        <div class="testimonial__footer">
                                            <div class="testimonial__author">
                                                <div class="testimonial__author-thumb">
                                                    <img src="{{asset('')}}assets/images/testimonial/6.png"
                                                        alt="author">
                                                </div>
                                                <div class="testimonial__author-designation">
                                                    <h6>Belal Hossain</h6>
                                                    <span>Trade Genius</span>
                                                </div>
                                            </div>
                                            <div class="testimonial__quote">
                                                <span><i class="fa-solid fa-quote-right"></i></span>
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
    <!-- ===============>> Testimonial section start here <<================= -->




    <!-- ===============>> cta section start here <<================= -->
    <section class="cta padding-top padding-bottom  bg-color">
        <div class="container">
            <div class="cta__wrapper">
                <div class="cta__newsletter justify-content-center">
                    <div class="cta__newsletter-inner" data-aos="fade-up" data-aos-duration="1000">
                        <div class="cta__thumb">
                            <img src="{{asset('')}}assets/images/cta/3.png" alt="cta-thumb">
                        </div>
                        <div class="cta__subscribe">
                            <h2> <span>Subscribe</span> our news</h2>
                            <p>Hey! Are you tired of missing out on our updates? Subscribe to our news now and stay in
                                the loop!</p>
                            <form class="cta-form cta-form--style2 form-subscribe" action="#">
                                <div class="cta-form__inner d-sm-flex align-items-center">
                                    <input type="email" class="form-control form-control--style2 mb-3 mb-sm-0"
                                        placeholder="Email Address">
                                    <button class="trk-btn  trk-btn--large trk-btn--secondary2"
                                        type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="cta__shape">
                    <span class="cta__shape-item cta__shape-item--1"><img src="{{asset('')}}assets/images/cta/2.png"
                            alt="shape icon"></span>
                    <span class="cta__shape-item cta__shape-item--2"><img src="{{asset('')}}assets/images/cta/4.png"
                            alt="shape icon"></span>
                    <span class="cta__shape-item cta__shape-item--3"><img src="{{asset('')}}assets/images/cta/5.png"
                            alt="shape icon"></span>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============>> cta section start here <<================= -->

@include('layouts.mainsite.footer')





  
