
<?php include'header.php';
 ?>
<div id="main-Content">

	
	<h2>All Records</h2>
	<link rel="stylesheet" href="css/style.css">

	<?php  
	     $conn=mysqli_connect("localhost","root","","crud") or die("Connection Failed");

	     $sql="SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";
	     $result=mysqli_query($conn,$sql) or die("Query Unsuccessful.");

	     if (mysqli_num_rows($result) > 0 )
	     {
	 ?>
	<table cellpadding="8px">
		<table style="border: 3px solid black; margin-left: auto;margin-right:auto;border-collapse:separate;">
		<thead>
			   <th>ID</th>
			   <th>Name</th>
			  <th>Address</th>
			  <th>Class</th>
			  <th>Phone</th>
		     <th>ACTION</th>
		</thead>
		<tbody>
<?php 
	    while($row=mysqli_fetch_assoc($result)) {
	    

	?>
		<tr>
		<td><?php echo $row['sid'];?></td>
		<td><?php echo$row['sname'];?></td>
		<td><?php echo $row['saddress'];?></td>
		<td><?php echo $row['cname'];?></td>
		<td><?php echo $row['sphone'];?></td>
		<td>
			
			<a href='edit.php?id=<?php echo $row['sid'];?>'>Edit</a>
			<a href='delete.php'>Delete</a>
		</td>
		</tr>
	<?php }

	?>
	</tbody>	
	</table>
    <?php }else{
		echo "<h2>No Record Found</h2>";
	} 
 
mysqli_close($conn);
     ?>
</div>
</div>
</body>
</html>