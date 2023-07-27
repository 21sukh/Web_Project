<?php include 'header.php'; ?>

<div class="card-header ">
                            <h4 class="card-title"> + Add New Category </h4>
                        </div>
                        <div class="card-body">
	<div class="row mt-4">
		<div class="col-md-5">
		
			<form action='' method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label> Category Name </label>
					<input type="text" name="category" required="required"class='form-control' placeholder="Type Category Name"  />
				</div>
				<div class="form-group">
				<label> Select Image </label>
				<input type="file" name="postimg" required="required" class="form-control" accept=".jpg,.png,.jpeg">
				<small class="text-muted">only jpg, png or jpeg files are allowed </small>
			    </div>
			<div class="form-group">
				    <label> Overview </label>
					<textarea name="overview" required="required"class='form-control' rows=3 maxlength="500" placeholder="Write About Category ... " ></textarea>
			</div> <hr>	
			<button type="submit" class="btn btn-info bg" name='save'>Save Category</button>
			<button type="reset" class="btn btn-dark" >Clear</button>
			</form> <br>	
			<?php 
				if(isset($_POST['save'])){
					$overview=addslashes($_POST['overview']);
					$temp= $_FILES['postimg']['tmp_name'];
	$filename="uploads/".$_FILES['postimg']['name'];
	$ext=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	if($ext=="png" or $ext=="jpeg" or $ext=="jpg"){
	if(move_uploaded_file($temp,$filename)){
		            $filename=addslashes($filename);
					$sql="Insert Into category(category,overview,image) values
					('$_POST[category]','$overview','$filename')";
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
				}}
			?>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-6">
			<table class="table table-sm">	
			<thead>
			<tr><th>Image</th> <th>Category</th> <th>Action</th> </tr>
			</thead>
			<tbody>
				<?php 
					$sql="select * from category";
					$result=$conn->query($sql);

					while($row=$result->fetch_assoc()){
						$cat=$row['category'];
						echo "<tr>";
						echo"<td><img src='".$row['image']."'height=70 width=70></td> ";
						echo "<td> <h5>".$row['category']."</h5>";
						echo "<p>".$row['overview']."</p></td>";
						echo "<td> 
						<a href='category.php?d=$cat' class='text-decoration-none'> 
						<i class='icofont-trash text-danger' title='Delete'> </i> 
						</a>
						</td>";

						echo "</tr>";
				}
				?>
			</tbody>		
			</table>
			<?php 
				if(isset($_GET['d'])){
					$sql="delete from category where category='$_GET[d]'";

					if($conn->query($sql)){
					 echo "<script>window.alert('Record Deleted ');window.location='category.php';</script>";
					 }
					 else{
					 	echo "<div class='alert alert-danger'> Error In Code ".$conn->error."</div>";
					 }
					
				}

			?>
		</div>
	</div>	

</div>

<?php include 'footer.php'; ?>