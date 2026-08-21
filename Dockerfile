FROM wordpress:latest

ENV PORT=10000
EXPOSE 10000
RUN sed -i "s/80/\${PORT}/g" /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

# Map simple DB environment variables to official WordPress variables
ENV WORDPRESS_DB_HOST=${DB_HOST}
ENV WORDPRESS_DB_NAME=${DB_NAME}
ENV WORDPRESS_DB_USER=${DB_USER}
ENV WORDPRESS_DB_PASSWORD=${DB_PASSWORD}
