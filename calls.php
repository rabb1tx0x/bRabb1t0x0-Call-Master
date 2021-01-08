<?php

require_once 'vender/autoload.php';

use Twilio\Rest\Client;

$AccountSID = 'AC0af16469c78fecd1f3cd6ded1302c3b1';
$AuthToken  = '225602d5be2e42c68eb50946ce282311';

$client = new Client($AccountSID, $AuthToken);

try {

	$call = $client->calls->create(

		'+201559226310',
		'+12058507943',
		array("url" => 'http://demo.twilio.com/docs/voice.xml')

	);

	echo "Phone Call has just Started: ".$call->sid;
	
} catch (Exception $e) {
	
	echo  "Error: ".$e->getMessage();
}

?>