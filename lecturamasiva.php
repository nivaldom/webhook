<?php


require __DIR__ . '/vendor/autoload.php';

use FacebookAds\Object\Ad;
use FacebookAds\Object\Lead;
use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;

$access_token = '591138821931917|kIcB-j9ai69u2J39VkeaRU1zkWY';
$app_secret = 'cbd219b7cbb55b9a58e743e0d3eb27ab';
$app_id = '591138821931917';
$id = '438570330981221';

$api = Api::init($app_id, $app_secret, $access_token);
$api->setLogger(new CurlLogger());

$fields = array(
);
$params = array(
);
echo json_encode((new Ad($id))->getLeads(
  $fields,
  $params
)->getResponse()->getContent(), JSON_PRETTY_PRINT);

