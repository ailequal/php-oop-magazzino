<?php
	trait Information {
		public $name;
		public $price;
		public $year;
		public $description;

		public function __construct($name, $price, $year) {
			$this->name = $name;
			$this->price = $price;
			$this->year = $year;
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
