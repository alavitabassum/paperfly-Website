<?php
    include 'modHeader.php';
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';
    error_reporting(0);

    if (!$conn = mysqli_connect("localhost","paperfly_db_root","db_root_123","paperfly_db"))
    {
    $connError = 'Y';
    }

    error_reporting(E_ALL & ~(E_WARNING | E_NOTICE));

    if (isset($_POST['submit']))
    {
                    $merchantName = trim($_POST['merchantName']);
                    $merchantName = mysqli_real_escape_string($conn, $merchantName);
                    $businessType = trim($_POST['businessType']);
                    $productNature = trim($_POST['productNature']);
                    $productNature = mysqli_real_escape_string($conn, $productNature);
                    $address = trim($_POST['address']);
                    $address = mysqli_real_escape_string($conn, $address);
                    $districtid = trim($_POST['districtid']);
                    $thanaid = trim($_POST['thanaid']);
                   
                    $website = trim($_POST['website']);
                    $website = mysqli_real_escape_string($conn, $website);
                    $facebook = trim($_POST['facebook']);
                    $facebook = mysqli_real_escape_string($conn, $facebook);
                    $companyPhone = trim($_POST['companyPhone']);
                    $companyPhone = mysqli_real_escape_string($conn, $companyPhone);
                    $contactName = trim($_POST['contactName']);
                    $contactName = mysqli_real_escape_string($conn, $contactName);
                    $designation = trim($_POST['designation']);
                    $designation = mysqli_real_escape_string($conn, $designation);
                    $contactNumber = trim($_POST['contactNumber']);
                    $contactNumber = mysqli_real_escape_string($conn, $contactNumber);
                    $email = trim($_POST['email']);
                    $email = mysqli_real_escape_string($conn, $email);
                    $accountName = trim($_POST['accountName']);
                    $accountName = mysqli_real_escape_string($conn, $accountName);
                    $accountNumber = trim($_POST['accountNumber']);
                    $accountNumber = mysqli_real_escape_string($conn, $accountNumber);
                    $bankName = trim($_POST['bankName']);
                    $bankName = mysqli_real_escape_string($conn, $bankName);
                    $branch = trim($_POST['branch']);
                    $branch = mysqli_real_escape_string($conn, $branch);
                    $routeNumber =trim($_POST['routeNumber']);
                    $routeNumber = mysqli_real_escape_string($conn, $routeNumber);
                    $paymentMode = trim($_POST['paymentMode']);
                    

    //    $district = trim($_POST['district']);
    //    $thanaid = trim($_POST['thanaid']);

    $insertsql = "INSERT INTO temporary_merchant_reg
                (merchantName, shopMarket, productNature, 
                    address, thanaid, district, website, facebook, companyPhone, contactPerson, designation, contactNumber, email, accountName, accountNumber, bankName, branch, routeNumber,paymentMode, creation_date)
                values ('$merchantName' ,'$businessType' ,'$productNature' ,'$address' ,'$thanaid'  ,'$districtid', '$website',
                    '$facebook' , '$companyPhone', '$contactName', '$designation', '$contactNumber', '$email', '$accountName', '$accountNumber', '$bankName', '$branch', '$routeNumber' ,'$paymentMode', NOW() + INTERVAL 6 HOUR)";
    if (!mysqli_query($conn, $insertsql))
        {
        $error = "Insert Error : " . mysqli_error($conn);
        echo "<div class='alert-danger'>";
        echo "<strong>Error!</strong>" . $error;
        echo "</div>";
        }
      else
        {
        echo "<div class='alert-success'>";
        echo "<h1>Thank you for registering</h1> <br>
        <h2>You will soon get your username and password through SMS</h2>";
        echo "</div>";
        	

       /* $url='http://paperflybd.com/api_find_tem_reg.php?id='.$contactNumber;
        $html = '<div>Someone has registered.Please Click the link below to complete the registration:<br>'
        .$url.'</div>';
           $mail = new PHPMailer(); // create a new object
           $mail->IsSMTP(); // enable SMTP
           $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
           $mail->SMTPAuth = true; // authentication enabled
           $mail->SMTPSecure = 'tls';; // secure transfer enabled REQUIRED for Gmail
           $mail->Host = "mail.paperfly.com.bd";
           $mail->Port = 25; // or 587
           $mail->IsHTML(true);
           $mail->Username = "nawshin@paperfly.com.bd";
           $mail->Password = "ranksitt044";
           $mail->SetFrom("nawshin@paperfly.com.bd");
           $mail->Subject = "Paperfly Registration";
           $mail->Body = "Your registration is pending";
           $mail->AddAddress("$email");
           $mail->send();
           $mail->ClearAllRecipients();
           $mail->Body = $html;
           $mail->AddAddress("nawshin@paperfly.com.bd");
           $mail->send();
            echo "<div class='alert-success'>";
            echo "Thank you for your interest. One of our Relationship Manager will contact you soon.";
            echo "</div>";

         if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
         } else {
            echo "Message has been sent";
         }*/

        }

    mysqli_close($conn);
    }




