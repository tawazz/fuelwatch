<?php
class Fuel{

    public static function fetchXml($parameters= array()){
        $base_url ="http://www.fuelwatch.wa.gov.au/fuelwatch/fuelWatchRSS?";
        foreach($parameters as $para => $value){
            $base_url=$base_url.$para."=".$value."&";
        }
        $base_url = trim($base_url,"&");
        // create curl resource 
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, $base_url); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 

        // close curl resource to free up system resources 
        curl_close($ch);

        return $output;
    }
}
?>