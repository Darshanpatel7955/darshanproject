<?php
    include_once('stripe-php-master/init.php');

    $Publishablekey="pk_test_51Kw1XwSAPeSol8UBDxRMmciLJsWo4WlVrg7W9QXMiTbe1w8eS4e0eWYkw2GxjRXD4qSYk9vpGrkBuaN7xF7FgxDv00JWINmCy9";

    $Secretkey="sk_test_51Kw1XwSAPeSol8UB3NRrikEd2fomYJdPhgGDNUdf1AVCqf7f9G8NmJgcnqHM0JPZ0DpV244Bksm2iVakfvwJnB3900dxR4r6Xp";
    \stripe\stripe::setApikey($Secretkey);
?>
<form action="submit.php" method="post">
	<script 
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $Publishablekey?>" 
		data-amount="<?php echo $fetch->car_price*100 ?>"
		data-name="RMC"
		data-description="Rent My Car"
		data-image="https://images.fastcompany.net/image/upload/w_1280,f_auto,q_auto,fl_lossy/w_596,c_limit,q_auto:best,f_auto/fc/3034007-inline-i-applelogo.jpg"
		data-currency="inr"

	>
	</script>
</form>

			



