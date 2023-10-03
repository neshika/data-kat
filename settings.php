<?php
$user = 'root'; // ваш пользователь
$password = ''; // ваш пароль
$db = 'mydb'; // имя вашей базы данных 
$host = 'localhost'; // локальный хост
$charset = 'utf8'; // нужная кодировка
$name_tbl = 'tbl_name'; //имя таблицы
$login = '';
$password = '';



// подключаемся

try {
	$pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $password);

} catch (PDOException $e) {
	die($e->getMessage());
}

session_start();

if(!empty($_POST['login'])){

    if( ($_POST['login'] == $login) && ($_POST['pwd'] == $pwd) ){
        $_SESSION['login'] = $_POST['login'];
    }
}

?>