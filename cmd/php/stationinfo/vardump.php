<?php
    require("currsong.php");
    require("currevent.php");

    if($autodj == true) {
        echo "Now Playing: $currsong (DJ-Pony Lucy, $listener)
Nächste Sendung: " . $nextevent["title"] . " (" . $nextevent["time_human"] . ")";
    } else {
        echo "Now Playing: $currsong (" . $currevent["title"] . ", $listener)
Nächste Sendung: " . $nextevent["title"] . " (" . $nextevent["time_human"] . ")";
    }
?>
