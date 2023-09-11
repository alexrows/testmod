<?php

$REDIRECT_URL= "https://www.disney.es";

$FILENAME_DATABASE="blocked_countries.txt";

/* ----------- DO NOT MODIFY UNDER THIS LINE ------------- */


function check_block_country(){
             $data = file_get_contents("http://ip-api.com/json/".get_user_ip_addr()."?fields=country,countryCode,proxy,hosting");
            //$data = file_get_contents("http://ip-api.com/json/197.253.211.239?fields=country,countryCode,proxy,hosting");
             $obj = json_decode($data, true);
             if($obj["proxy"] == false && $obj["hosting"] == false) {return true;   }else{
             return   false;    }
}



function get_user_ip_addr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

?>