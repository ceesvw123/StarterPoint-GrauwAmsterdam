<?php
session_start();

if (isset($_GET['cart'])) {
  switch ($_GET['cart']) {
    case 'addProduct':
      $_SESSION['cart'][count($_SESSION['cart'])] = $_POST;
      header('location: index.php?page=shoppingcart');
      break;

    case 'update':
      $newPost = $_POST;
      unset($newPost['number']);
      $_SESSION['cart'][$_POST['number']] = $newPost;
      header('location: index.php?page=shoppingcart');
      break;

    case 'remove':
      array_splice($_SESSION['cart'],$_POST['number'],1);
      header('location: index.php?page=shoppingcart');
      break;

  }
}
?>

<div class="cartTitle">
  winkelwagen
</div>

<?php
//showing cart
if (isset($_SESSION['cart'])) {
for ($i=0; $i < count($_SESSION['cart']); $i++) {

?>
<div class="cartItem">
  <div class="cartItemLeft">
<form action="?page=shoppingcart&cart=update" name="cart" method="post">
  <?php

  // Image

  echo '<img src=\'img/'.$_SESSION['cart'][$i]['img'].'\' class=\'cartImg\'/>';
    echo "<input type=\"hidden\" name=\"img\" value=\"". $_SESSION['cart'][$i]['img']."\">" ;

  // name
  echo "<div class=\"cartName\">GRAUW ".$_SESSION['cart'][$i]['name']."</div>";
  echo "<input type=\"hidden\" name=\"name\" value=\"". $_SESSION['cart'][$i]['name']."\">" ;


// size
   ?>
  <select name="size" class="cartSize">
     <option value="s" <?php if($_SESSION['cart'][$i]['size'] == 's'){echo "selected";}?>>s</option>
     <option value="m"<?php if($_SESSION['cart'][$i]['size'] == 'm'){echo "selected";}?>>m</option>
     <option value="l"<?php if($_SESSION['cart'][$i]['size'] == 'l'){echo "selected";}?>>l</option>
     <option value="xl"<?php if($_SESSION['cart'][$i]['size'] == 'xl'){echo "selected";}?>>xl</option>
  </select>
  <?php
  echo "<div class=\"cartPrice\">&#8364 ".$_SESSION['cart'][$i]['price']."</div>";
  echo "<input type=\"hidden\" name=\"price\" value=\"". $_SESSION['cart'][$i]['price']."\">";
  echo "<input type=\"number\" name=\"amount\" min=\"1\" max=\"100\" class =\"cartAmount\" value=\"".$_SESSION['cart'][$i]['amount']."\">";
  echo "<input type=\"hidden\" value=\"$i\" name=\"number\">";
  ?>

  <input type="submit" name="update" class="cartUpdateInput" id="update">
  <label for="update" class="cartUpdateLabel"> <i class="fa fa-refresh" aria-hidden="true"></i></i></label>
</form>
</div>
<form action="index.php?page=shoppingcart&cart=remove" method="post">
  <?php   echo "<input type=\"hidden\" value=\"$i\" name=\"number\">"; ?>
  <input type="submit" name="remove" class="cartRemoveInput" id="remove">
  <label for="remove" class="cartRemoveLabel">  <i class="fa fa-times" aria-hidden="true"></i></label>
</form>
</div>

<?php
}


// total price
$totalprice = 0;
for ($i=0; $i < count($_SESSION['cart']); $i++) {
  $totalprice += $_SESSION['cart'][$i]['price'] * $_SESSION['cart'][$i]['amount'];
}
echo "totale prijs : ".$totalprice. " euro";

//payment
if ($payment == 'mail'){
  //include 'mail.php';
}
}else{
  echo "jij mandje is leeg";
}
 ?>
