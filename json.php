<?php
	header("content-type:text/html;charset=utf-8");
	$data=array("a"=>1,"b"=>2,"c"=>3);
	foreach($data as $k=>$val){
		 $b[] = sprintf('"%s":"%s"', $k, $val);	
	}
	 echo '{' . join(',', $b) . '}';
//join(separator,array)函数返回由数组元素组合成的字符串
//sprintf() 函数把格式化的字符串写入变量中。此处的"%s":"%s"'很重要  后面的输出就按照此种方式
