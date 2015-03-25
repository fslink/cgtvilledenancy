#!/bin/bash

if [ "$1" == "cache" -o "$1" == "" ]; then
    rm -rf ./app/logs/*;
    rm -rf ./app/cache/*;

    php ./app/console cache:clear --env=dev;
    php ./app/console assets:install --symlink web --env=dev;
    php ./app/console assetic:dump --env=dev;
    chmod -R 777 ./app/logs/*;
    chmod -R 777 ./app/cache/*;
fi