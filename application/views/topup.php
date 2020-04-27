<?php
$username   = "082268186048";
$apiKey   = "7265ca6091195377";
$ref_id  = uniqid('');
$code = 'htelkomsel10000';
$signature  = md5($username.$apiKey.$ref_id);

$json = '{
          "commands"    : "topup",
          "username"    : "082268186048",
          "ref_id"      : "'.$ref_id.'",
          "hp"          : "082172243443",
          "pulsa_code"  : "'.$code.'",
          "sign"        : "'.md5($username.$apiKey.$ref_id).'"
        }';

$url = "https://testprepaid.mobilepulsa.net/v1/legacy/index";

$ch  = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$data = curl_exec($ch);
curl_close($ch);

print_r($data);
?>