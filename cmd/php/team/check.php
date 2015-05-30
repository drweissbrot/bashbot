<?php
    $argv = $_SERVER['argv'];
    $totalArgv = count($argv);
    if($totalArgv > 1) {
        for( $x = 1; $x < $totalArgv; $x++ ) {
            switch($argv[$x]) {
                case '--host':
                $host = trim($argv[$x+1]);
                break;
            }
        }
    }

    $legit_hosts = array(
        ":PR-Pierre!Pierre@drweissbrot.net",
        ":Blacky!Blacky@Blacky.bronyradiogermany.com",
        ":Cabraloca!cabraloca@Cabraloca.bronyradiogermany.com",
        ":Guenz!Guenz@Guenz.bronyradiogermany.com",
        ":Vinyl_Dash!Vinyl@VinylDash.bronyradiogermany.com",
        ":YoungSpitfire!YoungSpitf@YoungSpitfire.bronyradiogermany.com"
    );

    function get_nick_from_host($string, $start, $end) {
        $string = " " . $string;
        $ini = strpos($string, $start);
        if($ini == 0) {
            return "";
        }
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }

    if(in_array($host, $legit_hosts)) {
		$legit = true;

        // Set nickname
        $nick = get_nick_from_host($host, ":", "!");
	}
?>
