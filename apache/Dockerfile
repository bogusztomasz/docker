FROM httpd:2.4.33-alpine

RUN apk update; apk upgrade;

RUN sed -i '/LoadModule rewrite_module/s/^#//g' /usr/local/apache2/conf/httpd.conf

COPY apache.service.conf /usr/local/apache2/conf/apache.service.conf
RUN echo "Include /usr/local/apache2/conf/apache.service.conf" >> /usr/local/apache2/conf/httpd.conf
