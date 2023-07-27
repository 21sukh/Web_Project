<?php include 'header.php'; ?>
<script src='../editor/ckeditor.js'></script>

	 <div class="card-header ">
                            <h4 class="card-title"> + Add New Diet Plan </h4>
                        </div>
                        <div class="card-body">  <!--- this -->
	<form action="" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-8">
			<div class="form-group">
				<label> Diet Plan Title </label>
				<input type="text" name="title" required="required" placeholder="Plan Title " class="form-control">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label> Select Image </label>
				<input type="file" name="postimg" required="required" class="form-control" accept=".jpg,.png,.jpeg">
				<small class="text-muted">only jpg, png or jpeg files are allowed </small>
			</div>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Type Content</label>
				<textarea name='content' class="form-control"></textarea>
			</div>
			<button class="btn btn-info bg" type=submit name='save'> Save Diet  </button>
			<button class="btn btn-secondary" type=reset name='save'>Clear </button>
		</div>
</div>	
</form>
<?php 
if(isset($_POST['save'])){
	$content=addslashes($_POST['content']);
	$temp= $_FILES['postimg']['tmp_name'];
	$filename="uploads/".$_FILES['postimg']['name'];
	$ext=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	if($ext=="png" or $ext=="jpeg" or $ext=="jpg"){
	if(move_uploaded_file($temp,$filename)){
		//insert code 
$sql="Insert Into dietplan (diet_title,diet_image,diet_content) values
('$_POST[title]','$filename','$content')";
 if($conn->query($sql)){
 	echo "<div class='alert alert-success'> Record Saved </div>";
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

<script>CKEDITOR.replace('content');</script>
</div>

<?php include 'footer.php'; ?>