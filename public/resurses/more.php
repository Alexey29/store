

<p align="left">  <img class="leftimg" src="<?php echo $information["path_to_img"]?>" alt="img"  height="800" width="400" class="img-thumbnail" ></p>



<h1 align="center"> <?php echo $information["name_book"] ?></h1>

<p align="center">
<dl>
    <dt>Book name:</dt>
    <dd><?php echo $information["name_book"] ?></dd>
    <br>
    <dt>Number of pages:</dt>
    <dd><?php echo $information["count_page"] ?></dd>
    <br>
    <dt>Author:</dt>
    <dd><?php echo $information["author"] ?></dd>
    <br>
    <dt>Book review:</dt>
    <dd><?php echo $information["content"] ?></dd>
    <br>
    <dt>Book price:</dt>
    <dd><?php echo $information["book_price"] ?></dd>

</dl>
</p>


<?php
//
//     endif;
//     endforeach;
//?>


