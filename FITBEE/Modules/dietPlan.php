<?php include 'header.php' ?>

<div class="conatiner-fluid" style="background:url('asset/images/banner.jpg')";>
			<div class="text-white text-center pt-5 pb-5" style="background-color: rgba(0,0,0,0.5); height: 100%;">	
		    
			<h3 class="pt-5">Let's Get Started With These Healthy Dieting Plans </h3>
			<p class="pb-5"> <a href='index.php' class="text-decoration-none text-white"> Home </a> / Diet Plans</p>
			
			</div>	
		</div>

<div class="container pt-5 pb-5">
	<div class="row">
		<div class="col-md-9">
			<div class="pr-5">
  <?php 
		$sql="select * from dietplan";
		$result=$conn->query($sql);
		while($row=$result->fetch_assoc()){
	
			$aid=$row['dietId']; ?>
			<a class="text-decoration-none text-dark" href="plan.php?id=<?php echo $aid; ?>">
			<div class="p-2 mt-3 shadow ">
		   <h1 class="pb-3 pt-2"> <?php echo $row['diet_title']; ?></h1>
			<img src="admin/<?php echo $row['diet_image']; ?>" width=100% height='350'>
			
			<p class="pt-3 text-justify"> <?php echo substr(strip_tags($row['diet_content']),0,320); ?> ... </p></div></a>
		<?php } ?>	
	</div></div>
<div class="col-md-3">
	<?php include 'sidebar.php' ?>
</div>
</div>
</div>		
<?php include 'footer.php' ?>