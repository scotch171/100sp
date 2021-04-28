<?php
echo '<pre>';
function isPal($str)
{
    $str = mb_strtolower($str);
    $str = str_replace (' ', '', $str);
    $strNew = iconv('utf-8', 'windows-1251', $str);
    $rev = strrev($strNew);
    $rev = iconv('windows-1251', 'utf-8', $rev);

    if ($str == $rev){
        echo $str;
        return true;
    } else {
        $str = mb_substr($str, 0, -1);
        isPal($str);
    }
}

$str = 'Sum summus musafgasg';
isPal($str);