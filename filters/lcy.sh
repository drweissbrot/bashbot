#!/bin/bash
onair() {
    bash cmd/team/onair
}

offair() {
    bash cmd/team/offair
}

dj() {
    bash cmd/info/dj
}

song() {
    bash cmd/info/song
}

vardump() {
    bash cmd/info/vardump
}

cmdlist() {
    bash cmd/info/cmdlist
}

filter 'lucy_light, onair' onair
filter 'lucy_light, offair' offair

filter 'lucy_light, dj' dj
filter 'lucy_light, song' song
filter 'lucy_light, vardump' vardump
filter 'lucy_light, help' cmdlist
