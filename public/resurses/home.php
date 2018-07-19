<?php

//$inform = require("inform.php");
//
//foreach ($information as $k=>$v):
//
//?>
<!--<div class="row">-->
<!--    <div class="col-xs-6 col-sm-3">-->
<!--        <p align="center"><img src="../img/img.GP" alt="img" height="700" width="350" class="img-thumbnail"></p>-->
<!--        <p align="center"><b>--><?php //echo $v["name_book"] ?><!--</b> (часть --><?php //echo $v["pat"] ?><!--)</p>-->
<!--        <div class="btn-group btn-group-justified" role="group">-->
<!--            <div class="btn-group" role="group">-->
<!--                <a href="/?page=more&id=--><?php //echo $v["id"]?><!--" type= "button" class="btn btn-default">More</a>-->
<!--            </div>-->
<!--            <div class="btn-group" role="group">-->
<!--                <a href="#" type="button" class="btn btn-default" class="btn btn-success"><b>Buy</b></a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    --><?php
//    endforeach;
//?>

<div class="intend">
<div class="row">

<?php

foreach ($information as $k=>$v):

?>

    <div class="col-sm-3 col-md-6">
        <div class="thumbnail">
            <img class="sizeimg" src="<?php echo $v["route_to_img"]?>" alt="img">
            <div class="caption">
                <h3><?php echo $v["name"] ?></h3>
                <p><?php echo $v["review"]?></p>
                <p><a href="more?id=<?php echo $v["id"]?>" class="btn btn-primary"  role="button">More</a>
                    <?php if($login):?>
                    <a href="add_product?id=<?php echo $v["id"]?>" class="btn btn-success" role="button">Add to basket</a></p>
                <?php endif;?>
            </div>
        </div>
    </div>


<?php
    endforeach;
?>

</div>
</div>

<!--    <div class="col-xs-12 col-sm-3">-->
<!--        <p align="center"> <img src="img/img.2" alt="img"  height="700" width="350" class="img-thumbnail"></p>-->
<!--        <p align="center"><b>Гарри Потерр</b> (часть2)</p>-->
<!--        <div class="btn-group btn-group-justified" role="group" >-->
<!--            <div class="btn-group" role="group">-->
<!--                <a href="#" type="button" class="btn btn-default">More</a>-->
<!--            </div>-->
<!--            <div class="btn-group" role="group">-->
<!--                <a href="#" type="button" class="btn btn-default" class="btn btn-success" ><b>Buy</b></a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--<!--    <div class="clearfix visible-xs-block"></div>-->-->
<!---->
<!--    <div class="col-xs-12 col-sm-3">-->
<!--        <p align="center"> <img src="img/img.GP" alt="img" height="700" width="350" class="img-thumbnail"></p>-->
<!--        <p align="center"><b>Гарри Потерр</b>(часть3)</p>-->
<!--        <div class="btn-group btn-group-justified" role="group" >-->
<!--            <div class="btn-group" role="group">-->
<!--                <a href="#" type="button" class="btn btn-default">More</a>-->
<!--            </div>-->
<!--            <div class="btn-group" role="group">-->
<!--                <a href="#" type="button" class="btn btn-default" class="btn btn-success" ><b>Buy</b></a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-xs-12 col-sm-3">-->
<!--        <p align="center">  <img src="img/img.2" alt="img"  height="700" width="350" class="img-thumbnail"></p>-->
<!--        <p align="center"><b>Гарри Потерр</b> (часть4)</p>-->
<!--        <div class="btn-group btn-group-justified" role="group" >-->
<!--            <div class="btn-group" role="group">-->
<!--                <a href="#" type="button" class="btn btn-default">More</a>-->
<!--            </div>-->
<!--            <div class="btn-group" role="group">-->
<!--                <a href="#" type="button" class="btn btn-default" class="btn btn-success" ><b>Buy</b></a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
