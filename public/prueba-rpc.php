<?php 

include_once BASE_URL . 'vendor/autoload.php';

define('LS_BASEURL', 'http://localhost:8080/limesurvey/');
define('LS_USER', 'admin');
define('LS_PASS', 'galgo16');

$survey_id = 998811;

$myJSONRPCClient = new \org\jsonrpcphp\JsonRPCClient(LS_BASEURL . '/admin/remotecontrol');

$sessionKey = $myJSONRPCClient->get_session_key(LS_USER, LS_PASS);
$groups = $myJSONRPCClient->list_groups($sessionKey, $survey_id);
print_r($groups, null);
$myJSONRPCClient->release_session_key($sessionKey);