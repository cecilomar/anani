<?php
////////////////////////////////////////////////////////////////////////////////////////////////////
// @package    	Ananí                                                                             //
// @author		Cecil O. Almonte                                                                  //
// @website		https://github.com/cecilomar/anani                                                //
// @copyright	Copyright (C) Cecilomar Design, Inc. 2014                                         //
// @license		http://www.gnu.org/licenses/gpl.txt                                               //
// @description	Ananí is a generic API infrastructure written in PHP.                             //
////////////////////////////////////////////////////////////////////////////////////////////////////
// This is where you should write or include your user defined functions.                         //
////////////////////////////////////////////////////////////////////////////////////////////////////

// Test Function, returns date.
function test($arg){
	$arg['custom']['description'] = 'This function just outputs whatever you put in the URL.';
	$arg['custom']['generated'] = date('r');
	return $arg;
}

?>