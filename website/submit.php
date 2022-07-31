<?php
    include_once('payment.php');
    \Stripe\Stripe::setVerifySslCerts(false);
    $token=$_POST['stripeToken'];
    $data=\stripe\charge::create(array(
        "amount"=>500,
        "currency"=>"inr",
        "description"=>"Rent My Car",
        "source"=>$token,
    ));
    echo "<pre>";
    print_r($data);
?>
