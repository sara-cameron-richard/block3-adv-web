<?php

ini_set('display_errors', 1);

class Vegetable
{
    public $amount;
    public $taste;
    public $age;
    public $nutrition;
    public $propagation;
    public $method;
}

$carrot = new Vegetable();
$carrot->amount = '100g';
$carrot->taste = 'sweet';
$carrot->age = '1';
$carrot->nutrition = 'carotene';
$carrot->propagation = 'seed';
$carrot->method = 'roast';

echo ...??? $carrot->amount;

$spinach = new Vegetable();
$spinach->amount = '200g';
$spinach->taste = 'bitter';
$spinach->age = '2';
$spinach->nutrition = 'iron';
$spinach->propagation = 'seed';
$spinach->method = 'steam';

echo $spinach->taste;

$zucchini = new Vegetable();
$zucchini->amount = '300g';
$zucchini->taste = 'bitter';
$zucchini->age = '3';
$zucchini->nutrition = 'potassium';
$zucchini->propagation = 'seed';
$zucchini->method = 'bake';

echo $zucchini->age;
