<?php
include 'connection.php';

if (isset($_POST['register'])) {

    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $pass   = $_POST['pass'];
    $city   = $_POST['city'];
    $age    = $_POST['age'];
    $gender = $_POST['gender'];

    $fetch_data = mysqli_query($con, "SELECT email FROM register WHERE email = '$email'");

    if (mysqli_num_rows($fetch_data) > 0) {

        echo "<script>
            alert('email id already exist')
            location.assign('register.php')
        </script>";

    } else {

        $insert = mysqli_query(
            $con,
            "INSERT INTO register(name, email, password, city, age, gender)
            VALUES('$name', '$email', '$pass', '$city', '$age', '$gender')"
        );

        if ($insert) {

            echo "<script>
                alert('data inserted successfully')
                location.assign('fetch.php')
            </script>";

        } else {

            echo "<script>
                alert('data not inserted')
                location.assign('register.php')
            </script>";

        }
    }
}
?>