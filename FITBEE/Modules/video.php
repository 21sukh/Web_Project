<?php include 'header.php' ?>
 <?php 
		$sql="select * from video where vdid='$_GET[id]'";
		$result=$conn->query($sql);
		$row=$result->fetch_assoc();
		$aid=$row['vdid']; ?>
<div class="conatiner-fluid" style="background:url('asset/images/banner.jpg')";>
			<div class="text-white text-center pt-5 pb-5" style="background-color: rgba(0,0,0,0.5); height: 100%;">	
		    
			<h3 class="pt-5"> <?php echo $row['vdtitle']; ?></h3>
			<p class="pb-5"> <a href='index.php' class="text-decoration-none text-white"> Home </a> / videos / video</p>
			
			</div>	
		</div>

<div class="container pt-5 pb-5">
	<div class="row">
		<div class="col-9">
    <div class="pr-5">
		   <h1 class="pb-1 pt-2"> <?php echo $row['vdtitle']; ?></h1><hr class="pb-4">
		<video controls="controls" autoplay="autoplay" src="admin/<?php echo $row['vdUrl']; ?>" width=100% height='470'></video>
			<p class="pt-3 text-justify">Category: <?php echo $row['category']; ?> | Added On: <?php echo $row['addedDate']; ?></p>
			<div class="pt-3 text-justify"> <?php echo $row['overview']; ?></div>
	</div></div>
<div class="col-md-3">
	<?php include 'sidebar.php' ?>
</div>
</div>
</div>
</div>		
<?php include 'footer.php' ?>