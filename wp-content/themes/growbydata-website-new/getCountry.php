<?php
class getCountry {
  public function get_client_ip() {
       $ipaddress = '';
       if (getenv('HTTP_CLIENT_IP'))
          $ipaddress = getenv('HTTP_CLIENT_IP');
       else if(getenv('HTTP_X_FORWARDED_FOR'))
          $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
       else if(getenv('HTTP_X_FORWARDED'))
          $ipaddress = getenv('HTTP_X_FORWARDED');
       else if(getenv('HTTP_FORWARDED_FOR'))
          $ipaddress = getenv('HTTP_FORWARDED_FOR');
       else if(getenv('HTTP_FORWARDED'))
          $ipaddress = getenv('HTTP_FORWARDED');
       else if(getenv('REMOTE_ADDR'))
          $ipaddress = getenv('REMOTE_ADDR');
       else
          $ipaddress = 'UNKNOWN';

       return $ipaddress;
  }

  public function ip_details($url) {
     $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $url);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
     $data = curl_exec($ch);
     curl_close($ch);

     return $data;
  }

  public function init(){
    $myipd = $this->get_client_ip(); 
    $url = 'http://www.geoplugin.net/json.gp?ip='.$myipd; 
    // $url = 'http://www.geoplugin.net/json.gp?ip=49.236.212.80'; 
    $details    =   $this->ip_details($url); 
    $v = json_decode($details);
    $mycountry = $v->geoplugin_countryName;

    return $mycountry;
   } 
}   

// $country = new getCountry();
// $country = $country->init();
// echo $country;
?>