<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Inheritance Exercise</h1>

    <h3>1. Write a php class called Animal with a method called makeSound(). Create a subclass called Cat that overrides the makeSound() method to bark.</h3>

    <?php

    ini_set('display_errors', 1);


    class Animal1
    {
        public function makeSound()
        {
            echo "roar";
        }
    }

    $testAnimal = new Animal1();
    $testAnimal->makeSound();

    class Cat extends Animal1
    {
        public function makeSound()
        {
            echo "meow";
        }
    }

    $testCat = new Cat();
    $testCat->makeSound();
    ?>

    <h3>2. Write a php class called Vehicle with a method called drive(). Create a subclass called Car that overrides the drive() method to print "Repairing a car".</h3>



    <?php
    class Vehicle
    {
        public function drive()
        {
            echo "Driving a car";
        }
    }

    $testVehicle = new Vehicle();
    $testVehicle->drive();

    class Car extends Vehicle
    {
        public function drive()
        {
            echo "Repairing a car";
        }
    }

    $testCar = new Car();
    $testCar->drive();
    ?>

    <h3>3. Write a php class called Shape with a method called getArea(). Create a subclass called Rectangle that overrides the getArea() method to calculate the area of a rectangle.</h3>

    <?php
    class Shape
    {
        public function getArea()
        {
            echo "Calculate the area of a shape by magic!";
        }
    }

    $circle = new Shape();
    $circle->getArea();

    class Rectangle extends Shape
    {
        private $width;
        private $length;

        public function __construct($width, $length)
        {
            $this->width = $width;
            $this->length = $length;
        }

        public function getArea()
        {
            $areaRec = $this->width * $this->length;
            echo "The area of this rectangle is: " . $areaRec . " cm<sup>2</sup>";
        }
    }

    $rectangle = new Rectangle(18, 42);
    $rectangle->getArea();

    ?>

    <h3>4. Write a php class called Employee with methods called work() and getSalary(). Create a subclass called HRManager that overrides the work() method and adds a new method called addEmployee().</h3>

    <?php
    class Employee
    {
        public function work()
        {
            echo "This is my work function.";
        }
        public function getSalary()
        {
            echo "This is my getSalary function.";
        }
    }

    $employee1 = new Employee();
    $employee1->work();
    $employee1->getSalary();

    class HRManager extends Employee
    {
        public function work()
        {
            echo "This is a work function override!";
        }

        public function AddEmployee()
        {
            echo "This is my AddEmployee function. Yay!";
        }
    }

    $hrManager = new HRManager();
    $hrManager->work();
    $hrManager->AddEmployee();
    ?>

    <h3>5. Write a php class known as "BankAccount" with methods called deposit() and withdraw(). Create a subclass called SavingsAccount that overrides the withdraw() method to prevent withdrawals if the account balance falls below one hundred.</h3>

    <?php
    class BankAccount
    {

        private $balance;

        public function deposit($deposit)
        {
            $this->balance += $deposit;
        }
        public function withdraw($withdraw)
        {
            $this->balance -= $withdraw;
        }

        public function getBalance()
        {
            return $this->balance;
        }
    }

    class SavingsAccount extends BankAccount
    {
        public function withdraw($withdraw)
        {

            $currentBalance = $this->getBalance();

            parent::withdraw($withdraw); //calling the method from parent class

            if ($currentBalance - $withdraw < 100) {
                echo "Your account is to low to make this withdrawl.";
            }
        }
    }

    $savaccount = new SavingsAccount();
    $savaccount->deposit(100);
    $savaccount->withdraw(50);

    echo "Your balance is: " . $savaccount->getBalance();

    $savaccount2 = new SavingsAccount();
    $savaccount2->deposit(200);
    $savaccount2->withdraw(25);

    echo "Your balance is: " . $savaccount2->getBalance();
    ?>

    <h3>6. Write a php class called Animal with a method named move(). Create a subclass called Cheetah that overrides the move() method to run.</h3>

    <?php
    class Animal2
    {
        public function move()
        {
            echo "This animal is moving.";
        }
    }

    $animal2 = new Animal2();
    $animal2->move();

    class Cheetah extends Animal2
    {
        public function move()
        {
            echo "Look out! The cheetah is running!";
        }
    }

    $cheetah = new Cheetah();
    $cheetah->move();
    ?>

    <h3>7. Write a php class known as Person with methods called getFirstName() and getLastName(). Create a subclass called Employee that adds a new method named getEmployeeId() and overrides the getLastName() method to include the employee's job title.</h3>

    <?php
    ?>

    <h3>8. Write a php class called Shape with methods called getPerimeter() and getArea(). Create a subclass called Circle that overrides the getPerimeter() and getArea() methods to calculate the area and perimeter of a circle.</h3>

    <?php
    ?>

    <h3>9. Write a php vehicle class hierarchy. The base class should be Vehicle, with subclasses Truck, Car and Motorcycle. Each subclass should have properties such as make, model, year, and fuel type. Implement methods for calculating fuel efficiency, distance traveled, and maximum speed.</h3>

    <?php
    ?>

    <h3>10. Write a php class hierarchy for employees of a company. The base class should be Employee, with subclasses Manager, Developer, and Programmer. Each subclass should have properties such as name, address, salary, and job title. Implement methods for calculating bonuses, generating performance reports, and managing projects.</h3>

    <?php
    ?>

</body>

</html>