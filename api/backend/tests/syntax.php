<?php
//$arr = [
//    1 => "Hydrogen",
//    2 => "Helium",
//    3 => "Lithium",
//    "Beryllium",
//    "Boron"
//];
//
//foreach ($arr as $item){
//    ("$item");
//}

$result = shell_exec("ls");
print($result);