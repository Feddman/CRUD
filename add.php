<?php
include ('header.php');
include ('config.php');

if(isset($_POST['submit'])) {

	$name=mysql_real_escape_string($_POST['name']);
	$age=mysql_real_escape_string($_POST['age']);

	$queryInsert = mysql_query("INSERT INTO persoon VALUES('', '$name', '$age')");
	echo "insert into persoon values ('', '$name', '$age')";

	if($queryInsert) {
		header("location: list.php");
	}

}

?>

<fieldset>
	<form action="#" method="post">
		Username: <input type="text" name="name"><br>
		Age: <input type="text" name="age"><br>
		<br>
		<input type="submit" name="submit">
	</form>
</fieldset>