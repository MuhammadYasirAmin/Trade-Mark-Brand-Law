<!DOCTYPE html>
<html lang="zxx"> 
    <head>
        <?php $PageTitle = 'Registration Form'; include_once '../components/meta-tags.php'; ?>
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

<style>
    label {
        font-size: 16px;
        margin-bottom: 15px;
    }
</style>
            
            <!-- Contact Section Start -->
            <div class="rs-contact contact-style2 bg9 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title mb-45 md-mb-25 text-center">
                                <h2 class="title title2 pb-20">
                                   Trademark Application <span>Process.</span>
                                </h2>
                            </div>
                            <div class="contact-wrap">
                                <div id="form-messages"></div>
                                <form id="contact-form" method="POST" action="/assets/php/Register-Form2.php" enctype="multipart/form-data">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <label for="ProtectType">Select what you are trying to protect.<span class="sub-text" style="font-size: 24px;">*</span></label>
                                                <select class="from-control" id="ProtectType" name="ProtectType" required="">
                                                    <option value="" selected>Choose...</option>
                                                    <option value="Name">Name</option>
                                                    <option value="Slogan">Slogan</option>
                                                    <option value="Logo">Logo</option>
                                                </select>
                                            </div> 
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30" id="SelectName">
                                                <label for="ProtectName">Enter the Name you wish to protect.<span class="sub-text" style="font-size: 24px;">*</span></label>
                                                <input class="from-control" type="text" id="ProtectName" name="ProtectName" placeholder="Complete Name">
                                            </div> 
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30" id="SelectSlogan">
                                                <label for="ProtectSlogan">Enter the Slogan you wish to protect.<span class="sub-text" style="font-size: 24px;">*</span></label>
                                                <input class="from-control" type="text" id="ProtectSlogan" name="ProtectSlogan" placeholder="Slogan Name">
                                            </div> 
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30" id="SelectLogo">
                                                <label for="ProtectLogo">Enter the Logo you wish to protect.<span class="sub-text" style="font-size: 24px;">*</span></label>
                                                <input class="from-control" type="file" id="ProtectLogo" name="ProtectLogo" accept="image/*" >
                                            </div> 
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <label for="SelectTrademark">Will the trademark be owned by an individual or an entity such as a corporation or LLC?</label>
                                                <select class="from-control" id="SelectTrademark" name="SelectTrademark" required="">
                                                    <option value="" selected>Choose...</option>
                                                    <option value="Individual">Individual</option>
                                                    <option value="Organization">Organization</option>
                                                </select>
                                            </div> 
                                        </div>
                                        <div class="row" id="CustomerInfo">
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <label for="CustomerName">Enter Your Full Name.<span class="sub-text" style="font-size: 24px;">*</span></label>
                                                <input class="from-control" type="text" id="CustomerName" name="CustomerName" placeholder="Enter Your Name">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <label for="CustomerEmail">Enter Your Email Address.<span class="sub-text" style="font-size: 24px;">*</span></label>
                                                <input class="from-control" type="email" id="CustomerEmail" name="CustomerEmail" placeholder="E-Mail Address">
                                            </div>   
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <label for="CustomerPhone">Enter Your Phone Number.<span class="sub-text" style="font-size: 24px;">*</span></label>
                                                <input class="from-control" type="number" min="0" id="CustomerPhone" name="CustomerPhone" placeholder="Phone Number">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <label for="CustomerAddress">Enter Your Address.<span class="sub-text" style="font-size: 24px;">*</span></label>
                                                <input class="from-control" type="text" id="CustomerAddress" name="CustomerAddress" placeholder="Complete Address" >
                                            </div>
                                        </div>
                                        <div class="row" id="OrganizationInfo">
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <label for="OrganizationType">Organization Type.<span class="sub-text" style="font-size: 24px;">*</span></label>
                                                <input class="from-control" type="text" id="OrganizationType" name="OrganizationType" placeholder="Organization Type" >
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <label for="OrganizationName">Enter Your Business Name.<span class="sub-text" style="font-size: 24px;">*</span></label>
                                                <input class="from-control" type="text" id="OrganizationName" name="OrganizationName" placeholder="Enter Your Business Name" >
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <label for="BusinessEmail">Enter Business Email Address.<span class="sub-text" style="font-size: 24px;">*</span></label>
                                                <input class="from-control" type="email" id="BusinessEmail" name="BusinessEmail" placeholder="E-Mail Address" >
                                            </div>   
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <label for="BusinessPhone">Enter Business Phone Number.<span class="sub-text" style="font-size: 24px;">*</span></label>
                                                <input class="from-control" type="number" min="0" id="BusinessPhone" name="BusinessPhone" placeholder="Phone Number" >
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <label for="OrganizationAddress">Enter Business Address.<span class="sub-text" style="font-size: 24px;">*</span></label>
                                                <input class="from-control" type="text" id="OrganizationAddress" name="OrganizationAddress" placeholder="Complete Address" >
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <div class="btn-part">                                            
                                                    <div class="form-group mb-0">
                                                        <input class="readon submit w-100" name="step_1_sbmit_btn" type="submit" value="Continue To Proceed">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Section End -->
            
        </div> 
        <!-- Main content End -->
        
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
        
        <script>
            $("#SelectName").hide();
            $("#SelectSlogan").hide();
            $("#SelectLogo").hide();
            
            $("#CustomerInfo").hide();
            $("#OrganizationInfo").hide();
            
            $("#ProtectType").change(function () {
                var SelectInput = this.value;
                if (SelectInput === "Name"){
                    $("#SelectName").show();
                    $("#ProtectName").attr("required", "true");
                    $("#SelectSlogan").hide();
                    $("#SelectLogo").hide();
                } else if (SelectInput === "Slogan") {
                    $("#SelectName").hide();
                    $("#SelectSlogan").show();
                    $("#ProtectSlogan").attr("required", "true");
                    $("#SelectLogo").hide();
                } else if (SelectInput === "Logo") {
                    $("#SelectName").hide();
                    $("#SelectSlogan").hide();
                    $("#SelectLogo").show();
                    $("#ProtectLogo").attr("required", "true");
                } else {
                    $("#SelectName").hide();
                    $("#SelectSlogan").hide();
                    $("#SelectLogo").hide();
                }
            });
            $("#SelectTrademark").change(function () {
                var SelectTrademark = this.value;
                if (SelectTrademark === "Individual"){
                    $("#CustomerInfo").show();
                    
                    $("#CustomerName").attr("required", "true");
                    $("#CustomerPhone").attr("required", "true");
                    $("#CustomerEmail").attr("required", "true");
                    $("#CustomerAddress").attr("required", "true");
                    
                    $("#OrganizationInfo").hide();
                } else if (SelectTrademark === "Organization") {
                    $("#CustomerInfo").hide();
                    $("#OrganizationInfo").show();
                    
                    $("#OrganizationType").attr("required", "true");
                    $("#OrganizationName").attr("required", "true");
                    $("#BusinessEmail").attr("required", "true");
                    $("#BusinessPhone").attr("required", "true");
                    $("#OrganizationAddress").attr("required", "true");
                } else {
                    $("#CustomerInfo").hide();
                    $("#OrganizationInfo").hide();
                }
            });
            
            
        </script>
    </body>
</html>