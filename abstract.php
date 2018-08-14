<?php
	/**
	* abstract
	* lớp trừa tượng: Một lớp trừu tượng là 'một lớp mà không thể được khởi tạo, chỉ được kế thừa'
	* sử dụng lại lớp trừu tượng thì phải khai báo lại phương thức trừu tượng trong lớp trừu tượng
	* Mục đích: đưa ra các quy định chuẩn của lớp con, 
		khi lớp con kế thừa thì phải định nghĩa lại các phuong thưc trên lớp cha
	* Khi kế thừa từ một lớp trừu tượng, 
	tất cả phương thức được đánh dấu abstract trong khai báo lớp cha phải được định nghĩa bởi lớp con; 
	ngoài ra, những phương thức này phải được định nghĩa với cùng tính nhìn thấy.
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