?>
<!-- Basic Information-->
<input type="hidden" name="merchantName" id = "merchantName" value="<?php echo $merchantName ?>">
<input type="hidden" id="businessType" name="businessType" value="<?php echo $businessType ?>">
<input type="hidden" id="productNature" name="productNature" value="<?php echo $productNature ?>">
<input type="hidden" id="address" name="address" value="<?php echo $address ?>">
<input type="hidden" id="districtid" name="districtid" value="<?php echo $districtid ?>">
<input type="hidden" id="thanaid" name="thanaid" value="<?php echo $thanaid ?>">
<input type="hidden" id="website" name="website" value="<?php echo $website ?>">
<input type="hidden" id="facebook" name="facebook" value="<?php echo $facebook ?>">
<input type="hidden" id="companyPhone" name="companyPhone" value="<?php echo $companyPhone ?>">

<!-- Contact Person -->

<input type="hidden" name="contactName" id="contactName" value="<?php echo $contactName ?>">
<input type="hidden" id="designation" name="designation" value="<?php echo $designation ?>">
<input type="hidden" id="contactNumber" name="contactNumber" value="<?php echo $contactNumber?>">
<input type="hidden" id="email" name="email" value="<?php echo $email ?>"> 

<!-- Bank Information -->
<input type="hidden" id="accountName" name="accountName" value="<?php echo $accountName ?>"> 
<input type="hidden" id="accountNumber" name="accountNumber" value="<?php echo $accountNumber ?>"> 
<input type="hidden" id="bankName" name="bankName" value="<?php echo $bankName ?>"> 
<input type="hidden" id="branch" name="branch" value="<?php echo $branch ?>"> 
<input type="hidden" id="routeNumber" name="routeNumber" value="<?php echo $routeNumber ?>"> 
<input type="hidden" id="paymentMode" name="paymentMode" value="<?php echo $paymentMode ?>"> 



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
	var merchantName = document.getElementById("merchantName").value;
	var businessType = document.getElementById("businessType").value;
	var productNature = document.getElementById("productNature").value;
	var address = document.getElementById("address").value;
	var districtid = document.getElementById("districtid").value;
	var thanaid = document.getElementById("thanaid").value;
	var website = document.getElementById("website").value;
	var facebook = document.getElementById("facebook").value;
	var companyPhone = document.getElementById("companyPhone").value;


   var contactName = document.getElementById("contactName").value;
   var designation = document.getElementById("designation").value;
   var email = document.getElementById("email").value;
   var contactNumber = document.getElementById("contactNumber").value;

   var accountName = document.getElementById("accountName").value;
   var accountNumber = document.getElementById("accountNumber").value;
   var bankName = document.getElementById("bankName").value;
   var branch = document.getElementById("branch").value;
   var routeNumber = document.getElementById("routeNumber").value;
   var paymentMode = document.getElementById("paymentMode").value;

   var dataString = 'merchantName=' + merchantName + '&businessType=' + businessType + '&productNature=' + productNature + '&address=' + address + '&districtid=' + districtid + '&thanaid=' + thanaid + '&website=' + website + '&facebook=' + facebook + '&companyPhone=' + companyPhone + '&contactName=' + contactName + '&designation=' + designation + '&email=' + email + '&contactNumber=' + contactNumber + '&accountName=' + accountName + '&accountNumber=' + accountNumber + '&bankName=' + bankName + '&branch=' + branch + '&routeNumber=' + routeNumber + '&paymentMode=' + paymentMode;
    $.ajax({
           type: 'post',
           url: 'http://paperflybd.com/api_temporary_merchant_registration.php',
           data: dataString,
           cache: false,
           success: function () {
             alert('form was submitted');
           }
         });
    <?php
           $url="http://paperflybd.com/Unregisterd-Merchant";
           $html = '<div>Someone has registered.Please Click the link below to complete the registration:<br>'
                 .$url.'</div>';
           $mail = new PHPMailer(); // create a new object
           $mail->IsSMTP(); // enable SMTP
           $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
           $mail->SMTPAuth = true; // authentication enabled
           $mail->SMTPSecure = 'auto';; // secure transfer enabled REQUIRED for Gmail
           $mail->Host = "mail.paperfly.com.bd";
           $mail->Port = 587; // or 587
           $mail->IsHTML(true);
           $mail->Username = "info@paperfly.com.bd";
           $mail->Password = "@info$";
           $mail->SetFrom("info@paperfly.com.bd");
           $mail->Subject = "Paperfly Registration";
           $mail->Body = "Thank you for registering.You will soon get your username & password through SMS";
           $mail->AddAddress("$email");
           $mail->send();
          
      

         if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
         } else {
            //echo "Message has been sent";
         }
    ?>
</script>

