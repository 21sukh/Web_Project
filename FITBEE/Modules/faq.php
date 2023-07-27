<?php include 'header.php' ?>

<div class="conatiner-fluid" style="background:url('asset/images/banner.jpg')";>
			<div class="text-white text-center pt-5 pb-5" style="background-color: rgba(0,0,0,0.5); height: 100%;">	
		    
			<h3 class="pt-5">Have A Question For Us?</h3>
			<p class="pb-5"> <a href='index.php' class="text-decoration-none text-white"> Home </a> / FAQ</p>
			
			</div>	
		</div>

<div class="container pt-5 pb-5">
	<div class="row">	
		<div class="col-md-3">	
			<ul class="list-group">
				<?php
					$sql="select * from category";
		$result1=$conn->query($sql);
		while($row1=$result1->fetch_assoc()){
			$category=$row1['category']; 
				$category1=urlencode($row1['category']); 
  echo "<li class='list-group-item' style='background:var(--themeColor2);''><a href='faq.php?category=$category1' class='text-decoration-none text-white font-weight-bold'> $category </a></li>";}
   ?>
</ul>
			</div>
        <div class="col-md-9">	
        		<div class="accordion" id="accordionExample">
			<?php 
			if(isset($_GET['category']))
				$category=$_GET['category'];
			else
				$category='Healthy Eating';
		$sql="select * from faq where category='$category'";
		$result=$conn->query($sql);
		while($row=$result->fetch_assoc()){
			$qid=$row['quesId']; ?> 
			  <div class="card">
    <div class="card-header bg-white" id="heading<?php echo $qid ;?>">
      <h1 class="mb-0">
        <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $qid ;?>" style="font-size:large;" aria-expanded="true" aria-controls="collapse<?php echo $qid ;?>">
        <?php echo $row['ques']; ?>
        </button>
      </h1>
    </div>
    <div id="collapse<?php echo $qid ;?>" class="collapse" aria-labelledby="heading<?php echo $qid ;?>" data-parent="#accordionExample">
      <div class="card-body">
        <div class="pt-3 text-justify"> <?php echo $row['ans']; ?></div>
      </div>
    </div>
  </div>
			 <?php } ?> 
	</div>
		</div>	
	</div>	
</div>		
<?php include 'footer.php' ?>