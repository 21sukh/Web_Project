 <?php include 'header.php' ?>

<div class="conatiner-fluid" style="background:url('asset/images/banner.jpg')";>
			<div class="text-white text-center pt-5 pb-5" style="background-color: rgba(0,0,0,0.5); height: 100%;">	
		    
			<h3 class="pt-5">Blogs</h3>
			<p class="pb-5"> <a href='index.php' class="text-decoration-none text-white"> Home </a> / Blog</p> 
			
			</div>	
		</div>
<div class="container pt-5 pb-5">
	<div class="row">
		<div class="col-md-9">
			<div class="pr-5">
  <?php 
        $c =$_GET['category'];
		$sql="select * from article where category='$c' order by articleId desc";
		$result=$conn->query($sql);
		while($row=$result->fetch_assoc()){
	
			$aid=$row['articleId']; ?>
			<div class="row mt-3">
		<div class="col-md-4">
			<img src="admin/<?php echo $row['image']; ?>" width=100% height='200'>
		</div>
		<div class="col-md-8">	
		   <h4 class="pt-2"> <?php echo $row['title']; ?></h4>
			<p class="pt-3 text-justify"> 
				<?php echo substr(strip_tags($row['content']),0,280); ?> ...
				<a class="text-decoration-none" style="color: var(--themeColor2);" href="post.php?id=<?php echo $aid; ?>">Read More</a> </p></div>
	</div>
			
	
		<?php } ?>	
	</div></div>
<div class="col-md-3">
	<?php include 'sidebar.php' ?>
</div>
</div>
</div>		
	
<?php include 'footer.php' ?>