<?php
    $filename   = __DIR__ . "/onair/show.md";
    $handle     = fopen($filename, "r+");
    $contents   = fread($handle, filesize($filename));
    $contents   = preg_replace("/\r|\n/", "", $contents);
    fclose($handle);

    if($contents == "Sendung beendet") {
        echo "Derzeit ist keine Sendung aktiv.";
    } else {
        $tobewritten = "Sendung beendet";
        $handle = fopen($filename, "w");
        fwrite($handle, $tobewritten);
        fclose($handle);

        $cmd = json_decode(file_get_contents(__DIR__ . "/onair/config.json"), true);
        shell_exec($cmd["command3"]["offair"]);

        echo "Sendung beendet.";
    }
?>
