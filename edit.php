<?php

include ('header.php');
include ('config.php');

if(isset($_GET['id'])) {
	$id = $_GET['id'];
	if(isset($_POST['submit'])) {
		$name = $_POST['name'];
		$age = $_POST['age'];
		$queryEdit = mysql_query("UPDATE persoon SET naam = '$name', leeftijd = '$age' WHERE id='$id'");
		if (queryEdit) {
			header('location: list.php');
		}
	}
}

$querySelect = mysql_query("SELECT * FROM persoon where id ='$id'");
$queryFetch = mysql_fetch_array($querySelect);

?>

<form action="#" method="post">
	Username: <input type="text" name="name" value="<?php echo $queryFetch['naam'];?>"><br>
	Age <input type="text" name="age" value ="<?php echo $queryFetch['leeftijd'];?>"> <br>
	<br>
	<input type="submit" name="submit" value="update">
</form>