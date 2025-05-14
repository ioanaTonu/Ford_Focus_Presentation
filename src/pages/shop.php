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

        <form class="formGeneral" action="" method="get" enctype="multipart/form-data">
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
                <option value="euro1">Euro 1</option>
                <option value="euro2">Euro 2</option>
                <option value="euro3">Euro 3</option>
                <option value="euro4">Euro 4</option>
                <option value="euro5">Euro 5</option>
                <option value="euro6">Euro 6</option>
                <option value="euro6d-temp">Euro 6d-TEMP</option>
                <option value="euro6d">Euro 6d</option>
            </select>

            
            <br> <br>
            <div class="submitButton">
                <div class="centerDiv">
                    <input type="submit" value="Search">
                </div>
                <br>
            </div>

        </form>
        
        <div class="car-card">
            <img class="car-image" src="../images/carShop4999.jpeg" alt="Ford Focus">
            <div class="car-info">
              <div class="car-title">Ford Focus C-Max</div>
              <div class="car-subtitle">used</div>
              <div class="car-price">4 999 €</div>
              <br><br><br><br>
              <div class="car-location">Rome, Italy</div>
              <div class="car-mileage">
                <img src="../images/kmLogo.png" alt="Odometer">
                102 500 km
              </div>
            </div>
          </div>

          <div class="car-card">
            <img class="car-image" src="../images/carShop4500.jpg" alt="Ford Focus">
            <div class="car-info">
              <div class="car-title">Ford Focus Hatchback</div>
              <div class="car-subtitle">used</div>
              <div class="car-price">4 500 €</div>
              <br><br><br><br>
              <div class="car-location">Berlin, Germany</div>
              <div class="car-mileage">
                <img src="../images/kmLogo.png" alt="Odometer">
                399 991 km
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