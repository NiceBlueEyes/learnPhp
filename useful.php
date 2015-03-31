<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 31.03.15
 * Time: 23:22
 */

require_once('debug.inc.php');

#
$vars = get_defined_vars();
 debug($vars, 'get_defined_vars()');

#
$constants = get_defined_constants();
 debug($constants, 'get_defined_constants()');

#
$functions = get_defined_functions();
 debug($functions, 'get_defined_functions()');


?>
