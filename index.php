<?php 
include_once 'setting.php';
session_start();
$CONNECT = mysqli_connect(HOST, USER, PASS, DB);

if ($CONNECT) echo 'ОК';
else echo 'ERROR';


if ($_SERVER['REQUEST_URI'] == '/') {
    $Page = 'index';
    $Module = 'index';
    } else {
    $URL_Path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $URL_Parts = explode('/', trim($URL_Path, ' /'));
    $Page = array_shift($URL_Parts);
    $Module = array_shift($URL_Parts);
     
     
    if (!empty($Module)) {
    $Param = array();
    for ($i = 0; $i < count($URL_Parts); $i++) {
    $Param[$URL_Parts[$i]] = $URL_Parts[++$i];
    }
    }
    }





     
if ($Page == 'index') include('page/index.php');
else if ($Page == 'login') include('page/login.php');
else if ($Page == 'register') include('page/register.php');
 
else if ($Page == 'account') include('form/account.php');
 

function FormChars ($p1) {
return nl2br(htmlspecialchars(trim($p1), ENT_QUOTES), false);
} 

function GenPass ($p1, $p2) {
    return md5('YFNRKTDKFJKF'.md5('321'.$p1.'123').md5('678'.$p2.'890'));
    }

function Head($p1){
echo'<!DOCTYPE html><html lang="ru"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=10"><title>'.$p1.'</title>    <link rel="stylesheet" href="css/style.css"></head><body><div class="content-wrapper"><header class="header"><p style="font-size: 30px; margin: 0; padding: 10px;">Header</p></header><div class="container clearfix"><main class="content"><!-- for-example --><p style="text-align: center;">Hello, html!</p></main></div></div></body></html>';
}
?>