<?php  

if (isset($_POST['currency-submit'])) {
	if ($currency === 'NGN') {
		$price_range = '<input name="budget" type="number" min="40000" max="50000" class="xo stext-111 cl8 plh3 size-111 p-lr-15" placeholder="What\'s your budget?">';
		$price_range1 = '<input name="budget" type="number" min="65000" max="75000" class="xo stext-111 cl8 plh3 size-111 p-lr-15" placeholder="What\'s your budget?">';
		$price_range2 = '<input name="budget" type="number" min="75000" max="100000" class="xo stext-111 cl8 plh3 size-111 p-lr-15" placeholder="What\'s your budget?">';
		$price_range3 = '<input name="budget" type="number" min="100000" max="150000" class="xo stext-111 cl8 plh3 size-111 p-lr-15" placeholder="What\'s your budget?">';
		$price_range4 = '<input name="budget" type="number" min="100000" max="150000" class="xo stext-111 cl8 plh3 size-111 p-lr-15" placeholder="What\'s your budget?">';

	}elseif ($currency === 'USD') {
		$price_range = '<input name="budget" type="number" min="100" max="139.99" class="xo stext-111 cl8 plh3 size-111 p-lr-15" placeholder="What\'s your budget?">';
		$price_range1 = '<input name="budget" type="number" min="100" max="209.99" class="xo stext-111 cl8 plh3 size-111 p-lr-15" placeholder="What\'s your budget?">';
		$price_range2 = '<input name="budget" type="number" min="210" max="279.99" class="xo stext-111 cl8 plh3 size-111 p-lr-15" placeholder="What\'s your budget?">';
		$price_range3 = '<input name="budget" type="number" min="280" max="419.99" class="xo stext-111 cl8 plh3 size-111 p-lr-15" placeholder="What\'s your budget?">';
		$price_range4 = '<input name="budget" type="number" min="280" max="419.99" class="xo stext-111 cl8 plh3 size-111 p-lr-15" placeholder="What\'s your budget?">';

	}elseif ($currency === 'EUR') {
		$price_range = '<input name="budget" type="number" min="90" max="129.99" class="xo stext-111 cl8 plh3 size-111 p-lr-15" placeholder="What\'s your budget?">';
		$price_range1 = '<input name="budget" type="number" min="65000" max="189.99" class="xo stext-111 cl8 plh3 size-111 p-lr-15" placeholder="What\'s your budget?">';
		$price_range2 = '<input name="budget" type="number" min="190" max="249.99" class="xo stext-111 cl8 plh3 size-111 p-lr-15" placeholder="What\'s your budget?">';
		$price_range3 = '<input name="budget" type="number" min="250" max="369.99" class="xo stext-111 cl8 plh3 size-111 p-lr-15" placeholder="What\'s your budget?">';
		$price_range4 = '<input name="budget" type="number" min="250" max="369.99" class="xo stext-111 cl8 plh3 size-111 p-lr-15" placeholder="What\'s your budget?">';

	}elseif ($currency === 'GBP') {
		$price_range = '<input name="budget" type="number" min="150" max="109.99" class="xo stext-111 cl8 plh3 size-111 p-lr-15" placeholder="What\'s your budget?">';
		$price_range1 = '<input name="budget" type="number" min="65000" max="159.99" class="xo stext-111 cl8 plh3 size-111 p-lr-15" placeholder="What\'s your budget?">';
		$price_range2 = '<input name="budget" type="number" min="160" max="210.99" class="xo stext-111 cl8 plh3 size-111 p-lr-15" placeholder="What\'s your budget?">';
		$price_range3 = '<input name="budget" type="number" min="210" max="320" class="xo stext-111 cl8 plh3 size-111 p-lr-15" placeholder="What\'s your budget?">';
		$price_range4 = '<input name="budget" type="number" min="210" max="320" class="xo stext-111 cl8 plh3 size-111 p-lr-15" placeholder="What\'s your budget?">';
	}
}else {
	$price_range = '<input name="budget" type="number" min="40000" max="50000" class="xo stext-111 cl8 plh3 size-111 p-lr-15" placeholder="What\'s your budget?">';
	$price_range1 = '<input name="budget" type="number" min="65000" max="75000" class="xo stext-111 cl8 plh3 size-111 p-lr-15" placeholder="What\'s your budget?">';
	$price_range2 = '<input name="budget" type="number" min="75000" max="100000" class="xo stext-111 cl8 plh3 size-111 p-lr-15" placeholder="What\'s your budget?">';
	$price_range3 = '<input name="budget" type="number" min="200000" max="250000" class="xo stext-111 cl8 plh3 size-111 p-lr-15" placeholder="What\'s your budget?">';
	$price_range4 = '<input name="budget" type="number" min="200000" max="250000" class="xo stext-111 cl8 plh3 size-111 p-lr-15" placeholder="What\'s your budget?">';
}

?>