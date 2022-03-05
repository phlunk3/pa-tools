Planetarion Alliance Toolset

Steps to install:
* Replace all occurrences of webby.yourdomain.tld
* Replace all occurrences of webby with your ally name (no spaces!)
* Upload files to your hosting account
* Create a symbolic link from /path/to/alliance/public to your webserver public directory (public_html, htdocs, www)
* Create a MySQL user named patools_webby with databases patools_webby patools_webby_forum
* Import MySQL Data (patools_webby.sql and patools_webby_forum.sql)
* Create a Telegram Bot (see @BotFather on TG for instructions)
* Open `.env` at `alliance/.env` configure, as desired
* Open `forums/config.php` and configure
* Open `forums/user-password,enable,disable,add,delete.php` and replace `123.456.789.101` with your server IP
* Add `php artisan schedule:run` to your crontab, run every minute

Remember:
* Members must do !setnick and !setplanet or tools won’t work as expected