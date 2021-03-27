<?php
    require_once 'config.php';

    if(isset($_POST['submit'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $mobile = $_POST['mobile'];
        $city = $_POST['city'];

        $query = "INSERT INTO students VALUES(NULL, '$firstName', '$lastName', '$mobile', '$city')";
        
        if($conn->query($query)){
            header('location: view.php');
        }else{
            echo mysqli_error($conn);
        }
    }
?>