<?php

echo "<h2>Ans To The Ques. No- One</h2>";
echo "<h3>We know the array which is represent by an index number by default, which starts from 0 is called index array. This is an indexed array. PHP indexed array is also known as numeric array.</h3>";

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

echo "<h2>Ans To The Ques. No- Two</h2>";