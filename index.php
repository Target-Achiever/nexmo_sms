<?php

$mobile = '460227736';

if(strlen($mobile) == 10) {
    $mobile = '91'.$mobile;
}
else {
    $mobile = '32'.$mobile;
}

$url = 'https://rest.nexmo.com/sms/json?api_key=fe5c196b&api_secret=x0MdvO6eCgFIaYU6&to='.$mobile.'&from=test&text=hello';
$gateway_response = json_decode(file_get_contents($url),true);

if(isset($gateway_response['messages'][0]['status']) && $gateway_response['messages'][0]['status'] == 0)
{
	echo 'success';
}
else {
	echo 'failure';
}