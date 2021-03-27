<?php
    require_once 'config.php';

    if(isset($_POST['update'])){
        $userId = $_POST['id'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $mobile = $_POST['mobile'];
        $city = $_POST['city'];

        $query = "UPDATE students SET firstName = '$firstName', lastName = '$lastName', mobile = '$mobile', city = '$city' WHERE id = '$userId'";

        if ($conn->query($query)) {
			header("location: view.php");
		}
		else{
			echo mysqli_error($con);
		}
    }
?>