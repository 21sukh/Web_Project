<?php include 'header.php' ?>

<div class="conatiner-fluid" style="background:url('asset/images/banner.jpg')";>
			<div class="text-white text-center pt-5 pb-5" style="background-color: rgba(0,0,0,0.5); height: 100%;">	
		    
			<h3 class="pt-5">Reach Your Goals</h3>
			<p class="pb-5"> <a href='index.php' class="text-decoration-none text-white"> Home </a> / Video Tips</p>
			
			</div>	
		</div>
<div class="container pt-5 pb-5">
	<div class="row">
		<div class="col-md-9">
			<div class="pr-5">
					<div class="row mt-3">
  <?php 
  		if(isset($_GET['category'])){
        $c =$_GET['category'];
		$sql="select * from video where category='$c' order by vdid desc";
	}
	else
		$sql="select * from video order by vdid desc";

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
 