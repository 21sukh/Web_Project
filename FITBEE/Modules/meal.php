<?php include 'header.php'; ?>
<script src='../editor/ckeditor.js'></script>


	 <div class="card-header ">
                            <h4 class="card-title"> + Add New Meal plan </h4>
                        </div>
                        <div class="card-body">  <!--- this -->
	<form action="" method="post" >
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label> Plan Title </label>
				<input type="text" name="title" required="required" placeholder="Title " class="form-control">
			</div>
		</div>
	</div>	
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Type Content</label>
				<textarea name='content' class="form-control"></textarea>
			</div>
			<button class="btn btn-info bg" type=submit name='save'> Save Plan  </button>
			<button class="btn btn-secondary" type=reset name='save'>Clear </button>
		</div>
</div>	
</form>
<?php 
if(isset($_POST['save'])){
		//insert code 
$content=addslashes($_POST['content']);
$sql="Insert Into mealplan (meal_title,meal_content,dietId) values
('$_POST[title]','$content','$_GET[dietid]')";
 if($conn->query($sql)){
 	echo "<div class='alert alert-success'> Record Saved </div>";
 }
 else{
 	echo "<div class='alert alert-danger'> Error In Code ".$conn->error."</div>";
 }
}
?>

<script>CKEDITOR.replace('content');</script>
</div>

<?php include 'footer.php'; ?>