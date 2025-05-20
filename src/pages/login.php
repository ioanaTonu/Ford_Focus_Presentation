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

            <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = mysqli_connect("localhost", "root", "", "fordfocuspres");

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $email = $_POST["e-mail"];
    $password = $_POST["password"];

    if (empty($email) || empty($password)) {
        echo '<script>alert("Please enter both email and password.");</script>';
        exit();
    }

    $sql = "SELECT * FROM utilizator WHERE eMail = '$email'";
    $rez = mysqli_query($con, $sql);

    if (mysqli_num_rows($rez) === 1) {
        $user = mysqli_fetch_assoc($rez);
        $storedPassword = $user["passwordP"];


        if (password_verify(trim($password), $storedPassword)) {
            echo '<script>alert("Login successful!");</script>';
        } else {
            echo '<script>alert("Incorrect password.");</script>';
        }
    } else {
        echo '<script>alert("User not found.");</script>';
    }

    mysqli_close($con);
}
?>


        </div>

    </div>
    <!-- END MAIN -->

    <!-- FOOTER -->
    <?php include("../footer.php"); ?> 
    <!-- END FOOTER -->
</body>

</html>