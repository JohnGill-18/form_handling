<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN-FORM</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
    <h2 class='text-center mt-3'>login Form</h2>
    <div class="container" style="border: 0.5px black; height: 100px;" >
        <div class="row">
            <div class="col-4 mx-auto">
                <form action="code.php" method='post'>
                    <h6>Create New Account?</h6><span> <a href="register.php">register</a></span>
                   
                    <input type="email" placeholder="Enter your email" class="form-control mt-3" required name="email">

                    <input type="password" placeholder="Enter your password" class="form-control mt-3" required name="pass"> 


                        <button type="submit" class="d-flex btn btn-dark mt-3" name="login">login</button>
                </form>
            </div>
        </div>
    </div>













</body>
</html>