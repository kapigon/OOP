<?php
	/**
	* const : hằng số
	* Đặt tên tham số = chữ IN HOA
	* Hàm hủy destruct chạy sau hàm khởi tạo
	*/
	
	class xe{
		const COLOR = 'red';
		
		public function getColor(){
			return self::COLOR;
		}
		
		public function setColor($color){
			//self::COLOR = $color;
		}
	}
	
	$obj = new xe();
	echo $obj->getColor();
	echo '<br/>';
	echo xe::COLOR;
?>