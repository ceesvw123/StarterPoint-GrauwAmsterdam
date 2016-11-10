<?php
// data base includes
include 'models/config.php';
include 'models/database.php';
include 'models/DBfunctions.php';
include 'models/mailFunctions.php';


// view includes
 include 'view/head.php';
 include 'view/menu.php';
if (isset($_GET['page'])) {
  $page = $_GET['page'];
}
else {
  $page = '';
}
switch ($page) {
  case 'home':
  include 'view/home.php';
  include 'view/kleding.php';
  include 'view/contact.php';
    break;

    case 'products':
      include 'view/product.php';
      break;

    case 'shoppingcart':
       include 'view/cart.php';
      break;

  default:
  include 'view/home.php';
  include 'view/kleding.php';
  include 'view/contact.php';
    break;
}

 ?>
</body>

</html>
