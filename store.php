<?php
	include 'includes/connection.php';
	insert_into_db($_POST['things_form'], $_POST['day_form'], $connection);
	header('Location: http://notebook.ua/index.php');
?>