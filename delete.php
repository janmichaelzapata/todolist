<?php 
$id = $_POST['id'];

$todos = file_get_contents('assets/todos.json');
$todos = json_decode($todos, true);

//delete task from the array $todos
array_splice($todos, $id, 1);
// var_dump($todos);
// echo $id;

	$file = fopen('assets/todos.json', 'w');
	fwrite($file, json_encode($todos, JSON_PRETTY_PRINT));
	fclose($file);

 ?>