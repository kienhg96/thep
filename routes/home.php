<?php
require_once "../base/base.php";

render('views/home.html', array(
	'cart' => $cart,
	'categories' => $categories,
	'products' => $products
));
?>
