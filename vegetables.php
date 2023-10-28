<?php

ini_set('display_errors', 1);
//create a class with private properties
class Vegetable
{
    private $name;
    private $amount;
    private $age;
    private $method;

    //create functions so that private properties are accessible outside class

    //function to set and get NAME
    // public function setName($name)
    // {
    //     $this->name = $name;
    // }

    //now using __constructor
    public function __construct($name, $amount, $age, $method)
    {
        $this->name = $name;
        $this->amount = $amount;
        $this->age = $age;
        $this->method = $method;
    }


    public function getName()
    {
        return $this->name;
    }

    //function to set and get AMOUNT
    // public function setAmount($amount)
    // {
    //     $this->amount = $amount;
    // }
    public function getAmount()
    {
        return $this->amount;
    }

    //function to set and get AGE
    // public function setAge($age)
    // {
    //     $this->age = $age;
    // }
    // public function getAge()
    // {
    //     return $this->age;
    // }

    //function to set and get ACTION
    // public function setAge($age)
    // {
    //     $this->age = $age;
    // }
    public function getAge() //age includes a funtion that does not return the age but suggestions for the user
    {
        if ($this->age == 1) {
            return "store this for later";
        } elseif ($this->age == 2) {
            return "cook this now";
        } elseif ($this->age == 3) {
            return "compost this, quickly";
        } else {
            return "verify the expiration date";
        }
    }

    //function to set and get METHOD
    // public function setMethod($method)
    // {
    //     $this->method = $method;
    // }
    public function getMethod()
    {
        return $this->method;
    }
}

//create 3 objects (carrot, spinach, zucchini) and set their properties (name, amount, age, method)

//carrot
// $carrot = new Vegetable();

// //Using SET/GET
// $carrot->setName('carrot');
// echo $carrot->getName();

// $carrot->setAmount('200g');
// echo $carrot->getAmount();

// $carrot->setAge('1');
// echo $carrot->getAge();

// $carrot->setMethod('roast');
// echo $carrot->getMethod();

//using __CONSTRUCT
$carrot = new Vegetable('carrot', '200g', '1', 'roast');

echo $carrot->getName();
echo $carrot->getAmount();
echo $carrot->getAge();
echo $carrot->getMethod();

//spinach
// $spinach = new Vegetable();

// //Using SET/GET
// $spinach->setName('spinach');
// echo $spinach->getName();

// $spinach->setAmount('400g');
// echo $spinach->getAmount();

// $spinach->setAge('2');
// echo $spinach->getAge();

// $spinach->setMethod('steam');
// echo $spinach->getMethod();


//using __CONSTRUCT
$spinach = new Vegetable('spinach', '400g', '2', 'steam');

echo $spinach->getName();
echo $spinach->getAmount();
echo $spinach->getAge();
echo $spinach->getMethod();

//zucchini
// $zucchini = new Vegetable();

//Using SET/GET
// $zucchini->setName('zucchini');
// echo $zucchini->getName();

// $zucchini->setAmount('500g');
// echo $zucchini->getAmount();

// $zucchini->setAge('3');
// echo $zucchini->getAge();

// $zucchini->setMethod('bake');
// echo $zucchini->getMethod();

//using __CONSTRUCT
$zucchini = new Vegetable('zucchini', '500g', '3', 'bake');

echo $zucchini->getName();
echo $zucchini->getAmount();
echo $zucchini->getAge();
echo $zucchini->getMethod();


//**FIRST ATTEMPT AT CODE */
//1.create a class Vegetable with public properties
// class Vegetable
// {
//     public $name;
//     public $amount;
//     public $taste;
//     public $age;
//     public $nutrition;
//     public $propagation;
//     public $method;

//     public function getName()
//     {
//         return $this->name;
//     }

//     public function getAmount()
//     {
//         return $this->amount;
//     }

//     public function getAge()
//     {
//         return $this->age;
//     }

//     public function getMethod()
//     {
//         return $this->method;
//     }

//     public function getAction()
//     {
//         if ($this->age == 1) {
//             return "store this for later";
//         } elseif ($this->age == 2) {
//             return "cook this now";
//         } elseif ($this->age == 3) {
//             return "compost this, quickly";
//         } else {
//             return "verify the expiration date";
//         }
//     }
// }

// //2. instiantiate the class by creating 3 new objects
// $carrot = new Vegetable();
//     $carrot->name = 'carrot';
//     $carrot->amount = '100g';
//     $carrot->taste = 'sweet';
//     $carrot->age = '1';
//     $carrot->nutrition = 'carotene';
//     $carrot->propagation = 'seed';
//     $carrot->method = 'roast';

// $spinach = new Vegetable();
//     $spinach->name = 'spinach';
//     $spinach->amount = '200g';
//     $spinach->taste = 'bitter';
//     $spinach->age = '2';
//     $spinach->nutrition = 'iron';
//     $spinach->propagation = 'seed';
//     $spinach->method = 'steam';

// $zucchini = new Vegetable();
//     $zucchini->name = 'zucchini';
//     $zucchini->amount = '300g';
//     $zucchini->taste = 'bitter';
//     $zucchini->age = '3';
//     $zucchini->nutrition = 'potassium';
//     $zucchini->propagation = 'seed';
//     $zucchini->method = 'bake';

// //3. test that the properties are set correctly
// // echo $carrot->name, " weighs =", $carrot->amount;
// // echo $spinach->name, " tastes ", $spinach->taste;
// // echo $zucchini->name, " age is ", $zucchini->age;

// echo "this vegetable is ", $carrot->name, " ", $carrot->getName(), " and you should ", $carrot->getAction(), " . "; 
// echo "this vegetable is ", $spinach->name, " and you should ", $spinach->getAction(), " . ";
// echo "this vegetable is ", $zucchini->name, " and you should ", $zucchini->getAction();
