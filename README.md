# Planetarion Alliance Toolset

Steps to install:
* Replace all occurrences of webby.domain.tld
* Upload files to your hosting account
* Create a symbolic link from /path/to/alliance/public to your webserver public directory (public_html, htdocs, www)
* Open `.env` at `alliance/.env` configure, as desired
* Create a MySQL user named `patools_webby` with databases `patools_webby` and `patools_webby_forum`
* Import MySQL Data (`patools_webby.sql` and `patools_webby_forum.sql`)
* Create a Telegram Bot (see @BotFather on TG for instructions)
* As admin run `/addchannel` or `/addscanschannel` in your Telegram channel (add your Telegram ID to .env for access)
* Open `forums/config.php` and configure
* Open `forums/user-password,enable,disable,add,delete.php` and replace 123.456.789.101 with your server IP
* Add `php artisan schedule:run` to your crontab, run every minute

Remember:
* Members must do !setnick and !setplanet or tools won’t load on the webby
