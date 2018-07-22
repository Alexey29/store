


<div class="intend">
<div class="row">

<?php

foreach ($information as $k=>$v):

?>

    <div class="col-sm-6 col-md-4">
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

