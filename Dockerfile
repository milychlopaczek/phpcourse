# GCC support can be specified at major, minor, or micro version
# (e.g. 8, 8.2 or 8.2.0).
# See https://hub.docker.com/r/library/gcc/ for all supported GCC
# tags from Docker Hub.
# See https://docs.docker.com/samples/library/gcc/ for more on how to use this image
# FROM gcc:latest

# # These commands copy your files into the specified directory in the image
# # and set that as the working location
# COPY . /usr/src/myapp
# WORKDIR /usr/src/myapp

# # This command compiles your app using GCC, adjust for your source code
# RUN g++ -o myapp main.cpp
# FROM php:7.1-apache
# COPY apache2.conf /etc/apache2
# RUN docker-php-ext-install mysqli pdo pdo_mysql

FROM php:apache
RUN apt-get update && apt install -y docker-php-ext-install pdo_mysql 
COPY . /var/www
EXPOSE 80
