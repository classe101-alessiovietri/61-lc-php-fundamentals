<?php

    $number = 5;
    if ($number % 2 == 0) {
        echo $number.' è pari';
    }
    else {
        echo $number.' è dispari';
        echo '<br>';
        echo "$number è dispari";
        echo '<br>';
        $arr = [1, 2, 3];
        echo "$arr è dispari";
        echo '<br>';
        var_dump("$arr è dispari");
        echo '<br>';
        echo "$arr[1] è si";
        echo '<br>';
        $str = 'questo numero';
        echo "$str è si";
        echo '<br>';
        $str = 'questo numero';
        echo "$number + $number è si";
    }

    $arr = [
        1,
        2,
        3
    ];
    var_dump(
        $arr
    );

    // Qui mi da false
    var_dump(
        in_array(4, $arr)
    );

    // Equivalente di arr.push(4)
    $nuovoNumero = 4;
    $arr[] = $nuovoNumero;
    $arr[] = [
        5, 6, 7
    ];

    var_dump(
        $arr
    );

    // Qui mi da true
    var_dump(
        in_array(4, $arr)
    );

    var_dump($arr[1]);

    $arrayComplesso = [
        'chiave' => 'valore',
        7,
        'altra' => 3,
    ];

    var_dump($arrayComplesso);
    var_dump($arrayComplesso[0]);
    var_dump($arrayComplesso['chiave']);

    $arrayMultiDimensionale = [
        'primo' => [
            1, 2, 3
        ],
        [
            4, 5, 6
        ]
    ];

    var_dump($arrayMultiDimensionale[0][1]);

    $person = [
        'firstName' => 'Alessio',
        'lastName' => 'Vietri',
    ];

    // Qui mi da false
    var_dump(
        array_key_exists('age', $person)
    );

    var_dump($person);

    $person['age'] = 31;
    $person['firstName'] = 'Ale';

    var_dump($person);

    // Qui mi da true
    var_dump(
        array_key_exists('age', $person)
    );

    var_dump(
        array_keys($person)
    );

    var_dump(
        array_values($person)
    );

    if (rand(1, 100) % 2 == 0) {
        $valore = 6;
    }
    else {
        $valore = 'Ciao';
    }

    var_dump($valore);
    

    $items = [
        'pane',
        'pasta',
        'latte'
    ];

    foreach($items as $item) {
        var_dump($item);
    }

    foreach($items as $index => $item) {
        var_dump($index);
        var_dump($item);
    }

    $elements = [
        'a' => 'A',
        'b' => 'B',
        'c' => 'C',
    ];

    foreach($elements as $key => $value) {
        var_dump($key);
        var_dump($value);
    }


    $hotels = [
        'Belvedere',
        'Sunny VIllage',
        'Celeste',
    ];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Fundamentals</title>
    </head>
    <body>
        
        <table>

            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Nome hotel
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php
                    foreach ($hotels as $index => $hotel) {
                ?>
                    <tr>
                        <td>
                            <?php echo $index; ?>
                        </td>
                        <td>
                            <?php echo $hotel; ?>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>

        </table>

    </body>
</html>