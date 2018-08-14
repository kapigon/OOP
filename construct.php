<?php
	/**
	* construct && destruct
	* Hàm khởi tạo construct
	* Hàm hủy destruct chạy sau hàm khởi tạo
	*/
	
	class xe{
		public $a = '';
		public function __construct($b){
			$this->a = $b;
			echo __method__ . '<br/>';
		}
		
		public function __destruct(){
			echo __method__ . '<br/>';
		}
		
		public function setXe($ten){
			$this->a = $ten;
		}
	}
	
	$xe = new xe();
	$xe1 = new xe('abc');
	
	
	/**
	* Có thể gọi Construct cha từ Lớp con
	*/
	
	class xedap extends xe{
		public $color = '';
		
		public function setXe1($b, $c){
			parent::setXe($b);
			$this->color = $c;
			//echo __method__ . '<br/>';
		}
		
		public function getXeDap(){
			echo $a . ' - ' . $color;
		}
	}
	
	$xedap = new xedap();
	$xedap->setXe1('Thống nhất', 'Vàng');
	$xedap->getXeDap();
	
?>