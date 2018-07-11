<?php

if($_GET["page"]=="home") {
    require_once("home.php");
}
elseif ($_GET["page"]=="basket"){
    require_once("basket.php");
}
elseif ($_GET["page"]=="more") {
    require_once("more.php");
}
else{
    require_once("404.php");
}




?>