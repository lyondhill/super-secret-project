<?php
$name = "Lyon";
$fart = false;
?>
<h1>WHAT</h1>
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
