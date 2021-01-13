<?php $title = 'Template'; include ("templates/top.php");

    class Person{
        private $firstName;
        private $surname;
        private $occupancy;

        function __construct($firstname, $surname, $occupancy){
            $this->firstName = $firstname;
            $this->surname = $surname;
            $this->occupancy = $occupancy;
        }

        function getName(){
            $fullname = $this->firstName . " " . $this->surname;
            return $fullname;
        }

        function setName($firstname, $surname){
            $this->firstName = $firstname;
            $this->surname = $surname;
        }

        function display(){
            $rtn = "Name: " . $this->firstName . " " . $this->surname . "<br>Occupancy: " . $this->occupancy;
            return $rtn;
        }
    }

    $person1 = new Person("Harry", "Wijnschenk", "Software Engineering");

    echo $person1->getName() . "<br>";
    $person1->setName("Harry", "Hatton");
    echo $person1->display();
    

?>


</body>
</html>