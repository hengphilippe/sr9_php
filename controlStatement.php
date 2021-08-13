<?php

// $a = "Jonh.Scott";
// if ($a === $b) {
//     echo "A=B";
// } else {
//     echo "A#B";
// }
// echo ($a === true) ? "A=B" : "A#B";
// echo ($a) ? "A=B" : "A#B";

// echo $a ?? "A is not exist";

$age = 35;

if ($age <= 12) {
    echo "Kid";
} else if ($age <= 18) {
    echo "Tennager";
} else if ($age < 35) {
    echo "Adult";
} else {
    echo "Legend";
}
