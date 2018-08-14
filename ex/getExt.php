<?php
	/*
	/ Lấy phần mở rộng của file
	*/

	$filename = 'filename.txt';	//	-> txt
	
	function getExt($filename)
	{
		// Tìm kiếm đến vị trị '.' bằng strrpos -> dùng substr để cắt chuỗi
		return substr($filename, strrpos($filename, '.') + 1);
	}
	echo $str . ' -> ' .getExt($filename);
	
	echo '<br/>' . strrpos($filename, '.');
	
?>