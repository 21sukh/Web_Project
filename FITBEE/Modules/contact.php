<?php include 'header.php' ?>
<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;?>

<div class="conatiner-fluid" style="background:url('asset/images/banner.jpg')";>
			<div class="text-white text-center pt-5 pb-5" style="background-color: rgba(0,0,0,0.5); height: 100%;">	
		    
			<h3 class="pt-5">Contact Us</h3>
			<p class="pb-5"> <a href='index.php' class="text-decoration-none text-white"> Home </a> / Contacts</p>
			
			</div>	
		</div>
<div class="conatiner-fluid bg-light pb-5 pt-3">
<div class="container  mt-5 text-center"> 
<img src="asset/images/contact-banner-img.jpg" class="w-100">
  <div class="row mt-5">
	<div class="col-md">
		<div class="card  pt-4 pb-4">
			<i class="icofont-2x icofont-location-pin  p-3 mb-2" style="color: var(--themeColor1)"></i>
			<h3>Location</h3>
			<p class="mt-3 text-muted">Ranjit Avenue,<br>Amritsar Punjab  </p>
		</div>
	</div>
<div class="col-md">
		<div class="card pt-4 pb-4">
			<i class="icofont-2x icofont-phone p-3 mb-2" style="color: var(--themeColor1)"></i>
			<h3 >Phone Contact </h3>
			<p class="mt-3 text-muted"> 1800-283771 <br>
				1800-123456
			</p>
		</div>
	</div>
	<div class="col-md">
		<div class="card pt-4 pb-4">
			<i class="icofont-2x icofont-email p-3  mb-2" style="color: var(--themeColor1)"> </i>
			<h3>Email Contact</h3>
			<p class="mt-3 text-muted">abc@gmail.com
				<br><br></p>
		</div>
	</div>
</div>
</div>
</div>

<div class="container pt-5 pb-2">
			<h1 align="center">Have A Question For Us</h1>
	
			<form action="" method="post">
	<div class="row pt-3">
			<div class="col-md"><label> Your Name </label> <input type="text" name="nm" class="form-control rounded-0  "></div>
			<div class="col-md"><label> Mobile Number</label> <input type="text" name="mb" class="form-control rounded-0 "></div>
			<div class="col-md"><label> Your Email Address</label> <input type="text" name="eml" class="form-control rounded-0 "></div>
	</div>
	<div class="row pt-3">
			<div class="col-md"><label> Your Message </label> <textarea name="msg" class="form-control rounded-0" rows=4></textarea>
			</div>
	</div>		
	<div class="text-center pt-4"><button class="btn text-white" type="submit" name ="save" style="background: var(--themeColor2);"> <i class="icofont-ui-message"></i>  Send Message </button></div>
		</form>

				
			<?php 
				if(isset($_POST['save'])){
					$sql="Insert Into contact(emailId,phnNo,msg,name) values
					('$_POST[eml]','$_POST[mb]','$_POST[msg]','$_POST[nm]')";
					 if($conn->query($sql)){
			$fromemail='nazukshingari5@gmail.com';
             $password='n42uk10!';
             $to_id=$_POST['eml'];
             $to_name=$_POST['nm'];    
             $subject='Thanks for Your Messages ';
$message='<h4> Dear '.$to_name.'</h4><p> <h4 style="color:green">Thank you for getting in touch!</h4>We appreciate you contacting us . One of our Members will get back to you shortly.</p><br/> <h5> Regards , </h5>  <h4 style="color:green">FitBee </h4><h5> Team Project </h5>';
 require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';         
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();   
    $mail->SMTPDebug = 0;
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = $fromemail;                   
    $mail->Password   = $password;                     
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  
    $mail->Port       = 587;                                   
    $mail->setFrom($fromemail,'FitBee');
    $mail->addAddress($to_id,$to_name);
    $mail->addReplyTo($fromemail,'Information');
    $mail->isHTML(true); 
    $mail->Subject = $subject;
    $mail->Body    = $message;   
    $mail->send();                   
    echo "<script>window.alert('Thanks For Reaching Out To Us' );window.location='contact.php';</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
}

           

					 }
					 else{
					 	echo "<div class='alert alert-danger'> Error In Code ".$conn->error."</div>";
					 }

				}
			?>
		
    	</div>

<iframe class="pt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27169.85794126198!2d74.84327394295215!3d31.654865304803494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39196493fdde71ef%3A0x5a89f3cec3595534!2sRanjit%20Avenue%2C%20Amritsar%2C%20Punjab!5e0!3m2!1sen!2sin!4v1618394783218!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>  

<?php include 'footer.php' ?>