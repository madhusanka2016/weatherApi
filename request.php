<?php 
$monthint = array('01','02','03','04','05','06','07','08','09','10','11','12');

for($year = 2009; $year <2020; $year++){
foreach ($monthint as $month){
    if($month=='01'or $month=='03'or $month=='05'or $month=='07'or $month=='08'or $month=='10'or $month=='12'){
        $days='31';
        echo $month;
        echo "-";
        echo $days;

    }
    elseif($month=='02'){
        $days='28';
        echo $month;
        echo "-";
        echo $days;
    }
    else{
        $days='30';
        echo $month;
        echo "-";
        echo $days;
    }
    $json = file_get_contents('https://api.worldweatheronline.com/premium/v1/past-weather.ashx?key=02fb1ed908c848deb78182854192806&q=bergen,no&date='.$year.'-'.$month.'-01&enddate='.$year.'-'.$month.'-'.$days.'&format=json');
    //$json = file_get_contents('data.json');
$filename=$year."-".$month.".json";
    $fp = fopen($filename, 'a');
    fwrite($fp, $json);
    fclose($fp);
require 'dbcon/user.php';
require 'dbcon/dbcon.php';

$obj = json_decode($json,true);
echo $obj['data']['request'][0]['type'];
$city= $obj['data']['request'][0]['query'];
echo "<br>";
$cnt = count($obj['data']['weather']);
$cnt2 = count($obj['data']['weather'][0]['hourly'][0]);
echo $cnt;
echo $cnt2;
echo "<br>";

for($sumday = 0; $sumday <$cnt; $sumday++){
    $date = $obj['data']['weather'][$sumday]['date'];
    $maxtempC = $obj['data']['weather'][$sumday]['maxtempC'];
    $mintempC = $obj['data']['weather'][$sumday]['mintempC'];
    $avgtempC = $obj['data']['weather'][$sumday]['avgtempC'];
    $totalSnow_cm = $obj['data']['weather'][$sumday]['totalSnow_cm'];
    $sunHour = $obj['data']['weather'][$sumday]['sunHour'];
    $uvIndex = $obj['data']['weather'][$sumday]['uvIndex'];

    $sql = "INSERT INTO `weathersum_bergen`(`date`, `city`, `maxtempC`, `mintempC`, `avgtempC`, `totalSnow_cm`, `sunHour`, `uvIndex`) VALUES ('$date','$city','$maxtempC','$mintempC','$avgtempC','$totalSnow_cm','$sunHour','$uvIndex')";
    $res1=mysqli_query($conn,$sql);
        for($hourly = 0; $hourly <8; $hourly++){
            $time= $obj['data']['weather'][0]['hourly'][$hourly]['time'];
            $tempC= $obj['data']['weather'][0]['hourly'][$hourly]['tempC'];
            $windspeedKmph= $obj['data']['weather'][0]['hourly'][$hourly]['windspeedKmph'];
            $winddirDegree= $obj['data']['weather'][0]['hourly'][$hourly]['winddirDegree'];
            $winddir16Point= $obj['data']['weather'][0]['hourly'][$hourly]['winddir16Point'];
            $weatherDesc= $obj['data']['weather'][0]['hourly'][$hourly]['weatherDesc'][0]['value'];
            echo $weatherDesc;
            $precipMM= $obj['data']['weather'][0]['hourly'][$hourly]['precipMM'];
            $humidity= $obj['data']['weather'][0]['hourly'][$hourly]['humidity'];
            $visibility= $obj['data']['weather'][0]['hourly'][$hourly]['visibility'];
            $pressure= $obj['data']['weather'][0]['hourly'][$hourly]['pressure'];
            $cloudcover= $obj['data']['weather'][0]['hourly'][$hourly]['cloudcover'];
            $HeatIndexC= $obj['data']['weather'][0]['hourly'][$hourly]['HeatIndexC'];
            $DewPointC= $obj['data']['weather'][0]['hourly'][$hourly]['DewPointC'];
            echo '<br>';
           $sql = "INSERT INTO `weatherhour_bergen`(`date`, `city`, `time`, `tempC`, `windspeedKmph`, `winddirDegree`, `winddir16Point`, `weatherDesc`, `precipMM`, `humidity`, `visibility`, `pressure`, `cloudcover`, `HeatIndexC`, `DewPointC`)VALUES ('$date','$city','$time','$tempC','$windspeedKmph','$winddirDegree','$winddir16Point','$weatherDesc','$precipMM','$humidity','$visibility','$pressure','$cloudcover','$HeatIndexC','$DewPointC')";
        $res1=mysqli_query($conn,$sql);
        }
echo $date;
echo "<br>";
}
    

}
}










//initiaize
// $ch = curl_init();
// //set the url
//     $url = 'https://api.worldweatheronline.com/premium/v1/past-weather.ashx?key=02fb1ed908c848deb78182854192806&q=Flam,no&date=2018-07-01&enddate=2018-07-31';		
// //set options		
//     curl_setopt($ch, CURLOPT_URL,$url);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_HEADER, 0);
// //execute	
//     $data = curl_exec($ch);
//     echo $data;
// //close curl session / free resources	
//     curl_close($ch);
// //set up your xml result	
//     $xml =simplexml_load_string($data);
// //loop through the results	
   
?>