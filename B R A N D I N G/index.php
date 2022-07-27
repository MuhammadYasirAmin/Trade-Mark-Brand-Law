<?php    
        // Data Stored into Database
        $servername = "premium167.web-hosting.com";
    $dBUserName="cruiwbab_tradebrand_user";
    $dBPassword="e2B@Yp[{QrLC";
    $dBName = "cruiwbab_trademarkbrandlaw";
        
        $connect = new mysqli($servername, $dBUserName, $dBPassword, $dBName);
        if ($connect->connect_error) {
            die("Connection failed: " . $connect->connect_error);
        }
        
    session_start();  
    if(isset($_SESSION["name"]))
    {  
    ?>  
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Leads</title>
  </head>
  <body style="padding: 25px;">
      <p align='center mb-5'><a href='logout.php' class='btn btn-primary mb-5'>Logout</a></p>
      
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="amazon-tab" data-bs-toggle="tab" data-bs-target="#amazon" type="button" role="tab" aria-controls="amazon" aria-selected="true">Amazon Form</button>
          </li>
          
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="Contact-tab" data-bs-toggle="tab" data-bs-target="#Contact" type="button" role="tab" aria-controls="Contact" aria-selected="false">Contact Form</button>
          </li>
          
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="Copyright-tab" data-bs-toggle="tab" data-bs-target="#Copyright" type="button" role="tab" aria-controls="Copyright" aria-selected="false">Copyright Form</button>
          </li>
          
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="Register1-tab" data-bs-toggle="tab" data-bs-target="#Register1" type="button" role="tab" aria-controls="Register1" aria-selected="false">Registeration Form</button>
          </li>
          
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="Register2-tab" data-bs-toggle="tab" data-bs-target="#Register2" type="button" role="tab" aria-controls="Register2" aria-selected="false">Registeration Form 2</button>
          </li>
          
        </ul>
    
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="amazon" role="tabpanel" aria-labelledby="amazon-tab">
          <table class="table table-striped table-hover text-center">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Trademark Office</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Phone Number</th>
                  <th scope="col">Email Address</th>
                  <th scope="col">Password</th>
                  <th scope="col">Brand Name</th>
                  <th scope="col">Description</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                            $query = "SELECT * FROM `Amazon_Form` ORDER BY `ID` DESC";
                            $result = mysqli_query($connect, $query);
                            while ($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                    echo '<td scope="row">' . $row['ID'] .'</td>';
                                    echo '<td>' . $row['Trademark_Office'] . '</td>';
                                    echo '<td>' . $row['First_Name'] . '</td>';
                                    echo '<td>' . $row['Last_Name'] . '</td>';
                                    echo '<td>' . $row['Phone_Number'] . '</td>';
                                    echo '<td>' . $row['Email_Amazon'] . '</td>';
                                    echo '<td>' . $row['Pass_Amazon'] . '</td>';
                                    echo '<td>' . $row['Brand_Name'] . '</td>';
                                    echo '<td>' . $row['Amazon_Desc'] . '</td>';
                                    echo "</tr>";
                            }
                            ?>
              </tbody>
            </table>
        </div>
        
      <div class="tab-pane fade" id="Contact" role="tabpanel" aria-labelledby="Contact-tab">
          <table class="table table-striped table-hover text-center">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Contact Name</th>
                  <th scope="col">Contact Email</th>
                  <th scope="col">Contact Phone</th>
                  <th scope="col">Contact Website</th>
                  <th scope="col">Contact Message</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                            $query = "SELECT * FROM `Contact_Form` ORDER BY `ID` DESC";
                            $result = mysqli_query($connect, $query);
                            while ($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                    echo '<td scope="row">' . $row['ID'] .'</td>';
                                    echo '<td>' . $row['C_Name'] . '</td>';
                                    echo '<td>' . $row['C_Email'] . '</td>';
                                    echo '<td>' . $row['C_Phone'] . '</td>';
                                    echo '<td>' . $row['C_Websites'] . '</td>';
                                    echo '<td>' . $row['C_Message'] . '</td>';
                                    echo "</tr>";
                            }
                            ?>
              </tbody>
            </table>
      </div>
      
      <div class="tab-pane fade" id="Copyright" role="tabpanel" aria-labelledby="Copyright-tab">
          <table class="table table-striped table-hover text-center">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Copyright Want</th>
                  <th scope="col">Title Copyright</th>
                  <th scope="col">Copyright Year</th>
                  <th scope="col">Work Publish</th>
                  <th scope="col">Work Period</th>
                  <th scope="col">Customer Name</th>
                  <th scope="col">Customer Email</th>
                  <th scope="col">CitizenShip</th>
                  <th scope="col">Work Author</th>
                  <th scope="col">Work Anonymously</th>
                  <th scope="col">Work Pseudonym</th>
                  <th scope="col">File Links</th>
                  <th scope="col">Work Material</th>
                  <th scope="col">Work Register</th>
                  <th scope="col">Package Name</th>
                  <th scope="col">Package Amount</th>
                  <th scope="col">Card Number</th>
                  <th scope="col">Card Expiry</th>
                  <th scope="col">Card CVC</th>
                  <th scope="col">Card Holder Name</th>
                  <th scope="col">Submission Date</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                            $query = "SELECT * FROM `copyright_Form` ORDER BY `ID` DESC";
                            $result = mysqli_query($connect, $query);
                            while ($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                    echo '<td scope="row">' . $row['ID'] .'</td>';
                                    echo '<td>' . $row['WantCopyright'] . '</td>';
                                    echo '<td>' . $row['TitleCopyright'] . '</td>';
                                    echo '<td>' . $row['CopyrightYear'] . '</td>';
                                    echo '<td>' . $row['WorkPublish'] . '</td>';
                                    echo '<td>' . $row['WorkPeriod'] . '</td>';
                                    echo '<td>' . $row['CustomerName'] . '</td>';
                                    echo '<td>' . $row['CustomerEmail'] . '</td>';
                                    echo '<td>' . $row['SelectCitizenship'] . '</td>';
                                    echo '<td>' . $row['WorkAuthor'] . '</td>';
                                    echo '<td>' . $row['WorkAnonymously'] . '</td>';
                                    echo '<td>' . $row['WorkPseudonym'] . '</td>';
                                    echo '<td><a href="'.$row['SelectDocs'].'" target="_blank">' . $row['SelectDocs'] . '</a></td>';
                                    echo '<td>' . $row['WorkMaterial'] . '</td>';
                                    echo '<td>' . $row['WorkCopyRegister'] . '</td>';
                                    echo '<td>' . $row['PackageName'] . '</td>';
                                    echo '<td>' . $row['PackageAmount'] . '</td>';
                                    echo '<td>' . $row['cc_number'] . '</td>';
                                    echo '<td>' . $row['cc_exp'] . '</td>';
                                    echo '<td>' . $row['cc_cvc'] . '</td>';
                                    echo '<td>' . $row['CardHolderName'] . '</td>';
                                    echo '<td>' . $row['SubmissionDate'] . '</td>';
                                    echo "</tr>";
                            }
                            ?>
              </tbody>
            </table>
      </div>
      
      <div class="tab-pane fade" id="Register1" role="tabpanel" aria-labelledby="Register1-tab">
          <table class="table table-striped table-hover text-center">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Protection Type</th>
                  <th scope="col">Protection Name</th>
                  <th scope="col">Protection Slogan</th>
                  <th scope="col">Protection Logo</th>
                  <th scope="col">Select Trademark</th>
                  <th scope="col">Customer Name</th>
                  <th scope="col">Customer Email</th>
                  <th scope="col">Customer Phone</th>
                  <th scope="col">Customer Address</th>
                  <th scope="col">Organization Type</th>
                  <th scope="col">Organization Name</th>
                  <th scope="col">Business Email</th>
                  <th scope="col">Business Phone</th>
                  <th scope="col">Organization Address</th>
                  <th scope="col">Organization Description</th>
                  <th scope="col">Trademark Search</th>
                  <th scope="col">Select Package</th>
                  <th scope="col">Submission Date</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                            $query = "SELECT * FROM `Register_Form` ORDER BY `ID` DESC";
                            $result = mysqli_query($connect, $query);
                            while ($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                    echo '<td scope="row">' . $row['ID'] .'</td>';
                                    echo '<td>' . $row['ProtectType'] . '</td>';
                                    echo '<td>' . $row['ProtectName'] . '</td>';
                                    echo '<td>' . $row['ProtectSlogan'] . '</td>';
                                    echo '<td><a href="'.$row['ProtectLogo'].'" target="_blank">' . $row['ProtectLogo'] . '</a></td>';
                                    echo '<td>' . $row['SelectTrademark'] . '</td>';
                                    echo '<td>' . $row['CustomerName'] . '</td>';
                                    echo '<td>' . $row['CustomerEmail'] . '</td>';
                                    echo '<td>' . $row['CustomerPhone'] . '</td>';
                                    echo '<td>' . $row['CustomerAddress'] . '</td>';
                                    echo '<td>' . $row['OrganizationType'] . '</td>';
                                    echo '<td>' . $row['OrganizationName'] . '</td>';
                                    echo '<td>' . $row['BusinessEmail'] . '</td>';
                                    echo '<td>' . $row['BusinessPhone'] . '</td>';
                                    echo '<td>' . $row['OrganizationAddress'] . '</td>';
                                    echo '<td>' . $row['OrganizationDescription'] . '</td>';
                                    echo '<td>' . $row['TrademarkSearch'] . '</td>';
                                    echo '<td>' . $row['SelectPackage'] . '</td>';
                                    echo '<td>' . $row['SubmissionDate'] . '</td>';
                                    echo "</tr>";
                            }
                            ?>
              </tbody>
            </table>
      </div>
      
      <div class="tab-pane fade" id="Register2" role="tabpanel" aria-labelledby="Register2-tab">
          <table class="table table-striped table-hover text-center">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Protection Type</th>
                  <th scope="col">Protection Name</th>
                  <th scope="col">Protection Slogan</th>
                  <th scope="col">Protection Logo</th>
                  <th scope="col">Select Trademark</th>
                  <th scope="col">Customer Name</th>
                  <th scope="col">Customer Email</th>
                  <th scope="col">Customer Phone</th>
                  <th scope="col">Customer Address</th>
                  <th scope="col">Organization Type</th>
                  <th scope="col">Organization Name</th>
                  <th scope="col">Business Email</th>
                  <th scope="col">Business Phone</th>
                  <th scope="col">Organization Address</th>
                  <th scope="col">Organization Description</th>
                  <th scope="col">Trademark Search</th>
                  <th scope="col">Select Package</th>
                  <th scope="col">Submission Date</th>
                  <th scope="col">Package Name 1</th>
                  <th scope="col">Package Amount 1</th>
                  <th scope="col">Package Name 2</th>
                  <th scope="col">Package Amount 2</th>
                  <th scope="col">Total Amount</th>
                  <th scope="col">Card Number</th>
                  <th scope="col">Card Expiry</th>
                  <th scope="col">Card CVC</th>
                  <th scope="col">Card Holder Name</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                            $query = "SELECT * FROM `Register_Form2` ORDER BY `ID` DESC";
                            $result = mysqli_query($connect, $query);
                            while ($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                    echo '<td scope="row">' . $row['ID'] .'</td>';
                                    echo '<td>' . $row['ProtectType'] . '</td>';
                                    echo '<td>' . $row['ProtectName'] . '</td>';
                                    echo '<td>' . $row['ProtectSlogan'] . '</td>';
                                    echo '<td><a href="'.$row['ProtectLogo'].'" target="_blank">' . $row['ProtectLogo'] . '</a></td>';
                                    echo '<td>' . $row['SelectTrademark'] . '</td>';
                                    echo '<td>' . $row['CustomerName'] . '</td>';
                                    echo '<td>' . $row['CustomerEmail'] . '</td>';
                                    echo '<td>' . $row['CustomerPhone'] . '</td>';
                                    echo '<td>' . $row['CustomerAddress'] . '</td>';
                                    echo '<td>' . $row['OrganizationType'] . '</td>';
                                    echo '<td>' . $row['OrganizationName'] . '</td>';
                                    echo '<td>' . $row['BusinessEmail'] . '</td>';
                                    echo '<td>' . $row['BusinessPhone'] . '</td>';
                                    echo '<td>' . $row['OrganizationAddress'] . '</td>';
                                    echo '<td>' . $row['OrganizationDescription'] . '</td>';
                                    echo '<td>' . $row['TrademarkSearch'] . '</td>';
                                    echo '<td>' . $row['SelectPackage'] . '</td>';
                                    echo '<td>' . $row['SubmissionDate'] . '</td>';
                                    echo '<td>' . $row['pkgename1'] . '</td>';
                                    echo '<td>' . $row['pkgePrice1'] . '</td>';
                                    echo '<td>' . $row['pkgename2'] . '</td>';
                                    echo '<td>' . $row['pkgePrice2'] . '</td>';
                                    echo '<td>' . $row['TotalPkge'] . '</td>';
                                    echo '<td>' . $row['CC_Number'] . '</td>';
                                    echo '<td>' . $row['CC_EXP'] . '</td>';
                                    echo '<td>' . $row['CC_CVC'] . '</td>';
                                    echo '<td>' . $row['CC_Holder'] . '</td>';
                                    echo "</tr>";
                            }
                            ?>
              </tbody>
            </table>
      </div>
    </div>
    
    
    
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>  
$(document).ready(function(){
 
 var is_session_expired = 'no';
    function check_session()
    {
        $.ajax({
            url:"check_session.php",
            method:"POST",
            success:function(data)
            {
    if(data == '1')
    {
     $('#loginModal').modal({
      backdrop: 'static',
      keyboard: false,
     });
     is_session_expired = 'yes';
    }
   }
        })
    }
 
 var count_interval = setInterval(function(){
        check_session();
  if(is_session_expired == 'yes')
  {
   clearInterval(count_interval);
  }
    }, 10000);
 
 $('#login_form').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:"check_login.php",
   method:"POST",
   data:$(this).serialize(),
   success:function(data){
    if(data != '')
    {
     $('#error_message').html(data);
    }
    else
    {
     location.reload();
    }
   }
  });
 });

});  
</script>
  </body>
</html>
<?php
    }  
    else  
    {  
        header('location: Login-Form.php');  
    }  
?>