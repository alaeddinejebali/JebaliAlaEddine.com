FROM ubuntu:12.04

MAINTAINER Ala Eddine JEBALI <jebali.alaeddine@gmail.com>

#install apache2 and php5 - si les packages n'existent plus : incrementer le dernier chiffre
#RUN apt-get update && apt-get install -y apache2=2.2.22-1ubuntu1.10 php5=5.3.10-1ubuntu3.19 && apt-get clean
RUN apt-get update && apt-get install -y apache2 php5 && apt-get clean

ADD index.php /var/www/

#ADD apache2.conf /etc/apache2/
#ADD php.ini /etc/php5/apache2/
ADD 000-default /etc/apache2/sites-enabled/


#activate Mod_Rewrites
RUN a2enmod rewrite

#RUN service apache2 restart

EXPOSE 80

WORKDIR /var/www

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
