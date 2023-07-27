<?php include 'header.php'; ?>
<div class="card-header ">
    <h4 class="card-title">All Reviews </h4>
 </div>
 
<div class="card-body">

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
				<th> Review </th>
					<th> Review By	</th>
					<th> Review Date	</th>
			
				</tr>
				</thead>
				<tbody>
					
		<?php 
		$sql="select * from feedback,users where users.userid=feedback.userId;";
		$result=$conn->query($sql);
		while($row=$result->fetch_assoc()){
			$aid=$row['userid'];
			echo "<tr>";
echo "<td>".$row['feedback']."</td>"; 
echo "<td>".$row['emailId']."</td>"; 
echo "<td>".$row['feedbackDate']."</td>"; 
		
			echo "</tr>";
		}
		?>
			
					
				</tbody>
			</table>
		
</div></div></div>

<?php include 'footer.php'; ?>