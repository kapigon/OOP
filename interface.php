<?php
	/**
	* interface
	* cũng là kế thừa : nhưng dùng từ khóa 'impli' thay cho 'extends'
	* 
	* Mục đích: 
	*/
	
	abstract class xe{
		abstract function banhxe();
		abstract function khungxe();
	}
	
	# xedap kế thừa xe
	class xedap extends xe{
		public function banhxe(){
			
		}
		
		public function khungxe(){
			
		}
		
		public function getName(){
			return __METHOD__;
		}
	}
	
	// $a = new xe();  -> xay ra loi khi khao bao
	
	$obj = new xedap;
	echo $obj->getName();
?>