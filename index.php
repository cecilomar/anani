<?php
////////////////////////////////////////////////////////////////////////////////////////////////////
// @package    	Ananí                                                                             //
// @author		Cecil O. Almonte                                                                  //
// @website		https://github.com/cecilomar/anani                                                //
// @copyright	Copyright (C) Cecilomar Design, Inc. 2014                                         //
// @license		http://www.gnu.org/licenses/gpl.txt                                               //
// @description	Ananí is a generic API infrastructure written in PHP.                             //
////////////////////////////////////////////////////////////////////////////////////////////////////
// This is where the magic happens.                                                               //
////////////////////////////////////////////////////////////////////////////////////////////////////

// Include user defined functions.
include "functions.php"; 

// During development, Ananí will only output json. More languages will be added later.
header("Content-Type: application/json");

// Creates an array from the URL, thus creating our inputs. 
$req_input = explode('/', $_REQUEST['r']);

// Get the defined functions.
$def_functions = get_defined_functions();
$def_functions = $def_functions['user'];

// Requested function.
$req_function = $req_input[0];
unset($req_input[0]);

// Make sure that the function exists.
if(in_array($req_function, $def_functions)){
	// Dynamically call user defined function.
	$dyn_function = $req_function;
	echo json_encode($dyn_function($req_input));
}

?>