<?php
    require_once("vendor/autoload.php");
    require_once("cmd/php/stationinfo/currevent.php");
    $config = json_decode(file_get_contents(__DIR__ . "/config.json"))->twitter;

    \Codebird\Codebird::setConsumerKey($config->consumer->key, $config->consumer->secret);
    $cb = \Codebird\Codebird::getInstance();
    $cb->setToken($config->access->token, $config->access->secret);

    if($currevent["title"] == "") {
        $text = "[DJ-Name]";
    } else {
        $text = $currevent["title"];
    }

    if($text[1] == "@") {
        $text = "." . $text;
    }

    if(strlen($text) > 74) {
        $text .= " - jetzt live im BRG!";
    } else {
        $text .= " - jetzt live im Brony Radio Germany!";
    }

    if(strlen($text) < 133) {
        $text .= " #Brony";
    }

    if(strlen($text) < 135) {
        $text .= " #MLP";
    }

    $cb->statuses_update(array(
        'status' => $text
    ));
?>
