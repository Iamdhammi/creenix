<?php require_once('includes/conn.php') ?>
<?php  
if (isset($_POST['currency-submit'])) {

	$currency = $_POST['currency'];
	if ($currency === "NGN") {
		$web_price = "NGN 50,000";
		$web_price1 = "NGN 50,000";
		$web_price2 = "NGN 75,000";
		$web_price3 = "NGN 100,000";
		$web_price4 = "NGN 150,000";
		$web_price5 = "NGN 150,000";
		$web_price6 = "NGN 35,000";

		$design_price = "NGN 10,000";
		$design_price1 = "NGN 20,000";
		$design_price2 = "NGN 20,000";
		$design_price3 = "NGN 10,000";
		$design_price4 = "NGN 10,000";
		$design_price5 = "NGN 10,000";
		$design_price6 = "NGN 100";
		$symbol = "NGN";
	}elseif ($currency === "USD") {
		$web_price = "USD 139.99";
		$web_price1 = "USD 139.99";
		$web_price2 = "USD 209.99";
		$web_price3 = "USD 279.99";
		$web_price4 = "USD 419.99";
		$web_price5 = "USD 419.99";
		$web_price6 = "USD 99.99";

		$design_price = "USD 29.99";
		$design_price1 = "USD 59.99";
		$design_price2 = "USD 59.99";
		$design_price3 = "USD 29.99";
		$design_price4 = "USD 29.99";
		$design_price5 = "USD 29.99";
		$design_price6 = "USD 0.99";
		$symbol = "USD";
	}elseif ($currency === "EUR") {
		$web_price = "EUR 129.99";
		$web_price1 = "EUR 129.99";
		$web_price2 = "EUR 189.99";
		$web_price3 = "EUR 249.99";
		$web_price4 = "EUR 369.99";
		$web_price5 = "EUR 369.99";
		$web_price6 = "EUR 89.99";

		$design_price = "EUR 29.99";
		$design_price1 = "EUR 49.99";
		$design_price2 = "EUR 49.99";
		$design_price3 = "EUR 29.99";
		$design_price4 = "EUR 29.99";
		$design_price5 = "EUR 299.99";
		$design_price6 = "EUR 0.29";
		$symbol = "EUR";
	}elseif ($currency === "GBP") {
		$web_price = "GBP 109.99";
		$web_price1 = "GBP 109.99";
		$web_price2 = "GBP 159.99";
		$web_price3 = "GBP 210.99";
		$web_price4 = "GBP 319.99";
		$web_price5 = "GBP 319.99";
		$web_price6 = "GBP 79.99";

		$design_price = "GBP 21.99";
		$design_price1 = "GBP 49.99";
		$design_price2 = "GBP 49.99";
		$design_price3 = "GBP 21.99";
		$design_price4 = "GBP 21.99";
		$design_price5 = "GBP 21.99";
		$design_price6 = "GBP 0.29";
		$symbol = "GBP";
	}
}else {
	$web_price = "NGN 50,000";
	$web_price1 = "NGN 50,000";
	$web_price2 = "NGN 75,000";
	$web_price3 = "NGN 100,000";
	$web_price4 = "NGN 150,000";
	$web_price5 = "NGN 150,000";
	$web_price6 = "NGN 35,000";

	$design_price = "NGN 10,000";
	$design_price1 = "NGN 20,000";
	$design_price2 = "NGN 20,000";
	$design_price3 = "NGN 10,000";
	$design_price4 = "NGN 10,000";
	$design_price5 = "NGN 10,000";
	$design_price6 = "NGN 100";
	$symbol = "NGN";
}







?>