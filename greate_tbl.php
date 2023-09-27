<?php
include_once "settings.php";


$statements = [
                "CREATE TABLE IF NOT EXISTS $name_tbl
                (
                    id INT PRIMARY KEY AUTO_INCREMENT,
                    today Date, 
                    text1 VARCHAR(255),
                    text2 VARCHAR(255),  
                    text3 VARCHAR(255),  
                    num INT
                );",
];

var_dump($pdo);

foreach($statements as $statement){
    $pdo->exec($statement);
}

$date = date('Y-m-d');
$sql = "INSERT INTO $name_tbl (today) VALUES (:today)";
$statement = $pdo->prepare($sql);
$statement->bindValue(':today', $date);

$statement->execute();

header('Location:/index.php');

?>
