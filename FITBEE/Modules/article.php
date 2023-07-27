<?php include 'header.php'; ?>
<script src='../editor/ckeditor.js'></script>

	 <div class="card-header ">
                            <h4 class="card-title"> + Add New Article </h4>
                        </div>
                        <div class="card-body">  <!--- this -->
	<form action="" method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-8">
			<div class="form-group">
				<label> Article Title </label>
				<input type="text" name="title" required="required" placeholder="Post Title " class="form-control">
			</div>
			<div class="form-group">
				<select name="category" required="required"class='form-control'>
						<option disabled="disabled" selected="selected"> Select Category</option>
						<?php 
					$sql="select * from category";
					$result=$conn->query($sql);
					while($row=$result->fetch_assoc()){
						echo "<option>".$row['category']."</option>";
						}
				?>

					</select>
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
			<button class="btn btn-info bg" type=submit name='save'> Save Article  </button>
			<button class="btn btn-secondary" type=reset name='save'>Clear </button>
		</div>
</div>	
</form>
<?php 
if(isset($_POST['save'])){
	$temp= $_FILES['postimg']['tmp_name'];
	$filename="uploads/".$_FILES['postimg']['name'];
	$ext=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	if($ext=="png" or $ext=="jpeg" or $ext=="jpg"){
	if(move_uploaded_file($temp,$filename)){
		//insert code 
$sql="Insert Into article (title,image,content,category) values
('$_POST[title]','$filename','$_POST[content]','$_POST[category]')";
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