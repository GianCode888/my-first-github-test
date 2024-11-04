<?php

//class School {

    //member variables
    //public $teachers;
    //public $subjects;

    //access modifiers
    //public -> accessible from anywhere, globally
    //private -> accessible only within the class, not globally
    //protected -> accessible only within a class and by the derived class

    //constructor
    //function __construct($param1, $param2){
    //    $this->teachers = $param1;
    //    $this->subjects = $param2;
    //}

    //methods or functions

    //getter and setter function

    //function getTeachers(){
    //    echo $this->teachers .'<br>';
    //}

    //function getSubjects(){
    //    echo $this->subjects .'<br>';
    //}

    //function setTeachers($profs){
    //    $this->teachers = $profs;
    //}

    //function setSubjects($subj){
    //    $this->subjects = $subj;
    //}

//}

    //$myStudents = new School('Mr. Smith', 'Programming');


    //set the value
    //$myStudents->setTeachers('Mr. Smith');
    //$myStudents->setSubjects('Programming');

    //display value
    //$myStudents->getTeachers();
    //$myStudents->getSubjects();


    /* //Inheritance

        class Vehicle{//Parent Class, MAin Class

            //member variables
            public $brand;
            public $color;

            function __construct($brands, $colors){
                $this->brand = $brands;
                $this->color = $colors;
            }

            function showVehicle(){
                echo 'The Vehicle Brand is: ' .$this->brand .'<br>';
                echo 'The Vehicle Color is: ' .$this->color .'<br>';
            }
        }

        

        class Car extends Vehicle{//Child Class, Sub Class

            public $yearModel;

            function __construct($brand, $color, $yearModel){
                //Calling the constructor from the parent class
                parent::__construct($brand, $color);
                $this->yearModel = $yearModel;
            }

            function showVehicle(){
                //Calling the function from the parent class
                parent::showVehicle();
                echo 'The Vehicle Year Model is: ' .$this->yearModel .'<br>';
            }

        }

        //$obj = new Vehicle('BMW', 'BLACK');

        //$obj->showVehicle()

        $obj = new Car('TOYOTA', 'BLACK', 1999);

        $obj->showVehicle(); 
        
        */


/*         //access modifiers

        class MyBankAcc{

            //members variables

            public $accountNumber;
            protected $balance;
            private $pin;

            function __construct($accountNumber, $balance, $pin){
                $this->accountNumber = $accountNumber;
                $this->balance = $balance;
                $this->pin = $pin;
            }

            public function showAccNum(){
                echo 'The Account Number is: ' .$this->accountNumber .'<br>';
            }

            protected function showBalance(){
                echo 'The Balance is: ' .$this->balance .'<br>';
            }

            private function showPin(){
                echo 'The Pin is: ' .$this->pin .'<br>';
            }

            public function showBalances(){
                $this->showBalance();
            }

        }

        $MyBankAcc = new MyBankAcc('1234566', 1000, '1234');

        $MyBankAcc->showAccNum();
        $MyBankAcc->showBalances(); 
*/

    //polymorphism

    //override

    class Animal{//Parent Class or Main Class

        function unqiueSounds(){
            echo 'Every Animal makes a unique sounds' .'<br>';
        }
    }

    class Dog extends Animal{//Child Class or Sub Class

        //override
        function unqiueSounds(){
            echo 'AWWW!! AWWW!!' .'<br>';
        }
    }

    class Cat extends Animal{//Child Class or Sub Class
        function unqiueSounds(){
            echo 'MEOW!! MEOW!!' .'<br>';
        }
    }

    //polymorphism

    function showAnimal(Animal $animal){
        $animal->unqiueSounds();
    }

    $dog = new Dog();
    $cat = new Cat();

    showAnimal($dog);
    showAnimal($cat);





















        
?>