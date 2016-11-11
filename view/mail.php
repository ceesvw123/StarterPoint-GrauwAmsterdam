<?php
if (count($_SESSION['cart']) > 0) { ?>
<form  action="?mail=send" method="post">
  voornaam:<input type="text" name="firstName" required value="mike"><br>
  achternaam:<input type="text" name="lastName" required value="rhodens"><br>
  email:<input type="email" name="email" required value="mikeweer@hotmail.com"><br>
  mobile nummer:<input type="text" name="mobileNumber" >*<br>
  velden met * niet noodzakenlijk <br>
  <input type="submit" value="order">
</form>
<?php
}

if (isset($_GET['mail'])) {
  if ($_GET['mail'] == 'send') {
    if ($_POST['mobileNumber'] == '') {
      array_splice($_POST,3,1);
    }
    $informationArray = array();
    array_push($informationArray,$_POST);
    array_push($informationArray,$_SESSION['cart']);

    $mail_header = 'From: grauw@amsterdam.nl' . "\r\n" .
        'Reply-To: grauw@amsterdam.nl' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

      if (sendCostumerMail($informationArray,$mail_header)) {
        if (sendAdminMail($informationArray,$mail_header)) {


        session_destroy();
        header('location: cart.php');
      }else {
        echo "bestelling is mislukt";
      }
    }else {
      echo "bestelling is mislukt";
    }
   }
}
