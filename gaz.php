<?php
error_reporting(0);

function http_request($url, $method = 'GET', $data = null, $headers = []) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
   
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
    curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
    if (!empty($headers)) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }
    if (strtoupper($method) === 'POST') {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        $error_msg = curl_error($ch);
        curl_close($ch);
        return "cURL Error: $error_msg";
    }
    curl_close($ch);
    return $response;
}

function user(){

$ua[] = "user-agent: Mozilla/5.0 (Linux; Android 11; V2043) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Mobile Safari/537.36";
$url = "https://github.com/dominictarr/random-name/raw/refs/heads/master/first-names.txt";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$ret = curl_exec($ch);

curl_close($ch);
return $ret;
}

$ua[] = "user-agent: Mozilla/5.0 (Linux; Android 11; V2043) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Mobile Safari/537.36";
$login = "https://github.com/ikuzoo8/builx/raw/refs/heads/main/http.txt";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $login);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$result = curl_exec($ch);
$ht = explode("\n" ,$result);



a:
$hh = 0;
while(true):
unlink('cookie.txt');
$ip = $ht[$hh];
$proxy = $ip;
$proxy_parts = explode(":", $proxy);
$proxy_ip = $proxy_parts[0];
$proxy_port = $proxy_parts[1];
if($proxy_ip == ""){exit;}

$tt = rand(1,4500);
$ur = user();
$nam = explode("\n" ,$ur);
$name = $nam[$tt];
$use = str_replace("\n", "", $name); 
$um = preg_replace("/[^a-zA-Z]/", "", $use); // Hanya menyisakan huruf (a-z dan A-Z)

//$use = str_replace("\n", "", $ur); // Menghapus spasi dari string
$no = rand(10,9000);
$ema = $um . $no . "@gmail.com";

$xx = $um . $no;


$headers1 = [
        "x-requested-with: XMLHttpRequest",
        "X-Forwarded-For: $proxy_ip",      
        "Content-Type: application/json",
        "user-agent: $vvv"
];
$vvv = "Mozilla/5.0 (Linux; Android 13) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/114.0.".$no.".130 Mobile DuckDuckGo/19 Safari/537.36";
$headers = [
        "x-requested-with: XMLHttpRequest",
        "Content-Type: application/json",
        "user-agent: $vvv"
];
$url = "https://faucetearner.org/?r=660752930536";
$str = http_request($url, 'GET', null, $headers1);

$login = "https://faucetearner.org/api.php?act=register";
$data = '{"username":"'.$xx.'","email":"'.$ema.'","password":"'.$xx.'","confirm_password":"'.$xx.'","recaptcha_conf":0}';
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $login);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
curl_setopt($ch, CURLOPT_PROXY, $proxy_ip);
curl_setopt($ch, CURLOPT_PROXYPORT, $proxy_port);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");

$res = curl_exec($ch);
$mm = json_decode($res, true);
$mk = $mm['message'];
curl_close($ch);
//if($mk !== 0){goto a;}
echo "Proxy: $proxy_ip:$proxy_port \n";
echo "Status: $mk \n";

$hh = $hh+1;

sleep(2);
endwhile;

