<?php include 'header.php' ?>

<div class="conatiner-fluid" style="background:url('asset/images/banner.jpg')";>
			<div class="text-white text-center pt-5 pb-5" style="background-color: rgba(0,0,0,0.5); height: 100%;">	
		    
			<h3 class="pt-5">Latest News</h3>
			<p class="pb-5"> <a href='index.php' class="text-decoration-none text-white"> Home </a> / News</p>
			
			</div>	
		</div>


<div class="container pt-5 pb-5">	

<?php  
$APIKEY="3e4904c4b8da46b3b1d08370257db8df";
$URL="https://newsapi.org/v2/everything?q=+healthy+diet&apiKey=".$APIKEY;
$result=file_get_contents($URL);
$newsData=json_decode($result);
// echo "<pre>";
// print_r($newsData);
// echo "</pre>";
?>

<div class="row">
	<?php foreach ($newsData->articles as $news) { 
		if ($news->urlToImage=='')
			$image="assets/No_Image_Available.jpg";
		else
			$image=$news->urlToImage;
	 ?>

	<div class="col-md-6 pt-4">
		<div class="card" style="min-height: 450px;">
		  <img src="<?php echo $image; ?>" class="card-img-top" alt="..." style='height:280px'>
		  <div class="card-body">
		    <h5 class="card-title"><?php echo $news->title; ?></h5>
		    <p class="card-text"><?php echo $news->content; ?></p>
		    <a href="<?php echo $news->url; ?>" target='_blank' class="btn text-white" style="background-color:var(--themeColor1);">Read More</a>
		  </div>
		</div>		
	</div>
<?php } ?>
</div>
</div>

	
</div>		
<?php include 'footer.php' ?>