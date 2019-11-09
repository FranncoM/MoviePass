<?php namespace Models;

    class User
    {
        private $id_user;
        private $name;
        private $lastName;
        private $userName;
        private $email;
        private $password;
        private $level;
        private $purchasedTickets;    // saber que entradas se adquirieron por fechas //
        private $dateTickets;


        public function __construct($id_user="", $name="", $lastName="", $userName="", $email="", $password="", $level=1){

            $this->id_user=$id_user;
            $this->name=$name;
            $this->lastName=$lastName;
            $this->userName=$userName;
            $this->email=$email;
            $this->password=$password;
            $this->level=$level;
        
        }

       /* public function __construct($id_user="", $name, $lastName, $userName, $email, $password, $level=1, $purchasedTickets ="", $dateTickets=""){

            $this->id_user=$id_user;
            $this->name=$name;
            $this->lastname=$lastName;
            $this->user_name=$userName;
            $this->email=$email;
            $this->password=$password;
            $this->level=$level;
            $this->purchasedTickets=$purchasedTickets;
            $this->dateTickets=$dateTickets;
        }*/
        
        public function setId($id_user)
        {
            $this->id_user = $id_user;
        }

        public function setName($name)
        {
            $this->name = $name;

        }

        public function setLastName($lastName)
        {
            $this->lastName = $lastName;

        }

        public function setUserName($userName)
        {
            $this->userName = $userName;
        }

        public function setPassword($password)
        {
            $this->password = $password;
        }

        public function setEmail($email)
        {
            $this->email = $email;

        }

        public function setLevel($level)
        {
            $this->level = $level;

        }

        public function getId()
        {
            return $this->id_user;
        }

        public function getName()
        {
            return $this->name;

        }

        public function getLastName()
        {
            return $this->lastName;

        }

        public function getUserName()
        {
            return $this->userName;
        }

        public function getPassword()
        {
            return $this->password;
        }

        public function getEmail()
        {
            return $this->email;

        }

        public function getLevel()
        {
            return $this->level;

        }

        public function setPurchasedTickets ($purchasedTickets){

            $this->purchasedTickets = $purchasedTickets;
        }
        
        public function getPurchasedTickets (){

            return $this->$purchasedTickets;
        }

        public function setDateTickets ($dateTickets){

            $this->dateTickets = $dateTickets;
        }

        public function getDateTickets (){

            return $this->$dateTickets;
        }
    }
?>