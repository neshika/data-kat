<?php

if(isset($_POST['login'])){

    if( ($_POST['login'] == $login) && ($_POST['pwd'] == $pwd) ){
        $_SESSION['login'] = $_POST['login'];
    }

var_dump($_SESSION['login']);

}

if (isset($_POST['auth_name']))
{
    $sql = "SELECT * FROM users WHERE name=?s";
    $row = $db->getRow($sql, $_POST['auth_name']);
    if ($row && password_verify($_POST['auth_pass'], $row['pass'])) {
        $_SESSION['user_id'] = $row['id'];
    }
    header("Location: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    exit;
}

if (isset($_GET['action']) AND $_GET['action']=="logout") {
    session_start();
    session_destroy();
    header("Location: http://".$_SERVER['HTTP_HOST']."/");
    exit;
}

if (!isset($_SESSION['user_id'])) {
?>
<form method="POST">
<input type="text" name="auth_name"><br>
<input type="password" name="auth_pass"><br>
<input type="submit">
</form>
<? 
exit;
} 

?>