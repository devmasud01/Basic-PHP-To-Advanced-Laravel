<?php

$age =20;
function ageclass($age){
    if ($age>=3 && $age<=13) {
        echo "Amne miya Children";
    }
    elseif ($age>13 && $age<=19) {
        echo "Amne miya Teenage";
    }
    elseif ($age>19 && $age<=24) {
        echo "Amne miya Young";
    }
    elseif ($age>=60) {
        echo "Amne miya Young";
    }
};
ageclass($age);

// $length = 10;
// $widht = 12;
// $height = 6;
// function area($length, $widht, $height){
//     if (){
//         echo "Area of Rectangle is : " . $length*$widht;
//     }
    

// };
// area($length, $widht, $height);

$parcentige = 10;
function gpa_grader($parcentige){
    if ($parcentige>=80) {
        echo "You got GPA-A+";
    }
    elseif ($parcentige>=70) {
        echo "You got GPA-A";
    }
    elseif ($parcentige>=60) {
        echo "You got GPA-A-";
    }
    elseif ($parcentige>=50) {
        echo "You got GPA-B";
    }
    elseif ($parcentige>=40) {
        echo "You got GPA-C";
    }
    elseif ($parcentige<=33) {
        echo "You Failed";
    }
    else{
        echo "Enter a valid number";
    }

};
gpa_grader($parcentige);


