FROM wordpress:latest

ENV PORT=10000
EXPOSE 10000
RUN sed -i "s/80/\${PORT}/g" /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

# Map simple DB environment variables to official WordPress variables
ENV WORDPRESS_DB_HOST=${DB_HOST}
ENV WORDPRESS_DB_NAME=${DB_NAME}
ENV WORDPRESS_DB_USER=${DB_USER}
ENV WORDPRESS_DB_PASSWORD=${DB_PASSWORD}
RUN cd /usr/src/wordpress/wp-content/plugins && curl -L -o cloudinary.zip https://downloads.wordpress.org/plugin/cloudinary-image-management-and-manipulation-in-the-cloud-cdn.latest-stable.zip && unzip cloudinary.zip && rm cloudinary.zip && curl -L -o wordpress-seo.zip https://downloads.wordpress.org/plugin/wordpress-seo.latest-stable.zip && unzip wordpress-seo.zip && rm wordpress-seo.zip && curl -L -o wp-fastest-cache.zip https://downloads.wordpress.org/plugin/wp-fastest-cache.latest-stable.zip && unzip wp-fastest-cache.zip && rm wp-fastest-cache.zip
