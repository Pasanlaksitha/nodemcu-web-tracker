<?php
 $ip = $_SERVER['REMOTE_ADDR'];
 $agent = $_SERVER['HTTP_USER_AGENT'];
 
 
   
  $db_host = "localhost";
  $db_user = "id16999459_node";
  $db_pass = "meqAbGGp38<pqBgs";
  $db_name = "id16999459_ip_log";
  $link = mysql_connect("$db_host", "$db_user", "$db_pass");
  mysql_select_db("$db_name", $link);

  
  //ip geo loaction grab data
  $apiurl = 'https://freegeoip.app/json/'.$ip;
  $ch = curl_init($apiurl);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $apiResponse = curl_exec($ch);
  curl_close($ch);
  $ipData = json_decode($apiResponse, true);

  if(!empty($ipData)){
    $country_code = $ipData['country_code'];
    $country_name = $ipData['country_name'];
    $region_code = $ipData['region_code'];
    $region_name = $ipData['region_name'];
    $city = $ipData['city']; 
    $zip_code = $ipData['zip_code']; 
    $latitude = $ipData['latitude']; 
    $longitude = $ipData['longitude']; 
    $time_zone = $ipData['time_zone']; 
}

else{ 
    echo 'Data is not found!'; 
} 

// end of ip grab


  if($link)
  {
   // $referer = $HTTP_SERVER_VARS['HTTP_REFERER'];
    $requestUri = $_SERVER['REQUEST_URI'];
   
    $qstring = mysql_query("INSERT INTO visitor_tracking (address, agent, requestUri, latitude, longitude, country_name, region_name, city, zip_code, time_zone) VALUES (\"" . $ip . "\", \"" .$agent. "\", \"" . $requestUri . "\" ,\"" . $latitude . "\", \"" . $longitude . "\", \"" . $country_name . "\", \"" . $region_name . "\", \"" . $city . "\", \"" . $zip_code . "\", \"" . $time_zone . "\")", $link);
  }
  else
  {
    echo 'Unable connect.';
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Accident</title>
    <link rel="stylesheet" href="./style.css">
    <link href="content/favicon.jpg" rel="shortcut icon" type="image/x-icon">
    <script src="000web.js"></script>

</head>

<body>

<div class="cursor"></div>

<h1>
    <center><h1 style="background-color:white;">Accident Leak Report</h1></center>
    <center><h3 style="background-color:white;">By CeylonLeaks</h3></center>
</h1>

<div>
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
         viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto" style="transform: rotate(180deg);">
        <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"/>
        </defs>
        <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7"/>
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)"/>
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)"/>
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff"/>
        </g>
    </svg>
</div>


