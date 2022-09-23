#!/bin/sh
echo "Found the following configuration:"
echo "Title: $TOOLSNAME"
echo "URL: $TOOLSSCHEMA://$TOOLSURL"
echo "DB Host: $DBHOST"
echo "DB: $DBDB"
echo "DB User: $DBUSER"
echo "DB Pass: $DBPASS"
echo "SMTP Host: $TOOLSSMTPHOST"
echo "SMTP Port: $TOOLSSMTPPORT"
echo "SMTP User: $TOOLSSMTPUSER"
echo "SMTP Pass: $TOOLSSMTPPASS"
echo "IMAP User: $TOOLSIMAPUSER"
echo "IMAP Pass: $TOOLSIMAPPASS"
echo "TG Bot API Key: $TGBOTAPIKEY"
echo "TG Bot Name: $TGBOTNAME"
echo "TG Bot Admin ID: $TGBOTADMINID"
read -p "Do you want to install with these settings ? (y/n) " yn
case $yn in
        y ) echo Installing;;
        * ) echo Exiting;
                exit;;
esac

cp /var/www/.env.example /var/www/.env
sed -i "s/TOOLSDBHOST/$DBHOST/g" /var/www/.env
sed -i "s/TOOLSDBUSER/$DBUSER/g" /var/www/.env
sed -i "s/TOOLSDBPASS/$DBPASS/g" /var/www/.env
sed -i "s/TOOLSDBDB/$DBDB/g" /var/www/.env
sed -i "s/TOOLSDBHOST/$DBHOST/g" /var/www/.env
sed -i "s/TOOLSNAME/$TOOLSNAME/g" /var/www/.env
sed -i "s/TOOLSSCHEMA/$TOOLSSCHEMA/g" /var/www/.env
sed -i "s/TOOLSURL/$TOOLSURL/g" /var/www/.env
sed -i "s/TOOLSSMTPHOST/$TOOLSSMTPHOST/g" /var/www/.env
sed -i "s/TOOLSSMTPPORT/$TOOLSSMTPPORT/g" /var/www/.env
sed -i "s/TOOLSSMTPUSER/$TOOLSSMTPUSER/g" /var/www/.env
sed -i "s/TOOLSSMTPPASS/$TOOLSSMTPPASS/g" /var/www/.env
sed -i "s/TOOLSIMAPUSER/$TOOLSIMAPUSER/g" /var/www/.env
sed -i "s/TOOLSIMAPPASS/$TOOLSIMAPPASS/g" /var/www/.env
sed -i "s/TGBOTAPIKEY/$TGBOTAPIKEY/g" /var/www/.env
sed -i "s/TGBOTNAME/$TGBOTNAME/g" /var/www/.env
sed -i "s/TGBOTADMINID/$TGBOTADMINID/g" /var/www/.env
cd /var/www/
php ./composer.phar install
php ./artisan key:generate
php ./artisan migrate
echo "INSTALLATION COMPLETED"
