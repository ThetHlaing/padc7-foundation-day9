<?php 

//Create a variable call $variable_a and constant VAR_B


$variable_a = true;

define("VAR_B", false);

$value = VAR_B and $variable_a ;

if( VAR_B and $variable_a ){
    echo 'true';
}
else{
    echo 'false';
}

echo $value . ' <- value is here';
