<?php
    require("currsong.php");
    require("currevent.php");

    if($currevent["start_time"] > $nowunix OR $currevent["start_time"] == 0) {
        echo "Now Playing: $currsong (DJ-Pony Lucy, $listener)";
    } elseif($currevent["start_time"] < $nowunix) {
        echo "Now Playing: $currsong (" . $currevent["title"] . ", $listener)";
    }
?>
