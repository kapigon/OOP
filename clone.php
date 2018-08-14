<?php
	/**
	* 
	*/
	
	class student{
		protected $name;
		
		public function __construct($n = ''){
			$this->name = $n;
		}
		
		public function setName($value){
			$this->name = $value;
		}
		
		public function getName(){
			return $this->name;
		}
	}
	
	$a = new student();
	$a->setName('kapigon');
	echo $a->getName();
	echo '<br/>';
	
	// Tạo khởi tạo theo khiểu clone từ $a
	$b = clone $a; // khác với để $b = $a : khi thay đổi giá trị b sẽ làm thay đổi giá trị $a
	$b->setName('hoalp');
	echo $b->getName();
	echo '<br/>';
	
	
	// gán $c = $a và thay đổi giá trị $c -> $a thay đổi
	$c = $a;
	$c->setName('12345');
	echo 'c: ' . $c->getName() . ' - a: ' . $a->getName();
?>