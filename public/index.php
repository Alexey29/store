<?php //require_once ("../vendor/autoload.php");
//require_once("../resurses/header.php"); ?>

<?php //require_once("../resurses/content.php");

//spl_autoload_register(function ($classname){
//    include "../app/classes/".$classname.".php";
//});
//require_once "app/classes";
//use Store\classes\Application;
//use Monolog\Logger;
//use Store\classes\ConrtollerPages;

require_once "classes/Routers.php";

//use app\classes;

$obj = new app\classes\Routers();

//$obj = new app\classes\Routers();
$obj->run();



?>

<?php //require_once("../resurses/footer.php"); ?>


