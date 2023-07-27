<?php include 'header1.php'; ?>
        <div class="row">
            <div class="col-md-6 p-0 " style="background-image: url(asset/images/banner.jpg);">
               <div style="background-color: rgba(28  ,195 ,203,0.6); height: 100%;"></div>
            </div>

            <div class= "col-md-5 pt-5 pb-5">
              <div class="p-5">
              <h1 class="pt-3">Reset Password</h1>
              <h3 class="pb-3">Enter a new password for account <strong>email@gmail.com</strong></h3>
              <form action="" method="post" autocomplete="off">
               
                   <div class="form-group">
                  <label>New Password</label>
                  <input type="password" name="pwd" required="required" class="form-control form-control-lg" placeholder="Enter New Password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"><small class="text-muted">UpperCase, LowerCase, Number/SpecialChar and min 8 Chars </small>
                </div>
                 <div class="form-group mb-4">
                  <label>Confirm Password</label>
                  <input type="password" name="cpwd" required="required" class="form-control form-control-lg" placeholder="Confirm Password">
                </div>
       
                <button class="btn text-white btn-block" type="submit" name ="chng" style="background: var(--themeColor2);"> <i class="icofont-login"></i> Reset Password</button>
                  <p class="text-center pt-3"> <a href="login.php" class='mt-3 text-decoration-none'> Back To Login </a></p>

                   <p class="text-center pt-2 pb-5 "> <a href="index.php" class='mt-3 text-decoration-none'><i class="icofont-long-arrow-left"></i> Back To Home </a></p>
              </form>

<?php
if(isset($_POST['chng'])) {
if($_POST['pwd']==$_POST['cpwd']) {
$pwd=md5($_POST['pwd']);
$sql="UPDATE users set password='$pwd' where emailid='$_GET[id]'";
if($conn->query($sql)) {
echo"<br/><div class='mt-4 alert alert-success text-capitalized'> <i class='icofont-tick-mark'></i> Password Reset Successfully, Now You Can Login To Your Account With Your New Password</div>";
}
else {
echo"<br/><div class='mt-4 alert alert-danger text-capitalized'> <i class='icofont-ban'></i>Error In Query </div>";}}
else{
echo"<br/><div class='mt-4 alert alert-danger text-capitalized'> <i class='icofont-info'></i>Confirm Password Not Matched </div>";
}
}
?>

              ?></div>
            </div>
        </div>
      </div>
  </body>
  </html>