<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/style.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <title>Register</title>
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
            <form action="signup.php" method="post" enctype="multipart/form-data">
                <br>
                <h1>REGISTER</h1>
                
                <br>
                <label for="first-name"> First Name </label> <br>
                <input type="text" name="first-name" value=""> <br><br>

                <label for="name"> Name </label> <br>
                <input type="text" name="name" value=""> <br><br>

                <label for="gender"> Gender </label> 
                <div class="centerDiv">
                    <select name="gender" id="gender">
                        <option value="no-answer">Prefer not to answer</option>
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                      </select> <br><br>
                </div>

                <label for="country"> Country </label> <br>
                <input type="text" name="country" value=""> <br><br>

                <label for="postal-code"> Postal code </label> <br>
                <input type="text" name="postal-code" value=""> <br><br>

                <label for="phone-number"> Phone Number </label> <br>
                <input type="text" name="phone-number" value=""> <br><br>

                <label for="e-mail"> E-mail </label> <br>
                <input type="text" name="e-mail" value=""> <br><br>

                <label for="password"> Password </label> <br>
                <input type="password" name="password" value=""> <br><br>

                <label for="confirm-password"> Confirm Password </label> <br>
                <input type="password" name="confirm-password" value=""> <br><br>

                <div class="submitButton">
                    <div class="centerDiv">
                        <input type="submit" value="Register">
                    </div>
                </div>

                <br>
            </form>
        </div>
    </div>
    
    <?php
    $con = mysqli_connect("localhost", "root", "");
    if (!$con) 
    {
        die('Connection didn’t happen! ' . mysqli_connect_error());
    }
            
    mysqli_select_db($con, "fordfocuspres");

    if (isset($_POST["e-mail"])) {
        $email = $_POST["e-mail"];
        $sql = "SELECT * FROM utilizator WHERE eMail = '$email'";
        $rez = mysqli_query($con,$sql);

        if (mysqli_num_rows($rez) > 0) {
            echo    '<script type="text/javascript">
                        window.onload = function () { alert("E-mail already used!"); } 
                    </script>';
        }
        else {
            if ($_POST['password'] !== $_POST['confirm-password']) {
                echo '<script>alert("Passwords do not match!");</script>';
                exit();
            }

            $firstName = $_POST["first-name"];
            $name = $_POST["name"];
            $gender = $_POST["gender"];
            $country = $_POST["country"];
            $postalCode = $_POST["postal-code"];
            $phone = $_POST["phone-number"];
            $email = $_POST["e-mail"];
            
            $hashedPassword = password_hash(trim($_POST["password"]), PASSWORD_DEFAULT);

            $insertSql =    "INSERT INTO utilizator (firstName, nameN, gender, country, postalCode, phoneNumber, eMail, passwordP)
                            VALUES ('$firstName', '$name', '$gender', '$country', '$postalCode', '$phone', '$email', '$hashedPassword')";

            if (mysqli_query($con, $insertSql)) {
                echo '<script>alert("Registration successful!");</script>';
            } else {
                echo '<script>alert("Error: ' . mysqli_error($con) . '");</script>';
            }
        }
    }
    ?>

    <!-- END MAIN -->
  <!-- FOOTER -->
  <?php include("../footer.php"); ?> 
  <!-- END FOOTER -->
</body>
</html>