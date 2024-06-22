<?php

$day = $argv[1]??1;

switch($day){
    case 1 :
        $dayOfWeek = 'Sunday';
        break;
    case 2 :
        $dayOfWeek = 'Monday';
        break;
    case 3 :
        $dayOfWeek = 'Tuesday';
        break;
    case 4 : 
        $dayOfWeek = 'Wednesday';
        break;
    case 5 :
        $dayOfWeek = 'Thursday';
        break;
    case 6 : 
        $dayOfWeek = 'Friday';
        break;
    default :
        $dayOfWeek = 'Saturday';
    }
echo 'Today is '.$dayOfWeek;
