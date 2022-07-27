<!DOCTYPE html>
<html lang="zxx"> 
    <head>
        <?php $PageTitle = 'Copyright Form'; include_once '../components/meta-tags.php'; ?>
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
            
            <!-- Contact Section Start -->
            <div class="rs-contact contact-style2 bg9 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title mb-45 md-mb-25">
                                <h2 class="title pb-20">
                                   Copyright Application <span>Process.</span>
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
                                <form id="contact-form" method="POST" name="form1" action="/assets/php/copyright-Form.php" enctype="multipart/form-data">
                                    <fieldset>
                                        <!--<span class="sub-text" style="font-size: 24px;">*</span>-->
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                                <label for="WantCopyright">What You are Wanting To Copyright.</label>
                                                <select class="from-control" id="WantCopyright" name="WantCopyright" required="">
                                                    <option value="" selected>Choose...</option>
                                                    <optgroup label="Literary Work">
                                                        <option value="Written Work such as fiction, nonfiction, poetry, textbooks, refrence works or articles">Written Work such as fiction, nonfiction, poetry, textbooks, refrence works or articles</option>
                                                        <option value="Directories or Catalogs, Advertising Copy">Directories or Catalogs, Advertising Copy</option>
                                                        <option value="Computer Programs">Computer Programs</option>
                                                        <option value="Website or Online Material">Website or Online Material</option>
                                                    </optgroup>
                                                    
                                                    <optgroup label="Work of Visual Arts">
                                                        <option value="Photograph">Photograph</option>
                                                        <option value="Art Work">Art Work</option>
                                                        <option value="Maps">Maps</option>
                                                        <option value="Technical Drawings">Technical Drawings</option>
                                                    </optgroup>
                                                    
                                                    <optgroup label="Sound Recordings">
                                                        <option value="Recorded Performance of Music or Sound">Recorded Performance of Music or Sound</option>
                                                    </optgroup>
                                                    
                                                    <optgroup label="Work of Performance Arts">
                                                        <option value="Written Musice & Lyrics">Written Musice & Lyrics</option>
                                                        <option value="Screenplay or Script">Screenplay or Script</option>
                                                        <option value="Choreographic Work">Choreographic Work</option>
                                                        <option value="A Recorded Score For a movie or Play">A Recorded Score For a movie or Play</option>
                                                    </optgroup>
                                                    
                                                    <optgroup label="Motion Pictures/AV Work">
                                                        <option value="Feature Film, Documentry Film, Animated Film, Television Show, Video or Other Audi-Visual Work">Feature Film, Documentry Film, Animated Film, Television Show, Video or Other Audi-Visual Work</option>
                                                        <option value="Video Game">Video Game</option>
                                                    </optgroup>
                                                    
                                                </select>
                                            </div> 
                                            <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                                <label for="TitleCopyright">What is the Title of the Work You Would like to Copyright?</label>
                                                <input class="from-control" type="text" id="TitleCopyright" name="TitleCopyright" placeholder="What is the Title of the Work You Would like to Copyright?" required="">
                                                <p class="pl-10 mt-4">Leave blank if there is no title. If you are registering on a website. list the URL(example.com) - Whatever you enter here will appear on your official Copyright Office Registration to identify the work. If this so collection of works in a single application. such as a single album with several songs or o single collection of several essays. you must provide a tale for the collection and you may provide tides to the individual parts. too. but you do not have to. </p>
                                            </div>
                                            
                                            <?php $years = range(2000, strftime("%Y", time())); ?>
                                            
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                <label for="CopyrightYear">What Year Did You Complete Your Work?<span class="sub-text" style="font-size: 24px;">*</span></label>
                                                <select class="from-control" id="CopyrightYear" name="CopyrightYear" required="">
                                                    <?php foreach($years as $year) : ?>
                                                        <option value="<?php echo $year; ?>" <?php if($year === date('Y')) {echo 'selected';} else {echo '';}?>><?php echo $year; ?></option>
                                                      <?php endforeach; ?>
                                                </select>
                                            </div> 
                                            <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                                <label for="SelectWorkPublish">Has the Work Been Published.<span class="sub-text" style="font-size: 24px;">*</span></label>
                                                <div class="d-flex inline-block">
                                                    <input class="woocommerce-form__input woocommerce-form__input-checkbox mr-25 ml-25" type="radio" id="Publish1" value="Yes" name="WorkPublish" required="">
                                                    <label for="Publish1">Yes</label>
                                                    <input class="woocommerce-form__input woocommerce-form__input-checkbox mr-25 ml-25" type="radio" id="Publish2" value="No" name="WorkPublish" checked required="">
                                                    <label for="Publish2">No</label>
                                                </div>
                                            </div> 
                                            <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                                <label for="SelectWorkPeriod">Is Your Work A part of Larger Periodical (NewsPaper, Magzine) Or Serial? <span class="sub-text" style="font-size: 24px;">*</span></label>
                                                <div class="d-flex inline-block">
                                                    <input class="woocommerce-form__input woocommerce-form__input-checkbox mr-25 ml-25" type="radio" id="Publish3" value="Yes" name="WorkPeriod" required="">
                                                    <label for="Publish3">Yes</label>
                                                    <input class="woocommerce-form__input woocommerce-form__input-checkbox mr-25 ml-25" type="radio" id="Publish4" value="No" name="WorkPeriod" checked required="">
                                                    <label for="Publish4">No</label>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="row" id="CustomerInfo">
                                            <div class="">
                                                <h3 class="mt-20">
                                                   Who is the <span class="sub-text big"> Author </span> of The Work?
                                                </h3>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                                <label for="CustomerName">Full Name or Organization Name: <span class="sub-text" style="font-size: 24px;">*</span></label>
                                                <input class="from-control" type="text" id="CustomerName" name="CustomerName" placeholder="Enter Full Name or Organization Name" required="">
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                                <label for="CustomerEmail">Mailing Address: <span class="sub-text" style="font-size: 24px;">*</span></label>
                                                <input class="from-control" type="email" id="CustomerEmail" name="CustomerEmail" placeholder="Mailing Address" required="">
                                            </div>   
                                            <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                                <label for="SelectCitizenship">Country of Citizenship / Domicile<span class="sub-text" style="font-size: 24px;">*</span></label>
                                                <select class="from-control" id="SelectCitizenship" name="SelectCitizenship" required="">
                                                    <option value="" selected>Choose...</option>
    <option value="Afghanistan">Afghanistan</option>
    <option value="Aland Islands">Aland Islands</option>
    <option value="Albania">Albania</option>
    <option value="Algeria">Algeria</option>
    <option value="American Samoa">American Samoa</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Anguilla">Anguilla</option>
    <option value="Antarctica">Antarctica</option>
    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
    <option value="Argentina">Argentina</option>
    <option value="Armenia">Armenia</option>
    <option value="Aruba">Aruba</option>
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Bahamas">Bahamas</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Barbados">Barbados</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgium">Belgium</option>
    <option value="Belize">Belize</option>
    <option value="Benin">Benin</option>
    <option value="Bermuda">Bermuda</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
    <option value="Botswana">Botswana</option>
    <option value="Bouvet Island">Bouvet Island</option>
    <option value="Brazil">Brazil</option>
    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
    <option value="Brunei Darussalam">Brunei Darussalam</option>
    <option value="Bulgaria">Bulgaria</option>
    <option value="Burkina Faso">Burkina Faso</option>
    <option value="Burundi">Burundi</option>
    <option value="Cambodia">Cambodia</option>
    <option value="Cameroon">Cameroon</option>
    <option value="Canada">Canada</option>
    <option value="Cape Verde">Cape Verde</option>
    <option value="Cayman Islands">Cayman Islands</option>
    <option value="Central African Republic">Central African Republic</option>
    <option value="Chad">Chad</option>
    <option value="Chile">Chile</option>
    <option value="China">China</option>
    <option value="Christmas Island">Christmas Island</option>
    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
    <option value="Colombia">Colombia</option>
    <option value="Comoros">Comoros</option>
    <option value="Congo">Congo</option>
    <option value="Congo, Democratic Republic of the Congo">Congo, Democratic Republic of the Congo</option>
    <option value="Cook Islands">Cook Islands</option>
    <option value="Costa Rica">Costa Rica</option>
    <option value="Cote D'Ivoire">Cote D'Ivoire</option>
    <option value="Croatia">Croatia</option>
    <option value="Cuba">Cuba</option>
    <option value="Curacao">Curacao</option>
    <option value="Cyprus">Cyprus</option>
    <option value="Czech Republic">Czech Republic</option>
    <option value="Denmark">Denmark</option>
    <option value="Djibouti">Djibouti</option>
    <option value="Dominica">Dominica</option>
    <option value="Dominican Republic">Dominican Republic</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Egypt">Egypt</option>
    <option value="El Salvador">El Salvador</option>
    <option value="Equatorial Guinea">Equatorial Guinea</option>
    <option value="Eritrea">Eritrea</option>
    <option value="Estonia">Estonia</option>
    <option value="Ethiopia">Ethiopia</option>
    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
    <option value="Faroe Islands">Faroe Islands</option>
    <option value="Fiji">Fiji</option>
    <option value="Finland">Finland</option>
    <option value="France">France</option>
    <option value="French Guiana">French Guiana</option>
    <option value="French Polynesia">French Polynesia</option>
    <option value="French Southern Territories">French Southern Territories</option>
    <option value="Gabon">Gabon</option>
    <option value="Gambia">Gambia</option>
    <option value="Georgia">Georgia</option>
    <option value="Germany">Germany</option>
    <option value="Ghana">Ghana</option>
    <option value="Gibraltar">Gibraltar</option>
    <option value="Greece">Greece</option>
    <option value="Greenland">Greenland</option>
    <option value="Grenada">Grenada</option>
    <option value="Guadeloupe">Guadeloupe</option>
    <option value="Guam">Guam</option>
    <option value="Guatemala">Guatemala</option>
    <option value="Guernsey">Guernsey</option>
    <option value="Guinea">Guinea</option>
    <option value="Guinea-Bissau">Guinea-Bissau</option>
    <option value="Guyana">Guyana</option>
    <option value="Haiti">Haiti</option>
    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
    <option value="Honduras">Honduras</option>
    <option value="Hong Kong">Hong Kong</option>
    <option value="Hungary">Hungary</option>
    <option value="Iceland">Iceland</option>
    <option value="India">India</option>
    <option value="Indonesia">Indonesia</option>
    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
    <option value="Iraq">Iraq</option>
    <option value="Ireland">Ireland</option>
    <option value="Isle of Man">Isle of Man</option>
    <option value="Israel">Israel</option>
    <option value="Italy">Italy</option>
    <option value="Jamaica">Jamaica</option>
    <option value="Japan">Japan</option>
    <option value="Jersey">Jersey</option>
    <option value="Jordan">Jordan</option>
    <option value="Kazakhstan">Kazakhstan</option>
    <option value="Kenya">Kenya</option>
    <option value="Kiribati">Kiribati</option>
    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
    <option value="Korea, Republic of">Korea, Republic of</option>
    <option value="Kosovo">Kosovo</option>
    <option value="Kuwait">Kuwait</option>
    <option value="Kyrgyzstan">Kyrgyzstan</option>
    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
    <option value="Latvia">Latvia</option>
    <option value="Lebanon">Lebanon</option>
    <option value="Lesotho">Lesotho</option>
    <option value="Liberia">Liberia</option>
    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
    <option value="Liechtenstein">Liechtenstein</option>
    <option value="Lithuania">Lithuania</option>
    <option value="Luxembourg">Luxembourg</option>
    <option value="Macao">Macao</option>
    <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>
    <option value="Madagascar">Madagascar</option>
    <option value="Malawi">Malawi</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Maldives">Maldives</option>
    <option value="Mali">Mali</option>
    <option value="Malta">Malta</option>
    <option value="Marshall Islands">Marshall Islands</option>
    <option value="Martinique">Martinique</option>
    <option value="Mauritania">Mauritania</option>
    <option value="Mauritius">Mauritius</option>
    <option value="Mayotte">Mayotte</option>
    <option value="Mexico">Mexico</option>
    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
    <option value="Moldova, Republic of">Moldova, Republic of</option>
    <option value="Monaco">Monaco</option>
    <option value="Mongolia">Mongolia</option>
    <option value="Montenegro">Montenegro</option>
    <option value="Montserrat">Montserrat</option>
    <option value="Morocco">Morocco</option>
    <option value="Mozambique">Mozambique</option>
    <option value="Myanmar">Myanmar</option>
    <option value="Namibia">Namibia</option>
    <option value="Nauru">Nauru</option>
    <option value="Nepal">Nepal</option>
    <option value="Netherlands">Netherlands</option>
    <option value="Netherlands Antilles">Netherlands Antilles</option>
    <option value="New Caledonia">New Caledonia</option>
    <option value="New Zealand">New Zealand</option>
    <option value="Nicaragua">Nicaragua</option>
    <option value="Niger">Niger</option>
    <option value="Nigeria">Nigeria</option>
    <option value="Niue">Niue</option>
    <option value="Norfolk Island">Norfolk Island</option>
    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
    <option value="Norway">Norway</option>
    <option value="Oman">Oman</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Palau">Palau</option>
    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
    <option value="Panama">Panama</option>
    <option value="Papua New Guinea">Papua New Guinea</option>
    <option value="Paraguay">Paraguay</option>
    <option value="Peru">Peru</option>
    <option value="Philippines">Philippines</option>
    <option value="Pitcairn">Pitcairn</option>
    <option value="Poland">Poland</option>
    <option value="Portugal">Portugal</option>
    <option value="Puerto">Puerto Rico</option>
    <option value="Qatar">Qatar</option>
    <option value="Reunion">Reunion</option>
    <option value="Romania">Romania</option>
    <option value="Russian Federation">Russian Federation</option>
    <option value="Rwanda">Rwanda</option>
    <option value="Saint Barthelemy">Saint Barthelemy</option>
    <option value="Saint Helena">Saint Helena</option>
    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
    <option value="Saint Lucia">Saint Lucia</option>
    <option value="Saint Martin">Saint Martin</option>
    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
    <option value="Samoa">Samoa</option>
    <option value="San Marino">San Marino</option>
    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
    <option value="Saudi Arabia">Saudi Arabia</option>
    <option value="Senegal">Senegal</option>
    <option value="Serbia">Serbia</option>
    <option value="Serbia and Montenegro">Serbia and Montenegro</option>
    <option value="Seychelles">Seychelles</option>
    <option value="Sierra Leone">Sierra Leone</option>
    <option value="Singapore">Singapore</option>
    <option value="Sint Maarten">Sint Maarten</option>
    <option value="Slovakia">Slovakia</option>
    <option value="Slovenia">Slovenia</option>
    <option value="Solomon Islands">Solomon Islands</option>
    <option value="Somalia">Somalia</option>
    <option value="South Africa">South Africa</option>
    <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
    <option value="outh Sudan">South Sudan</option>
    <option value="Spain">Spain</option>
    <option value="Sri Lanka">Sri Lanka</option>
    <option value="Sudan">Sudan</option>
    <option value="Suriname">Suriname</option>
    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
    <option value="Swaziland">Swaziland</option>
    <option value="Sweden">Sweden</option>
    <option value="Switzerland">Switzerland</option>
    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
    <option value="Tajikistan">Tajikistan</option>
    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
    <option value="Thailand">Thailand</option>
    <option value="Timor-Leste">Timor-Leste</option>
    <option value="Togo">Togo</option>
    <option value="Tokelau">Tokelau</option>
    <option value="Tonga">Tonga</option>
    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
    <option value="Tunisia">Tunisia</option>
    <option value="Turkey">Turkey</option>
    <option value="Turkmenistan">Turkmenistan</option>
    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
    <option value="Tuvalu">Tuvalu</option>
    <option value="Uganda">Uganda</option>
    <option value="Ukraine">Ukraine</option>
    <option value="United Arab Emirates">United Arab Emirates</option>
    <option value="United Kingdom">United Kingdom</option>
    <option value="United States">United States</option>
    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
    <option value="Uruguay">Uruguay</option>
    <option value="Uzbekistan">Uzbekistan</option>
    <option value="Vanuatu">Vanuatu</option>
    <option value="Venezuela">Venezuela</option>
    <option value="Viet Nam">Viet Nam</option>
    <option value="Virgin Islands, British">Virgin Islands, British</option>
    <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
    <option value="Wallis and Futuna">Wallis and Futuna</option>
    <option value="Western Sahara">Western Sahara</option>
    <option value="Yemen">Yemen</option>
    <option value="Zambia">Zambia</option>
    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="">
                                                <h3 class="mt-20">
                                                   Upload <span class="sub-text big"> Work </span> 
                                                </h3>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-30" id="SelectDocs">
                                                <label for="SelectDocs">Enter the Logo you wish to protect.<span class="sub-text" style="font-size: 24px;">*</span></label>
                                                <input class="from-control" type="file" id="SelectDocs" name="SelectDocs" accept=".xlsx, .xls, image/*, .doc, .docx, .ppt, .pptx, .txt, .pdf" required="">
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                                <label for="SelectWorkmaterial">Does the Work Have Material Not Created By You That Pre-Existed The Creation of The Work? <span class="sub-text" style="font-size: 24px;">*</span></label>
                                                <div class="d-flex inline-block">
                                                    <input class="woocommerce-form__input woocommerce-form__input-checkbox mr-25 ml-25" type="radio" id="Publish11" name="WorkMaterial" required="">
                                                    <label for="Publish11">Yes</label>
                                                    <input class="woocommerce-form__input woocommerce-form__input-checkbox mr-25 ml-25" type="radio" id="Publish12" name="WorkMaterial" checked required="">
                                                    <label for="Publish12">No</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                                <label for="SelectregiterdCopyright">Is The Copyright Going Through To Be Registered In a Name Other than the Author's? <span class="sub-text" style="font-size: 24px;">*</span></label>
                                                <div class="d-flex inline-block">
                                                    <input class="woocommerce-form__input woocommerce-form__input-checkbox mr-25 ml-25" type="radio" id="Publish13" name="WorkCopyRegister" required="">
                                                    <label for="Publish13">Yes</label>
                                                    <input class="woocommerce-form__input woocommerce-form__input-checkbox mr-25 ml-25" type="radio" id="Publish14" name="WorkCopyRegister" checked required="">
                                                    <label for="Publish14">No</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="btn-part" id="check-out-btn">                                            
                                            <div class="form-group mb-0">
                                                <button class="readon submit w-100" id="submit-form" name="Copyright_sbmit_btn" type="submit">Next</button>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
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
        
            var flag = 0;
            var slectPkge = 0;
            
            $("#standard-pkge").click(function (){
                flag = 1;
                if(flag == 1){
                    $("#standard-pkge").hide();
                    $("#standard").addClass('pkge-active');
                    
                    $("#basic").removeClass('pkge-active');
                    
                    $("#basic-pkge").show();
                    
                    slectPkge = 199;
                    
                    $(".pkge-Name").html("Standard Package");
                    $(".pkge-Amount").html(slectPkge);
                    
                    document.getElementById("PackageAmount").value = slectPkge;
                    document.getElementById("PackageName").value = "Standard Package";
                } 
            });
            
            $("#basic-pkge").click(function (){
                flag = 1;
                if(flag == 1){
                    $("#basic-pkge").hide();
                    $("#basic").addClass('pkge-active');
                    
                    $("#standard").removeClass('pkge-active');
                    
                    $("#standard-pkge").show();
                    
                    slectPkge = 99;
                    
                    $(".pkge-Name").html("Basic Package");
                    $(".pkge-Amount").html(slectPkge);
                    
                    document.getElementById("PackageAmount").value = slectPkge;
                    document.getElementById("PackageName").value = "Basic Package";
                } 
            });
            
            $("#payment").hide();
            $("#rs-checkout").hide();
            
            $(".pkg").click(function (e){
                $("#payment").show();
                $("#rs-checkout").show();
            });
            
            // function SubmitForm() {
                
            //   var WantCopyright = document.getElementById("WantCopyright").value;
            //   var TitleCopyright = document.getElementById("TitleCopyright").value;
            //   var CopyrightYear = document.getElementById("CopyrightYear").value;
            //   var WorkPublish = document.getElementById("WorkPublish").value;
            //   var WorkPeriod = document.getElementById("WorkPeriod").value;
            //   var CustomerName = document.getElementById("CustomerName").value;
            //   var CustomerEmail = document.getElementById("CustomerEmail").value;
            //   var SelectCitizenship = document.getElementById("SelectCitizenship").value;
            //   var WorkAuthor = document.getElementById("WorkAuthor").value;
            //   var WorkAnonymously = document.getElementById("WorkAnonymously").value;
            //   var WorkPseudonym = document.getElementById("WorkPseudonym").value;
            //   var SelectDocs = document.getElementById("SelectDocs").value;
            //   var WorkMaterial = document.getElementById("WorkMaterial").value;
            //   var WorkCopyRegister = document.getElementById("WorkCopyRegister").value;
            //   var PackageName = document.getElementById("PackageName").value;
            //   var PackageAmount = document.getElementById("PackageAmount").value;
            //   var cc_number = document.getElementById("cc-number").value;
            //   var cc_exp = document.getElementById("cc-exp").value;
            //   var cc_cvc = document.getElementById("cc-cvc").value;
            //   var CardHolderName = document.getElementById("CardHolderName").value;
              
            //   $.ajax({
            //      url: "/assets/php/copyright-Form.php",
            //      method: "POST",
                //  data: {
                //      WantCopyright: WantCopyright,
                //      TitleCopyright: TitleCopyright,
                //      CopyrightYear: CopyrightYear,
                //      WorkPublish: WorkPublish,
                //      WorkPeriod: WorkPeriod,
                //      CustomerName: CustomerName,
                //      CustomerEmail: CustomerEmail,
                //      SelectCitizenship: SelectCitizenship,
                //      WorkAuthor: WorkAuthor,
                //      WorkAnonymously: WorkAnonymously,
                //      WorkPseudonym: WorkPseudonym,
                //      SelectDocs: SelectDocs,
                //      WorkMaterial: WorkMaterial,
                //      WorkCopyRegister: WorkCopyRegister,
                //      PackageName: PackageName,
                //      PackageAmount: PackageAmount,
                //      cc_number: cc_number,
                //      cc_exp: cc_exp,
                //      cc_cvc: cc_cvc,
                //      CardHolderName: CardHolderName
                //  },
            //     data: $("#contact-form").serialize() + "&cc_number=" + cc_number + "&cc_exp=" + cc_exp + "&cc_cvc=" + cc_cvc + "&CardHolderName=" + CardHolderName,
            //      success: function(response){
            //          console.log("OK");
            //      }
            //   });
            // }
            
 
        </script>

    </body>
</html>