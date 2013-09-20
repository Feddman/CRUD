<?php 

include ('header.php');
include ('config.php');

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$queryDelete = mysql_query("DELETE FROM persoon WHERE id = '$id'");
	if ($queryDelete) {
	header ('location: list.php');
	}
}