<?php
$name = "Lyon";
$fart = false;
?>

hello <?= $name ?>
<br />
my name is 
<?
if ($fart)
{
	$fart = false;
	echo "fanny<br />";
}
else
{
	$fart = true;
	echo "Tommas<br />";
}


?>
