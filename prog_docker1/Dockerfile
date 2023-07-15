FROM php:latest

# Apacheのインストール
RUN apt-get update && apt-get install -y apache2

# DocumentRootを設定
WORKDIR /var/www/html

# Apacheの設定: サーバー名を設定しておくと警告が出なくなります
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# ApacheとPHPの設定を有効化
RUN a2enmod rewrite
RUN service apache2 restart