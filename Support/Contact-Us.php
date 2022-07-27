<!DOCTYPE html>
<html lang="zxx"> 
    <head>
        <?php $PageTitle = 'Contact Us'; include_once '../components/meta-tags.php'; ?>
        <!-- Bootstrap v4.4.1 css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- flaticon css -->
        <link rel="stylesheet" type="text/css" href="/assets/fonts/flaticon.css">
        <!-- animate css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/off-canvas.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Main Menu css -->
        <link rel="stylesheet" href="/assets/css/rsmenu-main.css">
        <!-- nivo slider CSS -->
        <link rel="stylesheet" type="text/css" href="/assets/inc/custom-slider/css/nivo-slider.css">
        <link rel="stylesheet" type="text/css" href="/assets/inc/custom-slider/css/preview.css">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/rs-spacing.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
        
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
        
        <?php include_once '../components/preloader.php'; ?>
     
		<!-- Main content Start -->
        <div class="main-content">

            
        <?php include_once '../components/services-menu.php'; ?>
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img1">
                <div class="container">
                    <div class="breadcrumbs-inner">
                        <h1 class="page-title">
                            Have Questions - Contact Us
                            <span class="watermark">Support</span>
                        </h1>
                        <p class="sub-text">We're here for you. You might also find what you're looking for by visiting our <a href="/Support/F-A-Q.php">FAQs page</a>.</p>
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs End -->
            
            <!-- Contact Section Start -->
            <div class="rs-contact contact-style2 bg9 pt-50 pb-50 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 padding-0">
                            <div class="contact-address">
                                <div class="sec-title mb-46">
                                    <h2 class="title pb-20">
                                       Get in touch
                                    </h2>
                                    <div class="sub-text text-danger">WHAT YOU MUST KNOW BEFORE CONTACTING US.</div>
                                </div>
                                <p>
                                    Trademark Brand Law isn't a firm and none of the knowledge on this website constitutes or is meant to convey legal advice. 
                                </p>
                                <p>
                                    Likewise, our customer service representatives are here to help you, but they'll not provide any legal advice to you. 
                                </p>
                                <p>
                                    General information about the law isn't an equivalent as advice about the appliance of the law during a particular factual or legal situation. 
                                </p>
                                <p>
                                    Individual facts and circumstances also as legal principles including but not limited to those referenced on this website can affect the result of any given situation.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sec-title mb-45 md-mb-25">
                                <h2 class="title pb-20">
                                   Let us help your business to move <span>forward.</span>
                                </h2>
                                <p class="margin-0"></p>
                            </div>
                            <div class="contact-wrap">
                                <div id="form-messages"></div>
                                <form id="contact-form" method="POST" action="/assets/php/Contact-Form.php">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="name" name="C_Name" placeholder="Full Name" required="">
                                            </div> 
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="email" id="email" name="C_Email" placeholder="E-Mail Address" required="">
                                            </div>   
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="number" id="phone" name="C_Phone" placeholder="Phone Number" required="">
                                            </div>   
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <input class="from-control" type="text" id="Website" name="C_Websites" placeholder="Your Website" required="">
                                            </div>
                                      
                                            <div class="col-lg-12 mb-35">
                                                <textarea class="from-control" id="message" name="C_Message" placeholder="Your message Here" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="btn-part">                                            
                                            <div class="form-group mb-0">
                                                <input class="readon submit w-100" name="Contact_sbmit_btn" type="submit" value="Send Message Us">
                                            </div>
                                        </div> 
                                    </fieldset>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact Icon Section Start -->
                <div class="rs-contact main-home">
                    <div class="container">
                        <div class="contact-icons-style box-address pt-50 md-pt-70">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6 md-mb-30">
                                    <div class="contact-item">
                                       <div class="contact-icon">
                                           <img src="/assets/images/contact/icons/1.png" alt="images">
                                       </div>
                                       <div class="content-text">
                                           <h2 class="title"><a href="javascript:$zopim.livechat.window.show()">Live Chat</a></h2>
                                           <p class="services-txt">how we can help you.
                                            <a href="">Click here to live chat now</a></p>
                                       </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 xs-mb-30">
                                    <div class="contact-item">
                                       <div class="contact-icon">
                                           <img src="/assets/images/contact/icons/3.png" alt="images">
                                       </div>
                                       <div class="content-text">
                                           <h2 class="title"><a href="#">Email us</a></h2>
                                            <a href="mailto:support@trademarkbrandlaw.com">support@trademarkbrandlaw.com</a><br>
                                            <!--<a href="mailto:info@trademarkbrandlaw.com">info@trademarkbrandlaw.com</a>-->
                                       </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="contact-item">
                                       <div class="contact-icon">
                                           <img src="/assets/images/contact/icons/4.png" alt="images">
                                       </div>
                                       <div class="content-text">
                                           <h2 class="title"><a href="#">Call us</a></h2>
                                           <a href="tel:(713) 322-0190">(713) 322-0190</a><br>
                                           <!--<a href="tel:(+088)222-9999">(+088) 222-9999</a>-->
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Contact Icon Section End -->
            </div>
            <!-- Contact Section End -->
            
        </div> 
        <!-- Main content End -->

        <?php include_once '../components/footer.php'; ?>
        
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
        <script src="/assets/inc/custom-slider/js/jquery.nivo.slider.js"></script>
        <!-- contact form js -->
        <script src="/assets/js/contact.form.js"></script>
        <!-- main js -->
        <script src="/assets/js/main.js"></script>

    </body>
</html>