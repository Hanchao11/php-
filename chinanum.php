<?php
	header("content-type:text/html;charset=utf-8");
	function chinanum($num){
		$china=array('零','一','二','三','四','五','六','七','八','九');
		$arr=str_split($num);
		for($i=0;$i<count($arr);$i++){
			echo $china[$arr[$i]];
			}
		}
	chinanum(34562342);
?> 