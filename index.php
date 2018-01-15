<?php

 $todos = file_get_contents('assets/todos.json');
 $todos = json_decode($todos, true);
 // var_dump($todos);
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>PHP To-Do List</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="https://use.fontawesome.com/5051be9f40.js"></script>
</head>
<body>
<div id="container">
		<header>
		<h1 style="font-size: 3em;">To-Do List</h1>
		<input id="newTask" type="text" placeholder="Add New Task">
		</header>
	<main>
		
	<ul>
		<?php 
			foreach ($todos as $key => $todo) {
				if ($todo['done'] == false) // task not completed
					echo '<li id="' .$key. '"><span><i class="fa fa-trash"></i>  </span>'.$todo['task'].'</li><br>';
				else //task completed
					echo '<li id="' .$key. '" class="completed"><span><i class="fa fa-trash"></i></span>'.$todo['task'].'</li><br>';
			}	
		 ?>
	</ul>
	</main>
</div>




<script type="text/javascript" src="assets/lib/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/todos.js"></script>
</body>
</html>