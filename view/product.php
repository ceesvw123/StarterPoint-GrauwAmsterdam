<?php
$allproducts = getAll($mysqli,'products');
for ($i=0; $i < count($allproducts); $i++) {
?>
<form action="?page=shoppingcart&cart=addProduct" name="cart" method="post">
  <?php

  // Image

  echo '<img src=\'img/'.$allproducts[$i]['img'].'\'/>';
  echo "<input type=\"hidden\" name=\"img\" value=\"". $allproducts[$i]['img']."\">" ;

  // name and description
  echo "name: ".$allproducts[$i]['name']."<br>";
  echo "<input type=\"hidden\" name=\"name\" value=\"". $allproducts[$i]['name']."\">" ;
  echo $allproducts[$i]['description']."<br>";
  echo "<input type=\"hidden\" name=\"description\" value=\"". $allproducts[$i]['description']."\">";

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
  echo "price: ".$allproducts[$i]['price']."<br>";
  echo "<input type=\"hidden\" name=\"price\" value=\"". $allproducts[$i]['price']."\">"
   ?>
   <input type="number" name="amount" min="1" max="100" value="1">
  <input type="submit"  value="add to cart">
</form>
<br>
<?php
}
 ?>
