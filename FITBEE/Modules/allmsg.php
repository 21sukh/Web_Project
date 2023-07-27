<?php include 'header.php'; ?>
<div class="card-header ">
    <h4 class="card-title">All Messages </h4>
 </div>
 
<div class="card-body">

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
					<th> Message </th>
					<th> Message by	</th>
				</tr>
				</thead>
				<tbody>
					
		<?php 
		$sql="select * from contact";
		$result=$conn->query($sql);
		while($row=$result->fetch_assoc()){
			$aid=$row['msgid'];
			echo "<tr>";
echo "<td><strong>".$row['msg']."</strong> 
		<p> <i class='icofont-calendar text-info'></i> Added Date : ".$row['msgDate']."</p></td>";
		echo "<td><p>".$row['name']."
		</p> <p><i class='icofont-email text-info'></i>".$row['emailId']."</p><p><i class='icofont-phone text-info'></i>".$row['phnNo']."</p></td>";
			echo "</tr>";
		}
		?>
			
					
				</tbody>
			</table>
		
</div></div></div>

<?php include 'footer.php'; ?>