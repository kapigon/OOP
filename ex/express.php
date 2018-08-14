<?php
	/*
	/ string : aabaccc : a2b1a1c3
	*/

	$str = 'aabaccc';
	
	//aabaccc -> a2b1a1c3
	function outPut($str){
		$arr = str_split($str);
		$out = '';
		if(count($arr) > 1){
			$count = 1;
			
			// duyệt qua tất cả các kí tự
			for($i = 0; $i< count($arr); $i++){
				// Đếm các ký tự liên tiếp giống nhau
				if($i > 0 && $arr[$i] == $arr[$i-1])
					$count++;
				
				// Hiển thị ra theo dạng aaa->a3 (hiển thị khi kí tự tiếp hiện tại != ký tự sau)
				if($arr[$i] != $arr[$i+1] && $i < count($arr)){
					
					$out .= $arr[$i] . $count;
					
					//gán lại count = 1, để bắt đầu đếm cho ký tự sau
					$count = 1;
				}
			}
		}
		return $out;
	}
	echo $str . ' -> ' .outPut($str);
?>