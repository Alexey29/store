<?php

     $infotm=require ("inform.php");

     foreach ($infotm as $k=>$v):?>

         <?php if($_GET["id"]==$v["id"]): ?>

<p align="left">  <img src="<?php echo $v["path_to_img"]?>" alt="img"  height="800" width="400" class="img-thumbnail" ></p>


<?php

     endif;
     endforeach;
?>


