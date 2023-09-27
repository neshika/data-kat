<?php
include_once "settings.php";

// Обращаемся к таблице tbl_name

$_POST['today'] = date('Y-m-d');

$statement = $pdo->prepare("INSERT INTO $name_tbl (today,text1,text2,text3,num) VALUES (:today,:text1,:text2,:text3,:num)");
$statement->execute($_POST);

header('Location:/index.php');


?>
