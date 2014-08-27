<?php

$id = $_REQUEST['player_id'];

$url = "https://acs.leagueoflegends.com/v1/stats/player_history/NA/{$id}?begIndex=0&endIndex=20";

// It would be way safer to set more curl options
$ch = curl_init($url);

$result = curl_exec($ch);
curl_close($ch);

// Simulate a RESTful response
echo json_encode($result);
