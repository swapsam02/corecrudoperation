<?php
    require_once 'config.php';

    $query = "SELECT * FROM students";
    $result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid" style="margin-top:30px;">
        <div class="row justify-content-md-center">
            <div class="col-8">
                <div class="row" style="padding: 10px;">
            <div class="col-12 col-md-10">
                <span style="text-align: center; font-size: 24px; font-weight: bold;">Student List</span>
            </div>
            <div class="col-6 col-md-1">
                <a href="index.php"><button class="btn btn-success btn-sm btn-flat">Student Add</button></a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">City</th>
                        <th scope="col" width="18%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $count = 0;
                            while($data = $result->fetch_assoc()){
                                echo "<tr>";
                                    echo "<th scope='row'>".++$count."</th>";
                                    echo "<td>".$data['firstName']."</td>";
                                    echo "<td>".$data['lastName']."</td>";
                                    echo "<td>".$data['mobile']."</td>";
                                    echo "<td>".$data['city']."</td>";
                                    echo "<td>
                                            <a href='edit.php?id=".$data['id']."'><button type='button' class='btn btn-outline-primary btn-sm'>Edit</button></a>&nbsp;&nbsp;
                                            <a href=''><button type='button' class='btn btn-outline-danger btn-sm'>Delete</button></a>
                                         </td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>