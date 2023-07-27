<?php include 'header.php' ?>
 <?php 
		$sql="select * from article where articleId='$_GET[id]'";
		$result=$conn->query($sql);
		$row=$result->fetch_assoc();
		$aid=$row['articleId']; ?>
<div class="conatiner-fluid" style="background:url('asset/images/banner.jpg')";>
			<div class="text-white text-center pt-5 pb-5" style="background-color: rgba(0,0,0,0.5); height: 100%;">	
		    
			<h3 class="pt-5"> <?php echo $row['title']; ?></h3>
			<p class="pb-5"> <a href='index.php' class="text-decoration-none text-white"> Home </a> / Blog / Post</p>
			
			</div>	
		</div>

<div class="container pt-5 pb-5">
	<div class="row">
		<div class="col-9">
 
		   <h1 class="pb-3 pt-2"> <?php echo $row['title']; ?></h1>
			<img src="admin/<?php echo $row['image']; ?>" width=100% height='400'>
			<p class="pt-3 text-justify">Category: <?php echo $row['category']; ?> | Added On: <?php echo $row['addedDate']; ?></p>
			<div class="pt-3 text-justify"> <?php echo $row['content']; ?></div>
	</div></div>
</div>		
<?php include 'footer.php' ?>