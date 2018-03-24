<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(isset($_POST['submitBtn']))
        {
            $username = $_POST['data_username'];
            $password = $_POST['data_password'];
            $firstName = $_POST['data_firstName'];
            $lastName = $_POST['data_lastName'];
            $email = $_POST['data_email'];
            $contactNumber = $_POST['data_contactNumber'];
            $NID = $_POST['data_NID'];
            $joinDate = $_POST['data_joinDate'];
            $package = $_POST['data_package'];
            $ipAddress = $_POST['data_ipAddress'];
            $area = $_POST['data_area'];
            $address = $_POST['data_address'];

            echo $username . "<br>";
            echo $password . "<br>";
            echo $firstName . "<br>";
            echo $lastName . "<br>";
            echo $email . "<br>";
            echo $contactNumber . "<br>";
            echo $NID . "<br>";
            echo $joinDate . "<br>";
            echo $package . "<br>";
            echo $ipAddress . "<br>";
            echo $area . "<br>";
            echo $address . "<br>";
        
        }
    }
    

?>