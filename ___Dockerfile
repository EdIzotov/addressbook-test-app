FROM fauria/lamp:latest


RUN apt-get update
#RUN apt-get install -y wget
#RUN cd /var/www/html && wget -O addressbook.zip https://www.dropbox.com/s/k8kju2nb0lyk06g/addressbook.zip?dl=0
#RUN apt-get install -y unzip
#RUN cd /var/www/html && unzip -o /var/www/html/addressbook.zip
#RUN rm /etc/apt/preferences.d/no-debian-php
#RUN apt-get install -y php7.3-mysqli
#RUN apt-get install -y nano

COPY --chown=www-data:www-data ./addressbook/ /var/www/html/
#CMD ["mysql", "<", "/var/www/html/addressbook.sql"]

#CMD ["apache2", "-D",  "FOREGROUND"]

#EXPOSE 8080:80