<?php
session_start();
// var_dump($_SESSION["data"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Here</title>

    <!-- Link Style -->
    <link rel="stylesheet" href="bootstrap.css">

    <!-- Favriout Icon -->
    <link rel="icon" href="#" type="image/x-icon">


</head>

<body>


    <!-- Start Sign Up Box -->

    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="col-12 col-md-8 col-lg-4 bg-gradien p-5 shadow rounded ">

            <form action="registerProcess.php" method="POST">
                <div id="signUpBox">
                    <div class="row g-2">

                        <div class="col-12 mb-5">

                            <center> <samp class="title" style="font-size: x-large;">SignUp In Us</samp></center>
                        </div>

                        <?php
                        if (!empty($_SESSION['error'])) {
                            echo '<div class="col-12" id="errorDiv">
                                    <div class="alert alert-danger" role="alert" id="errorMsg">
                                        <div id="error">' . htmlspecialchars($_SESSION['error'], ENT_QUOTES) . '</div>
                                    </div>
                                  </div>';
                            unset($_SESSION['error']);
                        }

                        if (isset($_SESSION['success'])) {
                            unset($_SESSION['success']);
                            unset($_SESSION['data']);
                        }
                        ?>

                        <div class="col-6">
                            <lable class="form-label">First Name</lable>
                            <input type="text" class="form-control" id="fname" name="fname" value="<?php echo htmlspecialchars($_SESSION['data'][0] ?? '', ENT_QUOTES); ?>">
                        </div>

                        <div class="col-6">
                            <lable class="form-label">Last Name</lable>
                            <input type="text" class="form-control" id="lname " name="lname" value="<?php echo htmlspecialchars($_SESSION['data'][1] ?? '', ENT_QUOTES); ?>">
                        </div>

                        <div class="col-12">
                            <lable class="form-label">Email</lable>
                            <input type="email" class="form-control" name="gmail" value="<?php echo htmlspecialchars($_SESSION['data'][2] ?? '', ENT_QUOTES); ?>">
                        </div>

                        <div class="col-6">
                            <lable class="form-label">Password</lable>
                            <input type="password" class="form-control" id="password" name="password" value="<?php echo htmlspecialchars($_SESSION['data'][3] ?? '', ENT_QUOTES); ?>">
                        </div>

                        <div class="col-6">
                            <lable class="form-label">Phone Number</lable>
                            <input type="text" class="form-control" id="pNumber" name="pNumber" value="<?php echo htmlspecialchars($_SESSION['data'][4] ?? '', ENT_QUOTES); ?>">
                        </div>

                        <div class="col-12">
                            <lable class="form-label">Address</lable>
                            <input type="text" class="form-control" id="address" name="address" value="<?php echo htmlspecialchars($_SESSION['data'][5] ?? '', ENT_QUOTES); ?>">
                        </div>

                        <div class="col-6">
                            <lable class="form-label">Gender</lable>
                            <select name="gender" class="form-control" id="gender" value="<?php echo htmlspecialchars($_SESSION['data'][6] ?? '', ENT_QUOTES); ?>">

                                <option value="Male" required>Male</option>
                                <option value="Female" required>Female</option>
                            </select>
                        </div>

                        <div class="col-6">
                            <lable class="form-label">Nic</lable>
                            <input type="text" class="form-control" id="nic" name="nic" value="<?php echo htmlspecialchars($_SESSION['data'][7] ?? '', ENT_QUOTES); ?>">
                        </div>

                        <div class="col-12 d-grid">
                            <button class="btn btn-outline-primary">Sign Up</button>
                        </div>

                        <a href="logIn.php" style="text-decoration: none;">
                            <div class="col-12 d-grid">
                                <button class="btn btn-outline-dark">Already have an account? Sign In </button>
                            </div>
                        </a>

                    </div>
                </div>

            </form>
        </div>
    </div>



    <!-- End Sign Up Box -->

</body>

</html>