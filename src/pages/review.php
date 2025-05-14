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

    <div class="container">
        <h1>LET'S SHARE OPINIONS!</h1>
        <br> <br>

        <h1> Do you have any ideas or suggestions? </h1>
        <h1> Please share them with us by filling out the form below.</h1>

        <form class="formGeneral" action="" method="post" enctype="multipart/form-data">
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
                    <input type="submit" value="Submit">
                </div>
            </div>
            <br>
        </form>
    </div>

    <div class="container">
        <h1> What others have said about us or about Ford Focus </h1>

        <div class="formGeneral">
            <!-- star rating -->
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>

            <br>
            
            <div class="flex-container-review">
        
                <div class="logo-wrapper">
                    <img src="../images/JimFarley.jpg" alt="JimReview" width="75" height="90">
                </div>
        
                <div class="text-content">
                    <h5>Jim Farley</h5>
                </div>

                <div class="text-content">
                    <p>I think it's the best car I've ever driven. With my 2010 Ford Focus I managed to overtake a Lexus on the highway, which is saying a lot.</p>
                </div>
            </div>
        </div>

        <div class="formGeneral">
            <!-- star rating -->
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star "></span>

            <br>
            
            <div class="flex-container-review">
        
                <div class="logo-wrapper">
                    <img src="../images/OliverBlume.jpg" alt="OliverReview" width="75" height="90">
                </div>
        
                <div class="text-content">
                    <h5>Oliver Blume</h5>
                </div>

                <div class="text-content">
                    <p>I didn't give it 5 stars because on a test drive on the highway I overtook a Sharan with 7 people on and it was painful for me.</p>
                </div>
            </div>
        </div>

    </div>
    </div>

    <!-- END MAIN -->

    <!-- FOOTER -->
    <?php include("../footer.php"); ?> 
    <!-- END FOOTER -->
</body>

</html>