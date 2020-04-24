<?php
function checkEmail($str)
{
    $regex = '/^[A-Za-z0-9]+[A-Za-z0-9.]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match($regex, $str)) {
        echo "Email is valid";
    } else {
        echo "Email is invalid";
    }
}

checkEmail('a@gmail.com');
echo "<br>";
checkEmail('a.b@yahoo.com');
echo "<br>";
checkEmail('abc@hotmail.com');
echo "<br>";
checkEmail('@gmail.com');
echo "<br>";
checkEmail('ab@gmail.');
echo "<br>";
checkEmail('.abc@gmail.com');
echo "<br>";
