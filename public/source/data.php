<?php
 	// require("connect.php");
	include "connect.php";
	$key = $_POST['id'];
	$sql = "select * from quan_huyen where id_category = '$key'";
	$query = $con->query($sql);
	$num = mysqli_num_rows($query);
	if($num > 0){
		while($row = mysqli_fetch_array($query)){
?>
	<option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
<?php
		}
	}
?>