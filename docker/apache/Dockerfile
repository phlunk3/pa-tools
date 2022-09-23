FROM php:8.0-apache
ENV DBPASS changeme
ENV DBHOST database
ENV DBDB tools
ENV DBUSER tools
ENV TOOLSNAME tools
ENV TOOLSURL localhost
ENV TOOLSSCHEMA https
ENV TOOLSDEBUG false
ENV TOOLSSMTPHOST localhost
ENV TOLLSSMTPPORT 25
ENV TOOLSSMTPUSER=
ENV TOOLSSMTPPASS=
ENV TOOLSIMAPUSER=
ENV TOOLSIMAPPASS=
ENV TGBOTAPIKEY=
ENV TGBOTNAME=
ENV TGBOTADMINID=
ENV FORUMSENABLED 0
RUN apt-get update && apt-get install -y libzip-dev libc-client-dev libkrb5-dev && rm -r /var/lib/apt/lists/*
RUN docker-php-ext-install mysqli pdo pdo_mysql zip \
	&& docker-php-ext-enable mysqli pdo_mysql zip \
	&& a2enmod rewrite
RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl \
    && docker-php-ext-install imap
COPY install.sh /install.sh

