<?php

include ('header.php');
include ('config.php');

$querySelect = mysql_query("SELECT * FROM persoon");

echo "<table><tr><td>Username</td><td>Age</td><td></td><td></td>";

while ($queryFetch = mysql_fetch_array($querySelect)) {
	echo "<tr><td>".$queryFetch['naam']."</td>";
	echo "<td>".$queryFetch['leeftijd']."</td>";
	echo "<td><a href='edit.php?id=".$queryFetch['id']."'>Edit</a></td>";
	echo "<td><a href='delete.php?id=".$queryFetch['id']."'>Delete</a></td><tr>";
}
?>
</table>

<p><a href="add.php">Voeg gebruiker toe</a></p>