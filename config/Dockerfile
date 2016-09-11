FROM ubuntu
MAINTAINER Ryan Hinkle

ENV DEBIAN_FRONTEND noninteractive


ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid

# Install Apache, SSL, PHP, and some PHP modules
RUN apt-get update && \
    apt-get -yq install \
        curl \
        apache2 \
        libapache2-mod-php \
        php-mysql \
        php-mcrypt \
        php-gd \
        php-curl \
        php-pear && \
    rm -rf /var/lib/apt/lists/* && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN curl -sSO https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar 
RUN mv wp-cli.phar /usr/local/bin/wp

# RUN echo "ServerName zing.docker" >> /etc/apache2/apache2.conf

ENV ALLOW_OVERRIDE **TRUE**

EXPOSE 80
RUN rm -f /etc/apache2/sites-available/*
ADD ./nginx/ /etc/apache2/sites-available/

ADD run.sh /run.sh
RUN chmod 755 /*.sh
WORKDIR /var/www/html
CMD ["/run.sh"]