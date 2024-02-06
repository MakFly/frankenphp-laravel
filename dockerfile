FROM dunglas/frankenphp

# add additional extensions here:
RUN install-php-extensions \
	pdo_mysql \
    pdo_pgsql \
	gd \
	intl \
	zip \
    bcmath \
    opcache \
    xdebug

COPY . /app/public

