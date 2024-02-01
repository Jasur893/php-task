<?php
require_once '../config/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_products_submit'])) {

    $name = $info = $price = "";

    $name =  $_POST['name'];
    $info = $_POST['info'];
    $price = $_POST['price'];
    $photo = $_FILES['photo']['name'];

    function validate_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate_input($name);
    $info = validate_input($info);
    $price = validate_input($price);

    if(mb_strlen($name) < 5 || mb_strlen($name) > 100 || !preg_match("/^.{5,100}[.|,|%|'|&|*|)|(]?$/", $name)) {
        echo "mahsulot sonlar, harflar va 5 ko'p, 100 kam bo'lishi kerak belgilar  . & * % , . ) ( '  ";
        exit();
    }


    if(mb_strlen($info) < 15 || mb_strlen($info) > 1024) {
        echo "mahsulot haqida 15 ko'p, 1024 kam bo'lishi kerak";
        exit();
    }
//
    if(mb_strlen($price) < 0 || preg_match("/^\D$/", $name)) {
        echo "mahsulot narxi kamida 0 qiymat bo'lishi va undan katta bo'lishi";
        exit();
    }

    $allowed_extension = array('png', 'jpg', 'jpeg');
    $file_extension = pathinfo($photo, PATHINFO_EXTENSION);
    $filename = time() . '.' .$file_extension;

    if(!in_array($file_extension, $allowed_extension, true)){
        echo "Sizga faqat jpg, png, jpeg rasmlar kengligi ruxsat etiladi";
        exit(0);
    } else {
        $result = Products::addProducts($name, $info, $price, $filename);

        if($result === true){
            move_uploaded_file($_FILES['photo']['tmp_name'], '../uploads/products/'.$filename);
        } else {
            echo 'Fayl yuklanmadi';
        }
        header("Location: /");
    }
}
