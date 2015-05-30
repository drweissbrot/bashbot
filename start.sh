#!/bin/bash
cd ~/lcy

linecount=`screen -r lcy | grep "There is no screen to be resumed matching lcy." | wc -l`

if [ $linecount -eq 1 ]; then
    echo Starting in a detached screen named lcy. Use screen -r lucy to view.
    screen -dmS lcy bash ~/lcy/lcy
else
    echo lcy is already running. Use screen -r lcy to view. Running now.
    screen -r lcy
fi
