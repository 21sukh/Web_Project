<?php include 'header.php' ?>
 <?php 
		$sql="select * from workout where workoutId='$_GET[id]'";
		$result=$conn->query($sql);
		$row=$result->fetch_assoc();
		$aid=$row['workoutId']; ?>
<div class="conatiner-fluid" style="background:url('asset/images/banner.jpg')";>
			<div class="text-white text-center pt-5 pb-5" style="background-color: rgba(0,0,0,0.5); height: 100%;">	
		    
			<h3 class="pt-5"> <?php echo $row['title']; ?></h3>
			<p class="pb-5"> <a href='index.php' class="text-decoration-none text-white"> Home </a> /<a href="workout.php" class="text-decoration-none text-white"> Training</a> /<a href="exercises.php" class="text-decoration-none text-white"> Exercises</a> / Exercise</p>
			
			</div>	
		</div>

<div class="container pt-5 pb-5">
	<div class="row">
		<div class="col-9">
			<div class="pr-5">
 
		   <h1 class="pb-3 pt-2"> <?php echo $row['title']; ?></h1><hr>
			<img src="admin/<?php echo $row['image']; ?>" width=100% height='400'>
			<p class="pt-3 text-justify font-weight-bold">Target Area: <?php echo $row['target']; ?> </p>
			<div class="pt-3 text-justify"> <?php echo $row['content']; ?></div>
	<h4 class="font-weight-bold"> How To :</h4>		<div class="pt-3 text-justify"> <?php echo $row['howto']; ?></div>
	 <div class="pt-3 text-justify"> <?php echo $row['info']; ?></div>
	</div></div>
	<div class="col-md-3">
	<?php include 'sidebar.php' ?>
    </div>
	</div>
	</div>
</div>
</div>		
<?php include 'footer.php' ?>