<?php

function autoload($class) {
	$dirs = array('Controllers', 'Services', 'Models');

	foreach ($dirs as $dir) {
		$file = $dir . DIRECTORY_SEPARATOR . $class . '.php';
		if(file_exists($file)) {
			require($file);
		}
	}
} 

spl_autoload_register('autoload');