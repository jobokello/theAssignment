<!DOCTYPE html>
<html>
	<head>
		<title>create subject</title>
		<style>
			div.id {
				width: 40%;
				background: orange;
			}
		</style>
	</head>
<div id="main">
  <div id="navigation">
		<?php //echo navigation($current_subject, $current_page); ?>
  </div>
  <div id="page">
		<h2>Create Subject</h2>
		<form action="create_subject.php" method="post">
			<label for="menu_name">Menu name:</label>
			<input type="text" id="menu_name" name="menu_name"><br>
			<label for="position">Position:</label>
			<select name="position" id="position">
				<?php 
					$connection = mysqli_connect("localhost", "csc316_student", "secretpassword", "widget_corp");
					if (mysqli_connect_errno()) {
						echo "Database connection failed.";
					}
					$query = "SELECT * FROM subjects;";
					$result = mysqli_query($connection, $query);
					if ($result) {
						$row = mysqli_num_rows($result);
						for ($i = 1; $i <= $row + 1; $i++) {
							echo "<option value=".$i.">".$i."</option>";
						}
					}
					
				?>
			</select>
			<br>
			<label for="visible">Visible:</label>
			<input type="radio" id="visible" name="visible">yes</input>
			<input type="radio" name="visible">no</input>
			<br>
			<button type="submit">Create Subject</button>

		</form>
		
		<br />
		<a href="manage_content.php">Cancel</a>
	</div>
</div>

</html>
