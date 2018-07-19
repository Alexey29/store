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

<?php //require_once "resurses/header.php";?>


<?php

require_once "../src/classes/Router/Routers.php";
require_once "../src/classes/Authorization/Authorization.php";
require_once "../src/classes/Session/Session.php";


require_once "../src/classes/Controllers/ControllerHome.php";
require_once "../src/classes/Models/ModelHome.php";
require_once "../src/classes/Views/ViewHome.php";

require_once "../src/classes/Controllers/ControllerBasket.php";
require_once "../src/classes/Models/ModelBasket.php";
require_once "../src/classes/Views/ViewBasket.php";

require_once "../src/classes/Controllers/ControllerMore.php";
require_once "../src/classes/Models/ModelMore.php";
require_once "../src/classes/Views/ViewMore.php";

require_once "../src/classes/Controllers/ControllerLogin.php";
require_once "../src/classes/Models/ModelLogin.php";

require_once "../src/classes/Controllers/ControllerPageNotFound.php";
require_once "../src/classes/Views/ViewPageNotFound.php";

require_once "../src/classes/Controllers/ControllerLogout.php";
require_once "../src/classes/Models/ModelLogout.php";

require_once "../src/classes/Controllers/ControllerRegistration.php";
require_once "../src/classes/Models/ModelRegistration.php";

require_once "../src/classes/Controllers/ControllerAddProduct.php";
require_once "../src/classes/Models/ModelAddProduct.php";


require_once "../src/classes/ActiveRecord/ActiveRecord.php";
require_once "../src/classes/ActiveRecord/ARUsers.php";
require_once "../src/classes/ActiveRecord/ARBooks.php";
require_once "../src/classes/ActiveRecord/ARAuthors.php";
require_once "../src/classes/ActiveRecord/ARBook_authors.php";
require_once "../src/classes/ActiveRecord/ARComments.php";

//require "../src/classes/ActiveRecord/DB.php";



//use classes\ControllerPages;
use classes\Routers;

$obj = new Routers();

//$obj = new app\classes\Routers();
$obj->run();



?>

<?php //require_once("resurses/footer.php"); ?>


