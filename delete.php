<?php	include ("include/dbconnect.php");
	include ("include/format.inc.php");
	echo "<title>Delete</title>";
	include ("include/header.inc.php");

	echo '<h1>Delete record</h1>';

	$sql="SELECT * FROM $base_from_where AND $table.id=$id";
	$result = mysqli_query($db, $sql);
	$resultsnumber = mysqli_num_rows($result);

	if($resultsnumber > 0) {
		mysqli_query($db, "DELETE FROM $table_grp_adr WHERE id='$id'");
		mysqli_query($db, "DELETE FROM $table         WHERE id='$id'");
		echo "<br /><div class='msgbox'>Record has been deleted from the address book.<br /><i>return to <a href='index.php'>home page</a></i></div>";
	} else {
		echo "<br /><div class='msgbox'>Invalid record, sorry but the record no longer exsists<br /><i>return to <a href='index.php'>home page</a></i></div>";	
	}
	include ("include/footer.inc.php");
?>
