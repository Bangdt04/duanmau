<?php
include "../view/header.php";
if(isset($_GET['act'])&&($_GET['act'])!=0){
    $act = $_GET['act'];
switch ($act) {
    case 'gioithieu':
        include "gioithieu.php";
        break;
case 'lienhe':
    include "lienhe.php";
    break; 
    default : 
    include "home.php";
    break;
}
}else{
include "../view/home.php";
}
include "../view/footer.php";
?>