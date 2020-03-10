<?php
	require_once 'Product.php';

	class Computer extends Product {
		public $operativeSystem;

		public function __construct($name, $price, $year, $operativeSystem) {
			parent::__construct($name, $price, $year);
			$this->operativeSystem = $operativeSystem;
		}
	}
?>
