<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/style.css" rel="stylesheet" type="text/css" />
    <script src="../functions/index.js" type="text/javascript"> </script>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <title>History</title>
</head>
<body>
     <!-- HEADER -->

   <?php include("../header.php"); ?> 

    <!-- END HEADER -->
    <!-- MAIN -->
    
    <div class="container">
        <h1>HISTORY OF FORD FOCUS</h1>
        
        <h2>First Generation (1998-2004)</h2>
        <div class="history98_04">
            <img src="../images/history_98_04.jpg" alt="history1" class="photoHistory9804class"  width="900" height="600">
            <div class="photoHistory9804Middle">
                <div class="photoHistory9804text"> 
                    <p>The <span class="highlight">Ford Focus</span> was introduced in <span class="highlight">1998</span> as a replacement for the long-running Ford Escort. <br> Designed by Ford’s European division, it featured a radical new design language called <span class="highlight">"New Edge"</span>, which included sharp lines and bold styling. <br> The first generation was available in hatchback, sedan, and wagon body styles.</p>
                    <p>One of its biggest selling points was its <span class="highlight">advanced suspension system</span>, which gave it class-leading handling. <br> The Focus quickly became a favorite among driving enthusiasts and was widely praised by the automotive press.</p>
                    <p>Performance versions, such as the <span class="highlight">Focus RS (2002)</span>, featured a turbocharged 2.0-liter engine producing 215 horsepower, making it one of the most exciting hot hatches of the early 2000s.</p>
                 </div>
            </div> 
        </div>

        <h2>Second Generation (2004-2011)</h2>

        <div class="container">
          <div class="flex-container">
            <img src="../images/history_04_11.jpg" alt="Ford Focus" class="imageFlex">
            <div class="text-content">
              <p>In 2004, Ford introduced the <span class="highlight">second-generation Focus</span>, which featured a more refined and sophisticated design. <br> While the European and North American markets initially received different versions, the car maintained its reputation for sharp handling and affordability.</p>
              <p>Newer technology was introduced, including <span class="highlight">improved safety features</span> and more fuel-efficient engines. <br> Diesel variants became more popular in Europe, with the introduction of the TDCi engines.</p>
              <p>Performance models included the <span class="highlight">Focus ST</span>, which debuted in 2005 with a 2.5-liter turbocharged five-cylinder engine producing 225 horsepower, and the <span class="highlight">Focus RS (2009)</span>, which took performance to new heights with a 305-horsepower turbocharged engine.</p>
            </div>
          </div>
        </div>    

        <h2>Third Generation (2011-2018)</h2>
        <div class="history98_04">
            <img src="../images/history_11_18.jpg" alt="history1" class="photoHistory9804class"  width="1280" height="640">
            <div class="photoHistory9804Middle">
                <div class="photoHistory9804text"> 
                    <p>Ford decided to make the <span class="highlight">third-generation Focus</span> a <span class="highlight">global model</span>, meaning that the same design and technology were shared across markets worldwide. <br> This version of the Focus featured a sleeker, more aerodynamic design and introduced the new <span class="highlight">EcoBoost engine lineup</span>, which improved fuel efficiency while maintaining performance.</p>
                    <p>For the first time, an <span class="highlight">electric version</span> of the Focus was introduced in 2011, competing with other compact electric cars on the market.</p>
                    <p>The <span class="highlight">Focus RS (2016)</span> took performance to the extreme with a 2.3-liter turbocharged engine producing <span class="highlight">350 horsepower</span> and an innovative all-wheel-drive system, making it one of the most capable hot hatches ever produced.</p>
                 </div>
            </div> 
        </div>

        <h2>Fourth Generation (2018-Present)</h2>
        <div class="flex-container">
          <div class="text-content">
            <p>The latest <span class="highlight">fourth-generation Ford Focus</span> debuted in 2018, bringing a more refined and high-tech approach to the compact car market. <br> The design was more mature, and the interior was upgraded with advanced infotainment and driver assistance technologies.</p>
            <p>Ford introduced the <span class="highlight">Focus Active</span>, a crossover-style variant with increased ground clearance and rugged styling, appealing to SUV buyers.</p>
            <p>While Ford phased out the Focus in the North American market due to declining demand for compact cars, it remains a strong seller in Europe and China. <br> The latest Focus ST continues to provide exciting performance, featuring a 2.3-liter EcoBoost engine producing <span class="highlight">280 horsepower</span>.</p>
          </div>
          <img src="../images/history_18_pres.jpg" alt="Ford Focus" class="imageFlex">
        </div>
        
        <h2>Conclusion</h2>
        <p>Over four generations, the Ford Focus has proven to be one of the most successful compact cars in automotive history. With its combination of <span class="highlight">practicality, efficiency, and driving excitement</span>, it continues to be a favorite among drivers worldwide.</p>
        
        <div class="slideshow-container">
            
            <div class="mySlides fade">
                <div class="numbertext">1 / 4</div>
                <img src="../images/history_98_04.jpg" style="width:100%">
            </div>
            
            <div class="mySlides fade">
                <div class="numbertext">2 / 4</div>
                <img src="../images/history_04_11.jpg" style="width:100%">
            </div>
    
            <div class="mySlides fade">
                <div class="numbertext">3 / 4</div>
                <img src="../images/history_11_18.jpg" style="width:100%">
            </div>
    
            <div class="mySlides fade">
                <div class="numbertext">4 / 4</div>
                <img src="../images/history_18_pres.jpg" style="width:100%">
            </div>
    
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
    
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>
        
        <script src="../functions/index.js" type="text/javascript"></script>
    </div>
    

    <!-- END MAIN -->
     
  <!-- FOOTER -->
  <?php include("../footer.php"); ?> 
  <!-- END FOOTER -->
</body>
</html>