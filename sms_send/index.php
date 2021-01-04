<html>
<head>
    <title>Sending SMS</title>
</head>

<body>
<h3>Sending SMS</h3>
<form method='GET' action='sendSMS.php'>
    Phone <input type='phone' name = 'phone' autocomplete='off'> <br>
    Message <input type='message' name='message'><br>
    <input type='submit' value='Send'/>
</form>
</body>
</html>

<?php
require 'vendor/autoload.php';
$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'https://smsplus.sslwireless.com/api/v3/send-sms?api_token=2c864984-5215-4641-a7bb-59d098ef5694&sid=TEACAPITAL&sms='.'this is robi iot message'.'&msisdn='.'01862177792'.'&csms_id=f288bf42f44a788e891ff989928dd7', [
    'auth' => ['user', 'pass']
]);
echo $res->getStatusCode();

?>


