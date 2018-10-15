<?php
require_once "../base/base.php";

render('views/404.html', array(
	'cart' => $cart,
	'categories' => $categories
));
?>
