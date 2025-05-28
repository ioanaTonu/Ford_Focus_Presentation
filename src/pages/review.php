<?php
session_start();

$con = mysqli_connect("localhost", "root", "");
if (!$con) {
    die('Connection failed: ' . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["Submit"])) {
    mysqli_select_db($con, "fordfocuspres");

    if (isset($_POST["e-mail"])) {
        $email = $_POST["e-mail"];
        $sql = "SELECT * FROM utilizator WHERE eMail = '$email'";
        $rez = mysqli_query($con, $sql);

        if (mysqli_num_rows($rez) <= 0) {
            $_SESSION['message'] = "You have to log in first!";
        } else {
            $firstName = $_POST["fname"];
            $lastName = $_POST["lname"];
            $age = $_POST["aname"];
            $title = $_POST["tname"];
            $review = $_POST["rname"];

            $insertSql = "INSERT INTO review (firstName, lastName, eMail, age, title, review)
                          VALUES ('$firstName', '$lastName', '$email', '$age', '$title', '$review')";

            if (mysqli_query($con, $insertSql)) {
                $_SESSION['message'] = "Review posted successfully!";
            } else {
                $_SESSION['message'] = "Error: " . mysqli_error($con);
            }
        }

        header("Location: review.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/style.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Review</title>
</head>

<body>
    <!-- HEADER -->

    <?php include("../header.php"); ?> 

    <!-- END HEADER -->
    <!-- MAIN -->

    <?php
    if (isset($_SESSION['message'])) {
        echo '<script>alert("' . $_SESSION['message'] . '");</script>';
        unset($_SESSION['message']);
    }
    ?>

    <div class="container">
        <h1>LET'S SHARE OPINIONS!</h1>
        <br> <br>

        <h1> Do you have any ideas or suggestions? </h1>
        <h1> Please share them with us by filling out the form below.</h1>

        <form class="formGeneral" action="review.php" method="post" enctype="multipart/form-data">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname"><br>

            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname"><br>

            <label for="e-mail"> E-mail </label> <br>
            <input type="text" name="e-mail" value=""> <br>

            <label for="aname">Age:</label><br>
            <input type="text" id="aname" name="aname"><br>

            <label for="tname">Title:</label><br>
            <input type="text" id="tname" name="tname"><br>

            <label for="rname">Review:</label><br>
            <textarea id="rname" name="rname" rows="4" cols="50"> </textarea>

            <div class="submitButton">
                <div class="centerDiv">
                    <input type="submit" name = "Submit" value="Submit">
                </div>
            </div>
            <br>
        </form>
    </div>

    <?php
    // Afișare recenzii
    mysqli_select_db($con, "fordfocuspres");
    $sql = "SELECT * FROM review";
    $rez = mysqli_query($con, $sql);

    while ($inreg = mysqli_fetch_array($rez)) {
    echo '
    <div class="car-card">
        <h1>What others have said about us or about Ford Focus</h1>
            <div class="formGeneral">
                <div class="flex-container-review">
                    <div class="logo-wrapper">
                        <img src="../images/person-icon-on-white-background-260nw-1699358734.jpg" alt="JimReview" width="75" height="90">
                    </div>
                    <div class="text-content">
                        <h5>' . $inreg["firstName"] . " " . $inreg["lastName"] . '</h5>
                        <h2>' . $inreg["title"] . '</h2>
                        <p>' . $inreg["review"] . '</p>
                    </div>
                </div>
            </div>
    </div>';
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