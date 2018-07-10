<?php require_once ("../vendor/autoload.php");
//require_once("../resurses/header.php"); ?>

<?php //require_once("../resurses/content.php");

//spl_autoload_register(function ($classname){
//    include "../app/classes/".$classname.".php";
//});

use Store\classes\Application;
//use Monolog\Logger;



$obj = new Routers();
$n = new Application();


?>

<?php //require_once("../resurses/footer.php"); ?>


