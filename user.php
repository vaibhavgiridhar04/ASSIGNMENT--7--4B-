<?php

use LDAP\Result;

include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    $sql = "insert into `crud`(name, address, salary) values('$name','$address','$salary')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Employee detail</title>
    <style>
        .wrapper {
            width: 600px;
            margin: 100px auto;
        }
    </style>
</head>
<body>


    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea type="text" class="form-control" name="address" autocomplete="off"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="text" class="form-control" name="salary" autocomplete="off">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        <a href="display.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>