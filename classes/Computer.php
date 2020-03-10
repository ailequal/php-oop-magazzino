<?php
	require_once 'Product.php';

	class Computer extends Product {
		public $operativeSystem;

		public function __construct($_name, $_price, $_year, $_operativeSystem) {
			parent::__construct($_name, $_price, $_year);
			$this->operativeSystem = $_operativeSystem;
		}
	}
?>
