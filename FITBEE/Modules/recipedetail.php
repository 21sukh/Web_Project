<?php include 'header.php' ?>

<div class="conatiner-fluid" style="background:url('asset/images/banner.jpg')";>
			<div class="text-white text-center pt-5 pb-5" style="background-color: rgba(0,0,0,0.5); height: 100%;">	
		    
			<h3 class="pt-5 text-capitalize">Choose your meal mindfully</h3>
			<p class="pb-5"> <a href='index.php' class="text-decoration-none text-white"> Home </a> / Recipe Search</p>
			
			</div>	
		</div>

<div class="container pt-5 pb-5">
<?php 
$r="http%3A%2F%2Fwww.edamam.com%2Fontologies%2Fedamam.owl%23".$_GET['r'];
$APP_ID="92920fc4";
$APP_KEY="9e05230f5588679579df05ba53f48ee1";
$URL="https://api.edamam.com/search?app_id=".$APP_ID."&app_key=".$APP_KEY."&r=".$r."&imageSize=LARGE";
$response=file_get_contents($URL);
$data=json_decode($response);
?>

<h4><?php echo $data[0]->label ; ?></h4>
<div class="row">
<div class="col-md-7 pt-4">
  <img src="<?php echo ($data[0]->image) ;?>" alt="<?php echo $data[0]->label ; ?>" 
  class="w-75 p-1 border" height='270px' >
  <hr>
  <p>Colories <?php echo round($data[0]->calories,2)?></p>
  <p>Serving For <?php echo $data[0]->yield?> Person </p>
</div>
<div class="col-md-5">
<h6> Ingredient </h6>
<ul type=square>
      <?php 
      foreach($data[0]->ingredientLines as $ingredient) 
        echo  "<li>".$ingredient."</li>"; 
      ?>
  </ul></div></div></div>
<div class="container">
<h6> Tags :  </h6>
      <?php 
      foreach($data[0]->healthLabels as $healthLabels) 
        echo  "<small class='p-1 small bg-dark text-white m-1' style='display:inline-block'>
         ".$healthLabels."  </small> "; 
      ?>
</div>
<div class="row pt-3 justify-content-center">
<div class="col-md-8 pt-2">
<table class="table table-sm">
  <h5>Nutriention Information </h5>
  <tr><th>Label</th>
  	<th>Total value</th>
  	<th>Daily Requirement</th>
  	<th>Unit</th>
  </tr>
<?php 
foreach ($data[0]->digest as $digest) {?>
  <tr>
  <th><?php echo $digest->label; ?></th>
  <td><?php echo round($digest->total,2); ?></td>
  <td><?php echo round($digest->daily,2); ?></td>
  <td><?php echo $digest->unit; ?></td>
</tr>

<?php } ?>

</table>

</div>

</div>
</div>


	
</div>		
<?php include 'footer.php' ?>