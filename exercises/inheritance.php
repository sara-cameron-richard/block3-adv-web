<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance Exercise</title>
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

    <h3>7. Write a php class known as Person with methods called getFirstName() and getLastName(). Create a subclass called Employee2 that adds a new method named getEmployeeId() and overrides the getLastName() method to include the employee's job title.</h3>

    <?php

    class Person
    {
        public $firstName;
        public $lastName;

        public function getFirstName()
        {
            return $this->firstName;
        }

        public function getLastName()
        {
            return $this->lastName;
        }
    }

    class Employee2 extends Person
    {
        public $employeeId;
        public $employeeTitle;

        public function getEmployeeID()
        {
            return $this->employeeId;
        }

        public function getLastName()
        {
            return $this->lastName . " " . $this->employeeId;
        }
    }

    $person = new Person();
    $person->firstName = "John";
    $person->lastName = "Doe";

    echo $person->getFirstName();
    echo $person->getLastName();


    $employee = new Employee2();
    $employee->firstName = "Jane";
    $employee->lastName = "Doe";
    $employee->employeeId = "123";

    echo $employee->getFirstName();
    echo $employee->getLastName();

    ?>


    <h3>8. Write a php class called Shape with methods called getPerimeter() and getArea(). Create a subclass called Circle that overrides the getPerimeter() and getArea() methods to calculate the area and perimeter of a circle.</h3>

    <?php

    class Shape2
    {

        public $name;
        public $length;
        public $width;

        public function getPerimeter()
        {
            return $this->length + $this->width;
        }
        public function getArea()
        {
            return $this->length * $this->width;
        }
    }

    $square = new Shape2();
    $square->name = "Square";
    $square->length = 5;
    $square->width = 5;
    echo "Perimeter of " . $square->name . " is: " . $square->getPerimeter();
    echo "Area of " . $square->name . " is: " . $square->getArea();

    class Circle extends Shape2
    {

        public $radius;

        public function getPerimeter()
        {
            return $this->radius * $this->radius;
        }
        public function getArea()
        {
            return $this->getPerimeter() * 3.141592;
        }
    }

    $circle = new Circle();
    $circle->name = "Circle";
    $circle->radius = 5;
    echo "Perimeter of " . $circle->name . " is: " . $circle->getPerimeter();
    echo "Area of " . $circle->name . " is: " . $circle->getArea();

    ?>

    <h3>9. Write a php vehicle class hierarchy. The base class should be Vehicle, with subclasses Truck, Car and Motorcycle. Each subclass should have properties such as make, model, year, and fuel type. Implement methods for calculating fuel efficiency, distance traveled, and maximum speed.</h3>

    <?php

    //     You asked “How does one calculate the approximate maximum speed of a vehicle using its stats? Specifically using engine HP, weight, torque, and RPM.”
    // he formula for max speed:
    // vmax = {(2 × Pmax)/(Rho × Cd × A)}^(1/3)
    // Pmax is the peak HP of the engine. Pmax should be reduced by the transmission losses if you know them (15% might be assumed)
    // http://www.superstreetonline.com/how-to/engine/modp-1005-drivetrain-power-loss/ (Drivetrain Power Loss - The 15% "Rule"- Modified Magazine)
    // Rho is the air density (kg/Meter^2)
    // v is the Velocity of the vehicle (Meters/Second)
    // Cd is the Drag Coefficient
    // A is the frontal cross sectional Area of the vehicle (Meters^2).


    class Vehicle2
    {
        public $make;
        public $model;
        public $year;
        public $fuelType;
        public $totLitres;
        public $HP;
        public $weight;
        public $torque;
        public $RPM;
        public $startKilometres;
        public $endKilometres;
        public $startFuel;
        public $endFuel;

        public function getFuelEfficiency()
        {
            return ($this->endKilometres - $this->startKilometres) / ($this->startFuel - $this->endFuel);
        }

        public function getDistanceTraveled()
        {
            return ($this->endKilometres - $this->startKilometres);
        }


        public function getMaxSpeed()
        {
        }
    }

    class Truck extends Vehicle2
    {
    }

    $truck = new Truck();
    $truck->make = "Ford";
    $truck->model = "F-150";
    $truck->year = "2020";
    $truck->fuelType = "Diesel";
    $truck->totLitres = 200;
    $truck->startKilometres = 0;
    $truck->endKilometres = 100;
    $truck->startFuel = 100;
    $truck->endFuel = 15;

    echo "Fuel Efficiency of " . $truck->make . " " . $truck->model . " is: " . $truck->getFuelEfficiency() . " km/L";
    echo "Distance Traveled of " . $truck->make . " " . $truck->model . " is: " . $truck->getDistanceTraveled() . " km";

    class Car2 extends Vehicle2
    {
    }

    $Car2 = new Car2();
    $Car2->make = "Toyota";
    $Car2->model = "Corolla";
    $Car2->year = "2018";
    $Car2->fuelType = "Gas";
    $Car2->totLitres = 100;
    $Car2->startKilometres = 4000;
    $Car2->endKilometres = 4030;
    $Car2->startFuel = 80;
    $Car2->endFuel = 67;

    echo "Fuel Efficiency of " . $Car2->make . " " . $Car2->model . " is: " . $Car2->getFuelEfficiency() . " km/L";
    echo "Distance Traveled of " . $Car2->make . " " . $Car2->model . " is: " . $Car2->getDistanceTraveled() . " km";

    class Motorcycle extends Vehicle2
    {
    }

    $Motorcycle = new Motorcycle();
    $Motorcycle->make = "Harley-Davidson";
    $Motorcycle->model = "Softail";
    $Motorcycle->year = "2023";
    $Motorcycle->fuelType = "Gas";
    $Motorcycle->totLitres = 40;
    $Motorcycle->startKilometres = 735;
    $Motorcycle->endKilometres = 823;
    $Motorcycle->startFuel = 40;
    $Motorcycle->endFuel = 5;

    echo "Fuel Efficiency of " . $Motorcycle->make . " " . $Motorcycle->model . " is: " . $Motorcycle->getFuelEfficiency() . " km/L";
    echo "Distance Traveled of " . $Motorcycle->make . " " . $Motorcycle->model . " is: " . $Motorcycle->getDistanceTraveled() . " km";

    ?>

    <h3>10. Write a php class hierarchy for employees of a company. The base class should be Employee, with subclasses Manager, Developer, and Programmer. Each subclass should have properties such as name, address, salary, and job title. Implement methods for calculating bonuses, generating performance reports, and managing projects.</h3>

    <?php
    ?>

</body>

</html>