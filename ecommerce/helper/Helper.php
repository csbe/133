<?php

class Helper{
	public static function load($file){
		$serialize = file_get_contents($file);
		return unserialize($serialize);
	}
}

?>