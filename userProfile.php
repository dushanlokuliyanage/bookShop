<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: register.php");
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $_SESSION['user']['firstName'] ?> Profile</title>

        <!-- Link CSS -->
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="style.css">

        <style>
            body {
                margin: 0;
                padding-top: 40px;
                background: #f5f6fa;
                position: relative;
                height: 100%;
            }
        </style>

    </head>

    <body>


        <div class="">

            <div class="container vh-100 justify-content-center align-items-center d-flex ">
                <div class="col-12 col-md-8 col-lg-4 bg-light p-5 shadow rounded-4 row g-4">

                    <h4 style="color: lightseagreen; font-family: Verdana, Geneva, Tahoma, sans-serif; text-align: center;"> Its,<?php echo $_SESSION['user']['firstName'] ?> </h4>

                    <div>
                        <input type="image" src="imges/wp4143648-harley-quinn-wallpapers.png" class="profileImage" id="profileImage">
                        <input type="file" id="imageFile" style="display: none;" accept="image/*">
                    </div>



                    <div style="font-family: Verdana, Geneva, Tahoma, sans-serif; text-align: center;">
                        <h5 style="color: lightslategray;">About Me</h5>
                        <p> "A room without books is like a body without a soul" (Cicero) and "There is no
                            friend as loyal as a book" (Ernest Hemingway) capture the profound connection
                            people have with books.</p>
                    </div>

                    <div class="g-2 row col-12 justify-content-center">

                        <!-- <div class="col-4 d-grid ">
                        <button class="btn btn-outline-dark">Clacel</button>
                              </div> -->

                        <div class="col-6 d-grid ">
                            <button class="btn btn-outline-primary">Update </button>
                        </div>
                    </div>

                </div>

            </div>

            <div class="container vh-100 justify-content-end align-items-center d-flex ">
                <div class="col-12 col-md-8 col-lg-8 bg-light p-5 shadow rounded-4 row g-4">

                    <h4 style="color: lightseagreen; font-family: Verdana, Geneva, Tahoma, sans-serif;">Personal Datails</h4>


                    <div class="col-6">
                        <lable class="form-lable fs-5">First Name</lable>
                        <input type="text" class="form-control" name="firstName" value="<?php echo htmlspecialchars($_SESSION['user']['firstName'] ?? '', ENT_QUOTES); ?>" disabled>
                    </div>

                    <div class="col-6 ">
                        <lable class="form-lable fs-5 ">Last Name</lable>
                        <input type="text" class="form-control" name="lastName" value="<?php echo htmlspecialchars($_SESSION['user']['lastName'] ?? '', ENT_QUOTES); ?>" disabled>
                    </div>

                    <div class="col-12">
                        <lable class="form-lable fs-5">Email</lable>
                        <input type="email" class="form-control" name="gmail" value="<?php echo htmlspecialchars($_SESSION['user']['gmail'] ?? '', ENT_QUOTES); ?>" disabled>
                    </div>


                    <div class="col-6">
                        <lable class="form-lable fs-5">Phone Number</lable>
                        <input type="text" class="form-control" name="pNumber" value="0<?php echo htmlspecialchars($_SESSION['user']['pNumber'] ?? '', ENT_QUOTES); ?>" disabled>
                    </div>


                    <div class="col-6">
                        <lable class="form-lable fs-5">Gender</lable>
                        <input type="text" class="form-control" name="gender" value="<?php echo htmlspecialchars($_SESSION['user']['gender'] ?? '', ENT_QUOTES); ?>" disabled>
                    </div>


                    <div class="col-12">
                        <lable class="form-lable fs-5">National Identy Card</lable>
                        <input type="text" class="form-control" name="nic" value="<?php echo htmlspecialchars($_SESSION['user']['nic'] ?? '', ENT_QUOTES); ?>" disabled>
                    </div>

                    <div class="col-12">
                        <lable class="form-lable fs-5">Address</lable>
                        <input type="text" class="form-control" name="address" value="<?php echo htmlspecialchars($_SESSION['user']['address'] ?? '', ENT_QUOTES); ?>" disabled>
                    </div>

                    <div class="g-4 row col-12 justify-content-center">

                        <!-- <div class="col-4 d-grid ">
                        <button class="btn btn-outline-dark">Clacel</button>
                    </div> -->

                        <div class="col-6 d-grid ">
                            <button class="btn btn-outline-primary">Update </button>
                        </div>
                    </div>

                </div>

            </div>

        </div>




    </body>

    </html>

<?php
    // unset($_SESSION['user']);
}
