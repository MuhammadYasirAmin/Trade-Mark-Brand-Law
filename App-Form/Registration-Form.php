<!DOCTYPE html>
<html lang="zxx"> 
    <head>
        <?php $PageTitle = 'Registration Form'; include_once '../components/meta-tags.php'; ?>
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css">
        <!-- flaticon css -->
        <link rel="stylesheet" type="text/css" href="/assets/fonts/flaticon.css">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.css">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/off-canvas.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/magnific-popup.css">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="/assets/css/rsmenu-main.css">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/rs-spacing.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css"> 
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
        
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
            
        <?php include_once '../components/services-menu.php'; ?>
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img8">
                <div class="container">
                    <div class="breadcrumbs-inner">
                        <h1 class="page-title">
                            Registering Your Trademark </br> in the United States.
                            <span class="watermark">Form</span>
                        </h1>
                        <span class="sub-text">Complete your application in 7 minutes. Have questions? Call 1 (877) 721-4579 or LIVE CHAT for real-time support.</span>
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs End -->
            
            <!-- Contact Section Start -->
            <div class="rs-contact contact-style2 bg9 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title mb-45 md-mb-25">
                                <h2 class="title pb-20">
                                   Trademark Application <span>Process.</span>
                                </h2>
                                <!-- Skillbar Section Start -->
                                <div class="rs-skillbar style1">
                                    <div class="cl-skill-bar">
                                       <!-- Start Skill Bar -->
                                       <div class="skillbar" data-percent="90">
                                           <p class="skillbar-bar"></p>
                                           <span class="skill-bar-percent"></span> 
                                       </div>
                                    </div>
                                </div>
                                <!-- Skillbar Section End -->
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
                                            <div class="col-lg-12 mb-35">
                                                <label for="OrganizationDescription">Provide a few more details on the goods and services you are selling with your trademark.<span class="sub-text" style="font-size: 24px;">*</span></label>
                                                <textarea class="from-control" id="OrganizationDescription" name="OrganizationDescription" placeholder="Business Description " required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <label for="TrademarkSearch">What type of trademark search would you like us to conduct? Select one.<span class="sub-text" style="font-size: 24px;">*</span></label>
                                                <select class="from-control" id="package1" name="TrademarkSearch" required="">
                                                    <option value="" selected>Choose...</option>
                                                    <option value="Basic Federal Direct-Hit Search ($9.99)">Basic Federal Direct-Hit Search ($9.99)</option>
                                                    <option value="Federal & State Search (+$149) Most Popular">Federal & State Search (+$149) Most Popular</option>
                                                    <option value="Federal, State & Common Law Search (+$299) Recommended">Federal, State & Common Law Search (+$299) Recommended</option>
                                                    <option value="Global Comprehensive U.S. And International Search (+$499)">Global Comprehensive U.S. And International Search (+$499)</option>
                                                </select>
                                            </div> 
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <label for="SelectPackage">Choose a Package:</label>
                                                <select class="from-control" id="package2" name="SelectPackage" required="">
                                                    <option value="" selected>Choose...</option>
                                                    <option value="Basic Package For Just $39.99 + USPTO Filing Fees">Basic Package For Just $39.99 + USPTO Filing Fees*</option>
                                                    <option value="Standard Package For Just $79.99 + USPTO Filing Fees">Standard Package For Just $79.99 + USPTO Filing Fees*</option>
                                                    <option value="Premium Package For Just $169.99 + USPTO Filing Fees">Premium Package For Just $169.99 + USPTO Filing Fees*</option>
                                                </select>
                                            </div> 
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <div class="btn-part">                                            
                                                    <div class="form-group mb-0">
                                                        <input class="readon submit w-100" id="proceed-btn" type="button" value="Continue To Proceed">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Checkout section start -->
                                        <div id="rs-checkout" class="rs-checkout">
                                            <div class="container">
                                                <div class="row">
                                                     <div class="col-lg-6">
                                                         <div class="full-grid">
                                                             <form>
                                                                 <div class="ordered-product">
                                                                     <div class="checkout-title">
                                                                         <h3>Your Order Detail</h3>
                                                                     </div>
                                                                     <table>
                                                                         <thead>
                                                                             <tr>
                                                                                 <th>Package Name</th>
                                                                                 <th>Product Amount</th>
                                                                             </tr>
                                                                         </thead>
                                                                         <tbody>
                                                                             <tr>
                                                                                 <td><strong class="pkge-Name1"></strong></td>
                                                                                 <td class="pkge-Amount1"></td>
                                                                                 
                                                                                 <input hidden type="text" id="PackageName1" name="PackageName1" />
                                                                                    <input hidden type="text" id="PackageAmount1" name="PackageAmount1" />
                                                                             </tr>
                                                                             <tr>
                                                                                 <td><strong class="pkge-Name2"></strong></td>
                                                                                 <td class="pkge-Amount2"></td>
                                                                                 <input hidden type="text" id="PackageName2" name="PackageName2" />
                                                                                    <input hidden type="text" id="PackageAmount2" name="PackageAmount2" />
                                                                             </tr>
                                                                         </tbody>
                                                                         <tfoot>
                                                                             <tr>
                                                                                 <th>Total Amount</th>
                                                                                 <th class="pkge-Amount"></th>
                                                                             </tr>
                                                                         </tfoot>
                                                                     </table>
                                                                 </div>
                                                                 <div class="payment-method mt-40 md-mt-20">
                                                                     <div class="bottom-area">
                                                                         <p class="mt-15">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                                                                         
                                                                     </div>
                                                                 </div>
                                                             </form>
                                                         </div>
                                                     </div>
                                                     <div class="col-lg-6 mb-30 pl-20" id="payment">
                                                        <div class="padding" style="padding: 5rem !important;">
                                                            <div class="">
                                                                <div class="">
                                                                    <div class="">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <div class="row">
                                                                                    <div class="col-md-6"> <span>CREDIT/DEBIT CARD PAYMENT</span> </div>
                                                                                    <div class="col-md-6 text-right" style="margin-top: -5px;"> <img src="https://img.icons8.com/color/36/000000/visa.png"> <img src="https://img.icons8.com/color/36/000000/mastercard.png"> <img src="https://img.icons8.com/color/36/000000/amex.png"> </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body" style="height: 350px">
                                                                                <div class="form-group"> <label for="cc-number" class="control-label">CARD NUMBER</label> <input id="cc-number" name="cc_number" type="tel" class="input-lg form-control cc-number" autocomplete="cc-number" placeholder="•••• •••• •••• ••••" required> </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group"> <label for="cc-exp" class="control-label">CARD EXPIRY</label> <input id="cc-exp" name="cc_exp" type="tel" class="input-lg form-control cc-exp" autocomplete="cc-exp" placeholder="•• / ••" required> </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group"> <label for="cc-cvc" class="control-label">CARD CVC</label> <input id="cc-cvc" name="cc_cvc" type="tel" class="input-lg form-control cc-cvc" autocomplete="off" placeholder="••••" required> </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group"> <label for="numeric" class="control-label">CARD HOLDER NAME</label> <input type="text" id="cc-name" name="CardHolderName" class="input-lg form-control"> </div>
                                                                                <!--<div class="form-group pt-25"> <button class="add-btn w-100" type="button">Continue to payment</button></div>-->
                                                                                 <!--onclick="IsValidCreditCardNumber(document.form1.cc_number);"-->
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
                                        <!-- Checkout section end -->
                                        <div class="row">
                                            <p class="sub-text big">All packages include lifetime customer support and our 100% money back guarantee.</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30 pl-20">
                                                <input class="woocommerce-form__input woocommerce-form__input-checkbox" type="checkbox" id="CheckTerms" name="CheckTerms" checked required="">
                                                <label for="CheckTerms">I Accept The Terms And Conditions.</label>
                                            </div>
                                        </div>
                                        <div class="btn-part" id="send-msg">                                            
                                            <div class="form-group mb-0">
                                                <input class="readon submit w-100" name="Reg_sbmit_btn" type="submit" value="Send Message Us">
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

        <?php include_once '../components/footer.php'; ?>
        
        <!-- modernizr js -->
        <script src="/assets/js/modernizr-2.8.3.min.js"></script>
        <!-- jquery latest version -->
        <script src="/assets/js/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="/assets/js/bootstrap.min.js"></script>
        <!-- op nav js -->
        <script src="/assets/js/jquery.nav.js"></script>
        <!-- isotope.pkgd.min js -->
        <script src="/assets/js/isotope.pkgd.min.js"></script>
        <!-- owl.carousel js -->
        <script src="/assets/js/owl.carousel.min.js"></script>
        <!-- wow js -->
        <script src="/assets/js/wow.min.js"></script>
        <!-- Skill bar js -->
        <script src="/assets/js/skill.bars.jquery.js"></script>
        <!-- imagesloaded js -->
        <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
         <!-- waypoints.min js -->
        <script src="/assets/js/waypoints.min.js"></script>
        <!-- counterup.min js -->
        <script src="/assets/js/jquery.counterup.min.js"></script> 
        <!-- magnific popup js -->
        <script src="/assets/js/jquery.magnific-popup.min.js"></script>
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
            
            $("#rs-checkout").hide();
            $("#send-msg").hide();
            var pkg1 = pkg2 = Tpkge = 0;
            var pkgName1 = pkgName2 = "";
            $("#package1").change(function () {
                var SelectTrademark = $('#package1 option:selected').index();
                pkgName1 = $(this).val();
                
                if (SelectTrademark == "0"){
                    pkg1 = 0;
                } else if (SelectTrademark == "1"){
                    pkg1 = 9.99;
                } else if (SelectTrademark == "2") {
                    pkg1 = 149;
                } else if (SelectTrademark == "3") {
                    pkg1 = 299;
                } else if (SelectTrademark == "4") {
                    pkg1 = 499;
                } else {
                    pkg1 = 0;
                }
                
                document.getElementById("PackageAmount1").value = pkg1;
                document.getElementById("PackageName1").value = pkgName1;
                
                $(".pkge-Name1").html(pkgName1);
                $(".pkge-Amount1").html("$ "+pkg1);
                
            });
            $("#package2").change(function () {
                var SelectTrademark2 = $('#package2 option:selected').index();
                pkgName2 = $(this).val();
                
                if (SelectTrademark2 == "1") {
                    pkg2 = 39.99;
                } else if (SelectTrademark2 == "2") {
                    pkg2 = 79.99;
                } else if (SelectTrademark2 == "3") {
                    pkg2 = 169.99;
                } else {
                    pkg2 = 0;
                }
                
                document.getElementById("PackageAmount2").value = pkg2;
                document.getElementById("PackageName2").value = pkgName2;
                
                $(".pkge-Name2").html(pkgName2);
                $(".pkge-Amount2").html("$ "+pkg2);
                
            });
            
            $("#proceed-btn").click(function () {
                $("#rs-checkout").show();
                $("#send-msg").show();
                Tpkge = parseInt(document.getElementById("PackageAmount1").value) + parseInt(document.getElementById("PackageAmount2").value);
                $(".pkge-Amount").html("$ "+parseInt(Tpkge));
                
            });
            
            
        </script>

<script> 
                   $(function($) {
$('[data-numeric]').payment('restrictNumeric');
$('.cc-number').payment('formatCardNumber');
$('.cc-exp').payment('formatCardExpiry');
$('.cc-cvc').payment('formatCardCVC');
$.fn.toggleInputError = function(erred) {
this.parent('.form-group').toggleClass('has-error', erred);
return this;
};
// $('#contact-form').submit(function(e) {
// e.preventDefault();
// var cardType = $.payment.cardType($('.cc-number').val());
// $('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
// $('.cc-exp').toggleInputError(!$.payment.validateCardExpiry($('.cc-exp').payment('cardExpiryVal')));
// $('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
// $('.cc-brand').text(cardType);
// $('.validation').removeClass('text-danger text-success');
// $('.validation').addClass($('.has-error').length ? 'text-danger' : 'text-success');
// });
});
               
        </script> 
    </body>
</html>