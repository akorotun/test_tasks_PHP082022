<?php

// Task 1
// Code: echo myArrowFunc(3);
// Result: <<<>>>
echo 'Task 1<br>';

function myArrowFunc($numberArrows):string
{
    $arrowsLeft = '';
    $arrowsRight = '';
    for ($i = 1; $i <= $numberArrows; $i++){
        $arrowsLeft .= '<';
        $arrowsRight .= '>';
    }
    return $arrowsLeft.$arrowsRight;
}
echo myArrowFunc(4);
echo '<hr>';

// Task 2
// You need to write a function to sort array of delivery methods;
echo 'Task 2<br>';

$deliveryMethodsArray = [
    [
        'code' => 'dhl',
        'customer_costs' => [
            22 => '1.000',
            11 => '3.000',
        ]
    ],
    [
        'code' => 'fedex',
        'customer_costs' => [
            22 => '4.000',
            11 => '6.000',
        ]
    ]
];

function sortDeliveryMethods($array):array
{
    $newArray = [];
    foreach($array as $method){
        foreach ($method['customer_costs'] as $itemId => $cost){
            $newArray[$itemId][$method['code']] = $cost;
        }
    }
    return $newArray;
}
$result = sortDeliveryMethods($deliveryMethodsArray);
echo '<pre>';
var_dump($result);






