<?php
$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);

// $people = array('Taro', 'Jiro', 'Saburo');

// var_dump($people);

echo $people[0];

$people = array(
    'person1' => 'Taro',
    'person2' => 'Jiro',
    'person3' => 'Saburo'
);

var_dump($people);

$people = [
    ['Taro', 25, 'man'],
    ['Jiro',20,'man'],
    ['Soburo', 16,'woman']
];

foreach ($people as $person) {
    echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')';
    echo '';
}