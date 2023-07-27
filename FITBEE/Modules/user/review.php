<?php include'header.php' ?>
    <div class="card-body">
	<div class="row mt-4 justify-content-center">
		<div class="col-md-7">	
			<h3>We Value Your Feedback</h3>
			<p>We would love to hear your thoughts, suggestions, concerns or problems with anything so we can improve!</p>
			<hr>
			<form action='' method="post">
				
			<div class="form-group"> <br>
				    <label>Describe Feedback</label>
					<textarea name="review" required="required"class='form-control' rows=8 maxlength="300" placeholder="Write comment here ... " ></textarea>
			</div> <hr>	
			<button type="submit" class="btn btn-info bg" name='save'>Submit Review</button>
			<button type="reset" class="btn btn-dark" >Clear</button>
			</form> <br>	
			<?php 
				if(isset($_POST['save'])){

					$rev=addslashes($_POST['review']);
					$sql="Insert Into feedback(feedback,userId) values
					('$rev','$_SESSION[uid]')";
					 if($conn->query($sql)){
					 	echo "<div class='alert alert-success'> Record Saved </div>";
					 }
					 else{
					 	echo "<div class='alert alert-danger'> Error In Code ".$conn->error."</div>";
					 }

				}
			?>
		</div>


	</div>	

</div>


<?php include'footer.php' ?>




					 