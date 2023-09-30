<?php
include_once "settings.php";

session_unset();
unset($_SESSION['login']);

header('Location:/index.php');
