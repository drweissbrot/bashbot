#!/bin/bash
bot() {
    echo 'I am bot. Hear me rawwrr.'
}

ts() {
    echo 'TeamSpeak 3-Server: 85.214.218.195:9988'
}

hello() {
	bash cmd/query/hello
}

filter 'lucy_light, bot' bot
filter 'lucy_light, ts' ts
filter 'hallöchen~' hello
