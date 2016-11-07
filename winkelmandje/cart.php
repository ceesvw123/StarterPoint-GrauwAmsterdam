<?php
include 'payment.php';
session_start();/*
if (!isset($_SESSION["cart"])) {
  $_SESSION["cart"] = [];
}*/
?>
<a href="../index.html">return</a><br>
<?php
if (isset($_GET['cart'])) {
  switch ($_GET['cart']) {
    case 'addProduct':
      $_SESSION['cart'][count($_SESSION['cart'])] = $_POST;
      header('location: cart.php');
      break;

    case 'update':
      $newPost = $_POST;
      unset($newPost['number']);
      $_SESSION['cart'][$_POST['number']] = $newPost;
      header('location: cart.php');
      break;

    case 'remove':
      array_splice($_SESSION['cart'],$_POST['number'],1);
      header('location: cart.php');
      break;

  }
}
//showing cart
if (isset($_SESSION['cart'])) {
for ($i=0; $i < count($_SESSION['cart']); $i++) {

?>
<form action="cart.php?cart=update" name="cart" method="post">
  <?php
  echo "name: ".$_SESSION['cart'][$i]['name']."<br>";
  echo "<input type=\"hidden\" name=\"name\" value=\"". $_SESSION['cart'][$i]['name']."\">" ;
  echo $_SESSION['cart'][$i]['description']."<br>";
  echo "<input type=\"hidden\" name=\"description\" value=\"". $_SESSION['cart'][$i]['description']."\">";
   ?>

  <select name="size" value>
     <option value="s" <?php if($_SESSION['cart'][$i]['size'] == 's'){echo "selected";}?>>s</option>
     <option value="m"<?php if($_SESSION['cart'][$i]['size'] == 'm'){echo "selected";}?>>m</option>
     <option value="l"<?php if($_SESSION['cart'][$i]['size'] == 'l'){echo "selected";}?>>l</option>
     <option value="xl"<?php if($_SESSION['cart'][$i]['size'] == 'xl'){echo "selected";}?>>xl</option>
  </select>
  <br>
  <?php
  echo "price: ".$_SESSION['cart'][$i]['price']."<br>";
  echo "<input type=\"hidden\" name=\"price\" value=\"". $_SESSION['cart'][$i]['price']."\">";
  echo "<input type=\"number\" name=\"amount\" min=\"1\" max=\"100\" value=\"".$_SESSION['cart'][$i]['amount']."\">";
  echo "<input type=\"hidden\" value=\"$i\" name=\"number\">";
  ?>
  <input type="submit"  value="update">
</form>
<form action="cart.php?cart=remove" method="post">
  <?php   echo "<input type=\"hidden\" value=\"$i\" name=\"number\">"; ?>
  <input type="submit" value="remove">
</form>
<br>
<?php
}


// price
$totalprice = 0;
for ($i=0; $i < count($_SESSION['cart']); $i++) {
  $totalprice += $_SESSION['cart'][$i]['price'] * $_SESSION['cart'][$i]['amount'];
}
echo "totale prijs : ".$totalprice. " euro<br>";

//payment
if ($payment == 'mail'){
  include 'mail.php';
}
}else{
  echo "jij mandje is leeg";
}
 ?>
