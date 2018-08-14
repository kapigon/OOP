<?php
	/**
	* Kế thừa
	*/
	
	# lớp cha
	class xe{
		protected $color 		= 'Xanh	';
		
		public function info(){
			return 'Thống nhất';
		}
		
	}
	
	# Lớp con kế thừa lớp cha
	class xedap extends xe{
		public function info(){
			return 'Thống nhất A, ' . $this->color;
		}
		
		public function get_color(){
			return parent::info() . ' - ' . $this->color;
		}
	}
	
	$dt_xe = new xe();
	echo $dt_xe->info() . '<br/>';
	
	$dt_xedap = new xedap();
	echo $dt_xedap->info() . '<br/>';
	echo $dt_xedap->get_color() . '<br/>';
?>