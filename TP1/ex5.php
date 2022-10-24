<?php

function verificationPassword($pwd)
{

     $uct=preg_match('/[A-Z]/', $pwd);
    $lct=preg_match('/[a-z]/',$pwd);
    $dt=preg_match('/\d/',$pwd);
    if (strlen($pwd)>=8 && $uct && $lct && $dt)
    {
        echo("Tout est correct");
        return true;
    }
return false;
}
?>

