<?php
    $filename   = __DIR__ . "/show.md";
    $handle     = fopen($filename, "r+");
    $contents   = fread($handle, filesize($filename));
    $contents   = preg_replace("/\r|\n/", "", $contents);
    fclose($handle);

    if($contents !== "Sendung beendet") {
        echo $contents;
    } else {
        echo "Derzeit ist keine Sendung aktiv.";
    }
?>
