<?php

$id = $_REQUEST['player_id'];

$url = "https://acs.leagueoflegends.com/v1/stats/player_history/NA/{$id}?begIndex=0&endIndex=20";

$ch = curl_init($url);

$result = curl_exec($ch);
echo json_encode($result);