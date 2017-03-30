<?php
	// This is the file for the parent class

	class ParentClass {

		protected $year;
		protected $age;

		public function __construct($year){
			$this->year = $year;
			$this->age = 0;
		}

		public function calculate(){
			$this->age = rand(10,100);
			return $this->age;
		}


		public function __toString(){
			return "You are " . $this->calculate() . " years old!";
		}
	}
