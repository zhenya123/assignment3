<?php
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {

		protected $month;
		protected $day;
		protected $birthday = FALSE;

		public function __construct($year, $month, $day){
			parent::__construct($year);
			$this->month = $month;
			$this->day = $day;
		}


		public function calculateBetter(){
			$today_month = date("m");
			$today_day = date("d");
			$today_year = date("Y");
			if ($today_month < $this->month){
				$this->age = $today_year-$this->year-1;
			}
			else if ($today_month == $this->month && $today_day < $this->day){
				$this->age = $today_year-$this->year-1;
			}
			else if ($today_month == $this->month && $today_day == $this->day){
				$this->birthday = TRUE;
			}
			else {
				$this->age = $today_year - $this->year;

			}

			return $this->age;
		}


		public function __toString(){
			$prev = parent::calculate();
			$current = $this->calculateBetter();

			if (!$this->birthday){
				return "Are you " . $prev . "? Nah, you are definitely " . $current . " years old.";
			}
			else {
				return "Who cares? Happy birthday!\n";
			}
		}
	}
