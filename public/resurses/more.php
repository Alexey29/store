

<p align="left">  <img class="leftimg" src="<?php echo $information["route_to_img"]?>" alt="img"  height="800" width="400" class="img-thumbnail" ></p>



<h1 align="center"> <?php echo $information["name"] ?></h1>
<br> <br> <br>

<div class="leftpos">
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
    <br>
    <a href="#" class="btn btn-primary btn-lg active" role="button">Add to basket</a>
    <a href="#" class="btn btn-success btn-lg active" role="button">Buy</a>
    <br><br><br>

</dl>
</div>

<form>
    <div class="form-group">
        <label for="exampleInputEmail1">Yore comment:</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Comment">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>

<dt>Comments:</dt>
<p class="bg-primary">User Name</p>
<p class="bg-info">..........................</p>

<?php
//
//     endif;
//     endforeach;
//?>


