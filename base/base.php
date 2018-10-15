<?php
require_once "../vendor/autoload.php";
require_once "../models/Cart.php";
require_once "../models/Category.php";
require_once "../models/Product.php";

$__loader = new Twig_Loader_Filesystem('../');
$__twig = new Twig_Environment($__loader, array(
	// 'cache' => './cache',
));

function render($filename, $arr) {
	global $__twig;
	echo $__twig->render($filename, $arr);
}
// For Init Data
$cart = new Cart;	
$categories = array(
	new Category("Sắt", "#"),
	new Category("Thép", "#")
);
$products = array(
	new Product("Thep loai 1", 1000, "#"),
	new Product("Thep loai 2", 2000, "#"),
	new Product("Thep loai 3", 3000, "#"),
	new Product("Thep loai 4", 4000, "#"),
	new Product("Thep loai 5", 5000, "#"),
	new Product("Thep loai 6", 6000, "#")
);
?>
