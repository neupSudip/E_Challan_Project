
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic laws</title>
</head>
<body>
    
<!-- inserting header from header file -->
<?php 
    require "header.php";
?>



<!-- back to top image icon -->
<img onclick="topFunction()"  id="top-image" src="../photo/top.png" alt="" width="40px">
<!-- traffic laws -->
<div class="traffic-laws">

    <!-- cross navigation for laws -->
    <div class="law-navigation">
        <a href="#200-1000">A) Offenses punishable by a fine of Rs.200 to Rs.1000</a>
        <a href="#500-1500">B) Offenses punishable by a fine of Rs.500 to Rs.1500</a>
        <a href="#1000">C) Offenses punishable by a fine of Rs.1000</a>
        <a href="#1000-1500">D) Offenses punishable by a fine of Rs.1000 to Rs.1500</a>
    </div>

    <div class="laws">
        <div class="law">
            <h3 id="200-1000">A) Offenses punishable by a fine of Rs.200 to Rs.1000:</h3> 
            <p>1. Smoking in public transport</p>
            <p>2. Hiker walking in paved road</p>
            <p>3. Passenger seat is not reserved as prescribed</p>
            <p>4. Ticket is not issued as per the prescribed format</p>
            <p>5. No sign of public transport carrying hazadous goods</p>
            <p>6. Crossing road from other places than designated places</p>
            <p>7. Long-haul public transport not having at least two drivers</p>  
            <p>8. Speed is higher than the prescribed speed at the specified area</p>
            <p>9. Keeping the vehicle in such a way as to endanger other vehicles</p>
            <p>10. Carring passenger more than number of seats registered in certificate</p>    
        </div>

        <div class="law">
            <h3 id="500-1500">B) Offenses punishable by a fine of Rs.500 to Rs.1500:</h3> 
            <p>1. Driving with carelessness</p>
            <p>2. Driving at night without lights on</p>
            <p>3. Parking vehicle under no parking area</p>
            <p>4. Driving in violation of traffic signs or gestures</p>
            <p>5. Turning or giving sound signal in prohibited area</p>
            <p>6. Driving in a place or time where driving is prohibited</p>
            <p>7. Refusing to take passenger by public transport 's driver</p>
            <p>8 Driving without number plate or wearing a belt or a helmet</p>
            <p>9. Driving on the wrong side of the road or opposite in one directional road</p>
            <p>10. Driving of overweight vehicle in the area of ​​determining the weight limit of the vehicle</p>
        </div>

        <div class="law">
            <h3 id="1000">C) Offenses punishable by a fine of Rs.1000:</h3>
            <p>1. Driving without a driver's license</p>
            <p>2. Driving under the influence of alcohol</p>
            <p>3. Crossing the determined limit of passenger/person</p>
            <p>4. Damage to the vehicle or passengers having accident</p>
            <p>5. Allowing a person to drive who have no driving license</p>
            <p>6. Keeping/operating vehicles in a public place in an obstruction manner</p>
        </div>

        <div class="law">
            <h3 id="1000-1500">D) Offenses punishable by a fine of Rs.1000 to Rs.1500:</h3>
            <p>1. Driving without vehicle registration</p>
            <p>2. Driving for more than prescribed fare</p>
            <p>3. Drving without full documents of vehicle</p>
            <p>4. Operating public transport without a road license</p>
            <p>5. Driving abroad registered vehicle without permission</p> 
        </div>
    </div>   
    
</div>
<p class="official-site">You can find the traffic voilation laws and charges on Nepal Traffic Police official page 
<a target="_blank" href="https://traffic.nepalpolice.gov.np/index.php/notice/violation-and-fine" target="_blank">at here</a>. </p>



<!-- inserting footer from footer.php file -->
<?php 
    require "footer.php";
?>

<script src="../js/topBotton.js"></script>
</body>
</html>




