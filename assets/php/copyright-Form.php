<?php
    
    
    $host = "premium167.web-hosting.com";
    $username="cruiwbab_tradebrand_user";
    $password="e2B@Yp[{QrLC";
    $db = "cruiwbab_trademarkbrandlaw";
    
    $connect = new mysqli($host, $username, $password, $db);
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }
    
    if(isset($_POST["Copyright_sbmit_btn"])){
        
        
        date_default_timezone_set("Asia/Karachi");
        $date = date('F j, Y, g:i a');
        
        $abbr = "CRFL"; $lead_number = 0;
        
        $arrayID = array();
        $query = "SELECT * FROM copyright_Form ORDER BY ID DESC LIMIT 1";
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
    	
        
        $WantCopyright = mysqli_real_escape_string($connect, $_POST['WantCopyright']);
        $TitleCopyright = mysqli_real_escape_string($connect, $_POST['TitleCopyright']);
        $CopyrightYear = mysqli_real_escape_string($connect, $_POST['CopyrightYear']);
        $WorkPublish = mysqli_real_escape_string($connect, $_POST['WorkPublish']);
        $WorkPeriod = mysqli_real_escape_string($connect, $_POST['WorkPeriod']);
        $CustomerName = mysqli_real_escape_string($connect, $_POST['CustomerName']);
        $CustomerEmail = mysqli_real_escape_string($connect, $_POST['CustomerEmail']);
        $SelectCitizenship = mysqli_real_escape_string($connect, $_POST['SelectCitizenship']);
        
        $WorkMaterial = mysqli_real_escape_string($connect, $_POST['WorkMaterial']);
        $WorkCopyRegister = mysqli_real_escape_string($connect, $_POST['WorkCopyRegister']);
        
        if(isset($_FILES['SelectDocs'])){
            $file_name = basename($_FILES['SelectDocs']['name']);
            $file_size = $_FILES['SelectDocs']['size'];
            $file_tmp = $_FILES['SelectDocs']['tmp_name'];
            $file_type = $_FILES['SelectDocs']['type'];

            $img_explode = explode(".",$file_name);

            $array = array();
            $query1 = "SELECT * FROM `copyright_Form` ORDER BY ID DESC LIMIT 1";
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

            $targetDir = "../../Uploads/".$prod_info;
            if (!file_exists($targetDir)) {
                mkdir($targetDir);
            }

            $Reg_File = $targetDir."/".$file_name;
            
            if(move_uploaded_file($file_tmp, $targetDir."/".$file_name)){
                $InsertQuery = "INSERT INTO `copyright_Form`(`WantCopyright`, `TitleCopyright`, `CopyrightYear`, `WorkPublish`, `WorkPeriod`, `CustomerName`, `CustomerEmail`, `SelectCitizenship`, `SelectDocs`, `WorkMaterial`, `WorkCopyRegister`, `SubmissionDate`, `Lead_Code`, `Created_at`, `Created_by`) VALUES ('$WantCopyright', '$TitleCopyright', '$CopyrightYear', '$WorkPublish', '$WorkPeriod', '$CustomerName', '$CustomerEmail', '$SelectCitizenship', '$Reg_File', '$WorkMaterial', '$WorkCopyRegister', Now(), '$lead_Numb', '$date', 'From Step1 Copyright Form')";
        
                if(mysqli_query($connect, $InsertQuery)){
                    header("location: /App-Form/Step-2.php?FormID=".$lead_Numb);
                    exit();
                } else {
                    echo mysqli_error($connect);
                }
            }
        }
    }
    if(isset($_POST["Copyright_sbmit_btn2"])){
        
        $PackageName = mysqli_real_escape_string($connect, $_POST['PackageName']);
        $PackageAmount = mysqli_real_escape_string($connect, $_POST['PackageAmount']);

        $cc_number = mysqli_real_escape_string($connect, $_POST['cc_number']);
        $cc_exp = mysqli_real_escape_string($connect, $_POST['cc_exp']);
        $cc_cvc = mysqli_real_escape_string($connect, $_POST['cc_cvc']);
        $CardHolderName = mysqli_real_escape_string($connect, $_POST['CardHolderName']);
        
        $LeadCode = mysqli_real_escape_string($connect, $_POST['LeadCode']);
        
        $UpdateQuery = "UPDATE `copyright_Form` SET `PackageName`= '". $PackageName ."', `PackageAmount`= '". $PackageAmount ."', `cc_number`= '". $cc_number ."', `cc_exp`= '". $cc_exp ."', `cc_cvc`= '". $cc_cvc ."', `CardHolderName`= '". $CardHolderName ."' WHERE `Lead_Code` = '". $LeadCode ."'";
        
        if(mysqli_query($connect, $UpdateQuery)){
            header("location: /Thank-You.php");
            exit();
        } else {
            echo mysqli_error($connect);
        }
    }
?>