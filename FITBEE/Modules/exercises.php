<?php include 'header.php' ?>

<div class="conatiner-fluid" style="background:url('asset/images/banner.jpg')";>
			<div class="text-white text-center pt-5 pb-5" style="background-color: rgba(0,0,0,0.5); height: 100%;">	
		    
			<h3 class="pt-5">Reach Your Goals</h3>
			<p class="pb-5"> <a href='index.php' class="text-decoration-none text-white"> Home </a> /<a href="workout.php" class="text-decoration-none text-white"> Training</a> / Exercises</p>
			
			</div>	
		</div>
<div class="container pt-5 pb-5">
	<div class="row">
		<div class="col-md-9">
			<div class="pr-5">
					<div class="row mt-3">
  <?php 
  		if(isset($_GET['t'])){
        $t =$_GET['t'];
		$sql="select * from workout where target='$t' order by title";
	}
	else
		$sql="select * from workout order by title";

		$result=$conn->query($sql);
		while($row=$result->fetch_assoc()){
	
			$aid=$row['workoutId']; ?>
	
		<div class="col-md-6 mt-3 text-center">
							<a class="text-decoration-none text-dark" href="exercise.php?id=<?php echo $aid; ?>">
			<img src="admin/<?php echo $row['image']; ?>" width=100% height='200'>
		   <h4 class="pt-2"> <?php echo $row['title']; ?></h4>
</a></div>
	
		<?php } ?>	
		<!-- videos -->
		 <?php 
  		if(isset($_GET['t'])){
        $t =$_GET['t'];
		$sql="select * from video where target='$t' order by vdtitle";
	}
	else
		$sql="select * from video where category='Exercise and Fitness' order by vdtitle";

		$result=$conn->query($sql);
		while($row=$result->fetch_assoc()){
	
			$aid=$row['vdid']; ?>
	
		<div class="col-md-6 mt-3 text-center">
							<a class="text-decoration-none text-dark" href="video.php?id=<?php echo $aid; ?>">
			<video  src="admin/<?php echo $row['vdUrl']; ?>" width=100% height='250'></video>
		   <h4 class="pt-2"> <?php echo $row['vdtitle']; ?></h4>
</a></div>
	
		<?php } ?>
	</div></div></div>

	<div class="col-md-3">
	<?php include 'sidebar.php' ?>
</div>
</div>	</div>	
	
<?php include 'footer.php' ?>
 <!-- poster="asset/images/workoutposter.jpg" -->