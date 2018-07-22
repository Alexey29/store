
<h1 align="center"> <?php echo $information["name"] ?></h1>
<br> <br> <br>
<div class="row">
    <div class="col-xs-6 col-md-4">
        <p align="left">  <img class="leftimg" src="<?php echo $information["route_to_img"]?>" alt="img"  height="800" width="400" class="img-thumbnail" ></p>
    </div>
    <div class="col-xs-6 col-md-4">

        <dl>
            <dt>Book name:</dt>
            <dd><?php echo $information["name"] ?></dd>
            <br>
            <dt>Number of pages:</dt>
            <dd><?php echo $information["number_of_pages"] ?></dd>
            <br>
            <dt>Author:</dt>
            <dd><?php echo $information["author_name"] ?></dd>
            <br>
            <dt>Book review:</dt>
            <dd><?php echo $information["review"] ?></dd>
            <br>
            <dt>Book price:</dt>
            <dd><?php echo $information["price"] ?>$</dd>
            <br><?php if($login):?>
            <a href="add_product?id=<?php echo $_GET["id"]?>" class="btn btn-success btn-lg active" role="button">Add to basket</a>
            <?php endif;?>
        </dl>
    </div>
    <div class="col-xs-6 col-md-4">

<?php if($login):?>
    <form  method="post" action="more_comment?id=<?php echo $_GET["id"]?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Yore comment:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Comment" name="comment">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
<?php endif;?>
        <h3>Comments:</h3>
        <?php
        $information_comments = array_reverse($information_comments);
        foreach ($information_comments as $k=>$v):
            if($v["id_book"] == $_GET["id"]):
            ?>
        <p class="bg-primary"><?php echo $v["user_name"]?></p>
        <p class="bg-info"><?php echo $v["comment"] ?></p>
        <?php
        endif;
        endforeach;
        ?>
    </div>
</div>




