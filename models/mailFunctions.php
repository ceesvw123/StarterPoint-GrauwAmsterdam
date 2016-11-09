<?php
$payment = 'mail';

function sendCostumerMail($informationArray,$header){

  $mail_message = "beste ".$informationArray[0]['firstName']." ".$informationArray[0]['lastName'].",\r\n\r\nwij hebben van u een bestelling ontvangen van:\r\n";

  for ($i=0; $i < count($informationArray[1]); $i++) {
    $mail_message .= "Naam: ".$informationArray[1][$i]['name']."\r\nmaat: ".$informationArray[1][$i]['size']."\r\naantal: ".$informationArray[1][$i]['amount']."\r\nprijs per stuk: ".$informationArray[1][$i]['price']."\r\n\r\n";
  }
  $mail_message .= "dit komt op een totaal prijs van : ";

  $totalprice = 0;
  for ($i=0; $i < count($informationArray[1]); $i++) {
    $totalprice += $informationArray[1][$i]['price'] * $informationArray[1][$i]['amount'];
  }
  $mail_message .= $totalprice." euro.\r\n\rer word binnen kort contact met u opgenomen voor de verzending\r\n\r\nmvg,\r\ngrauw
  ";

$result = mail( $informationArray[0]['email'] , 'bestelling grauw', $mail_message, $header);

  return $result;
}

function sendAdminMail($informationArray,$header){

  $mail_message = "er is een bestelling geplaatst door ". $informationArray[0]['FirstName']." ".$informationArray[0]['LastName']."van: \r\n" ;

  for ($i=0; $i < count($informationArray[1]); $i++) {
    $mail_message .= "Naam: ".$informationArray[1][$i]['name']."\r\nmaat: ".$informationArray[1][$i]['size']."\r\naantal: ".$informationArray[1][$i]['amount']."\r\nprijs per stuk: ".$informationArray[1][$i]['price']."\r\n\r\n";
  }

  $mail_message .= "dit komt op een totaal prijs van : ";

  $totalprice = 0;
  for ($i=0; $i < count($informationArray[1]); $i++) {
    $totalprice += $informationArray[1][$i]['price'] * $informationArray[1][$i]['amount'];
  }

  $result = mail( 'mikeweer@hotmail.com' , 'bestelling grauw', $mail_message, $header);

  return $result;
}


 ?>
