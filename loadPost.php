<?php

include './handler.php';

$q = $handler->prepare('SELECT * FROM post');
$q->execute();
$res = $q->fetchAll(PDO::FETCH_OBJ);

$len = sizeOf($res);
for($i = $len-1; $i >= 0; $i--){
	echo '<blockquote class="alert-info">';
	echo '<p>'.$res[$i]->post.'</p>';
	echo '<footer>';
	echo 'posted by : '.$res[$i]->user;
	echo ' on '.$res[$i]->time;
	echo '</footer>';
	echo '</blockquote>';
}