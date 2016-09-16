<?php
    class Contact
    {
        private $name;
        private $phone;
        private $address;
        function __construct($name, $phone, $address)
        {
            $this->name = $name;
            $this->address = $address;
            $this->phone = $phone;



        }
        function setName($new_name)
        {
            $this->name = (string) $new_name;
        }
        function setPhone($new_phone)
        {
            $this->phone = (string) $new_phone;
        }
        function setAddress($new_address)
        {
            $this->address = (string) $new_address;
        }
        function getName()
        {
            return $this->name;
        }
        function getPhone()
        {
            return $this->phone;
        }
        function getAddress()
        {
            return $this->address;
        }
        function save()
        {
            array_push($_SESSION['contacts_list'], $this);
        }
        static function getContacts()
        {
            return $_SESSION['contacts_list'];
        }
        static function clear()
        {
            $_SESSION['contacts_list'] = array();
        }
    }
?>
