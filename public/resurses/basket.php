
<div class="table-responsive">
    <table class="table">
        <tr>
            <td >IMG</td>
            <td >Name</td>
            <td >Count</td>
            <td >Prise</td>
            <td >Batons</td>
        </tr>
        <?php
        $obj = new Session();
        $obj->set("full_prise",0);
        if($obj->sessionExists()):
            if($obj->contains("products")):
        foreach ($_SESSION["products"] as $k=>$v): ?>
        <tr>
            <td ><img class="imgsize" src="<?php echo $v["route_to_img"]?>" alt="..." class="img-thumbnail"></td>
            <td ><?php echo $v["book_name"] ?></td>
            <td ><?php echo $v["count"]?></td>
            <td ><?php echo $v["price"]*$v["count"]?></td>
            <td ><nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li><a href="add_one?id=<?php echo $v["product_id"]?>">+</a></li>
                        <li><a href="remove_one?id=<?php echo $v["product_id"]?>">-</a></li>
                        <li><a href="remove?id=<?php echo $v["product_id"]?>">Remove</a></li>
                    </ul>
                </nav>
            </td>
        </tr>
        <?php

        $_SESSION["full_prise"] = $_SESSION["full_prise"] + $v["price"]*$v["count"];

        endforeach;?>
            </table>
        <h2 class="text-info">Full price: <?php echo $_SESSION["full_prise"]?></h2>
        <a href="remove_all" class="btn btn-primary btn-lg active" role="button">Remove All</a>
        <a href="#" class="btn btn-success btn-lg active" role="button">Buy Books</a>
        <?php
        endif;
        endif;
        ?>

</div>
