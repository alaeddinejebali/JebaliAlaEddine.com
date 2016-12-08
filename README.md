# JebaliAlaEddine.com
My personal website

$> sudo docker run -d -P bylexus/apache-php7

$> sudo docker run -d -p 8080:80     -v /var/www/wiki.jebalialaeddine.com:/var/www     -e PHP_ERROR_REPORTING='E_ALL & ~E_STRICT'     bylexus/apache-php7

$> visit http://wiki.jebalialaeddine.dev:8080
