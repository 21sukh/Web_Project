<?php include 'header1.php'; ?>
        <div class="row">
           <div class="col-md-5 p-5 ">
            <!-- <p class="text-center"><i class="icofont icofont-user icofont-4x"></i></p> -->
            <a href="index.php" style="text-decoration:none;color:var(--themeColor1);"> <h1 class="logof2 text-center"><strong>F I T B E E</strong></h1></a>
              <h1 class="pt-2  text-center">Admin Login</h1> <hr>
              <div class="pb-5">
              <form action="" method="post" autocomplete="off">
                <div class="form-group pt-5">
                  <label> Username</label>
                  <input type="text" name="uname" pattern='[A-Z a-z]{2,50}' required="required" class="form-control form-control-lg" placeholder="Enter Username">
                </div>
                  <div class="form-group pt-2 pb-2">
                  <label> Password</label>
                  <input type="password" name="pwd" required="required" class="form-control form-control-lg" placeholder="Enter Password">
                </div></br>
                <button class="btn text-white btn-block" name='login' type="submit" style="background: var(--themeColor1);"><i class="icofont-login"> </i> Login </button> 
                <p class="text-center pt-5 pb-5 "> <a href="index.php" class='mt-3 text-decoration-none'><i class="icofont-long-arrow-left"></i> Back To Home </a></p>
              </form>
              <br>
</div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 p-0" style="background-image: url(asset/images/banner.jpg);">
               <div style="background-color: rgba(134,202,45,0.6); height: 100%;"></div>
            </div>
              <?php 
                if(isset($_POST['login'])){
                    $uname=$_POST['uname']; 
                    $pwd=md5($_POST['pwd']);

                    $sql="Select * from admin where username='$uname' and 
                    password='$pwd'";
                    $result=$conn->query($sql);
                     if($result->num_rows>0){
                      $_SESSION['ad']='admin';
                      echo "<script>window.location='admin/dashboard.php'</script>";
                     }
                     else{
                      echo "<div class='alert alert-info mt-3 ml-5 '> Incorrect Username or Password </div>";
                     }
                }
              ?>
            </div>
          </div>
      </div>
  </body>
  </html>