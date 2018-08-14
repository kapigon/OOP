<?php
	class A{
		public $a 		= 'Lớp A - public';
		private $b 		= 'Lớp A - private';
		protected $c 	= 'Lớp A - protected';
		static $d 		= 'Lớp A - static';
		
		
		private function get_a(){
			return 'Private funtion and public $a: ' . $this->a;
		}
		public function get_b(){
			return 'public funtion and private $b: ' . $this->b;
		}
		public function get_c(){
			return 'public funtion and protected $c: ' . $this->c;
		}
		
		public function run(){
			return __method__;
		}
		
		// Cách gọi tham số static 
		static function get_run(){
			return self::$d;
		}
	}
	
	$dt_A = new A();
	echo $dt_A->a . '<br/>';
	//echo $dt_A->b . '<br/>'; 	-> //error: $b private
	//echo $dt_A->c . '<br/>';	-> //error: $c protected
	
	echo A::$d . '<br/>';	//-> // $d la static
	
	echo $dt_A->run() . '<br/>';
	
	echo A::get_run() . '<br/>';
	
	//echo $dt_A->get_a() . '<br/>';
	echo $dt_A->get_b() . '<br/>';
	echo $dt_A->get_c() . '<br/>';
	
	class B extends A{
		//$a 		= 'Lớp B - public';
	}
	
	$dt_B = new B();
	echo $dt_B->a . '<br/>';
	
?>