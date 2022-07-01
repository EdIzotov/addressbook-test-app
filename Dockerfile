FROM mattrayner/lamp:latest-1604

COPY --chown=www-data:www-data ./ /var/www/html/

#RUN ["mysql", "<", "/var/www/html/init.sql"]
#CMD ["mysql", "-u", "addressbook", "-pasdffdsA1", "-D", "addressbook", "<", "/var/www/html/addressbook.sql"]
#RUN mysql -u addressbook -pasdffdsA1 -D addressbook < /var/www/html/addressbook.sql

EXPOSE 80:80
