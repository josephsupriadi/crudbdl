<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD BDL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    i
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Student Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="insert.php" method="POST">
                    <div class="modal-body">

                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="fname" class="form-control" placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="lname" class="form-control" placeholder="Enter Last Name">
                        </div>
                        <div class="form-group">
                            <label>Course</label>
                            <input type="text" name="course" class="form-control" placeholder="Enter Course">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" name="contact" class="form-control" placeholder="Enter Phone Number">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <!-- Function Button Edit -->
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Student Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="insert.php" method="POST">
                    <div class="modal-body">

                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="fname" class="form-control" placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="lname" class="form-control" placeholder="Enter Last Name">
                        </div>
                        <div class="form-group">
                            <label>Course</label>
                            <input type="text" name="course" class="form-control" placeholder="Enter Course">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" name="contact" class="form-control" placeholder="Enter Phone Number">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Heading -->
    <div class="container">
        <div class="jumbotron">
            <div class="card">
                <h2>PHP MODAL</h2>
            </div>

            <!-- button -->
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                        Add Data
                    </button>
                </div>
            </div>

            <!-- desain table listnya nanti setelah form selesai -->
            <div class="card">
                <div class="card-body">

                    <!-- TABLE CONNECTION nanti setelah form selesai -->


                    <!-- Cut dari atas -->
                    <?php
                    $connection = mysqli_connect("localhost", "root", "");
                    $db = mysqli_select_db($connection, 'phpcrudbdl');

                    $query = "SELECT * FROM student";
                    $query_run = mysqli_query($connection, $query);

                    ?>

                    <!-- Format Tablenya -->
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Course</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <?php
                        if ($query_run) {
                            foreach ($query_run as $row) {
                        ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['fname']; ?></td>
                                        <td><?php echo $row['lname']; ?></td>
                                        <td><?php echo $row['course']; ?></td>
                                        <td><?php echo $row['contact']; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-succes editbtn"> Edit
                                            </button>
                                        </td>
                                    </tr>

                                </tbody>
                        <?php
                            }
                        } else {
                            echo "No record Found";
                        }

                        ?>
                    </table>
                </div>
            </div>






        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('.editbtn').on('click', function() {

                $('#editmodel').modal('show');

            })
        });
    </script>

</body>

</html>