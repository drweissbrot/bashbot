<?php
    date_default_timezone_set('Europe/Berlin');
	$time = time();

    $nowunix = $time + 900;
    $endtime = 2147483647; //Last UNIX timestamp

	$response = file_get_contents("https://api.ponyvillelive.com/schedule/index/station/brony_radio_germany/start/$nowunix/end/$endtime");

    $json = json_decode($response, true);

	$currevent["title"] = $json['result'][0]['title'];
    $currevent["start_time"] = $json['result'][0]['start_time'];
    $currevent["time_human"] = date("d.m.Y H:i", $currevent["start_time"]);

    $nextevent["title"] = $json['result'][1]['title'];
    $nextevent["start_time"] = $json['result'][1]['start_time'];
    $nextevent["time_human"] = date("d.m.Y H:i", $nextevent["start_time"]);
?>
