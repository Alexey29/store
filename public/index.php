<?php //require_once ("../vendor/autoload.php");
//require_once("../resurses/header.php");

//require_once("../resurses/content.php");

//spl_autoload_register(function ($classname){
//    include "../app/classes/".$classname.".php";
//});
//require_once "app/classes";
//use Store\classes\Application;
//use Monolog\Logger;
//use Store\classes\ConrtollerPages;?>

<?php require_once "resurses/header.php";?>


<?php

require_once "../src/classes/Router/Routers.php";
require_once "../src/classes/Controllers/ControllerPages.php";


require_once "../src/classes/Models/ModelHome.php";
require_once "../src/classes/Views/ViewHome.php";


require_once "../src/classes/Models/ModelBasket.php";
require_once "../src/classes/Views/ViewBasket.php";


require_once "../src/classes/Models/ModelMore.php";
require_once "../src/classes/Views/ViewMore.php";


//use classes\ControllerPages;
use classes\Routers;

$obj = new Routers();

//$obj = new app\classes\Routers();
$obj->run();



?>

<?php require_once("resurses/footer.php"); ?>


