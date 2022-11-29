<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Employee detail</title>
    <style>
        .wrapper {
            width: 600px;
            margin: 100px auto;
        }

        .item {
            font-size: 25px;
            color: blue;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3  d-flex align-items-center ">
                        <h2 class="p-2">Employees Details</h2>
                        <a href="user.php" class="btn btn-success ml-auto p-2 "><i class=" text-light uil uil-plus"></i>Add new Employee</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Salary</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            $sql = "select * from `crud`";
                            $result = mysqli_query($con, $sql);
                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $id = $row['id'];
                                    $name = $row['name'];
                                    $address = $row['address'];
                                    $salary = $row['salary'];

                                    echo '<tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . $address . '</td>
                    <td>' . $salary . '</td>
                    <td><a href="update.php?updateid=' . $id . '"><i class="item uil uil-pen"></i></a>
                        <a href="delete.php?deleteid=' . $id . '"class="mr-3"><i class="item uil uil-trash-alt"></i></a></td>
                </tr>';
                                }
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>