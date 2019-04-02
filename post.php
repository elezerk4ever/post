<?php 

include './handler.php';

$name = $_POST['name'];
$msg = $_POST['post'];

if(!isset($name) && !isset($msg)) header('Location: ./msg.html');
else{
	$q = $handler->prepare('INSERT INTO post(user,post) VALUE(?,?);');
	$q->execute([$name,$msg]);
}