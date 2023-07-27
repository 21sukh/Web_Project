<?php include'header.php' ?>
<script src='../editor/ckeditor.js'></script>
	<div class="card-header ">
        <h4 class="card-title"> + Add New FAQ </h4>                    
    </div>
    <div class="card-body">
	<div class="row mt-4">
		<div class="col-md-7">	
			<form action='' method="post">
				<div class="form-group">
					<label>Question</label>
					<input type="text" name="ques" required="required"class='form-control' placeholder="Type your Question here"  />
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
			<div class="form-group"> <br>
				    <label>Answer</label>
					<textarea name="ans" required="required"class='form-control' rows=3 maxlength="300" placeholder="Write Answer here ... " ></textarea>
			</div> <hr>	
			<button type="submit" class="btn btn-info bg" name='save'>Save FAQ</button>
			<button type="reset" class="btn btn-dark" >Clear</button>
			</form> <br>	
			<?php 
				if(isset($_POST['save'])){
					$que=addslashes($_POST['ques']);
					$ans=addslashes($_POST['ans']);
					$sql="Insert Into faq(ques,ans,category) values
					('$que','$ans','$_POST[category]')";
					 if($conn->query($sql)){
					 	echo "<div class='alert alert-success'> Record Saved </div>";
					 }
					 else{
					 	echo "<div class='alert alert-danger'> Error In Code ".$conn->error."</div>";
					 }

				}
			?>
		</div>

		<div class="col-md-5">
			<table class="table table-sm">
			<thead><tr><th class="w-75">Question-Answer</th><th>Action</th></tr></thead>	
			<tbody>
				<?php 
					$sql="select * from faq";
					$result=$conn->query($sql);
					while($row=$result->fetch_assoc()){
						$que=$row['ques'];
						echo "<tr>";
						echo "<td>".$row['ques']."</td>"; 
						echo "<td>  <a href='faq.php?d=$que' class='text-decoration-none'> 
						<i class='icofont-trash text-danger' title='Delete'> </i> 
						</a> </td>";             
						echo "</tr>";
				}
				?>
			</tbody>		
			</table>
			<?php 
				if(isset($_GET['d'])){
					$sql="delete from faq where ques='$_GET[d]'";

					if($conn->query($sql)){
					 echo "<script>window.alert('Record Deleted ');window.location='faq.php';</script>";
					 }
					 else{
					 	echo "<div class='alert alert-danger'> Error In Code ".$conn->error."</div>";
					 }
					
				}

			?>
		</div>
	</div>	

</div>

<script>CKEDITOR.replace('ans');</script>
<?php include'footer.php' ?>




					 