FROM mcr.microsoft.com/devcontainers/php:1-8.4-bookworm

# Install additional Laravel-specific PHP extensions

# pdo_mysql: Required if using a MySQL database with Laravel
RUN docker-php-ext-install pdo_mysql

# pcntl: Running 'composer run dev' fails without this
RUN docker-php-ext-install pcntl

# The remaining items below are from the original PHP & MariaDB template

# Install MariaDB client
# RUN apt-get update && export DEBIAN_FRONTEND=noninteractive \
#    && apt-get install -y mariadb-client \ 
#    && apt-get clean -y && rm -rf /var/lib/apt/lists/*

# [Optional] Uncomment this section to install additional OS packages.
# RUN apt-get update && export DEBIAN_FRONTEND=noninteractive \
#     && apt-get -y install --no-install-recommends <your-package-list-here>

# [Optional] Uncomment this line to install global node packages.
# RUN su vscode -c "source /usr/local/share/nvm/nvm.sh && npm install -g <your-package-here>" 2>&1

