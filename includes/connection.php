<?php
	$connection = mysqli_connect('127.0.0.1', 'root', '', 'notebook_db');

	if($connection == false)
	{
		echo 'Не удалось подключиться к базе данных :(';
		echo mysqli_connect_error();
		exit();
	}
	
	$from_to_do = mysqli_query($connection, "SELECT * FROM `to_do`");

	function insert_into_db($things, $day, $connection)
	{
		if ($things)
		{
			mysqli_query($connection, "INSERT INTO `to_do`(`things`, `day`) VALUES ('$things', '$day')");	
		}
	}

?>
