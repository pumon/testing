<!DOCTYPE html>
<html>
<head>
	<title>TEST</title>
</head>
<body>
	<form>
		<select name="" id="maker" oninput="myFunction(event)">
			<option disabled selected>Maker</option>
			<?php
				$conn = new mysqli('localhost','root','1421','test');

				$sql="SELECT maker_name FROM tbl_car_maker";
				$result=$conn->query($sql);
				while ($row=$result->fetch_assoc()) {
					echo "<option value=\"".$row['maker_name']."\">".$row['maker_name']."</option>";
				}
			?>
		</select> <br>
		<select name="" id="model" oninput="myFunction(event)">
			<option disabled selected>Model</option>
			
		</select><br>
		<select name="" id="part" oninput="myFunction(event)">
			<option disabled selected>Parts</option>
		</select><br>
		<select name="" id="year" oninput="myFunction(event)">
			<option disabled selected>Year</option>
		<select><br>
	</form>
</body>
</html>