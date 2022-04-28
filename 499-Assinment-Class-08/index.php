<?php

// $age =20;
// function ageclass($age){
//     if ($age>=3 && $age<=13) {
//         echo "Amne miya Children";
//     }
//     elseif ($age>13 && $age<=19) {
//         echo "Amne miya Teenage";
//     }
//     elseif ($age>19 && $age<=24) {
//         echo "Amne miya Young";
//     }
//     elseif ($age>=60) {
//         echo "Amne miya Young";
//     }
// };
// ageclass($age);

// function area_rectangle($length, $widht){
//     $areaOfRectangle = ($length * $widht);
//     return( $areaOfRectangle);
// };
// echo area_rectangle(10, 10);

// function area_square($length){
//     $areaOfSquare =($length*$length);
//     return($areaOfSquare);
// }
// echo area_square(10);

// function area_triangle($base, $height){
//     $areaOfTriangle = (1/2)*($base*$height);
//     return($areaOfTriangle);
// }
// echo area_triangle(10, 40);


// $parcentige = 10;
// function gpa_grader($parcentige){
//     if ($parcentige>=80) {
//         echo "You got GPA-A+";
//     }
//     elseif ($parcentige>=70) {
//         echo "You got GPA-A";
//     }
//     elseif ($parcentige>=60) {
//         echo "You got GPA-A-";
//     }
//     elseif ($parcentige>=50) {
//         echo "You got GPA-B";
//     }
//     elseif ($parcentige>=40) {
//         echo "You got GPA-C";
//     }
//     elseif ($parcentige<=33) {
//         echo "You Failed";
//     }
//     else{
//         echo "Enter a valid number";
//     }

// };
// gpa_grader($parcentige);

 function ageCalc($dateOfBirth)
    {
        $dob = ($dateOfBirth);
        $now = date("Y-m-d");
        $age = date_diff(date_create($dob), date_create($now));
        return($age->format("%y"));
    }
   echo ageCalc("27-09-2001");
