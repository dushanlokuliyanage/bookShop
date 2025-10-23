<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Passowrd</title>

    <!-- Link CSS -->
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>

    <form action="newPasswordProcess.php" method="POST">
        <div class="container vh-100 d-flex justify-content-center align-items-center">

            <div class="col-12 col-md-8 col-lg-6 bg-gradient p-5 shadow rounded-4">

                <center><samp class="title" style="font-size: x-large;"> Create New Password</samp></center>

                <!-- Error Div -->
                <?php
                if (isset($_SESSION['erorrNewPw'])) {

                    echo '<div class="col-12 mt-3">
                    <div class="alert alert-danger" role="alert">' . htmlspecialchars($_SESSION['erorrNewPw'], ENT_QUOTES) . ' </div>
                </div>';
                }
                unset($_SESSION['erorrNewPw']);
                ?>
                <!-- Error Div -->

                <!-- Forgot Code -->

                <?php
                if (isset($_SESSION['fcode'])) {

                    echo '<div class="col-12 mt-3">
                    <div class="alert alert-success" role="alert">' . htmlspecialchars($_SESSION['fcode'], ENT_QUOTES) . ' </div>
                </div>';
                }
                  // unset($_SESSION['fcode']);
                ?>
                <!-- Forgot Code -->

                <div class="col-12">
                    <label for="code">Enter Code</label>
                    <input type="text" class="form-control" name="code">
                </div>

                <div class="col-12">
                    <label for="password">New Password</label>
                    <input type="text" class="form-control " name="pw">
                </div>

                <div class="col-12">
                    <label for="password">Re-enter Passowrd</label>
                    <input type="password" class="form-control " name="rpw">
                </div>

                <div class="col-12 d-grid">
                    <button class="btn btn-primary mt-4">Submit</button>
                </div>

            </div>
        </div>
    </form>
</body>

</html>