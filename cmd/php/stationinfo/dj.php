<?php
    require("currevent.php");

    if($currevent["title"] == "") {
        $currevent["title"] = "Nicht geplant";
    }

    if($nextevent["title"] == "") {
        $nextevent["title"] = "Nicht geplant";
    }

    if($currevent["start_time"] > $nowunix OR $currevent["start_time"] == 0) {
        echo "Nächste Sendung: " . $currevent["title"] . " (" . $currevent["time_human"] . ")";
    } elseif($currevent["start_time"] < $nowunix) {
        echo "On Air: " . $currevent["title"] . "
Nächste Sendung: " . $nextevent["title"] . " (" . $nextevent["time_human"] . ")";
    }
?>
