FROM ubuntu

# File Author / Maintainer
MAINTAINER user
COPY index.html /var/www/html
# Update the repository sources list
RUN apt-get update 

# Install and run apache
RUN apt-get install -y apache2 && apt-get clean
RUN echo "ServerName myserver" >> etc/apache2/apache2.conf

EXPOSE 80
CMD apachectl -D FOREGROUND
