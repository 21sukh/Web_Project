<?php include 'header.php'; ?>
<?php  
$result=$conn->query("select * from article"); $article=$result->num_rows;
$result=$conn->query("select * from dietplan"); $dplan=$result->num_rows;
$result=$conn->query("select * from faq"); $faq=$result->num_rows;
$result=$conn->query("select * from users"); $usr=$result->num_rows;
$result=$conn->query("select * from video"); $vd=$result->num_rows;
$result=$conn->query("select * from category"); $cat=$result->num_rows;
?>
<div class="card-header ">
<h4 class="card-title pb-2"> Dashboard </h4></div>
<div class="card-body bg-light">  
<div class="row">
	<div class="col-md-4 mb-3">
		<div class="p-2 shadow bg-white">
		<div class="row pb-3">
			<div class="col-md-4 text-right pt-2">
				<h1><i class="icofont-page icofont-1x" style="color: var(--themeColor2); "></i></h1>
			</div>
            <div class="col-md-8">
            	<h1 class="mb-0 "><?php echo $article ?></h1>
            	<h6 class="text-secondary">Articles</h6>
            </div>
		</div></div>
	</div>
    <div class="col-md-4 mb-3">
		<div class="p-2 shadow bg-white">
		<div class="row pb-3">
			<div class="col-md-4 text-right pt-2">
				<h1><i class="icofont-fruits icofont-1x" style="color: var(--themeColor3);"></i></h1>
			</div>
            <div class="col-md-8">
            	<h1 class="mb-0 "><?php echo $dplan ?></h1>
            	<h6 class="text-secondary">Diet Plans</h6>
            </div>
		</div></div>
	</div>
	<div class="col-md-4 mb-3">
		<div class="p-2 shadow bg-white">
		<div class="row pb-3">
			<div class="col-md-4 text-right pt-2">
				<h1><i class="icofont-question-circle icofont-1x" style="color: var(--themeColor1); "></i></h1>
			</div>
            <div class="col-md-8">
            	<h1 class="mb-0 "><?php echo $faq ?></h1>
            	<h6 class="text-secondary">FAQs</h6>
            </div>
		</div></div>
	</div>
	<div class="col-md-4 mb-3">
		<div class="p-2 shadow bg-white">
		<div class="row pb-3">
			<div class="col-md-4 text-right pt-2">
				<h1><i class="icofont-users icofont-1x" style="color: var(--themeColor4); "></i></h1>
			</div>
            <div class="col-md-8">
            	<h1 class="mb-0 "><?php echo $usr ?></h1>
            	<h6 class="text-secondary">Users</h6>
            </div>
		</div></div>
	</div>
	<div class="col-md-4 mb-3">
		<div class="p-2 shadow bg-white">
		<div class="row pb-3">
			<div class="col-md-4 text-right pt-2">
				<h1><i class="icofont-video-alt icofont-1x" style="color: var(--themeColor2); "></i></h1>
			</div>
            <div class="col-md-8">
            	<h1 class="mb-0 "><?php echo $vd ?></h1>
            	<h6 class="text-secondary">Videos</h6>
            </div>
		</div></div>
	</div>
	<div class="col-md-4 mb-3">
		<div class="p-2 shadow bg-white">
		<div class="row pb-3">
			<div class="col-md-4 text-right pt-2">
				<h1><i class="icofont-paper icofont-1x" style="color: var(--themeColor3); "></i></h1>
			</div>
            <div class="col-md-8">
            	<h1 class="mb-0 "><?php echo $cat ?></h1>
            	<h6 class="text-secondary">Categories</h6>
            </div>
		</div></div>
	</div>
</div>	
<div class="row">
	<div class="col-md-6">
		<h3><i class="icofont-ui-message" style="color: var(--themeColor3); " ></i> Messages</h3>
		<?php 
		$sql="select * from contact order by msgDate desc limit 2 ;";
		$result=$conn->query($sql);
		while($row=$result->fetch_assoc()){ ?>
        <div class="bg-white pl-3 pr-3 pt-1 pb-2 shadow">
        <h4>	<?php echo $row['msg']; ?></h4>
        <p class="text-right ">- <?php echo $row['emailId']; ?> (<?php echo $row['msgDate']; ?>)</p>
        </div>

        <?php }  ?>
	</div>
	<div class="col-md-6">
		<h3><i class="icofont-comment" style="color: var(--themeColor1); " ></i> User Reviews</h3>
		<?php 
		$sql="select * from feedback,users where users.userid=feedback.userId order by feedbackDate limit 2 ;";
		$result=$conn->query($sql);
		while($row=$result->fetch_assoc()){ ?>
        <div class="bg-white pl-3 pr-3 pt-1 pb-2 shadow">
        <h4>	<?php echo $row['feedback']; ?></h4>
        <p class="text-right ">- <?php echo $row['emailId']; ?> (<?php echo $row['feedbackDate']; ?>)</p>
        </div>

        <?php }  ?>
			</div> 
</div>	
</div>

<?php include 'footer.php'; ?>