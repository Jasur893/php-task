<?php
define('PROJECT_ROOT_PATH', __DIR__);
$page = $_GET["page"] ?? null;
include_once('./function.php');
include_once('./includes/header.php');
 if (isset($arrPages[$page])) {
     include("./page/$page.php");
 }elseif($page === null){
     include_once("./page/home.php");
 }else{
     include_once("./page/404.php");
 }
include_once('./includes/footer.php');

