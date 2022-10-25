<?php

// kita buat koneksi ke database disini

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'phpcrudbdl');


// jika kita menggunakan if condition
// kalo kita klik button insertdata, insertdata ada difile index.php
// nah insertdata itu kita dapat di index.php di model-footer button dgn name=insertdata
// 
if (isset($_POST['insertdata'])) {

    // panggil fieldnya
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $course = $_POST['course'];
    $contact = $_POST['contact'];


    $query = "INSERT INTO student (`fname`,`lname`,`course`,`contact`) 
    VALUES ('$fname','$lname','$course','$contact')";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: index.php');
    } else {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}
