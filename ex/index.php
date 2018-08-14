<?php
	/**
	* Quick
	*/
	
	
	# Quick 7
	$x = 'foo';
	echo 'Quick 7 <br/>';
	if($x = 'bar'){
		echo '1';
	}else{
		echo '2';
	}
	# 1;
	echo '<br/><br/>';
	
	
?>
<?php
	echo $_GET['foo'];
?>
<!-- Quick 6 -->
<script language='php'>
	echo 'Quick 6 <br/>';
	echo 'Hello world';
	echo '<br/><br/>';
	# Hello world;
</script>


<?php
	# Quick 5
	$array = array(
		'elephant' =>1,
		'tiger' => 0,
		'cat' =>1
	);
	
	$array1 = array('elephant', 'tiger');
	
	echo 'Quick 5 <br/>';
	var_dump(in_array('mouse',$array));
	# bool(true)
	echo '<br/>';
	var_dump(in_array('mouse',$array1));
	# bool(false)
	echo '<br/><br/>';
	######################################
	
	# Quick 3
	echo 'Quick 3 <br/>';
	var_dump (3*4);
	echo '<br/><br/>';
	# int(12)
	######################################
	
	# Quick 2
	echo 'Quick 2 <br/>';
	echo 0500;
	echo '<br/><br/>';
	# 320
	######################################
	
	
	
?>