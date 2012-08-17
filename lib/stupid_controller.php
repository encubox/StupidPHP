<?php

abstract class StupidController {
	public function renderView($controller, $action) {		
		$actionPath = "views/$controller/$action.html.php";		
		if (file_exists($actionPath)) {			
			include($actionPath);
		}
	}
}