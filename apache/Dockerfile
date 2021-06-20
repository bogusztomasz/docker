FROM httpd:2.4.33-alpine

RUN apk update; apk upgrade;

COPY apache.service.conf /usr/local/apache2/conf/apache.service.conf
RUN echo "Include /usr/local/apache2/conf/apache.service.conf" >> /usr/local/apache2/conf/httpd.conf
