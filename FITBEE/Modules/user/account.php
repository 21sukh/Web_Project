<?php include'header.php' ?>
<?php $sql="Select * from users where userid='$_SESSION[uid]'";
      $result=$conn->query($sql);
      $row=$result->fetch_assoc(); 
      $pwd=$row['password'];?>
    <div class="card-body">
    		<div class="row">
		<div class="col-md-3">
			<h4 class="pt-2 pb-3">My Account</h4> <hr>
		<img src="<?php echo $row['image'];?>" height="200px" width="100%">
		<form action="" method="post" enctype="multipart/form-data"> 
		<p class="pt-3">Change Profile Image</p>
<div class="custom-file mt-3 mb-3">
  <input type="file" class="custom-file-input" id="customFile" name="pimg">
  <label class="custom-file-label" for="customFile">Choose Image</label>
</div>
 <button type="submit" class="btn btn-info btn-block bg" name='save1'>Upload Image</button>
		</form>	
					<?php 

		if(isset($_POST['save1'])){
$temp= $_FILES['pimg']['tmp_name'];
$filename="uploads/".$_FILES['pimg']['name'];
	$ext=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	if($ext=="png" or $ext=="jpeg" or $ext=="jpg"){
	if(move_uploaded_file($temp,$filename)){
	
$sql="UPDATE users set image='$filename' where userid='$_SESSION[uid]'";
if($conn->query($sql)){
echo "<script>window.alert('Profile Updated');window.location='account.php';</script>";
}
else{
echo "<div class='alert alert-danger'> Error In Code ".$conn->error."</div>";
}
}
	else{
		echo "<div class='alert alert-warning'> Error in File Upload  </div>";
	}
}
else{
	echo "<div class='alert alert-warning'> Only jpg, png or jpeg files are allowed  </div>";
}
		}
			?>

	</div>
		<div class="col-md-9">	
			<h4 class="pt-2 pb-2">Edit Profile</h4>
			<form action='' method="post">
			<div class="row">
		<div class="col-md-6">		
			<div class="form-group"> 
				<label>First Name</label>
			<input type="text" name="fname" required="required" class="form-control form-control-lg" placeholder="Enter First Name" value="<?php echo $row['firstName'];?>">		
			</div> </div>
			<div class="col-md-6">		
			<div class="form-group"> 
				<label>Last Name</label>
			<input type="text" name="lname" required="required" class="form-control form-control-lg" placeholder="Enter Last name" value="<?php echo $row['lastName'];?>">		
			</div> </div><div class="col-md-6">		
			<div class="form-group"> 
				<label>Email Address</label>
			<input type="email" name="email" required="required" class="form-control form-control-lg" placeholder="Enter Email Address" value="<?php echo $row['emailId'];?>">		
			</div> </div><div class="col-md-6">		
			<div class="form-group"> 
				<label>Age</label>
			<input type="number" name="age" required="required" class="form-control form-control-lg" placeholder="Enter Age" value="<?php echo $row['age'];?>">		
			</div> </div><div class="col-md-6">		
			<div class="form-group"> 
				<label>Gender</label>
			<select name="gender" class="custom-select">
				<option><?php echo $row['gender'];?></option>
			<option>Male</option>	<option>Female</option> <option>Others</option>	</select>
			</div> </div>
			<div class="col-md-6 " style="padding-top: 30px; ">
			<button type="submit" class="btn btn-info btn-block bg" name='save'>Submit</button>
			</div></div>
			</form> 
			<?php 

		if(isset($_POST['save'])){
			$sql="UPDATE users set firstName='$_POST[fname]',lastName='$_POST[lname]',gender='$_POST[gender]',emailId='$_POST[email]',age='$_POST[age]' where userid='$_SESSION[uid]'";
			 if($conn->query($sql)){
			 	echo "<script>window.alert('Profile Updated');window.location='account.php';</script>";
			 }
			 else{
			 	echo "<div class='alert alert-danger'> Error In Code ".$conn->error."</div>";
			 }

		}
			?>

			<h4 class="pt-2 pb-2">Change Password</h4>
            <form method="post" action="" >
            	<div class="row">
            		<div class="col-3"><div class="form-group">
                  <label>Old Password</label>
                  <input type="password" name="opwd" required="required" class="form-control form-control-lg" placeholder="Old Password">
                </div></div>
                <div class="col-3"><div class="form-group">
                  <label>New Password</label>
                  <input type="password" name="npwd" required="required" class="form-control form-control-lg" placeholder="New Password">
                </div></div>
                <div class="col-3"><div class="form-group">
                  <label>Confirm Password</label>
                  <input type="password" name="cpwd" required="required" class="form-control form-control-lg" placeholder="Confirm Password">
                </div></div>
                <div class="col-md-3 " style="padding-top: 30px; ">
			<button type="submit" class="btn btn-info btn-block bg" name='save2'>Submit</button>
			</div>
            	</div>
            </form >
        <?php 
		if(isset($_POST['save2'])){ 

			if($pwd==md5($_POST['opwd'])){
				if($_POST['npwd']==$_POST['cpwd']){
					$pw=md5($_POST['npwd']);
$sql="UPDATE users set password='$pw' where userid='$_SESSION[uid]'";
if($conn->query($sql)){
echo "<script>window.alert('Password Changed');window.location='account.php';</script>";
}
else{
echo "<div class='alert alert-danger'> Error In Code ".$conn->error."</div>";
}

				}else{
		echo "<div class='alert alert-warning'>Confirm password not matched  </div>";

				}
			}
			else{
		echo "<div class='alert alert-warning'> Old password not matched   </div>";

			}
		}?>
				</div></div>
			
		</div>


	</div>	

</div>


<?php include'footer.php' ?>




					 