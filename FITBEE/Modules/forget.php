<?php include 'header1.php'; ?>
<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;?>
        <div class="row">
            <div class="col-md-6 p-0 " style="background-image: url(asset/images/banner.jpg);">
               <div style="background-color: rgba(28  ,195 ,203,0.6); height: 100%;"></div>
            </div>

            <div class= "col-md-5 pt-5 pb-5">
              <div class="p-5">
              <h1 class="pt-5 ">Forgot Password ?</h1>
              <h3 class="pb-3"> Don't Worry . resetting your password is easy.</h3><p>
                Enter your email & we'll send instructions on how to reset your password 
              </p>
              <form action="" method="post" autocomplete="off">
                <div class="form-group mb-4">
                  <label> Email Address</label>
                  <input type="email" name="email" required="required" class="form-control form-control-lg" placeholder="Enter Email Address">
                </div>
                
                <button class="btn text-white btn-block" type="submit" name ="send" style="background: var(--themeColor2);"> <i class="icofont-login"></i> Reset password</button>
                  <p class="text-center pt-3"> <a href="login.php" class='mt-3 text-decoration-none'> Back To Login </a></p>
                   <p class="text-center pt-3 pb-5 "> <a href="index.php" class='mt-3 text-decoration-none'><i class="icofont-long-arrow-left"></i> Back To Home </a></p><br>
              </form>
             <?php
if(isset($_POST['send'])) 
{
  $result=$conn->query("Select * from users where emailid='$_POST[email]'");
  if($result->num_rows>0)
  {
    $fromemail='nazukshingari5@gmail.com';
    $password='n42uk10!';
    $to_id=$_POST['email'];
    $subject='Password Recovering';
    $message="<p>You have just requested a password reset for the FitBee account associated with this email address.To reset your password please click this button: <a href='http://localhost/fitbee/reset.php?id=".$to_id."' class='btn btn-danger btn-sm pl-3 pr-3 '>Click Here</a></p>
    <br/>
    <p>If this is a mistake just ignore this email - your password will not be changed.</p>
    <br><br><h5>Regards</h5>
    <h5>  Team FitBee </h5>";
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
      $mail->addAddress($to_id);
      $mail->addReplyTo($fromemail,'Information');
      $mail->isHTML(true); 
      $mail->Subject = $subject;
      $mail->Body    = $message;   
      $mail->send();                   
      echo"<div class='alert alert-info border'> An email with your password reset link has been sent, Please click the link in that message to reset your password.</div>";
    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
    }
  }
  else
  {
    echo"<br/><div class='alert alert-info'> Account Doesn't Exist </div>";
  }
}
?>


</div>
            </div>
        </div>
      </div>
  </body>
  </html>