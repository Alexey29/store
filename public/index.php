<?php //require_once("../resurses/header.php"); ?>

<?php //require_once("../resurses/content.php");

spl_autoload_register(function ($classname){
    include "../app/classes/".$classname.".php";
});

$obj = new Routers();



?>

<?php //require_once("../resurses/footer.php"); ?>


