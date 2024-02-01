<?php
require_once '../config/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['autentification_submit'] )) {

    $login = $_POST['login'];
    $parol = $_POST['parol'];
    Auth::userAuth($login, $parol);
}
header("Location: /");
