<!---->
<!--//-->
<!--//var_dump(session_name());-->
<!--//-->
<!--//var_dump(session_id());-->
<!---->
<!--//phpinfo();-->
<!---->
<!--//if(!isset($_SESSION["time"])){-->
<!--//    $_SESSION["ua"]=$_SERVER["HTTP_USER_AGENT"];-->
<!--//    $_SESSION["time"]=date("H:i:s");-->
<!--//}-->
<!--//-->
<!--//if($_SESSION["ua"]!=$_SERVER["HTTP_USER_AGENT"]){-->
<!--//    die("wrong browser");-->
<!--//}-->
<!---->
<!--//$_SESSION["time"]=10;-->
<!--//-->
<!--//$_SESSION["ua"]=20;-->
<!--//-->
<!--////-->
<!--////unset($_SESSION["time"]);-->
<!--////unset($_SESSION["ua"]);-->
<!--////-->
<!--//$_SESSION=array();-->
<!--//var_dump(session_save_path());-->
<!---->
<!--//session_save_path("/home/NIX/phpuser/stor/test");-->
<!---->
<!--//session_start();-->
<!--//-->
<!--////var_dump(session_get_cookie_params());-->
<!--//$lifeTime=5;-->
<!--//session_set_cookie_params($lifeTime);-->
<!--//var_dump($lifeTime);-->
<!--//session_start();-->
<!--//var_dump(session_get_cookie_params());-->

<!--<form action="session2.php" method="post">-->
<!---->
<!--    <div class="input-group">-->
<!--        <span class="input-group-addon" id="basic-addon1">@</span>-->
<!--        <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="email">-->
<!--    </div>-->
<!--    <br><br>-->
<!---->
<!--    <div class="input-group">-->
<!--        <span class="input-group-addon">$</span>-->
<!--        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="passvord">-->
<!--        <span class="input-group-addon">.00</span>-->
<!--    </div>-->
<!--    <button type="submit">Submit</button>-->
<!--</form>-->

<?php


$A = new Authentication();

if($A->isAuth()){
    echo $A->getlogin();
}else{
    $A->auth();
}
//echo $A->getlogin();
//$A->logout();



Class Authentication{
    private $UserNaim;

    private $login;

    public function __construct()
    {
        $this->UserNaim = "user";
        $this->login = "login";
    }


     public function isAuth(){
        if(isset($_SESSION["user"])&&isset($_SESSION["login"])){
            return true;
        }else{
            return false;
        }
     }


     public function auth(){
        try {
            if ($this->isAuth()) {
                throw new Exception("you are already authorized!");
        } else{
                session_start();
               $_SESSION["user"] = $this->UserNaim;
               $_SESSION["login"] = $this->login;
        }
        }catch (Exception $e){
            echo $e->getMessage();
        }
     }

     public function getlogin(){
        try {
            if (!($this->isAuth())) {
                return $_SESSION["login"];
            } else {
                throw new Exception("you are't authorized!");

            }
        }catch (Exception $e){
            echo $e->getMessage();
        }
     }

     public function logout(){
        try{
            if(!($this->isAuth())){
                throw new Exception("you are't authorized!");
            }else{
                $_SESSION=array();
            }
        }catch (Exception $e){
            echo $e->getMessage();
        }

     }
}