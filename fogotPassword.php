<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>

    <!-- Link CSS -->
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>

    <form action="fogotPasswordProcess.php" method="POST">

        <div class="container vh-100 d-flex justify-content-center align-items-center">

            <div class="col-12 col-md-8 col-lg-4 bg-gradient p-5 shadow rounded-4">

                <center><samp class="title" style="font-size: x-large;"> Fogot Your Password</samp></center>

                <!-- Error Div -->
                <?php
                if (isset($_SESSION['erorr'])) {
                    echo '<div class="col-12 mt-3">
                    <div class="alert alert-danger" role="alert">' . htmlspecialchars($_SESSION['erorr'], ENT_QUOTES) . '</div>
                </div>';
                    unset($_SESSION['erorr']);
                }

                ?>
                <!-- Error Div -->


                <div class="col-12">
                    <label for="email">Enter email</label>
                    <input type="email" class="form-control " name="gmail">
                </div>

                <div class="col-12 d-grid">
                    <button class="btn btn-primary mt-4">Submit</button>
                </div>

            </div>
        </div>

    </form>



</body>

</html>