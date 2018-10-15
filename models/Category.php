<?php
class Category {
	public $id = "";
	public $url = "";
	public $name = "";
	public $subCategory = array(); // [Category]
	public $children = array();
	public $parent = null;

	function __construct($name, $url) {
		$this->name = $name;
		$this->url = $url;
	}
}
?>
