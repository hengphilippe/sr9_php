<?php

// 4. L pattern
for ($a = 0; $a < 7; $a++) {

    // for ($b = 0; $b < $a; $b++) {
    //     echo "* ";
    // }
    if ($a == 6) {
        for ($b = 0; $b < 4; $b++) {
            echo "* ";
        }
    }
    echo "*";
    echo "\n";
}

// do ...while 
// do {
//     echo $a . "\n";
//     $a++;
// } while ($a < 7);

// while ... loop
// while ($a < 10) {

//     if ($a == 5) {
//         $a++;
//         continue;
//     }
//     echo $a . "\n";
//     $a++;
// }
// $phones = array(
//     "iPhone" => 1450,
//     "SamSung" => 980,
//     "Nokai" => 330,
//     "Oppo" => 850
// );

// foreach ($phones as $name => $x) {
//     echo $name . " price is " . $x . "\n";
// }
