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