<?php 
$link = mysqli_connect('127.0.0.1', 'root', '12345678');
if (!$link) {
	die('Error:' . mysqli_error());
}
echo 'Good!';
mysqli_close($link);
?>
