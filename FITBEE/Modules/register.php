<?php include 'header1.php'; ?>
<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;?>
        <div class="row">
            <div class="col-md-6 p-0 " style="background-image: url('asset/images/slide (3).jpg'); background-repeat: no-repeat; background-size: cover;">
               <div style="background-color: rgba(28  ,195 ,203,0.6); height: 100%;">
            </div></div>
            <div class= "col-md-5 pt-5 pb-5">
              <div class="p-5">
              <h1 class="pt-3">Register</h1>
              <h3 class="pb-3">Welcome To FitBee !</h3>
              <form action="" method="post" autocomplete="off">
                <div class="form-group">
                  <label> Email Address</label>
                  <input type="email" name="email" required="required" class="form-control" placeholder="Enter Email Address">
                </div>
              
                   <div class="form-group">
                  <label> Password</label>
                  <input type="password" name="pwd" required="required" class="form-control" placeholder="Enter Password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"><small class="text-muted">UpperCase, LowerCase, Number/SpecialChar and min 8 Chars</small>
                </div>
                <div class="form-group">
                  <label> Confirm Password</label>
                  <input type="password" name="cpwd" required="required" class="form-control" placeholder="Enter Password">
                </div>
                <button class="btn text-white btn-block" name='reg' type="submit" style="background: var(--themeColor2);"> Register </button> 
                <p class="text-center pt-3"> Existing User ?  <a href="login.php" class='mt-3 text-decoration-none'> Sign In </a></p>
                <p class="text-center pt-2 pb-5 "> <a href="index.php" class='mt-3 text-decoration-none'><i class="icofont-long-arrow-left"></i> Back To Home </a></p>
              </form>
              <?php 
                if(isset($_POST['reg'])){
                  if($_POST['pwd']==$_POST['cpwd']){
                    $pw=md5($_POST['pwd']);
                  $sql="insert into users (emailId,password) values
                  ('$_POST[email]','$pw') ";
                  if($conn->query($sql)){

                  $fromemail='nazukshingari5@gmail.com';
             $password='n42uk10!';
             $to_id=$_POST['email'];  
             $subject='Thank you for registering for an account on FitBee. ';
$message='<h4> Dear User,</h4><p><h4 style="color:green">Welcome to our world :) </h4><br>
Thank you for registering for an account on FitBee.
We are delighted to have you Congrats for taking the first step towards a healthy life.
</p><br/> <h5> Regards , </h5><h4 style="color:green"></h4>FitBee <h5> Team Project </h5>';
 require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';         
$mail = new PHPMailer(true);  "<h4 style='color:green'>Your account has been created successfully.</h4>";

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
    echo "<script> window.alert('Your Account has been created');
    window.location='contact.php';</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
}

                  }else{
                    echo "<div class='alert alert-danger'> Error in Code ".$conn->error." </div>";
                  }
              }else{
                echo "<div class='alert alert-info'> Confirm Password Not Matched </div>";
              }
                    
                }
              ?>
            </div>
        </div>
      </div>
  </body>
  </html>