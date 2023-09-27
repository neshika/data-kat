<?php
include_once "settings.php";

$_POST['today'] = date('Y-m-d');
$sql = "UPDATE $name_tbl SET today=:today, text1=:text1, text2=:text2, text3=:text3, num=:num WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement->execute($_POST);

header('Location:/index.php');

?>