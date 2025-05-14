<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/style.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <title>LogIn</title>
</head>

<body>
    <!-- HEADER -->

    <?php include("../header.php"); ?> 

    <!-- END HEADER -->
    <!-- MAIN -->

    <div class="container">
        <div class="centerDiv">
            <img src="../images/logo.png" alt="logo" width="260" height="52">
        </div>

        <div class="formGeneral">
            <form action="" method="post" enctype="multipart/form-data">
                <br>
                <h1> LOG IN</h1>

                <br>
                <label for="e-mail"> E-mail </label> <br>
                <input type="text" name="e-mail" value=""> <br><br>

                <label for="password"> Password </label> <br>
                <input type="password" name="password" value=""> <br><br>

                <div class="submitButton">
                    <div class="centerDiv">
                        <input type="submit" value="Log In">
                    </div>
                </div>

                <br>
            </form>
        </div>

    </div>
    <!-- END MAIN -->

    <!-- FOOTER -->
    <?php include("../footer.php"); ?> 
    <!-- END FOOTER -->
</body>

</html>