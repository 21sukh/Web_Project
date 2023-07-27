<?php include 'header.php'; ?>
<script>
function delRec(aid){
	if(confirm("Click ok to Delete Record"))
		window.location='dietplans.php?d='+aid;
}
  </script>
<div class="card-header ">
    <h4 class="card-title"> All Diet Plans </h4>
 </div>
<div class="card-body">
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th> Image </th>
					<th> Content </th>
					<th> Meal Plan </th>
					<th> Topics </th>
					<th> Action	</th>
				</thead>
				<tbody>					
		<?php 
		$sql="select * from dietplan";
		$result=$conn->query($sql);
		while($row=$result->fetch_assoc()){
			$aid=$row['dietId'];
			echo "<tr>";
			echo "<td><img src='".$row['diet_image']."' width='70px' height='70px'></td>";

		echo "<td class='w-50'><strong>".$row['diet_title']."</strong><p> 
		".substr(strip_tags($row['diet_content']),0,200)." ...</p></td>";

		   echo "<td> <a href='meal.php?dietid=$aid' class='text-decoration-none text-info'><i class='icofont-plus'></i></a>
		   <a href='mealplans.php?dietid=$aid' class='text-decoration-none text-info'><i class='icofont-list'></i></a></td>";

		    echo "<td> <a href='planinfo.php?dietid=$aid' class='text-decoration-none text-info'><i class='icofont-plus'></i></a>
		   <a href='plantopics.php?dietid=$aid' class='text-decoration-none text-info'><i class='icofont-list'></i></a></td>";

			echo "<td> <a href='#' onclick='delRec($aid)' class='text-decoration-none text-danger pt-2'><i class='icofont-trash'></i></a></td>";
			echo "</tr>";
		}
		?>
			
					
				</tbody>
			</table>
			<?php 

		if(isset($_GET['d'])){
			$sql="DELETE from dietplan where dietId='$_GET[d]'";
			 if($conn->query($sql)){
			 	echo "<script>window.alert('Record Deleted ');window.location='dietplans.php';</script>";
			 }
			 else{
			 	echo "<div class='alert alert-danger'> Error In Code ".$conn->error."</div>";
			 }

		}
			?>
</div></div></div>

<?php include 'footer.php'; ?>