<?php

class Example {
	/*
	 *	This method is called for the following URL:
	 *		[api-root]/example/
	 *	or, alternatively:
	 *		[api-root]/example/index
	 */
	public static function index() {
		return array(
			"hello" => TRUE
		);
	}
	
	/*
	 *	This method is called for the following URL:
	 *		[api-root]/example/subExample/alternateSubExample/
	 *	Note: method names, and URLs are case-INsensitive. 
	 *	      However, filenames must be lowercase.
	 */
	public static function alternateSubExample() {
		return array(
			"hello" => TRUE
		);
	}
}

return Example;

?>