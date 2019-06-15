<?php

$var_a = $_GET["var_a"];

//echo $var_a == 'hello' ? 'This is hello' : 'This is not hello';

echo $var_a ?? 'this is not assign nor false';

// if ($var_a == 'hello') :
//     echo 'Hello come from query';
// elseif ($var_a == 'hi') :
//     echo 'Hi from query';
// else :
//     echo 'This is in the else statement';
// endif;

// switch ($var_a): 
//     case 'hello': {
//             echo 'Hello come from query';
//             break;
//         }
//     case 'hi': {
//             echo 'Hi from query';
//             break;
//         }
//     default: {
//             echo 'This is in the else statement';
//         }
// endswitch;
