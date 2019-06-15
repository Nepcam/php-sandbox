<?php
    #Array - Avariable that holds multiple values
    /*
      - Indexed
      - Associative
      - Multi_dimensional
    */

    // INDEXED
    $people = array('Mason', 'Darius', 'Liam');
    $ids = array(23, 55, 12);
    $cars = ['Honda', 'Toyota', 'Ford'];
    $cars[3] = 'Chevy';
    $cars[] = 'BMW';

    // echo count($cars);
    // print_r('cars');
    // var_dump($cars);
    
    // echo $people[1]; // because arrays are zero based - output = 'Darius'
    // echo $ids[2]; // output = 12
    // echo $cars[4];

    // ASSOCIATED ARRAYS
    $people = array('Cam' => 42, 'Liam' => 12, 'Hingaroa' => 62);
    $ids = [21 => 'Cam']

    // echo $ids[21] // output = 'Cam'
?>