<?php

$passwordLen = strlen($password);
$splitPassword = ($passwordLen/2);
echo($splitPassword);
$startPassword = substr($password, 0, floor($splitPassword));
$endPassword = substr($password, ceil($splitPassword) , $passwordLen);
 $saltedPassword = $startPassword.$salt.$endPassword;
echo($password);
echo($salt);
echo($splitPassword);
echo ($saltedPassword);

