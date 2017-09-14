<?php
$myNum = 0;
function myByVal($num){
    for ($i=0; $i<5;$i++) {
        $num = $i;
        echo "$num<br/>";
    }
}

function myByRef(&$num) {
    for ($i=0; $i < 5; $i++){
        $num = $i;
        echo "$num<br/>";
    }
}
myByVal($myNum);
echo "Orig is $myNum<br/>";
myByRef($myNum);
echo "Final is $myNum<br/>";
?>
