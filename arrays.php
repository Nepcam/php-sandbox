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
    $cars[3] = 'Chevy'; // adding 'Chevy' to the $car array in [3] position
    $cars[] = 'BMW';

    // echo count($cars); // Counts items in the $cars array
    // print_r('cars');
    // var_dump($cars);
    
    // echo $people[1]; // because arrays are zero based - output = 'Darius'
    // echo $ids[2]; // output = 12
    // echo $cars[4];

    // ASSOCIATED ARRAYS
    $people = array('Cam' => 42, 'Liam' => 12, 'Hingaroa' => 62);
    $ids = [21 => 'Cam'];

    // echo $people['Cam]
    // echo $ids[21] // output = 'Cam'
    // $people['Mason'] = 19;
    // echo $people['Mason'];
    // print_r($people);
    // var_dump($people)

    // MULTI-DIMENSIONAL
    $cars = array(
      array('Honda', 20, 10),
      array('Toyota', 30, 20),
      array('Ford', 23, 12)
    );

    echo $cars[1][0]; // output = 'Toyota'
?>