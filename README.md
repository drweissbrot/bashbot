# lcy
#### Brony Radio Germany's IRC bot, based on [bashbot](https://github.com/joshcartwright/bashbot)

Lucy_Light (aka lcy) is an extended version of [Josh Cartwright's bashbot](https://github.com/joshcartwright/bashbot), adding some security features (checking for the nickname or hostname of users) and modifing the functionality.

**NB!** Even though lcy is (a bit) more secure, I would **not** suggest to use it on a public server. You can use Lucy online, but be aware that it indeed can be exploited! (It's probably very easy to exploit it, to be honest.)

### Getting Started
#### Requirements
You'll need to have the following things installed on your server (or whatever device you want to use):
* Linux (I recommend Debian-based systems)
* PHP5 (or later, once available)
* To clone this repo: git
* To keep fish running, even after closing a terminal / SSH session: screen (optional)

On Debian-based systems with apt-get installed, use this little line:
```sh
# if sudo is installed and you're not logged in as root:
sudo apt-get update && sudo apt-get upgrade && sudo apt-get install php5 git screen
```

If you don't have sudo installed, just drop these words.

#### Installation
Just clone this repository to your (or your server's) hard drive.
```sh
git clone https://github.com/drweissbrot/lcy.git ~/lcy # Change ~/lcy if you want to install fishbot somewhere else
cd ~/lcy # or wherever you installed it to
```

#### Configuration
Lucy needs a very basic configuration file, consisting of the following lines:

```sh
nick=lcy
server=raspberrypi
port=6667
chans=( "#brgtest" )
password=123456
```

You can find a copy of those in lcy's samples directory. Just copy the sample file into lcy.cfg and fill in what's needed.

#### Starting lcy
You can execute Lucy by typing `` $ ./lcy`` into your terminal. I recommend using screen, so that's `` $ screen ./lcy``. Note that you should cd into the fishbot directory first. You can also perform this command, no matter where you are on your device: `` $ screen vash ~/lcy/lcy ``. Note that fish uses the config files in the directory you are currently in. If there are none, fish will create them.

However, if you have screen installed, you can also use the start.sh file, which will execute lcy in an detached instance of screen:
`` $ ~/lcy/start.sh``.

### Creating commands
#### Commands
Any files you put into the cmd/query directory can be issued by querying the bot ("/QUERY lcy <command>"). For each command that shall be executed from a channel, you will need to add the command to the filters directory.

The following variables and commands can be used in any command:
* $CHANNEL -- the channel the command was sent in (or, if via query, the user's nick
* $NAME -- the name of the user who performed a command
* $HOST -- the hostname of the user who performed a command - mask: ":Nickname!Ident@hostname" (e. g. ":DrWeissbrot!DrWeissbrot@fish.drweissbrot.net" in my case)
* send() -- sends raw data to the server, e. g. "PRIVMSG JohnDoe :blah" sends a query with text "blah" to JohnDoe

#### Make a command more secure
(I'll add instructions on this later, this function isn't even implemented right now.)

**NB!** Commands are NOT secured by default! You'll need to add the checks to every command respectively. (You can have secured and unsecured commands side by side, of course.)

### Making changes
If you're adding commands to Lucy, you should know a few things:
* Every file in Lucy's directory should be executable: ``$ chmod -R +x ~/lcy``
* When editing filters, you need to reload Lucy. Just terminate the process and restart it.
* There's no need to restart when just adding / modifing commands or PHP scripts.
* Editing the main loop (the 'lcy' file) should be avoided. You'll need this for some things, but try to avoid it.

### More information
For more detailed information, you can look up the [original bashbot readme](https://github.com/joshcartwright/bashbot/blob/master/README). If you want to add a filter, this is where you should look.

If you still have a question, feel free to ask! I'd be glad to help.

#### Contributing, license, terms of use
Just like bashbot, lcy is licensed under MIT. Feel free to do whatever you want with it, as long as you give credit to bashbot and lcy. Detailed information can be found on [GitHub's choosealicense.com](http://choosealicense.com/licenses/mit/).

If you would like to add something to Lucy, please let me know (GitHub issues and pull requests are a good way to do so).

If you use lucy, I'd appreciate it if you send me a little note.

**Note: This project is in no way affiliated with Hasbro or its subsidiaries.**
