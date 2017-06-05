<?php
	header("content-type:text/html;charset=utf-8");
	$data=array("a"=>1,"b"=>2,"c"=>3);
	foreach($data as $k=>$val){
		 $b[] = sprintf('"%s":"%s"', $k, $val);	
	}
	 echo '{' . join(',', $b) . '}';