<?php
	header("content-type:text/html;charset=utf-8");
	function chinanum($num){
		$china=array('零','一','二','三','四','五','六','七','八','九');
		$arr=str_split($num);//将字符串通过str_split函数转换位数组
		//str_split(string,length) length可选规定每个数组元素的长度 默认是1  string必须 规定要分割的字符串
		for($i=0;$i<count($arr);$i++){
			echo $china[$arr[$i]];
			}
		}
	chinanum(34562342);
?> 
