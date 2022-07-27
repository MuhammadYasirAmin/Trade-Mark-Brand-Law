<!DOCTYPE html>
<html lang="zxx"> 
    <head>
        <?php $PageTitle = 'Home'; include_once 'components/meta-tags.php'; ?>
        <!-- Bootstrap v4.4.1 css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- flaticon css -->
        <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
        <!-- animate css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Main Menu css -->
        <link rel="stylesheet" href="assets/css/rsmenu-main.css">
        <!-- nivo slider CSS -->
        <link rel="stylesheet" type="text/css" href="assets/inc/custom-slider/css/nivo-slider.css">
        <link rel="stylesheet" type="text/css" href="assets/inc/custom-slider/css/preview.css">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-779D28VXBP"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-779D28VXBP');
</script>
        
    </head>
    <body class="defult-home">
        
        <?php include_once 'components/preloader.php'; ?>
     
		<!-- Main content Start -->
        <div class="main-content">
            
            <style>
                /*.rs-slider .nivo-directionNav > a.nivo-prevNav {*/
                /*    top: 25.4% !important;*/
                /*}*/
                /*.rs-slider .nivo-directionNav > a.nivo-nextNav {*/
                /*    top: 33% !important;*/
                /*}*/
                /*.rs-slider.slider3 .content-part {*/
                /*    top: 35% !important;*/
                /*}*/
            </style>

            
        <?php include_once 'components/menu.php'; ?>

            <!-- Slider Start -->
            <div id="rs-slider" class="rs-slider slider3">
                <div class="bend niceties">
                    <div id="nivoSlider" class="slides">
                        <img src="assets/images/slider/h2-sl1.webp" alt="" title="#slide-1" />
                        <img src="assets/images/slider/h2-sl2.webp" alt="" title="#slide-2" />
                    </div>
                    <!-- Slide 1 -->
                    <div id="slide-1" class="slider-direction">
                        <div class="content-part">
                            <div class="container">
                                <div class="slider-des">
                                    <div class="sl-subtitle">Trademark brand law provides the highest credibility for your brand</div>
                                    <h1 class="sl-title" style="font-size: 70px !important;">We Transform <br> Your Business </h1>
                                </div>
                                <div class="desc">PROTECT YOUR BUSINESS INDIVIDUALITY BY REGISTERING YOUR LOGO, TITLE, AND SLOGANS THROUGH TRADEMARK BRAND LAW!</div>
                                <div class="slider-bottom d-flex">
                                    <a class="readon consultant slider mr-5" href="/Questionnaire/Step-1">Get Started</a>
                                    <a class="readon price ml-5" href="#Learn-More">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div id="slide-2" class="slider-direction">
                        <div class="content-part">
                            <div class="container">
                                <div class="slider-des">
                                    <div class="sl-subtitle">Trademark brand law provides the highest credibility for your brand</div>
                                    <h1 class="sl-title" style="font-size: 70px !important;">We Transform <br> Your Business </h1>
                                </div>
                                <div class="desc">PROTECT YOUR BUSINESS INDIVIDUALITY BY REGISTERING YOUR LOGO, TITLE, AND SLOGANS THROUGH TRADEMARK BRAND LAW!</div>
                                <div class="slider-bottom d-flex">
                                    <a class="readon consultant slider mr-5" href="/Questionnaire/Step-1">Get Started</a>
                                    <a class="readon price ml-5" href="#Learn-More">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider End -->

            <!-- Premium Services Section Start -->
            <div id="rs-services" class="rs-services style2 gray-bg pt-50 pb-50 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title2 d-flex align-items-center mb-60 md-mb-40">
                        <div class="first-half">
                            <div class="sub-text">What We Offer</div>
                            <h2 class="title mb-0 md-pb-20">Providing Efficient Trademark Services to Businesses to Assist Their Growth - <span>what we do.</span></h2>
                        </div>
                        <div class="last-half">
                            <p class="desc mb-0 pl-20 md-pl-15">Trademark Law is a streamlined online platform for low-cost trademark registration services for individuals and professionals (start-ups and mid-sized businesses) who are unfamiliar with the tedious and oftentimes cumbrous trademark (or copyright) registration application process.</p>
                        </div>
                    </div>
                    <div class="rs-carousel owl-carousel" 
                        data-loop="true" 
                        data-items="3" 
                        data-margin="30" 
                        data-autoplay="true" 
                        data-hoverpause="true" 
                        data-autoplay-timeout="5000" 
                        data-smart-speed="800" 
                        data-dots="true" 
                        data-nav="false" 
                        data-nav-speed="false" 

                        data-md-device="3" 
                        data-md-device-nav="false" 
                        data-md-device-dots="true" 
                        data-center-mode="false"

                        data-ipad-device2="2" 
                        data-ipad-device-nav2="false" 
                        data-ipad-device-dots2="true"

                        data-ipad-device="2" 
                        data-ipad-device-nav="false" 
                        data-ipad-device-dots="true" 

                        data-mobile-device="1" 
                        data-mobile-device-nav="false" 
                        data-mobile-device-dots="true">  
                        <div class="service-wrap">
                            <div class="image-part">
                                <img src="assets/images/services/style2/4.jpg" alt="">
                            </div>
                            <div class="content-part">
                                <h3 class="title"><a href="/Services/Trademark-Registration.php">Trademark Registration</a></h3>
                                <div class="desc">Brand recognition is important because it will help you stand out from the crowd and will protect you by broadening your legal bounds.</div>
                            </div>
                        </div>
                        <div class="service-wrap">
                            <div class="image-part">
                                <img src="assets/images/services/style2/2.jpg" alt="">
                            </div>
                            <div class="content-part">
                                <h3 class="title"><a href="/Services/Comprehensive-Trademark-Search.php">Comprehensive Search</a></h3>
                                <div class="desc">We assist our clients in determining the likelihood of registering a trademark before they spend time and money on it by avoiding costly trademark conflicts.</div>
                            </div>
                        </div>
                        <div class="service-wrap">
                            <div class="image-part">
                                <img src="assets/images/services/style2/3.jpg" alt="">
                            </div>
                            <div class="content-part">
                                <h3 class="title"><a href="/Services/Trademark-Monitoring.php">Trademark Monitoring</a></h3>
                                <div class="desc">We assist brands by providing trademark monitoring services that scour the internet for infringements and notify them when a potential threat exists.</div>
                            </div>
                        </div>
                        <div class="service-wrap">
                            <div class="image-part">
                                <img src="assets/images/services/style2/4.jpg" alt="">
                            </div>
                            <div class="content-part">
                                <h3 class="title"><a href="/Services/Free-Trademark-Search.php">Free Trademark Search</a></h3>
                                <div class="desc">We conduct a free trademark search through the USPTO database to find competing trademarks, saving both your time and money during the procedures.</div>
                            </div>
                        </div>
                        <div class="service-wrap">
                            <div class="image-part">
                                <img src="assets/images/services/style2/1.jpg" alt="">
                            </div>
                            <div class="content-part">
                                <h3 class="title"><a href="/Services/Copyright-Registration.php">Copyright Registration</a></h3>
                                <div class="desc">Trademark Brand Law aids in the protection of your original work, which you have made with your ideas, time, effort, and money. We file your copyright registration for all types of intellectual property using our simple and efficient procedure.</div>
                            </div>
                        </div>
                        <div class="service-wrap">
                            <div class="image-part">
                                <img src="assets/images/services/style2/5.jpg" alt="">
                            </div>
                            <div class="content-part">
                                <h3 class="title"><a href="/Services/Amazon-Brand-Register.php">Amazon Brand Register</a></h3>
                                <div class="desc">We complete the office action response for the client and send it to USPTO directly or give to the client so that the client’s attorney can review it.</div>
                            </div>
                        </div>
                        <div class="service-wrap">
                            <div class="image-part">
                                <img src="assets/images/services/style2/1.jpg" alt="">
                            </div>
                            <div class="content-part">
                                <h3 class="title"><a href="/Services/Business-Formation.php">Business Formation</a></h3>
                                <div class="desc">We fill out all the requirements for the Statement of Use for client by through research, so that the client can use the trademark in commerce.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Premium Services Section End -->

            <!-- Services Section Start -->
            <div class="rs-services home-style2 pt-50 pb-50 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title2 text-center md-left mb-40">
                        <div class="sub-text">Why Choose Us</div>
                        <h2 class="title">We provide new business owners and individuals an easy, quick, and cost-effective option to safeguard their <br><span>brand.</span></h2>
                    </div>
                    <div class="row y-middle">
                        <div class="col-lg-4  md-mb-50 pr-30 md-pr-l5">
                            <div class="services-item mb-45">
                                <div class="services-icon">
                                    <img src="assets/images/services/style3/1.png" alt="Images">
                                </div>
                                <div class="services-text">
                                    <h3 class="title"><a href="javascript:void(0)">Avoid wasting time and money</a></h3>
                                    <p class="services-txt"></p>
                                </div>
                            </div>
                            <div class="services-item mb-45">
                                <div class="services-icon">
                                    <img src="assets/images/services/style3/2.png" alt="Images">
                                </div>
                                <div class="services-text">
                                    <h3 class="title"><a href="javascript:void(0)">Review and confirm before filing</a></h3>
                                    <p class="services-txt"></p>
                                </div>
                            </div>
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="assets/images/services/style3/3.png" alt="Images">
                                </div>
                                <div class="services-text">
                                    <h3 class="title"><a href="javascript:void(0)">24/7 secure online access</a></h3>
                                    <p class="services-txt"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4  md-mb-50">
                            <div class="rs-videos choose-video">
                                <div class="images-video">
                                    <img src="assets/images/mini-logo.png" alt="images">
                                </div>
                            </div>  
                        </div>
                        <div class="col-lg-4 pl-40 md-pl-15">
                            <div class="services-item mb-45">
                                <div class="services-icon">
                                    <img src="assets/images/services/style3/4.png" alt="Images">
                                </div>
                                <div class="services-text">
                                    <h3 class="title"><a href="javascript:void(0)">Protection through active, comprehensive monitoring</a></h3>
                                    <p class="services-txt"></p>
                                </div>
                            </div>
                            <div class="services-item mb-45">
                                <div class="services-icon">
                                    <img src="assets/images/services/style3/5.png" alt="Images">
                                </div>
                                <div class="services-text">
                                    <h3 class="title"><a href="javascript:void(0)">Get notified about infringement</a></h3>
                                    <p class="services-txt"></p>
                                </div>
                            </div>
                            <div class="services-item">
                                <div class="services-icon">
                                    <img src="assets/images/services/style3/6.png" alt="Images">
                                </div>
                                <div class="services-text">
                                    <h3 class="title"><a href="javascript:void(0)">Receive detailed monthly reports</a></h3>
                                    <p class="services-txt"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Counter Section End -->
                <div class="rs-counter style1">
                    <div class="container">
                        <div class="counter-border-top">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
                                    <div class="counter-area">
                                        <div class="counter-list mb-20">
                                            <div class="counter-icon">
                                                <img src="assets/images/counter/icons/1.png" alt="Counter">
                                            </div>
                                            <div class="counter-number">
                                                <span class="rs-count">582</span>
                                            </div>
                                        </div>
                                        <div class="content-part">
                                            <h5 class="title">Projects completed for our respected clients.</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
                                    <div class="counter-area">
                                        <div class="counter-list mb-20">
                                            <div class="counter-icon">
                                                <img src="assets/images/counter/icons/2.png" alt="Counter">
                                            </div>
                                            <div class="counter-number">
                                                <span class="rs-count">215</span>
                                                <span class="prefix">+</span>
                                            </div>
                                        </div>
                                        <div class="content-part">
                                            <h5 class="title">Experienced people serving to clients.</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 xs-mb-30">
                                    <div class="counter-area">
                                        <div class="counter-list mb-20">
                                            <div class="counter-icon">
                                                <img src="assets/images/counter/icons/3.png" alt="Counter">
                                            </div>
                                            <div class="counter-number">
                                                <span class="rs-count">25</span>
                                                <span class="prefix">+</span>
                                            </div>
                                        </div>
                                        <div class="content-part">
                                            <h5 class="title">Years experience in business & consulting.</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="counter-area">
                                        <div class="counter-list mb-20">
                                            <div class="counter-icon">
                                                <img src="assets/images/counter/icons/4.png" alt="Counter">
                                            </div>
                                            <div class="counter-number">
                                                <span class="rs-count">70</span>
                                                <span class="prefix">+</span>
                                            </div>
                                        </div>
                                        <div class="content-part">
                                            <h5 class="title">Business & consulting awards won over world.</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Counter Section End -->
            </div>
            <!-- Services Section End -->

            <!-- Process Section Start -->
            <div class="rs-process style1 bg2 pt-50 pb-50 md-pt-70 md-pb-70" id="Learn-More">                
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-7">
                            <div class="sec-title2 md-text-center">
                                <div class="sub-text">Our Working Process</div>
                                <h2 class="title mb-23 white-color">Get Your Registered Trademark in  <span>3 Easy Steps.</span></h2>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="btn-part text-right md-text-center">
                                <a class="readon consultant discover" href="https://trademarkbrandlaw.com/Support/Contact-Us.php">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container custom2">
                    <div class="process-effects-layer">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 md-mb-30">
                                <div class="rs-addon-number">
                                    <div class="number-part">
                                        <div class="number-image">
                                            <img src="/assets/images/process/style1/1.png" alt="Process">
                                        </div>
                                        <div class="number-text">
                                            <div class="number-area"> <span class="number-prefix"> 1 </span></div>
                                            <div class="number-title"><h3 class="title">Complete our online application form</h3></div>
                                            <div class="number-txt"> 
                                                We work closely with you on ground levels and provide excellent support during the enrolling process. Starting your determination cycle only takes a few minutes.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 md-mb-30">
                                <div class="rs-addon-number">
                                    <div class="number-part">
                                        <div class="number-image">
                                            <img src="/assets/images/process/style1/2.png" alt="Process">
                                        </div>
                                        <div class="number-text">
                                            <div class="number-area"> <span class="number-prefix"> 2 </span></div>
                                            <div class="number-title"><h3 class="title">Getting your application ready</h3></div>
                                            <div class="number-txt"> 
                                                We'll conduct a comprehensive search of the USPTO and other databases to verify if your trademark has already been registered, and then we'll put together your official registration application.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 sm-mb-30">
                                <div class="rs-addon-number">
                                    <div class="number-part">
                                        <div class="number-image">
                                            <img src="/assets/images/process/style1/3.png" alt="Process">
                                        </div>
                                        <div class="number-text">
                                            <div class="number-area"> <span class="number-prefix"> 3 </span></div>
                                            <div class="number-title"><h3 class="title">Filing of the application</h3></div>
                                            <div class="number-txt"> 
                                               We will file your completed trademark and copyright registration applications with the USPTO and the US copyright office with completing our checklist and resolving all archives.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-lg-3 col-md-6">-->
                            <!--    <div class="rs-addon-number">-->
                            <!--        <div class="number-part">-->
                            <!--            <div class="number-image">-->
                            <!--                <img src="assets/images/process/style1/4.png" alt="Process">-->
                            <!--            </div>-->
                            <!--            <div class="number-text">-->
                            <!--                <div class="number-area"> <span class="number-prefix"> 4 </span></div>-->
                            <!--                <div class="number-title"><h3 class="title">Deliver</h3></div>-->
                            <!--                <div class="number-txt"> -->
                            <!--                    Quisque placerat vitae focus scelerisque. Fusce luctus odio ac nibh luctus, in porttitor.-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Process Section End -->

            <!-- Pricing section start -->
            <div class="rs-pricing style1 pt-50 pb-50 md-pt-70 md-pb-70">
                <div class="container">
                   <div class="sec-title text-center mb-55 md-mb-30">
                       <h2 class="title title2">
                           All your trademark needs at a great price
                       </h2>
                   </div>
                   <div class="row">
                       <div class="col-lg-4 col-md-6 md-mb-30">
                           <div class="pricing-table">
                                <div class="pricing-table-header">
                                    <h3 class="table-title">Trademark Searches</h3>
                                </div>
                               <div class="pricing-icon mb-40">
                                   <img src="assets/images/pricing/style1/1.png" alt="">
                               </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency">$</span>
                                        <span class="table-price-text">149</span>
                                        <span class="table-period">/ Starting</span>
                                    </div>
                                    <p>Know before you file. Make sure your mark is not being used.</p>
                                </div>
                               <div class="pricing-table-body">
                                   <ul>
                                        <li><i class="fa fa-check"></i><span>Avoid wasting time and money</span></li>
                                        <li><i class="fa fa-check"></i><span>Domestic and International searches</span></li>
                                        <li><i class="fa fa-check"></i><span>Comprehensive custom PDF report</span></li>
                                   </ul>
                               </div>
                               <div class="btn-part">
                                   <a class="readon price" href="/Services/Comprehensive-Trademark-Search.php">Learn More</a>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-6 md-mb-30 md-mb-0 sm-mb-30">
                           <div class="pricing-table white-bg">
                                <div class="pricing-table-header">
                                    <h3 class="table-title">Trademark Registration</h3>
                                </div>
                               <div class="pricing-icon mb-40">
                                   <img src="assets/images/pricing/style1/2.png" alt="">
                               </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency">$</span>
                                        <span class="table-price-text">99</span>
                                        <span class="table-period">/ Starting</span>
                                    </div>
                                    <p>+ USPTO filing fees</p>
                                    <p>Register your trademark online in as little as 7 minutes.</p>
                                </div>
                               <div class="pricing-table-body">
                                   <ul>
                                        <li><i class="fa fa-check"></i><span>Quick and easy questionnaire</span></li>
                                        <li><i class="fa fa-check"></i><span>Entire process completed online</span></li>
                                        <li><i class="fa fa-check"></i><span>Full customer support</span></li>
                                        <li><i class="fa fa-check"></i><span>Review and confirm before filing</span></li>
                                        <li><i class="fa fa-check"></i><span>24/7 secure online access</span></li>
                                   </ul>
                               </div>
                               <div class="btn-part">
                                   <a class="readon price" href="/Services/Trademark-Registration.php">Learn More</a>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-6">
                           <div class="pricing-table">
                                <div class="pricing-table-header">
                                    <h3 class="table-title">Trademark Monitoring</h3>
                                </div>
                               <div class="pricing-icon mb-40">
                                   <img src="assets/images/pricing/style1/3.png" alt="">
                               </div>
                                <div class="pricing-table-price">
                                    <div class="pricing-table-bags">
                                        <span class="pricing-currency">$</span>
                                        <span class="table-price-text">149</span>
                                        <span class="table-period">/ Starting</span>
                                    </div>
                                    <p>Get continued protection through active, comprehensive monitoring.</p>
                                </div>
                               <div class="pricing-table-body">
                                   <ul>
                                        <li><i class="fa fa-check"></i><span>Get notified about infringement</span></li>
                                        <li><i class="fa fa-check"></i><span>Ongoing comprehensive search</span></li>
                                        <li><i class="fa fa-check"></i><span>Receive detailed monthly reports</span></li>
                                   </ul>
                               </div>
                               <div class="btn-part">
                                   <a class="readon price" href="/Services/Trademark-Monitoring.php">Learn More</a>
                               </div>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
            <!-- Pricing section end -->

            <?php include_once 'components/testimonials.php'; ?>
            
            <!-- Contact Section Start -->
            <div class="rs-contact contact-style2 bg11 pt-50 pb-50 md-pt-65 md-pb-70">
                <div class="container">
                    <div class="sec-title2 mb-55 md-mb-35 text-center">
                        <div class="sub-text">Thousands have protected their brand by filing a trademark.</div>
                        <h2 class="title mb-0">Take action to protect <br> your name <span>today.</span></h2>
                    </div>
                    <div class="row y-middle">
                        <div class="contact-wrap text-center">
                            <div class="dflex">
                                <a class="readon consultant ml-7" href="/Services/Comprehensive-Trademark-Search.php">Trademark Search</a>
                                <a class="readon consultant mr-5" href="/Services/Trademark-Registration.php">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Section End -->
            
        </div> 
        <!-- Main content End -->

        <?php include_once 'components/footer.php'; ?>
    
        
        <!-- modernizr js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <!-- jquery latest version -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- op nav js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-one-page-nav/3.0.0/jquery.nav.min.js"></script>
        <!-- isotope.pkgd.min js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- owl.carousel js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- wow js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- imagesloaded js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/5.0.0/imagesloaded.pkgd.min.js" integrity="sha512-kfs3Dt9u9YcOiIt4rNcPUzdyNNO9sVGQPiZsub7ywg6lRW5KuK1m145ImrFHe3LMWXHndoKo2YRXWy8rnOcSKg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
         <!-- waypoints.min js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- counterup.min js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- magnific popup js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Nivo slider js -->
        <script src="assets/inc/custom-slider/js/jquery.nivo.slider.js"></script>
        <!-- contact form js -->
        <script src="assets/js/contact.form.js"></script>
        <!-- main js -->
        <script src="assets/js/main.js"></script>

    </body>
</html>