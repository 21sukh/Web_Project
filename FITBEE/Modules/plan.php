<?php include 'header.php' ?>
 <?php 
		$sql="select * from dietplan where dietId='$_GET[id]'";
		$result=$conn->query($sql);
		$row=$result->fetch_assoc();
		$aid=$row['dietId']; ?>
<div class="conatiner-fluid" style="background:url('asset/images/banner.jpg')";>
			<div class="text-white text-center pt-5 pb-5" style="background-color: rgba(0,0,0,0.5); height: 100%;">	
		    
			<h3 class="pt-5"> <?php echo $row['diet_title']; ?></h3>
			<p class="pb-5"> <a href='index.php' class="text-decoration-none text-white"> Home </a> / Diet Plans</p>
			
			</div>	
		</div>

<div class="container pt-5 pb-5">
	<div class="row">
		<div class="col-9">
			<div class="pr-5" >
		   <h1 class="pb-3 pt-2"> <?php echo $row['diet_title']; ?></h1>
			<img src="admin/<?php echo $row['diet_image']; ?>" width=100% height='350'>
			
			<div class="pt-3 text-justify"> <?php echo $row['diet_content']; ?></div>
			<h3 style="color:var(--themeColor4);">Meal Plans</h3>
			<div class="accordion" id="accordionExample">
			<?php 
		$sql="select * from mealplan where dietId='$_GET[id]'";
		$result=$conn->query($sql);
		while($row=$result->fetch_assoc()){
			$mid=$row['mealId']; ?> 
			  <div class="card">
    <div class="card-header bg-white" id="heading<?php echo $mid ;?>">
      <h1 class="mb-0">
        <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $mid ;?>" style="font-size:large;" aria-expanded="true" aria-controls="collapse<?php echo $mid ;?>">
        <?php echo $row['meal_title']; ?>
        </button>
      </h1>
    </div>

    <div id="collapse<?php echo $mid ;?>" class="collapse" aria-labelledby="heading<?php echo $mid ;?>" data-parent="#accordionExample">
      <div class="card-body">
        			<div class="pt-3 text-justify"> <?php echo $row['meal_content']; ?></div>
      </div>
    </div>
  </div>
			 <?php } ?> 
	</div>

	<?php 
		$sql="select * from planinfo where dietId='$_GET[id]'";
		$result=$conn->query($sql);
		while($row=$result->fetch_assoc()){
			$pid=$row['planId']; ?> 	
        <h3 class="pt-3 pb-2" style="color:var(--themeColor4);"><?php echo $row['plan_title']; ?></h3>
        <img src="admin/<?php echo $row['plan_image']; ?>" width=100% height='350'>
        <div class="pt-3 text-justify"> <?php echo $row['plan_content']; ?></div>

				 <?php } ?> 


</div></div>
<div class="col-md-3">
	<?php include 'sidebar.php' ?>
</div>
</div>
</div>		
<?php include 'footer.php' ?>
