<?php
session_start();
$dsn = 'mysql:host=localhost;dbname=forumgroupe1';
$user = 'root';
$pass = '';

$pdo = new PDO(
	$dsn,
	$user,
	$pass
);

$pdo->query('INSERT INTO messages(creation, creatorId, topicId, message) VALUES(NOW(),"' .$_SESSION['user']['id']. '","'.$_GET['id'].'", "' .$_POST['message']. '");');

header('Location: article.php?id=<?=$result[0]['id']?>');