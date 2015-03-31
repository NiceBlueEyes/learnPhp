<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 31.03.15
 * Time: 23:24
 */
function debug($var = 0, $str){
    echo 'Debug: '.$str.'<br>';
    echo '<hr><pre>';
    print_r($var);
    echo '</pre>';
    echo 'Ende Debug: '.$str.'<br>';
    echo '<hr><hr>';
}
?>
