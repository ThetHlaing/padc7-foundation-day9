<?php

//This is comment
//Create a string that will holde the following sentense and display on the page
//Hola, a variable like $1_something is not allowed in php but $something is okay

$var = "<pre>Hola, a variable like $1_something \n is not \t allowed \r in php but  is okay</pre>";

$var2 = '<pre>Hola, a variable like $1_something \n is not \t allowed \r in php but  is okay</pre>';

echo $var.$var2;

echo $var2;
