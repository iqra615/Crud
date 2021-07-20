<?php  include 'header.php'?>
<div id="main-Content">
	<h2>Registration Form</h2>
	<form class="test-form" action="registered.php" method="post">
		
		<div class="crud-form"><br>
			<input type="text" name="sname" placeholder="Name">

		</div>
		<div class="crud-form"><br>
			<input type="text" name="saddress" placeholder="Address">
		</div>

		<div class="crud-form"><br>
			<select name="class">
				<option value="" selected disabled>Select Class</option>
				<option value="1">BSCS</option>
				<option value="2">Medical</option>
				<option value="3">Management</option>
			</select>

		</div>

		<div class="crud-form"><br>
			<input type="text" name="sphone">
			
		</div>
		<input class="submit" name="submit" type="submit" value="Submit"><br>
	
</div>
</form>
