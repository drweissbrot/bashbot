<?php
    $cmd = json_decode(file_get_contents(__DIR__ . "/config.json"));
    shell_exec($cmd->command3->onair);
?>
