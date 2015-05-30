<?php
    /* Output:
        $listener
        $currsong
    */

    //Server Information
	$icecast_api_url = "http://radio.bronyradiogermany.com:8000/status-json.xsl";
	$jsonIceCast = file_get_contents($icecast_api_url);
	$iceCastData = json_decode($jsonIceCast);

	$listener = 0;
	$currsong = "";

	if(isset($iceCastData->icestats->source[1]->title)) {
		$listener = $iceCastData->icestats->source[1]->listeners;
		$currsong = $iceCastData->icestats->source[1]->title;
	} else {
		$listener = $iceCastData->icestats->source[0]->listeners;
		$currsong = $iceCastData->icestats->source[0]->title;
	}

	if(empty($currsong)) {
		$currsong = "Kein Titel verfügbar";
	}
?>
