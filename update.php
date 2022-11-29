<?php

use LDAP\Result;

include 'connect.php';

$id = $_GET['updateid'];
$sql = "select * from `crud` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$address = $row['address'];
$salary = $row['salary'];




if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    $sql = "update `crud` set id=$id, name='$name', address='$address', salary='$salary' where id=$id";
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
                            <input type="text" class="form-control" name="name" autocomplete="off" value="<?php echo $name; ?>">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea type="text" class="form-control" name="address" autocomplete="off" value=""><?php echo $address; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="text" class="form-control" name="salary" autocomplete="off" value="<?php echo $salary; ?>">
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