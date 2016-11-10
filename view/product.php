<?php
$oneProduct = getOne($mysqli,'products',$_GET['product']);
?>
<form action="?page=shoppingcart&cart=addProduct" name="cart" method="post">
  <?php

  // Image

  echo '<img src=\'img/'.$oneProduct['img'].'\'/>';
  echo "<input type=\"hidden\" name=\"img\" value=\"". $oneProduct['img']."\">" ;

  // name and description
  echo "name: ".$oneProduct['name']."<br>";
  echo "<input type=\"hidden\" name=\"name\" value=\"". $oneProduct['name']."\">" ;
  echo $oneProduct['description']."<br>";
  echo "<input type=\"hidden\" name=\"description\" value=\"". $oneProduct['description']."\">";

  //size
   ?>
  <select name="size">
     <option value="s">s</option>
     <option value="m">m</option>
     <option value="l">l</option>
     <option value="xl">xl</option>
  </select>
  <br>
  <?php
  //price
  echo "price: ".$oneProduct['price']."<br>";
  echo "<input type=\"hidden\" name=\"price\" value=\"". $oneProduct['price']."\">"
   ?>
   <input type="number" name="amount" min="1" max="100" value="1">
  <input type="submit"  value="add to cart">
</form>
<br>
