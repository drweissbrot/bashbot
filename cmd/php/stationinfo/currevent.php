<?php
	/* Output:
		$autodj (bool)
		$currevent["title"] ["start_time"] ["time_human"]
		$nextevent["title"] ["start_time"] ["time_human"]
	*/
    $date = date_create();
    $time = date_timestamp_get($date);
    date_default_timezone_set('Europe/Berlin');

    $nowunix = $time;
    $endtime = 2147483647; //Last UNIX timestamp

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://api.ponyvillelive.com/schedule/index/station/brony_radio_germany/start/$nowunix/end/$endtime");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    $response = curl_exec($ch);
    curl_close($ch);

    $json = json_decode($response, true);

	$currevent["title"] = $json['result'][0]['title'];
    $currevent["start_time"] = $json['result'][0]['start_time'];
    $currevent["time_human"] = date("d.m.Y H:i", $currevent["start_time"]);

    $nextevent["title"] = $json['result'][1]['title'];
    $nextevent["start_time"] = $json['result'][1]['start_time'];
    $nextevent["time_human"] = date("d.m.Y H:i", $nextevent["start_time"]);
?>
