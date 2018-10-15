<?php
require_once "../base/base.php";

render('views/category.html', array(
	'cart' => $cart,
	'categories' => $categories,
	'products' => $products,
	'category' => $categories[0]
));
?>
