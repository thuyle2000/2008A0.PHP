<?php

if (isset($_GET['n'])) {
    $n = $_GET['n'];
    if ($n < 0) {
        echo json_encode(['success' => 1]);
    } else {
        $fn = Fibo($n);
    }

    $a = ['success' => 2, 'fibo' => $fn];
    echo json_encode($a);
} else {
    echo json_encode(array('success' => 3));
}


// if (isset($_GET['n'])) {
//     $n = $_GET['n'];
//     $f0 = 0;
//     $f1 = 1;
//     $fn = 1;
//     if ($n < 0) {
//         echo json_encode(['success' => 1]);
//     } else if ($n > 1) {
//         for ($i = 2; $i < $n; $i++) {
//             $fn = $f1 + $f0;
//             $f0 = $f1;
//             $f1 = $fn;
//         }
//     }
//     $a = ['success' => 2, 'fibo' => $fn];
//     //var_dump( $a );
//     echo json_encode($a);
// } else {
//     echo json_encode(array('success' => 3));
// }


function Fibo($n){
    $f0 = 0;
    $f1 = 1;
    $fn = 1;
    if ($n == 0) {
        return $f0;
    } 
    for ($i = 1; $i < $n; $i++) {
        $fn = $f1 + $f0;
        $f0 = $f1;
        $f1 = $fn;
    }
    return $fn;
}

?>