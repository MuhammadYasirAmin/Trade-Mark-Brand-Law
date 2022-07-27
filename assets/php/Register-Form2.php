<?php
    
    
    $host = "premium167.web-hosting.com";
    $username="cruiwbab_tradebrand_user";
    $password="e2B@Yp[{QrLC";
    $db = "cruiwbab_trademarkbrandlaw";
    
    $connect = new mysqli($host, $username, $password, $db);
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }
    
    if(isset($_POST["step_1_sbmit_btn"])){
        
        date_default_timezone_set("Asia/Karachi");
        $date = date('F j, Y, g:i a');
        
        $abbr = "RFFL"; $lead_number = 0;
        
        $arrayID = array();
        $query = "SELECT * FROM Register_Form2 ORDER BY ID DESC LIMIT 1";
        $result = mysqli_query($connect, $query);
        while ($row = mysqli_fetch_array($result)){
            $arrayID[] = $row;
        }
    	$lead_number = $arrayID[0]['ID'];

    	if (empty($lead_number)) {
    		$lead_number = 1;
    		$lead_Numb = $abbr.'-'.$lead_number;
     	}else {
    		$lead_number = $lead_number + 1;
    		$lead_Numb = $abbr.'-'.$lead_number;
    	}
        
        $ProtectType = mysqli_real_escape_string($connect, $_POST['ProtectType']);
        $ProtectName = mysqli_real_escape_string($connect, $_POST['ProtectName']);
        $ProtectSlogan = mysqli_real_escape_string($connect, $_POST['ProtectSlogan']);
        
        $SelectTrademark = mysqli_real_escape_string($connect, $_POST['SelectTrademark']);
        $CustomerName = mysqli_real_escape_string($connect, $_POST['CustomerName']);
        $CustomerEmail = mysqli_real_escape_string($connect, $_POST['CustomerEmail']);
        $CustomerPhone = mysqli_real_escape_string($connect, $_POST['CustomerPhone']);
        $CustomerAddress = mysqli_real_escape_string($connect, $_POST['CustomerAddress']);
        $OrganizationType = mysqli_real_escape_string($connect, $_POST['OrganizationType']);
        $OrganizationName = mysqli_real_escape_string($connect, $_POST['OrganizationName']);
        $BusinessEmail = mysqli_real_escape_string($connect, $_POST['BusinessEmail']);
        $BusinessPhone = mysqli_real_escape_string($connect, $_POST['BusinessPhone']);
        $OrganizationAddress = mysqli_real_escape_string($connect, $_POST['OrganizationAddress']);
        
        if(isset($_FILES['ProtectLogo'])){
            $file_name = basename($_FILES['ProtectLogo']['name']);
            $file_size = $_FILES['ProtectLogo']['size'];
            $file_tmp = $_FILES['ProtectLogo']['tmp_name'];
            $file_type = $_FILES['ProtectLogo']['type'];

            $img_explode = explode(".",$file_name);

            $array = array();
            $query1 = "SELECT * FROM `Register_Form` ORDER BY ID DESC LIMIT 1";
            $result = mysqli_query($connect, $query1);
            $rowcount=mysqli_num_rows($result);

            while ($row = mysqli_fetch_array($result)){
                $array[] = $row;
            }
            $prod_info = 0;

            if (empty($array[0]['ID'])) {
                $prod_info = 1;
                $file_name = "thumb-".$prod_info.".".end($img_explode);
            } else {
                $prod_info = $array[0]['ID'];
                $prod_info++;
                $file_name = "thumb-".$prod_info.".".end($img_explode);
            }

            $targetDir = "../../Uploads/Registration";
            if (!file_exists($targetDir)) {
                mkdir($targetDir);
            }

            $Reg_File = $targetDir."/".$file_name;
            
            if(move_uploaded_file($file_tmp, $targetDir."/".$file_name)){
                $InsertQuery = "INSERT INTO `Register_Form2`
                (`ProtectType`, `ProtectName`, `ProtectSlogan`, `ProtectLogo`, `SelectTrademark`, `CustomerName`, `CustomerEmail`, `CustomerPhone`, `CustomerAddress`, `OrganizationType`,
                `OrganizationName`, `BusinessEmail`, `BusinessPhone`, `OrganizationAddress`, `SubmissionDate`, `Lead_Code`, `Created_at`, `Created_by`) VALUES 
                ('$ProtectType', '$ProtectName', '$ProtectSlogan', '$Reg_File', '$SelectTrademark', '$CustomerName', '$CustomerEmail', '$CustomerPhone', '$CustomerAddress', '$OrganizationType', '$OrganizationName', '$BusinessEmail',
                '$BusinessPhone', '$OrganizationAddress', Now(), '$lead_Numb', '$date', 'From Step 1')";
        
                if(mysqli_query($connect, $InsertQuery)){
                    header("location: /Questionnaire/Step-2?LastID=".$lead_Numb);
                    exit();
                } else {
                    echo mysqli_error($connect);
                }
            } else{
                $InsertQuery = "INSERT INTO `Register_Form2`
                (`ProtectType`, `ProtectName`, `ProtectSlogan`, `ProtectLogo`, `SelectTrademark`, `CustomerName`, `CustomerEmail`, `CustomerPhone`, `CustomerAddress`, `OrganizationType`,
                `OrganizationName`, `BusinessEmail`, `BusinessPhone`, `OrganizationAddress`, `SubmissionDate`, `Lead_Code`, `Created_at`, `Created_by`) VALUES 
                ('$ProtectType', '$ProtectName', '$ProtectSlogan', '$Reg_File', '$SelectTrademark', '$CustomerName', '$CustomerEmail', '$CustomerPhone', '$CustomerAddress', '$OrganizationType', '$OrganizationName', '$BusinessEmail',
                '$BusinessPhone', '$OrganizationAddress', Now(), '$lead_Numb', '$date', 'From Step 1')";
        
                if(mysqli_query($connect, $InsertQuery)){
                    header("location: /Questionnaire/Step-2?LastID=".$lead_Numb);
                    exit();
                } else {
                    echo mysqli_error($connect);
                }
            }
        }
    }
    
    if(isset($_POST["step_2_sbmit_btn"])){
        
        $OrganizationDescription = mysqli_real_escape_string($connect, $_POST['OrganizationDescription']);
        $TrademarkSearch = mysqli_real_escape_string($connect, $_POST['TrademarkSearch']);
        $SelectPackage = mysqli_real_escape_string($connect, $_POST['SelectPackage']);
        
        $PackageName1 = mysqli_real_escape_string($connect, $_POST['PackageName1']);
        $PackageAmount1 = mysqli_real_escape_string($connect, $_POST['PackageAmount1']);
        
        $PackageName2 = mysqli_real_escape_string($connect, $_POST['PackageName2']);
        $PackageAmount2 = mysqli_real_escape_string($connect, $_POST['PackageAmount2']);
        $TotalAmount = $PackageAmount1 + $PackageAmount2;
        
        $cc_number = mysqli_real_escape_string($connect, $_POST['cc_number']);
        $cc_exp = mysqli_real_escape_string($connect, $_POST['cc_exp']);
        $cc_cvc = mysqli_real_escape_string($connect, $_POST['cc_cvc']);
        $CardHolderName = mysqli_real_escape_string($connect, $_POST['CardHolderName']);
        
        $Update_ID = mysqli_real_escape_string($connect, $_POST['Update_ID']);
        
        $UpdateQuery = "UPDATE `Register_Form2` SET `OrganizationDescription`= '". $OrganizationDescription ."', `TrademarkSearch`= '". $TrademarkSearch ."', `SelectPackage`= '". $SelectPackage ."', `pkgename1`= '". $PackageName1 ."', `pkgePrice1`= '". $PackageAmount1 ."', `pkgename2`= '". $PackageName2 ."', `pkgePrice2`= '". $PackageAmount2 ."', `TotalPkge`= '". $TotalAmount ."', `CC_Number`= '". $cc_number ."', `CC_EXP`= '". $cc_exp ."', `CC_CVC`= '". $cc_cvc ."', `CC_Holder`= '". $CardHolderName ."' WHERE `Lead_Code` = '". $Update_ID ."'";
        
        if(mysqli_query($connect, $UpdateQuery)){
            header("location: /Thank-You.php");
            exit();
        } else {
            echo mysqli_error($connect);
        }
    }
?>