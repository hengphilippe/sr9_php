<?php

// Numberic array
// Associative array || dimentional array
$phones = array(
    "iPhone" => 1450,
    "SamSung" => 980,
    "Nokai" => 330,
    "Oppo" => 850
);

$sort = sort($phones);

echo "<pre>" . print_r($sort, 1) . "</pre>";

// echo $phones['SumSung'];
// Multi Dimentional array
// $phones = array(
//     "iPhone" => array(
//         "256G" => 1300,
//         "512G" => array(
//             "smart" => "070 790 333",
//             "Cellcard" => "012 909 999"
//         )
//     ),
//     "SamSung" => array(
//         "5G" => 990,
//         "4G" => 860
//     ),
//     "Nokai" => 330,
//     "Oppo" => 850
// );
// echo $phones["iPhone"]["512G"][0];
// // print_r($phones);
// var_dump($phones);
