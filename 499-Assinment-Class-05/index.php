<?php
$array = [12, 34, 2, 6, 78];

foreach ($array as $key => $mixval) {
    if ($mixval%2==0  && $mixval>2) {
        continue;
    }
    else {
        echo "$mixval -- is a Prime Number";
        "<br>";
    }  
} 