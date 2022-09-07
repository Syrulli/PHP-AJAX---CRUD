<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="src/lib/bs.css">
        <link rel="stylesheet" href="src/lib/alert.css">
        <title>Test</title>

    </head>

    <body style="background-color: #2C3034; overflow-x: hidden !important; overflow: hidden !important;">

        <?php
            require 'src/database/dbcon.php';
            require 'src/assets/modal.php';
        ?>

        <div>
            <div class="contianer mt-2 pt-2">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="card" style="background-color: #212529;">
                            <div class="card-header">
                                <h4 class="text-white">Testtest test
                                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#studentAddModal">
                                        Add Student
                                    </button>

                                </h4>
                            </div>
                            <div class="card-body">
                                <table id="myTable" class="table table-dark table-striped-columns">
                                    <thead>
                                        <tr>
                                            <th class="">ID</th>
                                            <th class="">Name</th>
                                            <th class="">Email</th>
                                            <th class="">Phone</th>
                                            <th class="">Course</th>
                                            <th class="">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $query = "SELECT * FROM students";
                                            $query_run = mysqli_query($con, $query); #execution output

                                            if (mysqli_num_rows($query_run) > 0) { #check condition if the code have data or not
                                                foreach ($query_run as $student) {
                                                    #if data is greater than zero use foreach loop.
                                                    ?>
                                                        <tr>
                                                            <td><?= $student['id'] ?></td>
                                                            <td><?= $student['name'] ?></td>
                                                            <td><?= $student['email'] ?></td>
                                                            <td><?= $student['phone'] ?></td>
                                                            <td><?= $student['course'] ?></td>
                                                            <td>
                                                                <button type="button" value="<?= $student['id']; ?>" class="viewStudentBtn btn btn-success btn-sm">Vew</button>
                                                                <button type="button" value="<?= $student['id']; ?>" class="editStudentBtn btn btn-info btn-sm">Edit</button>
                                                                <button type="button" value="<?= $student['id']; ?>" class="deleteStudentBtn btn btn-danger btn-sm">Delete</button>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                }
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="src/lib/bs.js"></script>
    <script src="src/lib/jquery.js"></script>
    <script src="src/lib/alert.js"></script>
    <script src="src/assets/func.js"></script>


</html>