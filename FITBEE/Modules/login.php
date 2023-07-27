<?php include 'header1.php'; ?>
        <div class="row">
            <div class="col-md-6 p-0 " style="background-image: url(asset/images/banner.jpg);">
               <div style="background-color: rgba(28  ,195 ,203,0.6); height: 100%;"></div>
            </div>

            <div class= "col-md-5 pt-5 pb-5">
              <div class="p-5">
              <h1 class="pt-3">Sign In</h1>
              <h3 class="pb-3">Welcome Back !</h3>
              <form action="" method="post" autocomplete="off">
                <div class="form-group">
                  <label> Email Address</label>
                  <input type="email" name="email" required="required" class="form-control form-control-lg" placeholder="Enter Email Address">
                </div>
                   <div class="form-group">
                  <label> Password</label>
                  <input type="password" name="pwd" required="required" class="form-control form-control-lg" placeholder="Enter Password">
                </div>
                <p class="text-right pt-2 pb-2"> <a href="forget.php" class='mt-3 text-decoration-none'> Forget Password? </a></p>
                <button class="btn text-white btn-block" type="submit" name ="login" style="background: var(--themeColor2);"> <i class="icofont-login"></i> Sign In</button>
                  <p class="text-center pt-3"> New User ?  <a href="register.php" class='mt-3 text-decoration-none'> Create An Account </a></p>
                   <p class="text-center pt-2 pb-5 "> <a href="index.php" class='mt-3 text-decoration-none'><i class="icofont-long-arrow-left"></i> Back To Home </a></p>
              </form>
            <?php 
                if(isset($_POST['login'])){
                    $email=$_POST['email']; 
                    $pwd=md5($_POST['pwd']);

                    $sql="Select * from users where emailId='$email' and 
                    password='$pwd'";
                    $result=$conn->query($sql);
                     if($result->num_rows>0){
                      $row=$result->fetch_assoc();
                      $_SESSION['uid']=$row['userid'];
                      echo "<script>window.location='index.php'</script>";
                     }
                     else{
                      echo "<div class='alert alert-info mt-3 ml-5 '> Incorrect Email Id or Password </div>";
                     }
                }
              ?>


            </div>
            </div>
        </div>
      </div>
  </body>
  </html>