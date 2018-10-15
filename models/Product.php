<?php
class Product {
	public $onSale = false;
	public $url = "";
	public $name = "";
	public $price = 1000;
	public $fullPrice = 1000;
	public $images;

	function __construct($name, $price, $url) {
		$this->name = $name;
		$this->price = $price;
		$this->url = $url;
		$this->images = array(
			"https://via.placeholder.com/270x270",
			"https://via.placeholder.com/270x270"
		);
		$this->fullPrice = $price;
	}
}
?>
