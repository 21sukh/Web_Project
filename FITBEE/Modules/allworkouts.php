<?php include 'header.php'; ?>
<div class="card-header ">
    <h4 class="card-title">All Exercises </h4>
 </div>
 <script>
function delRec(aid){
	if(confirm("Click ok to Delete Record"))
		window.location='allworkouts.php?d='+aid;
}

  </script>
<div class="card-body">

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th> Image </th>
					<th> Content </th>
					<th> Action	</th>
				</thead>
				<tbody>
					
		<?php 
		$sql="select * from workout";
		$result=$conn->query($sql);
		while($row=$result->fetch_assoc()){
			$aid=$row['workoutId'];
			echo "<tr>";
			echo "<td><img src='".$row['image']."' width='70px' height='70px'></td>";

		echo "<td><strong>".$row['title']."</strong><p> 
		".substr(strip_tags($row['content']),0,200)." ...</p>
		</td>";
		
			echo "<td> <a href='#' onclick='delRec($aid)' class='text-decoration-none text-danger'><i class='icofont-trash'></i></a></td>";
			echo "</tr>";
		}
		?>
			
					
				</tbody>
			</table>
			<?php 

		if(isset($_GET['d'])){
			$sql="DELETE from workout where workoutid='$_GET[d]'";
			 if($conn->query($sql)){
			 	echo "<script>window.alert('Record Deleted ');window.location='allworkouts.php';</script>";
			 }
			 else{
			 	echo "<div class='alert alert-danger'> Error In Code ".$conn->error."</div>";
			 }

		}
			?>
</div></div></div>

<?php include 'footer.php'; ?>