<?php
    namespace Models;

    class User
    {
        private $name;
        private $lastName;
        private $userName;
        private $email;
        private $password;
        private $level;
        

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

        
    }
?>