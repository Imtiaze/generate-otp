<?php

function generateNumericOTP($n)
{
    $generator = '1234506789';

    $result = '';

    for($i = 0; $i < 5; $i++) 
    {
        $result .= substr($generator, (rand() % strlen($generator)), 1);
    }

    return $result;
}

$n = 5;

print_r(generateNumericOTP($n));