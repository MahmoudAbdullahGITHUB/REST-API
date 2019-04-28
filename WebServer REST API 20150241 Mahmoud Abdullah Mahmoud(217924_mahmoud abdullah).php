

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>SW_2</title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="location">
            <input type="submit" name ="loc">
        </form>
        
    </body>
</html>

<?php 

if(isset ($_POST['loc'])){
    
   // $file="https://api.openweathermap.org/data/2.5/weather?q=" .$_POST['location']". &APPID=292ef354ebce6929c60f2a01ed9b9f91"
   
   
    $file = "http://api.openweathermap.org/data/2.5/forecast?q=" . $_POST['location']  . "&units=metric&APPID=25e7c598ee54ca1c3da8beef9a8042e4";
    $result=@file_get_contents($file);
	//var_dump($result);
    $array = json_decode($result,true);
    
    
    
	echo $array['list'][0]['main']['temp'];
    
	echo ( '<br> temp_min =    ').$array['list'][0]['main']['temp_min'];
    
	
	echo ( '<br> temp_max =    '.$array['list'][0]['main']['temp_max']);
	
    
	echo ( '<br> humidity =    '.$array['list'][0]['main']['humidity']);
	
    
	echo ( '<br> speed =    ').$array['list'][0]['wind']['speed'];
	
    
	echo ( '<br> description =    ').$array['list'][0]['weather'][0]['description'];
	
    
	echo ( '<br> city =    ').$array['city']['country'];
    
    
    $time =  $array['list'][0]['dt_txt'];
    echo ( '<br> time =    ').$array['list'][0]['dt_txt'];
    
	 $arr = explode(" ", $time);
    
	
	
   
   //echo" ".$maps_json;
    
   // $lat = $maps_array['result'][0]['geometry']['location']['lat'];
   // $lng = $maps_array['result'][0]['geometry']['location']['lng'];
}


?>





    