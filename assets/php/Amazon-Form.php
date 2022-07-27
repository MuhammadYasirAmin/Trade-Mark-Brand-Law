<?php
    
    $host = "premium167.web-hosting.com";
    $username="cruiwbab_tradebrand_user";
    $password="e2B@Yp[{QrLC";
    $db = "cruiwbab_trademarkbrandlaw";
    
    $connect = new mysqli($host, $username, $password, $db);
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }
    
    if(isset($_POST["Amazon_sbmit_btn"])){
        
        date_default_timezone_set("Asia/Karachi");
        $date = date('F j, Y, g:i a');
        
        $abbr = "AFL"; $lead_number = 0;
        
        $array = array();
        $query = "SELECT * FROM Amazon_Form ORDER BY ID DESC LIMIT 1";
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
        
        $AmazonPend = mysqli_real_escape_string($connect, $_POST['AmazonPend']);
        $AmazonFName = mysqli_real_escape_string($connect, $_POST['AmazonFName']);
        $AmazonLName = mysqli_real_escape_string($connect, $_POST['AmazonLName']);
        $AmazonPhone = mysqli_real_escape_string($connect, $_POST['AmazonPhone']);
        $AmazonEmail = mysqli_real_escape_string($connect, $_POST['AmazonEmail']);
        $AmazonPassword = mysqli_real_escape_string($connect, $_POST['AmazonPassword']);
        $AmazonBrandName = mysqli_real_escape_string($connect, $_POST['AmazonBrandName']);
        $AmazonSeller = mysqli_real_escape_string($connect, $_POST['AmazonSeller']);
        
        $InsertQuery = "INSERT INTO `Amazon_Form`(`Trademark_Office`, `First_Name`, `Last_Name`, `Phone_Number`, `Email_Amazon`, `Pass_Amazon`, `Brand_Name`, `Amazon_Desc`, `Lead_Code`, `Created_at`, `Created_by`) VALUES 
        ('$AmazonPend', '$AmazonFName', '$AmazonLName', '$AmazonPhone', '$AmazonEmail', '$AmazonPassword', '$AmazonBrandName', '$AmazonSeller', '$lead_Numb', '$date', 'From Amazon Form')";
        
        if(mysqli_query($connect, $InsertQuery)){
            header("location: /Thank-You.php");
            exit();
        } else {
            echo mysqli_error($connect);
        }
    }
?>