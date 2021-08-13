<?php

$days = 5;

switch ($days) {
    case 0:
        echo "Monday";
        break;

    case 1:
        echo "Tue";
        break;
    case 2:
        echo "Wed";
        break;
    case 3:
        echo "Thu";
        break;
    case 4:
        echo "Fri";
        break;
    case 5:
        echo "Sat";
        // break;
    case 6:
        echo "Sun";
        // break;
    default:
        echo "Unknow reference";
}
