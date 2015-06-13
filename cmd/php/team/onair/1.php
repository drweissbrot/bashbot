<?php
    $filename   = __DIR__ . "/show.md";
    $handle     = fopen($filename, "r+");
    $contents   = fread($handle, filesize($filename));
    $contents   = preg_replace("/\r|\n/", "", $contents);
    fclose($handle);

    if($contents !== "Sendung beendet") {
        echo "Sendung bereits begonnen: " . $contents;
    } else {
        $tobewritten = date("d.m.Y H:i:s");
        $handle = fopen($filename, "r+");
        fwrite($handle, $tobewritten);
        fclose($handle);
    }
?>
