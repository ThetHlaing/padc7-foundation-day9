<?php

print "<h1>For Loop</h1>";

for ($item = 0; $item < 5; $item++) {
    echo $item . '</br>';
}

print "<h1>While Loop</h1>";

while ($item < 10) {
    echo $item . '<br/>';
    $item++;
}

print "<h1>Do While Loop</h1>";

do {    
    echo $item . '<br/>';
    $item++;
} while ($item < 15);
