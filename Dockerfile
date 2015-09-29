FROM php:5.6-cli

MAINTAINER Fabio Favero Henkes <fabio.favero@gmail.com>

RUN \
    mkdir -p /root/tbt

ADD . /root/tbt/

WORKDIR /root/tbt

CMD ["php", "./throwback.php"]