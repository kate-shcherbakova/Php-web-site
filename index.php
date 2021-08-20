<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>notebook</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="includes/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php 
		include 'includes/connection.php';
	 ?>

	 <br>
	 <form method="POST" action="/index.php">
		 <div class="row justify-content-center">
		 	<div class="form-row text-center">
			    <div class="col">
			    	<label for="things_form" class="form-label">Напишите, что нужно сделать</label>
			        <textarea class="form-control" name="things_form" rows="2" cols="60"></textarea>
			    </div>
			    <div class="col">
			    	<label for="day_form" class="form-label">Укажите день недели</label>
			    	<select class="my-form-select" aria-label="Default select example" name="day_form">
					  <option selected value="ПН">ПН</option>
					  <option value="ВТ">ВТ</option>
					  <option value="СР">СР</option>
					  <option value="ЧТ">ЧТ</option>
					  <option value="ПТ">ПТ</option>
					  <option value="СБ">СБ</option>
					  <option value="ВС">ВС</option>
					</select>
			    </div>
			    <div class="col my-auto">
			        <button type="submit" class="btn btn-primary form-control" style="float: left; width: 180px; margin-top: .5rem;">Добавить</button>
		    	</div>
	    	</div>
		 </div>
	 </form>

	 <br>

	 <table class="table table-bordered table-striped">
	  <thead>
	    <tr>
	      <th scope="col"></th>
	      <th scope="col">День недели</th>
	      <th scope="col">Что нужно сделать?</th>
	    </tr>
	  </thead>

	  <tbody>
	  	<?php
	  		$count = 1;
			while($i = mysqli_fetch_assoc($from_to_do))
			{
	  		 	echo 
	  		 		"<tr>
	      			<th scope='row'>{$count}</th>
	      			<td>{$i['day']}</td>
	      			<td>{$i['things']}</td>
	    			</tr>";
	    		$count++;
	  		 } 
	  	 ?>
	  </tbody>
	</table>

	<?php
		insert_into_db($_POST['things_form'], $_POST['day_form'], $connection);
	?>
</body>

</html>