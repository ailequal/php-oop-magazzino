<?php
	trait Information {
		public $name;
		public $price;
		public $year;
		public $description;

		public function __construct($_name, $_price, $_year) {
			$this->name = $_name;
			$this->price = $_price;
			$this->year = $_year;
		}

		public function getInformation() {
			return $this->name . ' ' . $this->price . ' ' . $this->year  . ' ' . $this->description;
		}

		public function age($currentYear) {
			$age = $currentYear - $this->year;
			return 'This product is ' . $age . ' years old.';
		}
	}
?>
