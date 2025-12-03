<?php

function text($top_side,$base,$height,){
    $triangle_area= $base*$height%2;
$square_area=$base*$height;
$trapezoid_area=($top_side+$base)%2;
}
echo (text(80,60,90));
echo $triangle_area,$square_area,$trapezoid_area;
