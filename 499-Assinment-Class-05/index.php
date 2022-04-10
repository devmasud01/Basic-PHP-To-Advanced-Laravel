<?php



        #---------------1---------------
echo "<h2>Ans To The Ques. No- One</h2>";
echo "<h3>We know the array which is represent by an index number by default, which starts from 0 is called index array. This is an indexed array. PHP indexed array is also known as numeric array.</h3>"; #Answer_Done_Part_1

$array = [12, 34, 2, 6, 78];

foreach ($array as $key => $mixval) {
    if ($mixval%2==0  && $mixval>2) {
        continue;
    }
    else {
        echo "$mixval -- is a Prime Number"; #Answer_Done_Part_2
        "<br>";
    }  
} 






     #---------------2---------------
echo "<h2>Ans To The Ques. No- Two</h2>";

$products =[
    $realmi_9i =[4, 64, 5000, 18774],
    $motorola_g60 =[6, 128, 5000, 28774],
    $oppo_a16 =[4, 64, 6000, 16999],
    $vivo_y21 =[4, 64,5000, 15999],
    $poco_m3 =[6, 128,5000, 17999],
    $motorola_edge =[8, 128,5000, 37999],

];
echo " <h3> A multidimensional array is an array containing one or more arrays. This arry contain 5 single arrays for this reason it is a multidimensional array.
</h3>"; #Answer_Done







   #----------3-------------
echo "<h2>Ans To The Ques. No- Three</h2>";

$array = [0, 10, 80, 67, 60, 89, 91, 56, 45, 30, 95, 83, 99];
#Suppose,
$maxValue = 0;
#Now,
foreach ($array as $key => $value) {
    if ($value > $maxValue) {
       $maxValue =$value;
    }
}
echo $maxValue; #Answer_Done





#--------------4---------------------
echo "<h2>Ans To The Ques. No- Four</h2>";
$array =[0, 10, 80, 67, 60, 89, 91, 56, 45, 30, 95, 83, 99];
foreach ($array as $key => $value) {
    if ($key+=3) {
        echo $value;
    }
    else {
       continue;
    }
}

