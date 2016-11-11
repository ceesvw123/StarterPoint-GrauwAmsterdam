<?php
$oneProduct = getOneById($mysqli,'products',$_GET['product']);
?>
<form action="?page=shoppingcart&cart=addProduct" name="cart" method="post">
  <?php

// name
  echo "<div class=\"productPageTitle\">".$oneProduct[0]['name']."</div><br>";
  echo "<input type=\"hidden\" name=\"name\" value=\"". $oneProduct[0]['name']."\">" ;

  // Image

  echo '<img src=\'img/'.$oneProduct[0]['img'].'\' class=\'productPageImg\'/>';
  echo "<input type=\"hidden\" name=\"img\" value=\"". $oneProduct[0]['img']."\">" ;

  //description

  echo  "<div class=\"productPagePrice\">".$oneProduct[0]['description']."</div><br>";
  echo "<input type=\"hidden\" name=\"description\" value=\"". $oneProduct[0]['description']."\">";


  //price
  echo "<div class=\"productPagePrice\"> price: ".$oneProduct[0]['price']."</div><br>";
  echo "<input type=\"hidden\" name=\"price\" value=\"". $oneProduct[0]['price']."\">"

  //size
   ?>
   <div class="productPageSizeWrapper">
    <input type="radio" name="size" value="s" id="c1" class="productPageSize" checked>
    <label for="c1">S</label>
    <input type="radio" name="size" value="m" id="c2"class="productPageSize">
    <label for="c2">M</label>
    <input type="radio" name="size" value="l" id="c3"class="productPageSize">
    <label for="c3">L</label>
  </div>


   <input type="number" name="amount" min="1" max="100" value="1" class="productPageAmount">
  <input type="submit"  value="add to cart" class="productPageButton">
</form>
<?php
  echo '<img src=\'img/'.$oneProduct[0]['img'].'\' class=\'productPageSmallImg\'/>';
  echo '<img src=\'img/'.$oneProduct[0]['img'].'\' class=\'productPageSmallImg\'/>';
  echo '<img src=\'img/'.$oneProduct[0]['img'].'\' class=\'productPageSmallImg\'/>';
  ?>
<br>
