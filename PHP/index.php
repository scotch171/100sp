<?php
function isPal($str)
{
    $str = mb_strtolower($str);
    $str = str_replace (' ', '', $str);
    $strNew = iconv('utf-8', 'windows-1251', $str);
    $rev = strrev($strNew);
    $rev = iconv('windows-1251', 'utf-8', $rev);

    if ($str == $rev){
        if (strlen($str) == 1){
            return false;
        }
        echo $str;
        return true;
    } else {
        $str = mb_substr($str, 0, -1);
        $check = isPal($str);
        if ($check === true)
        {
            return true;
        }
        return false;
    }
}

function revIsPal($str)
{
    $check = isPal($str);
    if ($check == false){
        $strNew = iconv('utf-8', 'windows-1251', $str);
        $rev = strrev($strNew);
        $check = isPal($rev);
        if ($check == false){
            echo $str[0];
        }
    }
}


//Задаем строку
$str = 'sdgjsjdbjghslkjdfgasfaaf';
//Узнаем
revIsPal($str);