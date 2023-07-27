<?php include 'header.php'; ?>
<script>
function delRec(aid){
	if(confirm("Click ok to Delete Record"))
		window.location='plantopics.php?d='+aid;
}
  </script>
<div class="card-header ">
    <h4 class="card-title"> All Topics </h4>
 </div>
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
		$sql="select * from planinfo where dietId='$_GET[dietid]'";
		$result=$conn->query($sql);
		while($row=$result->fetch_assoc()){
			$aid=$row['planId'];
			echo "<tr>";
			echo "<td><img src='".$row['plan_image']."' width='70px' height='70px'></td>";

		echo "<td><strong>".$row['plan_title']."</strong><p> 
		".substr(strip_tags($row['plan_content']),0,200)."</p></td>";
		
			echo "<td> <a href='#' onclick='delRec($aid)' class='text-decoration-none text-danger'><i class='icofont-trash'></i></a></td>";
			echo "</tr>";
		}
		?>
			
					
				</tbody>
			</table>
			<?php 

		if(isset($_GET['d'])){
			$sql="DELETE from planinfo where planId='$_GET[d]'";
			 if($conn->query($sql)){
			 	echo "<script>window.alert('Record Deleted ');window.location='plantopics.php';</script>";
			 }
			 else{
			 	echo "<div class='alert alert-danger'> Error In Code ".$conn->error."</div>";
			 }

		}
			?>
</div></div></div>

<?php include 'footer.php'; ?>