<?php
 include 'view/head.php';
 include 'view/menu.php';

switch ($_GET['page']) {
  case 'home':
  include 'view/home.php';
    break;

    case 'product':
      include 'view/product.php';
      break;

    case 'shoppingcart':
       include 'view/cart.php';
      break;

  default:
  include 'view/home.php';
    break;
}

 ?>
</body>

</html>
