<?php
	$var;
	$var = 'text';
	$var .= 4;
	echo gettype($var);
	
	$meinarr = array();
	$meinarr[] = 5;
	$meinarr['test'] = 8;
	$meinarr['muster'] = array();
	$meinarr['muster'][] = 12;
	print_r($meinarr);

	$mein2array = array(5,'test'=>8,'muster'=>array(12));
	print_r($mein2array);
	
	foreach($mein2array as $key => $value){
		if(gettype($value)=="array"){
			foreach($value as $subkey => $subvalue){
				echo $key. '=>' . $subkey . '=' .$subvalue;			
			}		
		}else{
			echo $key . '=' . $value;	
		}
	}	
	
?>