<?php
	/**
	*	STATIC
	* Khai báo các thành viên lớp hoặc phương thức lớp là static làm cho chúng có thể truy cập mà không cần một khởi tạo lớp. 
	Một thành viên được khai báo là static không thể được truy cập với một đối tượng lớp đã được khởi tạo (mặc dù một phương thức là static có thể).
	* sử dụng: self::$ten_bien(thuoc tinh) || self::ten_ham(phuong thuc);
	*/
	class A{
		static $d 		= 'Lớp A - static';
		
		// Cách gọi tham số static 
		static function get_run(){
			return self::$d;
		}
	}
	
	echo A::$d . '<br/>';	//-> // $d la static
	
	echo A::get_run() . '<br/>';
	
?>