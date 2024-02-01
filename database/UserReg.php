<?php
require_once '../config/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register_submit'])) {

    $login = $ism = $parol = "";

    $login =  $_POST['login'];
    $ism = $_POST['ism'];
    $parol = $_POST['parol'];

    function validate_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    $login = validate_input($login);
    $ism = validate_input($ism);
    $parol = validate_input($parol);

    if(isset($_POST['check']) === false) {
        echo "Shartlarga rozi emassiz!";
        exit();
    }

    if(mb_strlen($login) < 5 || mb_strlen($login) > 50 || !preg_match("/^[a-zA-Z0-9]{5,50}$/", $login)) {
        echo "login uzunligi noto‘g‘ri 5 dan katta va 50 kam, faqat alifbo va sonlar ruxsat";
        exit();
    }

    echo 'Next';

    if(mb_strlen($ism) < 2 || mb_strlen($ism) > 32) {
        echo "ism uzunligi noto‘g‘ri 2 dan katta va 32 kam bo'lishi kerak";
        exit();
    }
    if(mb_strlen($parol) < 8 || mb_strlen($parol) > 64 || !preg_match("/^[a-zA-Z\S]{8,32}+$/", $parol)) {
        echo "parol uzunligi noto‘g‘ri 8 dan katta va 64 kam bo'lishi, kamida bitta Katta va Kichik harf, kamida bitta belgi bo'lishi";
        exit();
    }

    if(isset($_POST['check'])){
       $result = Auth::userReg($login, $ism, $parol) ? header("Location: /?page=registration&dublicate=true") : header("Location: /?page=login");
    }
}



