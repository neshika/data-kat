
<?php
include_once "settings.php";


$sql = "DELETE FROM $name_tbl WHERE id = :id" ;  
$statement = $pdo->prepare($sql);
$statement->execute($_GET);

header('Location:/index.php');

?>