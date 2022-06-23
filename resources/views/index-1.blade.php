@extends('layouts.main')

@section('custom_css')
<link rel="stylesheet" href="{{URL::asset('assets/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/custom-animate.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/jquery.fancybox.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/responsive.css')}}">
<link href="{{URL::asset('assets/plugins/revolution/css/settings.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="{{URL::asset('assets/plugins/revolution/css/layers.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{URL::asset('assets/plugins/revolution/css/navigation.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
@endsection
@section('content')
@include('shared.slider')


<!-- Start of About section
	============================================= -->
<section id="ft-about" class="ft-about-section ft-service-section-3">
    <div class="container">
        <div class="ft-about-content">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="ft-about-img-exp position-relative">
                        <div class="ft-about-exp-area headline pera-content position-absolute">
                            <div class="ft-about-exp-img">
                                <img src="assets/img/shape/exp-sh1.png" alt="">
                            </div>
                            <div class="ft-about-exp-text position-absolute">
                                <h3><span class="counter">25</span><b>+</b> Years</h3>
                                <p>We have more than years of experience
                                </p>
                            </div>
                        </div>
                        <div class="ft-about-img">
                            <img src="assets/img/about/ab1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ft-about-text-wrapper">
                        <div class="ft-section-title headline pera-content">
                            <span class="sub-title">About Company</span>
                            <h2>Digital & Trusted
                                Transport Logistic Company
                            </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                        </div>
                        <div class="ft-about-feature-list-warpper">
                            <div class="ft-about-feature-list-item d-flex align-items-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="ft-about-feature-icon d-flex align-items-center justify-content-center">
                                    <i class="flaticon-worldwide"></i>
                                </div>
                                <div class="ft-about-feature-text headline pera-content">
                                    <h3>Global Service</h3>
                                    <p>We always provide people a complete solution focused of any business.
                                    </p>
                                </div>
                            </div>
                            <div class="ft-about-feature-list-item d-flex align-items-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="ft-about-feature-icon d-flex align-items-center justify-content-center">
                                    <i class="flaticon-place"></i>
                                </div>
                                <div class="ft-about-feature-text headline pera-content">
                                    <h3>Local Service</h3>
                                    <p>We always provide people a complete solution focused of any business.
                                    </p>
                                </div>
                            </div>
                            <div class="ft-btn wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <a class="d-flex justify-content-center align-items-center" href="about.html">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of About section
	============================================= -->
<!-- Start of Service section
	============================================= -->
<section id="ft-service-3" class="mt-5">
    <div class="container">
        <div class="ft-section-title headline pera-content text-center">
            <span class="sub-title">We specialise in the transportation</span>
            <h2>Specialist Logistics Services
            </h2>
        </div>
        <div class="ft-service-content-3">
            <div class="ft-service-content-items-3">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="ft-service-innerbox-3 position-relative">
                            <div class="ft-service-img position-relative">
                                <img src="assets/img/service/ser4.jpg" alt="">
                            </div>
                            <div class="ft-service-text-icon position-relative">
                                <div class="ft-service-icon d-flex align-items-center justify-content-center position-absolute">
                                    <i class="flaticon-plane"></i>
                                </div>
                                <div class="ft-service-text position-relative headline pera-content">
                                    <h3><a href="service-single.html">Air Freight Service</a></h3>
                                    <p>Once your business gets last-mile
                                        delivery right, it becomes a hallmark of your service which creates a serious business opportunity.</p>
                                </div>
                            </div>
                            <div class="more-btn position-absolute">
                                <a class="d-flex align-items-center justify-content-center text-uppercase" href="service-single.html">Read more <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="ft-service-innerbox-3 position-relative">
                            <div class="ft-service-img position-relative">
                                <img src="assets/img/service/ser6.jpg" alt="">
                            </div>
                            <div class="ft-service-text-icon position-relative">
                                <div class="ft-service-icon d-flex align-items-center justify-content-center position-absolute">
                                    <i class="flaticon-boat"></i>
                                </div>
                                <div class="ft-service-text position-relative headline pera-content">
                                    <h3><a href="service-single.html">Sea Transportation</a></h3>
                                    <p>Once your business gets last-mile
                                        delivery right, it becomes a hallmark of your service which creates a serious business opportunity.</p>
                                </div>
                            </div>
                            <div class="more-btn position-absolute">
                                <a class="d-flex align-items-center justify-content-center text-uppercase" href="service-single.html">Read more <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="ft-service-innerbox-3 position-relative">
                            <div class="ft-service-img position-relative">
                                <img src="assets/img/service/ser8.jpg" alt="">
                            </div>
                            <div class="ft-service-text-icon position-relative">
                                <div class="ft-service-icon d-flex align-items-center justify-content-center position-absolute">
                                    <i class="flaticon-free-shipping"></i>
                                </div>
                                <div class="ft-service-text position-relative headline pera-content">
                                    <h3><a href="service-single.html">Road Transportation</a></h3>
                                    <p>Once your business gets last-mile
                                        delivery right, it becomes a hallmark of your service which creates a serious business opportunity.</p>
                                </div>
                            </div>
                            <div class="more-btn position-absolute">
                                <a class="d-flex align-items-center justify-content-center text-uppercase" href="service-single.html">Read more <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ft-service-more-btn d-flex flex-wrap justify-content-center align-items-center wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <span>Our list of services does not end here. Find out how we can help you and your business.
                </span> <a class="text-uppercase align-items-center justify-content-center d-flex" href="service.html" target="_blank">More Services</a>
            </div>
        </div>
    </div>
</section>
<!-- End of Service section
	============================================= -->

<!-- Start of Fun fact section
	============================================= -->
<section id="ft-funfact-2" class="ft-funfact-section-2" data-background="assets/img/bg/shape-bg.jpg">
    <div class="container">
        <div class="ft-section-title headline pera-content text-center">
            <span class="sub-title">We specialise in the transportation</span>
            <h2>Together, we have your logistical
                challenges covered.
            </h2>
        </div>
        <div class="ft-funfact-content-2 position-relative">
            <span class="map-bg position-absolute text-center"><img src="assets/img/bg/map.png" alt=""></span>
            <div class="ft-funfact-inner-items-wrapper position-relative">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="ft-funfact-inner-items text-center">
                            <div class="ft-funfact-inner-icon d-flex align-items-center justify-content-center position-relative">
                                <i class="flaticon flaticon-delivery-truck"></i>
                            </div>
                            <div class="ft-funfact-inner-text headline pera-content">
                                <h3><span class="counter">1656</span></h3>
                                <p>Completed Delivery</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ft-funfact-inner-items text-center">
                            <div class="ft-funfact-inner-icon d-flex align-items-center justify-content-center position-relative">
                                <i class="flaticon-community"></i>
                            </div>
                            <div class="ft-funfact-inner-text headline pera-content">
                                <h3><span class="counter">1250</span></h3>
                                <p>Satisfied Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ft-funfact-inner-items text-center">
                            <div class="ft-funfact-inner-icon d-flex align-items-center justify-content-center position-relative">
                                <i class="flaticon-compliance"></i>
                            </div>
                            <div class="ft-funfact-inner-text headline pera-content">
                                <h3><span class="counter">30</span>+</h3>
                                <p>Awards Winner</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ft-funfact-inner-items text-center">
                            <div class="ft-funfact-inner-icon d-flex align-items-center justify-content-center position-relative">
                                <i class="flaticon-face-detection"></i>
                            </div>
                            <div class="ft-funfact-inner-text headline pera-content">
                                <h3><span class="counter">155</span>+</h3>
                                <p>Team Members</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Fun fact section
	============================================= -->

<!-- Start of why choose us section
	============================================= -->
<section id="ft-why-choose-2" class="ft-why-choose-section-2 position-relative">
    <span class="why-choose-bg-2"><img src="assets/img/bg/wc-bg2.jpg" alt=""></span>
    <span class="why-choose-img-2 position-absolute wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="assets/img/about/ab3.png" alt=""></span>
    <div class="container">
        <div class="ft-why-choose-content-2">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ft-why-choose-text-2">
                        <div class="ft-section-title headline pera-content">
                            <span class="sub-title">Why choose us?</span>
                            <h2>We Create Opportunity
                                to Reach Potential.
                            </h2>
                        </div>
                        <div class="ft-why-choose-list-wrapper ul-li-block">
                            <ul>
                                <li>Career progression</li>
                                <li>Fasttrans offers a clear and transparent career
                                    journey and provides the support</li>
                                <li>Make long term business decisions</li>
                                <li>Provide a service we are proud of</li>
                                <li>Be a responsible member of the community</li>
                                <li>Always seek to improve</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ft-why-choose-form-wrapper">
                        <div class="ft-why-choose-form pera-content">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wc-input">
                                            <span>Freight type:</span>
                                            <div class="wc-select position-relative">
                                                <select name="#">
                                                    <option value="#">Seelct</option>
                                                    <option value="#">Air Freight</option>
                                                    <option value="#">Sea Freight</option>
                                                    <option value="#">Road Freight</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="wc-input">
                                            <span>Load:</span>
                                            <div class="wc-select position-relative">
                                                <select name="#">
                                                    <option value="#">Seelct</option>
                                                    <option value="#">500kg</option>
                                                    <option value="#">1000kg</option>
                                                    <option value="#">1500kg</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="wc-input-range" data-background="assets/img/bg/wc-f-bg.jpg">
                                            <span>DIST (Miles):</span>
                                            <div class="wc-input-range-area d-flex align-items-center">
                                                <div id="slider-range" class="range-bar"></div>
                                                <div class="range-value clearfix">
                                                    <input type="text" id="amount">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wc-input">
                                            <span>Your name:</span>
                                            <div class="wc-text-input position-relative">
                                                <input type="text" placeholder="Jhon Doe..">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wc-input">
                                            <span>Phone number:</span>
                                            <div class="wc-text-input position-relative">
                                                <input type="text" placeholder="+883...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="text-uppercase" type="submit">Submit request</button>
                            </form>
                            <p>By clicking on <a href="#">this button</a>, I agree to the processing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of why choose us section
	============================================= -->

<!-- Team Section Two -->
<section class="mt-5">
    <div class="auto-container">
        <div class="ft-section-title headline pera-content">
            <span class="sub-title">Out Team</span>
            <h2>Our expert team will assist.
            </h2>
        </div>
        <div class="row">
            <!-- Team Block Two -->
            <div class="col-md-3 ft2-team-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="assets/images/resource/team-5.jpg" alt="" />
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <div class="overlay-image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
                            <div class="shape-layer"></div>
                            <div class="overlay-inner">
                                <div class="content">
                                    <div class="author-image">
                                        <img src="assets/images/resource/team-author-1.jpg" alt="" />
                                    </div>
                                    <div class="text">The Industrial Revolution, which took place centuries.</div>
                                    <!-- Social Box -->
                                    <ul class="social-box">
                                        <li><a href="#" class="fab fa-facebook-f"></a></li>
                                        <li><a href="#" class="fab fa-twitter"></a></li>
                                        <li><a href="#" class="fab fa-dribbble"></a></li>
                                        <li><a href="#" class="fab fa-behance"></a></li>
                                    </ul>
                                    <!-- End Social Box -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <div class="content">
                            <h5><a href="#">Jennifer Rivera</a></h5>
                            <div class="designation">Managing Director</div>
                            <div class="phone-number">
                                <a class="phone" href="tel:+44-(0)1274-600">+91 120 6777777</a>
                            </div>
                        </div>
                        <a href="#" class="more">Read More <span class="fa fa-angle-right"></span></a>
                    </div>
                </div>
            </div>

            <!-- Team Block Two -->
            <div class="col-md-3 ft2-team-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="assets/images/resource/team-6.jpg" alt="" />
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <div class="overlay-image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
                            <div class="shape-layer"></div>
                            <div class="overlay-inner">
                                <div class="content">
                                    <div class="author-image">
                                        <img src="assets/images/resource/team-author-1.jpg" alt="" />
                                    </div>
                                    <div class="text">The Industrial Revolution, which took place centuries.</div>
                                    <!-- Social Box -->
                                    <ul class="social-box">
                                        <li><a href="#" class="fab fa-facebook-f"></a></li>
                                        <li><a href="#" class="fab fa-twitter"></a></li>
                                        <li><a href="#" class="fab fa-dribbble"></a></li>
                                        <li><a href="#" class="fab fa-behance"></a></li>
                                    </ul>
                                    <!-- End Social Box -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <div class="content">
                            <h5><a href="#">Rob Miller</a></h5>
                            <div class="designation">Managing Director</div>
                            <div class="phone-number">
                                <a class="phone" href="tel:+44-(0)1274-600">+91 120 6777777</a>
                            </div>
                        </div>
                        <a href="#" class="more">Read More <span class="fa fa-angle-right"></span></a>
                    </div>
                </div>
            </div>

            <!-- Team Block Two -->
            <div class="col-md-3 ft2-team-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="assets/images/resource/team-7.jpg" alt="" />
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <div class="overlay-image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
                            <div class="shape-layer"></div>
                            <div class="overlay-inner">
                                <div class="content">
                                    <div class="author-image">
                                        <img src="assets/images/resource/team-author-1.jpg" alt="" />
                                    </div>
                                    <div class="text">The Industrial Revolution, which took place centuries.</div>
                                    <!-- Social Box -->
                                    <ul class="social-box">
                                        <li><a href="#" class="fab fa-facebook-f"></a></li>
                                        <li><a href="#" class="fab fa-twitter"></a></li>
                                        <li><a href="#" class="fab fa-dribbble"></a></li>
                                        <li><a href="#" class="fab fa-behance"></a></li>
                                    </ul>
                                    <!-- End Social Box -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <div class="content">
                            <h5><a href="#">Alfread Bonaport</a></h5>
                            <div class="designation">Electrical Engineer</div>
                            <div class="phone-number">
                                <a class="phone" href="tel:+44-(0)1274-600">+91 120 6777777</a>
                            </div>
                        </div>
                        <a href="#" class="more">Read More <span class="fa fa-angle-right"></span></a>
                    </div>
                </div>
            </div>

            <!-- Team Block Two -->
            <div class="col-md-3 ft2-team-block-two">
                <div class="inner-box">
                    <div class="image">
                        <img src="assets/images/resource/team-8.jpg" alt="" />
                        <!-- Overlay Box -->
                        <div class="overlay-box">
                            <div class="overlay-image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
                            <div class="shape-layer"></div>
                            <div class="overlay-inner">
                                <div class="content">
                                    <div class="author-image">
                                        <img src="assets/images/resource/team-author-1.jpg" alt="" />
                                    </div>
                                    <div class="text">The Industrial Revolution, which took place centuries.</div>
                                    <!-- Social Box -->
                                    <ul class="social-box">
                                        <li><a href="#" class="fab fa-facebook-f"></a></li>
                                        <li><a href="#" class="fab fa-twitter"></a></li>
                                        <li><a href="#" class="fab fa-dribbble"></a></li>
                                        <li><a href="#" class="fab fa-behance"></a></li>
                                    </ul>
                                    <!-- End Social Box -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <div class="content">
                            <h5><a href="#">Leon Froe</a></h5>
                            <div class="designation">Mechanical Engineer</div>
                            <div class="phone-number">
                                <a class="phone" href="tel:+44-(0)1274-600">+91 120 6777777</a>
                            </div>
                        </div>
                        <a href="#" class="more">Read More <span class="fa fa-angle-right"></span></a>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>
<!-- End Team Section Two -->

<!-- Testimonial Section Three -->
<section class="ft3-testimonial-section-three" style="background-image:url(assets/images/background/7.jpg)">
    <div class="auto-container">
        <div class="single-item-carousel owl-carousel owl-theme">

            <!-- Testimonial Block Three -->
            <div class="ft3-testimonial-block-three">
                <div class="inner-box">
                    <div class="clearfix">

                        <div class="content-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="pattern-layer" style="background-image:url(assets/images/background/8.jpg)"></div>
                                <div class="quote flaticon-quote-1"></div>
                                <div class="title">Client’s Review</div>
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="text">“We have completed many projects as shown in some of the pictures above, ranging from to railways, roadworks, culture projects through to bridges, balconies safety railings. Our involve ment ranges from providing transpor”</div>
                                <div class="author">
                                    Lucy Davies
                                    <span>Head of Supply Chain, Pharma Company</span>
                                </div>
                            </div>
                        </div>

                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="image">
                                    <img src="assets/images/resource/testimonial.jpg" alt="" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Testimonial Block Three -->
            <div class="ft3-testimonial-block-three">
                <div class="inner-box">
                    <div class="clearfix">

                        <div class="content-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="pattern-layer" style="background-image:url(assets/images/background/8.jpg)"></div>
                                <div class="quote flaticon-quote-1"></div>
                                <div class="title">Client’s Review</div>
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="text">“We have completed many projects as shown in some of the pictures above, ranging from to railways, roadworks, culture projects through to bridges, balconies safety railings. Our involve ment ranges from providing transpor”</div>
                                <div class="author">
                                    Lucy Davies
                                    <span>Head of Supply Chain, Pharma Company</span>
                                </div>
                            </div>
                        </div>

                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="image">
                                    <img src="assets/images/resource/testimonial.jpg" alt="" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Testimonial Block Three -->
            <div class="ft3-testimonial-block-three">
                <div class="inner-box">
                    <div class="clearfix">

                        <div class="content-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="pattern-layer" style="background-image:url(assets/images/background/8.jpg)"></div>
                                <div class="quote flaticon-quote-1"></div>
                                <div class="title">Client’s Review</div>
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="text">“We have completed many projects as shown in some of the pictures above, ranging from to railways, roadworks, culture projects through to bridges, balconies safety railings. Our involve ment ranges from providing transpor”</div>
                                <div class="author">
                                    Lucy Davies
                                    <span>Head of Supply Chain, Pharma Company</span>
                                </div>
                            </div>
                        </div>

                        <div class="image-column col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="image">
                                    <img src="assets/images/resource/testimonial.jpg" alt="" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Testimonial Section Three -->

<!-- Start of Blog section
	============================================= -->
<section id="ft-blog-3" class="ft-blog-section-3">
    <div class="container">
        <div class="ft-section-title headline pera-content text-center">
            <span class="sub-title">Our News</span>
            <h2>Get the latest news, advice &
                best practice from blog
            </h2>
        </div>
        <div class="ft-blog-content-3">
            <div class="blog-slider-3">
                <div class="ft-item-innerbox">
                    <div class="ft-blog-innerbox-3 position-relative">
                        <div class="ft-blog-img">
                            <img src="assets/img/blog/blg3.3.jpg" alt="">
                        </div>
                        <div class="ft-blog-text headline pera-content position-relative">
                            <div class="ft-blog-meta d-flex justify-content-between">
                                <a href="#"><i class="fas fa-calendar-alt"></i> September 12, 2019</a>
                                <a href="#"><i class="fas fa-user"></i> Admin</a>
                            </div>
                            <h3><a href="blog-single.html">Organisational teams of
                                    the are just like families.</a></h3>
                            <a class="more-btn text-uppercase d-flex justify-content-center align-items-center position-absolute" href="blog-single.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="ft-item-innerbox">
                    <div class="ft-blog-innerbox-3 position-relative">
                        <div class="ft-blog-img">
                            <img src="assets/img/blog/blg3.4.jpg" alt="">
                        </div>
                        <div class="ft-blog-text headline pera-content position-relative">
                            <div class="ft-blog-meta d-flex justify-content-between">
                                <a href="#"><i class="fas fa-calendar-alt"></i> September 12, 2019</a>
                                <a href="#"><i class="fas fa-user"></i> Admin</a>
                            </div>
                            <h3><a href="blog-single.html">From Monday 14th June
                                    we look a little different!</a></h3>
                            <a class="more-btn text-uppercase d-flex justify-content-center align-items-center position-absolute" href="blog-single.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="ft-item-innerbox">
                    <div class="ft-blog-innerbox-3 position-relative">
                        <div class="ft-blog-img">
                            <img src="assets/img/blog/blg3.5.jpg" alt="">
                        </div>
                        <div class="ft-blog-text headline pera-content position-relative">
                            <div class="ft-blog-meta d-flex justify-content-between">
                                <a href="#"><i class="fas fa-calendar-alt"></i> September 12, 2019</a>
                                <a href="#"><i class="fas fa-user"></i> Admin</a>
                            </div>
                            <h3><a href="blog-single.html">The current UK Haulage
                                    Market – How will this...</a></h3>
                            <a class="more-btn text-uppercase d-flex justify-content-center align-items-center position-absolute" href="blog-single.html">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="ft-item-innerbox">
                    <div class="ft-blog-innerbox-3 position-relative">
                        <div class="ft-blog-img">
                            <img src="assets/img/blog/blg3.3.jpg" alt="">
                        </div>
                        <div class="ft-blog-text headline pera-content position-relative">
                            <div class="ft-blog-meta d-flex justify-content-between">
                                <a href="#"><i class="fas fa-calendar-alt"></i> September 12, 2019</a>
                                <a href="#"><i class="fas fa-user"></i> Admin</a>
                            </div>
                            <h3><a href="blog-single.html">Organisational teams of
                                    the are just like families.</a></h3>
                            <a class="more-btn text-uppercase d-flex justify-content-center align-items-center position-absolute" href="blog-single.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="ft-item-innerbox">
                    <div class="ft-blog-innerbox-3 position-relative">
                        <div class="ft-blog-img">
                            <img src="assets/img/blog/blg3.4.jpg" alt="">
                        </div>
                        <div class="ft-blog-text headline pera-content position-relative">
                            <div class="ft-blog-meta d-flex justify-content-between">
                                <a href="#"><i class="fas fa-calendar-alt"></i> September 12, 2019</a>
                                <a href="#"><i class="fas fa-user"></i> Admin</a>
                            </div>
                            <h3><a href="blog-single.html">From Monday 14th June
                                    we look a little different!</a></h3>
                            <a class="more-btn text-uppercase d-flex justify-content-center align-items-center position-absolute" href="blog-single.html">Read More</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>
<!-- End of Blog section
	============================================= -->

<!-- CTA Section Two -->
<section class="ft3-cta-section-two" style="background-image:url(assets/images/background/9.jpg)">
    <div class="auto-container">
        <div class="content">
            <h3>We enable to deliver quality, sustained, cost effective <br> services to all of our customers.</h3>
            <a href="#" class="theme-btn read-more">Read More <span class="fa fa-angle-right"></span></a>
        </div>
    </div>
</section>
<!-- End CTA Section Two -->
@endsection
@section('script')
<!-- For Js Library -->
<!-- <script src="assets/js/appilo-js-plugin.js"></script> -->
<script src="{{URL::asset('assets/js/appear-two.js')}}"></script>
<script src="{{URL::asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{URL::asset('assets/js/isotope.pkgd.js')}}"></script>
<script src="{{URL::asset('assets/js/progress-bar.js')}}"></script>

<!-- Revolution Slider -->
<script src="{{URL::asset('assets/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/revolution/js/main-slider-script.js')}}"></script>
<!-- For Js Library -->

<script src="{{URL::asset('assets/js/jquery.fancybox.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery-ui.js')}}"></script>
<script src="{{URL::asset('assets/js/knob.js')}}"></script>
<script src="{{URL::asset('assets/js/isotope.js')}}"></script>
<script src="{{URL::asset('assets/js/tilt.jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/js/script-two.js')}}"></script>
@endsection