<section class="blockquote-section">
    <blockquote class="classy-bq">
        <div class="p">
            <br><br><br>
            <div class="left">
                <p>
                    <mark>To</mark>
                    begin with, carelessness is one of the major causes of the road accidents all over the
                    world.
                    mobile phone while driving, breaking the traffic rules and entering from the wrong side driving
                    are some examples of carelessness.
                    Furthermore, inexperienced and untrained drivers and those with poor eyesight who drive at
                    night are one of the major causes of escalating accident rate.
                    addition, most of the people drive after drinking alcohol, which may lead to dangerous road
                    accident.
                </p>
            </div>
        </div>
        <br><br>

        <div class="row">

            <div class="column">
                <figure class="snip1273">
                    <img src=content/vehicle1.jpg alt="Accident1"/>
                    <figcaption>
                        <h3>Vehicle Crash By Poor Eyesight</h3>
                        <h5>Drivers with poor eyesight have 81% road crash involvement rate. Vision is crucial to
                            driving.
                            As much as 90 per cent of the information you need while driving is gathered through
                            your eyes.
                            Poor eyesight is a major risk factor for road traffic injuries.</h5>
                    </figcaption>
                    <a href="#"></a>
                </figure>
            </div>

            <div class="column">
                <figure class="snip1273">
                    <img src=content/vehicle2.jpg alt="Accident2"/>
                    <figcaption>
                        <h3>Alcohol Driving</h3>
                        <h5>In 2016, 10,497 people died in alcohol-impaired driving crashes,
                            accounting for 28% of all traffic-related deaths in the United States.</h5>
                    </figcaption>
                    <a href="#"></a>
                </figure>
            </div>

            <div class="column">
                <figure class="snip1273">
                    <img src=content/vehicle3.jpg alt="Accident3"/>
                    <figcaption>
                        <h3>Mobile Call Driving</h3>
                        <h5>The National Safety Council reports that cell phone use while driving leads to 1.6
                            million crashes each year.
                            Nearly 390,000 injuries occur each year from accidents caused by texting while driving.
                            1 out of every 4 car accidents in the United States is caused by texting and
                            driving.</h5>
                    </figcaption>
                    <a href="#"></a>
                </figure>
            </div>
        </div>
        <br><br>

        <div class="left">
            <p>
                <mark>The</mark>
                provision of highways is resulting in convenience for the people. However, the main problem which is
                faced by the government of any country is the more frequent road accidents which are happening on
                the highways which results in severe damage in form of man power or infrastructure.
                The main reason behind the accidents which occur so frequently on the roads is the inattention which
                is given during driving a vehicle.
                There would probably be lesser amount of accidents if proper attention is paid and rules are
                followed during driving.
            </p>


            <br><br>

            <div class="row">

                <div class="column">
                    <figure class="snip1273">
                        <img src=content/vehicle(4).jpg alt="Accident1"/>
                        <figcaption>
                            <h3>Percent of accidents happen on the highway</h3>
                            <h5>Less than 2 percent of fatal rural crashes are classified as hit-and-run, compared to 7
                                percent of urban fatal crashes.
                                Approximately 67 percent of fatal rural crashes occur on straight roads, whereas 81
                                percent of fatal urban crashes are on straight roads.</h5>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>

                <div class="column">
                    <figure class="snip1273">
                        <img src=content/vehicle(5).jpg alt="Accident2"/>
                        <figcaption>
                            <h3>E001 Southern Expressway</h3>
                            <h5>Passenger car occupants deaths fell 5 percent from 2018 to 2019.</h5>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>

                <div class="column">
                    <figure class="snip1273">
                        <img src=content/vehicle(6).jpg alt="Accident3"/>
                        <figcaption>
                            <h3>North Highway</h3>
                            <h5>heavy injured and one death</h5>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
            </div>

            <br><br>
            <div class="left">
                <p>
                    <mark>There</mark>
                    could also be weather conditions such as the fog which hinders visibility and result in accideN"ts.
                    Road Accident is collision between vehicles (for example car, truck, motorcycle etc.) or it can, be
                    with any pedestrian, animal or the hindrance placed in the middle of the road.
                    The accident occurred could result in many injuries or damage to the property.
                    There are various factors which come into account which can be the reason of accident such as the
                    design of the road, driver’s impairment and vehicle design which can cause serious and most
                    dangerous types of accidents.
                </p>
            </div>
            <br>
            <div class="left">
                <p>
                    There are four factors which are responsible for these types of road accidents.
                    The failure of some equipment inside the vehicle resulting into serious accident is known as
                    Accident due to Equipment Failure.
                    These could be of various types such as failing of break, bursting of tyre, tread separations or the
                    problem could occur in steering or suspension.
                </p>
            </div>
            <br><br><br>
            <div class="column">
                <figure class="snip1273">
                    <img src=content/vehicle7.jpg alt="Accident7"/>
                    <figcaption>
                        <h3>South Highway Exit</h3>
                        <h5>hit 200 mph </h5>
                    </figcaption>
                    <a href="#"></a>
                </figure>
            </div>
        </div>

        <div class="column">
            <figure class="snip1273">
                <img src=content/vehicle(8).jpg alt="Accident8"/>
                <figcaption>
                    <h3>Kandy</h3>
                    <h5>Research by the RAC has found that 91% of drivers say ‘some’ or ‘most’ car headlights are too
                        bright while 54% of these state that they are dazzled more regularly now than a year ago. </h5>
                </figcaption>
                <a href="#"></a>
            </figure>
        </div>


        <div class="column">
            <figure class="snip1273">
                <img src=content/vehicle(9).jpg alt="Accident9"/>
                <figcaption>
                    <h3>UK Cases</h3>
                    <h5>As such, 84% of drivers now want the UK Government to act to ensure regulations are updated to
                        remove the possibility of glare being a result of modern technology.</h5>
                </figcaption>
                <a href="#"></a>
            </figure>
        </div>

        <br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="left">
            <p>
                The accidents which occur due to the irregular design of roads are known as accidents due to Roadway
                Design.
                It could occur through hazardous visibility which consists of merging lanes, livestock or pedestrian
                crossings, crests and troughs etc.
                The accident also occurs due to the irregular surface of the roads which causes imbalance of the
                vehicle and results into collision with another vehicle or object.
            </p>
        </div>
        <br><br><br>

        <p>
            Poor roadway maintenance also contributes to some of the road accidents.
            There could be debris in the way of the road which could create problems </p>
        <div class="right">
            <div class="column">
                <figure class="snip1273">
                    <img src=content/vehicle(10).jpg alt="Accident9"/>
                    <figcaption>
                        <h3>South Highway Exit</h3>
                        <h5>hit 200 mph</h5>
                    </figcaption>
                    <a href="#"></a>
                </figure>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <p>
            for the driver and is the
            responsibility of local highway department,
            faded road signs and potholes could bE" another cause for
            the major road accidents.
        </p>
        <br><br><br><br><br><br><br>

        <div class="center">
            <p>
                <mark>The</mark>
                first and foremost cause is driver's behaviour other than the three causes discussed above which
                constitutes only 5% of the causes of the road accidents and 95% depends on this one.
            </p>
        </div>


    </blockquote>
</section>

<div>
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
         viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"/>
        </defs>
        <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7"/>
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)"/>
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)"/>
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff"/>
        </g>
    </svg>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"
        integrity="sha256-/H4YS+7aYb9kJ5OKhFYPUjSJdrtV6AeyJOtTkw6X72o=" crossorigin="anonymous"></script>
<script src="./script.js"></script>

</body>
</html>
<script src="000web.js"></script>
