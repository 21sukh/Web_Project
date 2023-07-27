<?php include 'header.php'; ?>
<div class="card-header ">
    <h4 class="card-title">All Users </h4>
 </div>
 
<div class="card-body">

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
					<th> Name </th>
					<th> Email Id	</th>
					<th> Info	</th>
					<th> Registeration Date	</th>
				</tr>
				</thead>
				<tbody>
					
		<?php 
		$sql="select * from users";
		$result=$conn->query($sql);
		while($row=$result->fetch_assoc()){
			$aid=$row['userid'];
			echo "<tr>";
echo "<td>".$row['firstName']." ".$row['lastName']."</td>"; 
echo "<td>".$row['emailId']."</td>"; 
echo "<td>".$row['gender']."(".$row['age'].")</td>"; 
echo "<td>".$row['regDate']."</td>"; 
		
			echo "</tr>";
		}
		?>
			
					
				</tbody>
			</table>
		
</div></div></div>

<?php include 'footer.php'; ?>