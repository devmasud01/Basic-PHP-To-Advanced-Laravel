<?php
// Case study
// SubjectA = 75, SubjectB = 80, SubjectC = 65, SubjectD = 90.
                            
                            echo " <h2>Ans. To The Ques. NO-01</h2> "; 
// Given that Rishitas Subject based marks are,
$subjectA = 75;
$subjectB = 80;
$subjectC = 65;
$subjectD = 90;

// Here,
$totalSub = 4;
$totalmarks = ($subjectA + $subjectB + $subjectC + $subjectD);
$averageMarks = ($totalmarks / $totalSub);
echo " <h4>Rishitas Total Marks is $totalmarks </h4> ";
echo " <h4>Rishitas Average marks is $averageMarks </h4> ";
   echo "<br>";

                            echo " <h2>Ans. To The Ques. NO-02</h2> ";    
                            
// We Found that the ,
$averageMarks = ($totalmarks / $totalSub);

// Now Grade Result will be,                      
if ($averageMarks>=80 && $averageMarks<=100) {
    echo " Congratulations You got GPA A+ ";
}
if ($averageMarks>=70 && $averageMarks<=79) {
    echo " Congratulations You got GPA- A ";
}
if ($averageMarks>=60 && $averageMarks<=69) {
    echo " Congratulations You got GPA- A-  ";
}
if ($averageMarks>=50 && $averageMarks<=59) {
    echo " Congratulations You got GPA- B ";
}
if ($averageMarks>=40 && $averageMarks<=49) {
    echo " Congratulations You got GPA- C ";
}
if ($averageMarks>=01 && $averageMarks<=39) {
    echo " Alas! You are Fail GPA- F ";
}

                            echo " <h2>Ans. To The Ques. NO-03 (Switch Case) </h2> "; 
Case study given for MotorCycle
$kickOrSelf = "start";                           
$removedKey = "stop";                           
$breakPad = "break";                           
$gearPad = "gear";                           
$signalButton = "signal";                           
$headlightButton = "headlight"; 
switch ($kickOrSelf) {
   case "startt":
   echo" Start the bike";
        break;
   case 'stop':
   echo" Stop the bike";
        break;
   case 'break':
   echo" Take a Break";
        break;
   case 'gear':
   echo" Move Faster and Faster";
        break;
   case 'signal':
   echo" Shows a singnal Light";
        break;
   case 'headlight':
   echo" Shows the HeadLight";
        break;
    
    default:
        echo "Enter Valid Button or Pad";
        break;
} 



                          