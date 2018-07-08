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
<!--<div class="input-group">-->
<!--  <span class="input-group-addon" id="basic-addon1">@</span>-->
<!--  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="email">-->
<!--</div>-->
<!--<br><br>-->
<!---->
<!--<div class="input-group">-->
<!--  <span class="input-group-addon">$</span>-->
<!--  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="passvord">-->
<!--  <span class="input-group-addon">.00</span>-->
<!--</div>-->
<!--    <button type="submit">Submit</button>-->
<!--</form>-->


<form action="../resources/session2.php">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>