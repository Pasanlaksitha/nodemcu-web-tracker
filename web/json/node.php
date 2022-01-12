<?php
 $ip = $_SERVER['REMOTE_ADDR'];
 $agent = $_SERVER['HTTP_USER_AGENT'];
 
   
  $db_host = "localhost";
  $db_user = "id16999459_node";
  $db_pass = "clx3P=OJkUd@B[ET";
  $db_name = "id16999459_ip_log";
  $link = mysql_connect("$db_host", "$db_user", "$db_pass");
  mysql_select_db("$db_name", $link);
   
  if($link) {
    //$referer = $_SERVER['HTTP_REFERER'];

    $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;
    $requestUri = $_SERVER['REQUEST_URI'];
   
    $qstring = mysql_query("INSERT INTO node (address, agent) VALUES (\"" . $ip . "\", \"" .$agent. "\")", $link);
    
   
  }
  
  
  else{
    echo 'Unable connect to database.';
  }
  
   $result=mysql_query('SELECT entry_id, address, agent, requestUri, latitude, longitude, country_name, region_name, city, timestamp FROM visitor_tracking ORDER BY timestamp DESC LIMIT 1');
    
while ($row = mysql_fetch_array($result)) {
    
    $ipaddress = $row['address'];
    //$reff = $row['referer'];
    $ag = $row['agent'];
    $requ = $row['requestUri'];
    $latit = $row['latitude'];
    $longit = $row['longitude'];
    $country = $row['country_name'];
    $region = $row['region_name'];
    $city = $row['city'];
    $timee = $row['timestamp'];
 
    $array = array('ip' => $ipaddress, 'agent' => $ag, 'requestUri' => $requ, 'latitude' => $latit, 'longitude' => $longit, 'country' => $country, 'region' => $region, 'city' => $city);
    
    //header('Content-Type: application/json; charset=utf-8');
    echo json_encode($array);
    


//address, agent, referer, requestUri, latitude, longitude, country_name, region_name, city, zip_code, time_zone

    }



?>

