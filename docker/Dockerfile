FROM php:8.2-cli
RUN apt-get update
# Set the working directory to the image default /usr/src/myapp
WORKDIR /usr/src/myapp
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" 
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer
# run the composer --version command when the container is started
CMD ["composer", "--version"]