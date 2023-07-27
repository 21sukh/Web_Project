<hr><h4>Recent Articles</h4>
<hr>
<?php 
       
		$sql="select * from article order by articleId desc limit 4";
		$result=$conn->query($sql);
		while($row=$result->fetch_assoc()){
	
			$aid=$row['articleId']; ?>
			<div class="row mt-3">
		<div class="col-md-4">
			<img src="admin/<?php echo $row['image']; ?>" width=100% height='70'>
		</div>
		<div class="col-md-8">	
		  
		   	<a class="text-dark text-decoration-none" href="post.php?id=<?php echo $aid; ?>">
		   	 <h6  class="font-weight-bold"> 	<?php echo $row['title']; ?></h6> <p> <?php echo $row['addedDate']; ?></p>
		   	</a>
		  
			</div>
	</div>
			
	
		<?php } ?>	
<hr>		
<h4>Recent Videos</h4>
<hr>
<?php 
       
		$sql="select * from video order by vdid desc limit 5";
		$result=$conn->query($sql);
		while($row=$result->fetch_assoc()){
	
			$aid=$row['vdid']; ?>
			<div class="row mt-3">
		<div class="col-md-12">	
		  
		   	<a class="text-dark text-decoration-none" href="video.php?id=<?php echo $aid; ?>">
		   	 <h6  class="font-weight-bold"> <i class="icofont icofont-play-alt-1 text-danger"></i>	<?php echo $row['vdtitle']; ?></h6> 
		   	</a>
		  
			</div>
	</div>
			
	
		<?php } ?>	</h4>
<hr>
<h4>Diet Plans</h4>
<hr>
<?php 
       
		$sql="select * from dietplan order by dietId desc limit 6";
		$result=$conn->query($sql);
		while($row=$result->fetch_assoc()){
	
			$aid=$row['dietId']; ?>
			<div class="row mt-3">
		<div class="col-md-4">
			<img src="admin/<?php echo $row['diet_image']; ?>" width=100% height='70'>
		</div>
		<div class="col-md-8">	
		  
		   	<a class="text-dark text-decoration-none" href="plan.php?id=<?php echo $aid; ?>">
		   	 <h6  class="font-weight-bold"> 	<?php echo $row['diet_title']; ?></h6>
		   	</a>
		  
			</div>
	</div>
			
	
		<?php } ?>	