<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assinment4</title>
</head>
<body>  

      <h2>Ans to the ques. No-01</h2>
    <form action="#">
    <label for="select">Select Your Date</label>
        <select name="select" id="select">
            <?php
            for ($i=1; $i<=cal_days_in_month(CAL_GREGORIAN,04,2022) ; $i++) { 
               echo $i;
            ?>
            <option value="1"><?php echo $i ?></option>
            <?php    
            }
            ?>       
        </select>
    </form>



    <?php
               echo " <h2> Ans To The Ques. No-02</h2> ";

           //Question 02: 
            //If we print 1-100, our output will be 100 times. But this time you have print out only the odd (বিজোড়) number within 1-100. -->

            for ($i=1; $i<=100; $i+=2) { 
                    echo( "$i - is a Odd number");
                    echo "<br>";
            }

?>


<?php
              echo " <h2> Ans To The Ques. No-03</h2> ";
            // So let’s calculate the factorial of 7.   

            $n = 7;
            $factorial = 1;
            for($i=1; $i<=$n-1; $i++){
                $factorial*=($i+1);
            }
            echo "Factorial of $n= $factorial";

?>

<?php
 echo " <h2> Ans To The Ques. No-04</h2> ";

            // Print out from 100 - 1 using a while loop. 

            for( $i=100; $i>=1; $i-- )
            {
            echo $i;
            echo "<br>";
            }

?>


<?php

  echo " <h2> Ans To The Ques. No-05</h2> ";

            $fruit = ["apple", "orange", "banana","mango"];
            foreach ($fruit as $key => $value) {
                echo "SL No-". $key . "- and product -" . $value . "<br>";
            }
?>

    
</body>
</html>