<?php
error_reporting(0);

function http_request($url, $method = 'GET', $data = null, $headers = []) {
	
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    
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
$tt = rand(1,4500);
$ua[] = "user-agent: Mozilla/5.0 (Linux; Android 11; V2043) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Mobile Safari/537.36";
$url = "https://github.com/dominictarr/random-name/raw/refs/heads/master/first-names.txt";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$result = curl_exec($ch);
$nam = explode("\n" ,$result);
$name = $nam[$tt];
$use = str_replace("\n", "", $name); 
curl_close($ch);
return $use;
}
function generateRandomIP() {
    // Generate each octet (0-255)
    $octet1 = rand(0, 255);
    $octet2 = rand(0, 255);
    $octet3 = rand(0, 255);
    $octet4 = rand(0, 255);

    // Concatenate octets with dots
    return "$octet1.$octet2.$octet3.$octet4";
}



a:
$hh = 0;
while(true):
unlink('cookie.txt');

$fip = generateRandomIP();

if($hh == "48"){exit;}
uh:
$ur = user();
$um = preg_replace("/[^a-zA-Z]/", "", $ur); // Hanya menyisakan huruf (a-z dan A-Z)
if (strlen($um) < 8) {
    goto uh;
}
$ji = strtolower($um);

//$use = str_replace("\n", "", $ur); // Menghapus spasi dari string
$no = rand(10,900);
$ema = $ji . $no . "@gmail.com";
echo "Email: $ema \n";
$xx = $ji . $no;

$tt = rand(1,4500);

$vvv = "Mozilla/5.0 (".$ji."; ".$no.") AppleWebKit/537.36 (KHTML, like Gecko) BRAVE/".$no." Safari/".$no."";

$headers = [
        "x-requested-with: XMLHttpRequest",
        "X-Forwarded-For: $fip",
        "Content-Type: application/json",
        "user-agent: $vvv"
];
$url = "https://faucetearner.org/?r=751920578790";
$str = http_request($url, 'GET', null, $headers);

$url = "https://faucetearner.org/register.php";
$str = http_request($url, 'GET', null, $headers);

$login = "https://faucetearner.org/api.php?act=register";
$data = '{"username":"'.$xx.'","email":"'.$ema.'","password":"'.$xx.'","confirm_password":"'.$xx.'","recaptcha_conf":0}';
$res = http_request($login, 'POST', $data, $headers);
$mm = json_decode($res, true);
$mk = $mm['message'];
$xo = $mm['code'];
echo " Proxy: $fip \n";
echo " Status: $mk \n";
if($xo == 0){
	$url = "https://faucetearner.org/logout.php";
    $str = http_request($url, 'GET', null, $headers);
    echo " Status: succes logout! \n";
}
$hh = $hh+1;

sleep(61);

endwhile;

