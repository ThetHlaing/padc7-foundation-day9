<?php

//Create a switch statement and display "TGIF" on Friday and "Monday Blue" on Monday
//Use strtotime function to change the day
//https://www.php.net/manual/en/function.strtotime.php

$day = Date('D',strtotime('next Friday'));

switch ($day): 
    case 'Fri': {
            echo 'TGIF';
            break;
        }
    case 'Mon': {
            echo 'Monday Blue';
            break;
        }
    default: {
            echo 'Boring day';
        }
endswitch;
