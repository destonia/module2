<?php
$arr1=[[]];
for($i=0;$i<5;$i++){
    array_push($arr1,$i);
    for($j=0;$j<5;$j++){
        array_push($arr1,$i,$j);
    }
}
echo $arr1;