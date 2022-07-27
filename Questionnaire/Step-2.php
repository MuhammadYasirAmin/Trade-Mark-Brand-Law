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
                                                <input class="woocommerce-form__input woocommerce-form__input-checkbox" type="checkbox" id="CheckTerms" name="CheckTerms" required="">
                                                <label for="CheckTerms">I Accept The Terms And Conditions.</label>
                                            </div>
                                        </div>
                                        <?php
                                            $Update_ID = "";
                                            if(isset($_GET["LastID"])){
                                                $Update_ID = $_GET["LastID"];
                                            }
                                        ?>
                                        <input hidden type="text" name="Update_ID" value="<?php echo $Update_ID; ?>" />
                                        <div class="btn-part" id="send-msg">                                            
                                            <div class="form-group mb-0">
                                                <input class="readon submit w-100" name="step_2_sbmit_btn" type="submit" value="Complete Process">
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
                
                $("#rs-checkout").hide();
                $("#send-msg").hide();
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
                
                $("#rs-checkout").hide();
                $("#send-msg").hide();
                
            });
            
            $("#proceed-btn").click(function () {
                $("#rs-checkout").show();
                $("#send-msg").show();
                Tpkge = parseInt(document.getElementById("PackageAmount1").value) + parseInt(document.getElementById("PackageAmount2").value);
                $(".pkge-Amount").html("$ "+parseInt(Tpkge));
                
            });
            
            $('input[type="checkbox"]').on('change', function(e){
               if(e.target.checked){
                 $('#staticBackdrop2').modal('show');
               }
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