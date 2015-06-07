<?php
    /* Output:
        $listener
        $currsong
    */

    //Server Information
	$icdata = json_decode(file_get_contents("http://radio.bronyradiogermany.com:8000/status-json.xsl"));

	$listener = 0;
	$currsong = "";

	if(isset($icdata->icestats->source[1]->title)) {
		$listener = $icdata->icestats->source[1]->listeners;
		$currsong = $icdata->icestats->source[1]->title;
	} else {
		$listener = $icdata->icestats->source[0]->listeners;
		$currsong = $icdata->icestats->source[0]->title;
	}

	if(empty($currsong)) {
		$currsong = "Kein Titel verfügbar";
	}
?>
