<?php

ini_set('display_errors', 1);

//1.create a class Vegetable with public properties
class Vegetable
{
    public $name;
    public $amount;
    public $taste;
    public $age;
    public $nutrition;
    public $propagation;
    public $method;

    public function getName()
    {
        return $this->name;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function determineAction()
    {
        if ($this->age == 1) {
            return "store this for later";
        } elseif ($this->age == 2) {
            return "cook this now";
        } elseif ($this->age == 3) {
            return "compost this, quickly";
        } else {
            return "Not sure what to do with this vegetable";
        }
    }
}

//2. instiantiate the class by creating 3 new objects
$carrot = new Vegetable();
$carrot->name = 'carrot';
$carrot->amount = '100g';
$carrot->taste = 'sweet';
$carrot->age = '1';
$carrot->nutrition = 'carotene';
$carrot->propagation = 'seed';
$carrot->method = 'roast';

$spinach = new Vegetable();
$spinach->name = 'spinach';
$spinach->amount = '200g';
$spinach->taste = 'bitter';
$spinach->age = '2';
$spinach->nutrition = 'iron';
$spinach->propagation = 'seed';
$spinach->method = 'steam';

$zucchini = new Vegetable();
$zucchini->name = 'zucchini';
$zucchini->amount = '300g';
$zucchini->taste = 'bitter';
$zucchini->age = '3';
$zucchini->nutrition = 'potassium';
$zucchini->propagation = 'seed';
$zucchini->method = 'bake';

//3. test that the properties are set correctly
// echo $carrot->name, " weighs =", $carrot->amount;
// echo $spinach->name, " tastes ", $spinach->taste;
// echo $zucchini->name, " age is ", $zucchini->age;

echo "this vegetable is ", $carrot->name, " and you should ", $carrot->determineAction(), " . "; 
echo "this vegetable is ", $spinach->name, " and you should ", $spinach->determineAction(), " . ";
echo "this vegetable is ", $zucchini->name, " and you should ", $zucchini->determineAction();
