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
    <div class="container" style="margin-top:30px;">
        <div class="row justify-content-md-center">
            <div class="col-8">
                <div class="row" style="padding: 10px;">
            <div class="col-12 col-md-10">
                <span style="text-align: center; font-size: 24px; font-weight: bold;">Student Add</span>
            </div>
            <div class="col-6 col-md-1">
                <a href="view.php"><button class="btn btn-success btn-sm btn-flat">Student List</button></a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="getstudentdata.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputFirstName">First Name</label>
                        <input type="text" class="form-control" name="firstName" id="exampleInputFirstName" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputLastName">Last Name</label>
                        <input type="text" class="form-control" name="lastName" id="exampleInputLastName" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputMobile1">Mobile</label>
                        <input type="text" class="form-control" name="mobile" id="exampleInputMobile1" placeholder="Enter mobile">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity">City</label>
                        <input type="text" class="form-control" name="city" id="exampleInputCity" placeholder="Enter city">
                    </div>
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary"/>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>