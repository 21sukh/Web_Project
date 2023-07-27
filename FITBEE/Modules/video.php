<?php include 'header.php'; ?>
<script>
function delRec(aid){
	if(confirm("Click ok to Delete Record"))
		window.location='video.php?d='+aid;
}
  </script>
<div class="card-header ">
    <h4 class="card-title"> + Upload Video  </h4>
 </div>
<div class="card-body">
	<div class="row mt-4">
		<div class="col-md-5">
			<form action='' method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Video Title</label>
					<input type="text" name="title" required="required"class='form-control' placeholder="Video Title here.."  />
				</div>
				<div class="form-group">
				<label> Select Video </label>
				<input type="file" name="video" required="required" class="form-control" accept=".mp4">
				<small class="text-muted">only mp4 files are allowed </small>
			    </div>

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
			<div class="form-group mt-2">
				    <label>overview</label>
					<textarea name="overview" required="required"class='form-control' rows=3 maxlength="2000" placeholder="Write About Video ... " ></textarea>
			</div> <hr>	
			<button type="submit" class="btn btn-info bg" name='save'>Save Video</button>
			<button type="reset" class="btn btn-dark" >Clear</button>
			</form> <br>	
			<?php 
				if(isset($_POST['save'])){
					$overview=addslashes($_POST['overview']);
					$temp= $_FILES['video']['tmp_name'];
	$filename="uploads/".$_FILES['video']['name'];
	$ext=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	if($ext=="mp4"){
	if(move_uploaded_file($temp,$filename)){
		            $filename=addslashes($filename);
					$sql="Insert Into video(vdtitle,category,overview,vdUrl) values
					('$_POST[title]','$_POST[category]','$overview','$filename')";
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
	echo "<div class='alert alert-warning'> Only mp4 files are allowed  </div>";
				}}
			?>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-6">
			<table class="table table-sm">	
			<thead>
			<tr> <th>Video</th> <th>Action</th> </tr>
			</thead>
			<tbody>
				<?php 
					$sql="select * from video";
					$result=$conn->query($sql);

					while($row=$result->fetch_assoc()){
						$vd=$row['vdid'];
						echo "<tr>";
						echo "<td> <h5>".$row['vdtitle']."</h5></td>";
						echo "<td> 
						<a href='#' onclick='delRec($vd)' class='text-decoration-none'> 
						<i class='icofont-trash text-danger' title='Delete'> </i> 
						</a><a data-toggle='modal' data-target='#exampleModal$vd'>
                        <i class='icofont-play text-info' title='Play'> </i> </a>

						</td>";

						echo "</tr>";
						include 'playvideo.php';
				}
				?>
			</tbody>		
			</table>
			<?php 
				if(isset($_GET['d'])){
					$sql="delete from video where vdid='$_GET[d]'";

					if($conn->query($sql)){
					 echo "<script>window.alert('Record Deleted ');window.location='video.php';</script>";
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
<script>
  $('.videoModal').on('hide.bs.modal', function(e) {    
    var $if = $(e.delegateTarget).find('iframe');
    var src = $if.attr("src");
    $if.attr("src", '/empty.html');
    $if.attr("src", src);
});
</script>