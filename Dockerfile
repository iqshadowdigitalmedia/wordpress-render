FROM wordpress:latest
ENV PORT=10000
EXPOSE 10000
RUN sed -i "s/80/${PORT}/g" /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf
