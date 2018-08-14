<?php
	/**
	* Final
	* Không cho phép kế thừa
	* Không cho phép override
	*/
	
	# lớp cha
	class xe{
		final public function info(){
			return __method__;
		}
		
	}
	
	# Lớp con kế thừa lớp cha
	class xedap extends xe{
		public function info1(){
			return __method__;
		}
	}
	
	$dt_xe = new xe();
	echo $dt_xe->info() . '<br/>';
	
	$dt_xedap = new xedap();
	echo $dt_xedap->info1() . '<br/>';
?>