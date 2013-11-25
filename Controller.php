<?php 
	if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
	    switch($action) {	    	
	        case 'about':
	        	readfile('about-tab.html');
	        	break;
	        case 'team':
	        	readfile('team-tab.html');
	        	break;
	        case 'prototype':
	        	readfile('prototype-tab.html');
	        	break;
	        case 'sho':
	        	readfile('description/shouvik.html');
	        	break;
	        case 'suk':
	        	readfile('description/sukhwinder.html');
	        	break;
	        case 'amin':
	        	readfile('description/amin.html');
	        	break;
	        case 'faiz':
	        	readfile('description/faizan.html');
	        	break;
	        case 'tom':
	        	readfile('description/tom.html');
	        	break;
	        case 'char':
	        	readfile('description/charles.html');
	        	break;
	        default:
	        	echo 'Front-end issue';
	    }
	}

	if(isset($_POST['actionTransparentLoad']) && !empty($_POST['actionTransparentLoad'])) {
		$actionTransparentLoad = $_POST['actionTransparentLoad'];
		switch($actionTransparentLoad) {
			case 'test':
				echo 'View About';
				break;
		}
	}
?>