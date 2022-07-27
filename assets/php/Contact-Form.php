<?php
    
    $host = "premium167.web-hosting.com";
    $username="cruiwbab_tradebrand_user";
    $password="e2B@Yp[{QrLC";
    $db = "cruiwbab_trademarkbrandlaw";
    
    $connect = new mysqli($host, $username, $password, $db);
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }
    
    if(isset($_POST["Contact_sbmit_btn"])){
        
        date_default_timezone_set("Asia/Karachi");
        $date = date('F j, Y, g:i a');
        
        $abbr = "CFL"; $lead_number = 0;
        
        $array = array();
        $query = "SELECT * FROM Contact_Form ORDER BY ID DESC LIMIT 1";
        $result = mysqli_query($connect, $query);
        while ($row = mysqli_fetch_array($result)){
            $array[] = $row;
        }
    	$lead_number = $array[0]['ID'];

    	if (empty($lead_number)) {
    		$lead_number = 1;
    		$lead_Numb = $abbr.'-'.$lead_number;
     	}else {
    		$lead_number = $lead_number + 1;
    		$lead_Numb = $abbr.'-'.$lead_number;
    	}
    	
        $C_Name = mysqli_real_escape_string($connect, $_POST['C_Name']);
        $C_Email = mysqli_real_escape_string($connect, $_POST['C_Email']);
        $C_Phone = mysqli_real_escape_string($connect, $_POST['C_Phone']);
        $C_Websites = mysqli_real_escape_string($connect, $_POST['C_Websites']);
        $C_Message = mysqli_real_escape_string($connect, $_POST['C_Message']);
        
        $InsertQuery = "INSERT INTO `Contact_Form`(`C_Name`, `C_Email`, `C_Phone`, `C_Websites`, `C_Message`, `Lead_Code`, `Created_at`, `Created_by`) VALUES ('$C_Name', '$C_Email', '$C_Phone', '$C_Websites', '$C_Message', '$lead_Numb', '$date', 'From Contact Form')";
        
        if(mysqli_query($connect, $InsertQuery)){
            header("location: /Questionnaire/Step-1");
            exit();
        } else {
            echo mysqli_error($connect);
        }
    }
?>