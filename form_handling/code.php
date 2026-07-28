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
};







if(isset($_Post['login'])){

    $email  = $_POST['email'];
    $pass   = $_POST['pass'];


    $data = mysqli_query($con,"SELECT * FROM REGISTER WHERE email = '$email' AND password = '$pass'");

    if(mysqli_num_rows($data) == 1 ) {

$value = mysqli_fetch_assoc($data);



if($value['role']=='admin'){


echo "<script>
    alert('welcome to admin panel')
    location.assign('admin_panel/public.php?index')
</script>";

}

elseif($value['role']=='user'){


echo "<script>
    alert('welcome to user panel')
    location.assign('user.php')
</script>";

}
else{
    echo "<script>
        location.assign('register.php')
    </script>";
}













    }
    
    else{
    echo "<script>
    alert('there are errors')
        location.assign('login.php')
    </script>";
}


}



// category


if (isset($_POST['category_btn'])) {

    $category_name = $_POST['category_name'];

    $image_name = $_FILES['category_file']['name'];
    $image_tmp  = $_FILES['category_file']['tmp_name'];

    $destination = "./images/".$image_name;

    move_uploaded_file($image_tmp, $destination);
};
    



?>









