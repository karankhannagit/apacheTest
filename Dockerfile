FROM ubuntu

# File Author / Maintainer
MAINTAINER user

# Update the repository sources list
RUN apt-get update

# Install and run apache
RUN apt-get install -y apache2 && apt-get clean
RUN echo "ServerName myserver" >> etc/apache2/apache2.conf
COPY index.html /var/www/html/

CMD apachectl -D FOREGROUND
EXPOSE 80
