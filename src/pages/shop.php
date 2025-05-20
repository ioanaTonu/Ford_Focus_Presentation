<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/style.css" rel="stylesheet" type="text/css" />
    <link href="../styles/car_shop.css" rel="stylesheet" >
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <title>Shop</title>
</head>
<body>
    <!-- HEADER -->

    <?php include("../header.php"); ?> 

    <!-- END HEADER -->
    <!-- MAIN -->
    <div class="container">
        <h1>SHOP ONLINE</h1>
        <br>

        <div class="centerDiv">
            <h2>Do you want to buy a <span class="highlight">Ford Focus</span> car?</h2>
            <h2>We are here to help you!</h2>
            <h2>Select everything that is fitted fot you and we help you a good deal.</h2>
        </div>

        <form class="formGeneral" action="shop.php" method="post" enctype="multipart/form-data">
            <label for="model"> Model </label> 
            <select name="model" id="model">
                <option value="any">Any</option>
                <option value="Focus">Focus</option>
                <option value="Focus C-Max">Focus C-Max</option>
            </select> 
            
            <label for="body"> Body </label> 
            <select name="body" id="body">
                <option value="any">Any</option>
                <option value="Hatchback">Hatchback</option>
                <option value="Sedan">Sedan</option>
                <option value="Wagon">Wagon</option>
                <option value="Coupe">Coupe</option>
                <option value="RS">RS</option>
            </select>

            <label for="gearbox"> Gearbox </label> 
            <select name="gearbox" id="gearbox">
                <option value="any">Any</option>
                <option value="manual">Manual</option>
                <option value="automatic">Automatic</option>
            </select>

            <label for="fuel-type"> Fuel-Type </label> 
            <select name="fuel-type" id="fuel-type">
                <option value="any">Any</option>
                <option value="diesel">Diesel</option>
                <option value="petrol">Petrol</option>
                <option value="hibrid">Hibrid</option>
                <option value="electric">Electric</option>
            </select>

            <label for="car-color">Car Color</label> 
            <select name="car-color" id="car-color">
                <option value="any">Any</option>
                <option value="red">Red</option>
                <option value="blue">Blue</option>
                <option value="black">Black</option>
                <option value="white">White</option>
                <option value="silver">Silver</option>
                <option value="green">Green</option>
                <option value="gold">Gold</option>
                <option value="brown">Brown</option>
                <option value="purple">Purple</option>
                <option value="yellow">Yellow</option>
                <option value="beige">Beige</option>
                <option value="metalic">Metalic</option>
                <option value="other">Other</option>
            </select>

            <label for="emission-class">Emission Class (EU)</label> 
            <select name="emission-class" id="emission-class">
                <option value="any">Any</option>
                <option value="Euro 1">Euro 1</option>
                <option value="Euro 2">Euro 2</option>
                <option value="Euro 3">Euro 3</option>
                <option value="Euro 4">Euro 4</option>
                <option value="Euro 5">Euro 5</option>
                <option value="Euro 6">Euro 6</option>
                <option value="Euro 6d-temp">Euro 6d-TEMP</option>
                <option value="Euro6 d">Euro 6d</option>
            </select>

            
            <br> <br>
            <div class="submitButton">
                <div class="centerDiv">
                  <input type="submit" name="Search" value="Search">
                </div>
                <br>
            </div>

        </form>

<?php
$con = mysqli_connect("localhost", "root", "");
if (!$con) 
{
  die('Connection didn t happen!' . mysqli_error());
}
          
mysqli_select_db($con, "fordfocuspres");

if (isset($_POST["Search"])) {
  $conditions = [];

  if ($_POST["model"] != "any") {
    $conditions[] = "model = '" . $_POST["model"] . "'";
  }
  if ($_POST["body"] != "any") {
    $conditions[] = "body = '" . $_POST["body"] . "'";
  }
  if ($_POST["gearbox"] != "any") {
    $conditions[] = "gearbox = '" . $_POST["gearbox"] . "'";
  }
  if ($_POST["fuel-type"] != "any") {
    $conditions[] = "fuelType = '" . $_POST["fuel-type"] . "'";
  }
  if ($_POST["car-color"] != "any") {
    $conditions[] = "carColor = '" . $_POST["car-color"] . "'";
  }
  if ($_POST["emission-class"] != "any") {
    $conditions[] = "emissionClass = '" . $_POST["emission-class"] . "'";
  }

  $sql = "SELECT * FROM shop";
  if (!empty($conditions)) {
      $sql .= " WHERE " . implode(" AND ", $conditions);
  }

  // Executare interogare
  $rez = mysqli_query($con, $sql);

  while ($inreg = mysqli_fetch_array($rez)) {
    $ceva = '
    <div class="car-card">
        <img class="car-image" src=' . $inreg["pictureLink"] . ' alt="Ford Focus">
        <div class="car-info">
            <div class="car-title">' . $inreg["model"]  . $inreg["body"] . '</div>
            <div class="car-subtitle">used</div>
            <div class="car-price">' . $inreg["pret"] .  '€' . '</div>
            <br><br><br><br>
            <div class="car-location">' . $inreg["location"] .'</div>
            <div class="car-mileage">
                <img src="../images/kmLogo.png" alt="Odometer">
                ' . $inreg["kilometers"] .'
            </div>
        </div>
    </div>';
    echo $ceva;
}

}
?>

    </div>   


    
    <!-- END MAIN -->
  <!-- FOOTER -->
  <?php include("../footer.php"); ?> 
  <!-- END FOOTER -->
</body>
</html>