<?php
 	// requiresource/("connect.php");
	// include "connect.php";
	$con = mysqli_connect("localhost","root","","htnbabylove");
	mysqli_set_charset($con, 'UTF8');

	// Check connection
	if (mysqli_connect_error())
	{
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$key = $_POST['id'];
	$sql = "select * from districts where id_city = '$key'";
	$query = $con->query($sql);
	$num = mysqli_num_rows($query);
	if($num > 0){
		while($row = mysqli_fetch_array($query)){
?>
	<option value="<?php echo $row['id']; ?> "><?php echo $row['name']; ?></option>
<?php
		}
	}
?>