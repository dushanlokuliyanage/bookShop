<?php session_start();
// var_dump($_SESSION["data"]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

    <!-- Link CSS -->
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>

    <!-- Start Sign In Box -->

    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="col-12 col-md-8 col-lg-4 bg-gradien p-5 shadow rounded-4">

            <form action="logInProcess.php" method="POST">
                <div class="row g-2">

                    <div class="col 12 mb-5">
                        <center> <samp class="title" style="font-size: x-large;">SignIn Us</samp></center>
                    </div>

                    <!-- Error Div -->
                    <?php

                    if (isset($_SESSION['invalid'])) {
                        echo '   <div class="col-12">
                                   <div class="alert alert-danger" role="alert">' . htmlspecialchars($_SESSION['invalid'], ENT_QUOTES) . '</div>
                                 </div>';
                        unset($_SESSION['invalid']);
                    }

                    if (isset($_SESSION['error'])) {
                        echo '<div class="col-12">
                                   <div class="alert alert-danger" role="alert">' . htmlspecialchars($_SESSION['error'], ENT_QUOTES) . '</div>
                                 </div>';
                        unset($_SESSION['error']);
                    }

                     if (isset($_SESSION['user'])) {
                         unset($_SESSION['data']);
                    }

                    ?>
                    <!-- Error Div -->

                    <div class="col-12">
                        <lable class="form-lable">Email</lable>
                        <input type="email" class="form-control" name="gmail" value="<?php echo htmlspecialchars($_SESSION['data'][0] ?? '', ENT_QUOTES); ?>">
                    </div>

                    <div class="col-12">
                        <lable class="form-lable">Password</lable>
                        <a href="" style="margin-left: 145px;">Forgot Passowrd</a>
                        <input type="password" class="form-control" name="password" value="<?php echo htmlspecialchars($_SESSION['data'][1] ?? '', ENT_QUOTES) ?>">
                    </div>
                    <div class="col-12 d-grid mt-4">
                        <button class="btn btn-outline-dark">Sign In</button>
                    </div>

                </div>
            </form>

        </div>
    </div>

</body>

</html>