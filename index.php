<?php
function checkEmail($str)
{
    $regex = '/^\w+\w*@\w+(\.\w+)$/';
    if (preg_match($regex, $str)) {
        echo "Email is valid";
    } else {
        echo "Email is invalid";
    }
}

checkEmail('a@gmail.com');
echo "<br>";
checkEmail('ab@yahoo.com');
echo "<br>";
checkEmail('abc@hotmail.com');
echo "<br>";
checkEmail('@gmail.com');
echo "<br>";
checkEmail('ab@gmail.');
echo "<br>";
checkEmail('@#abc@gmail.com');
echo "<br>";
