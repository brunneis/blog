#!/bin/bash
source env.sh
tar --dereference -c -f htdocs.tar \
    .htaccess \
    ../LICENSE \
    ../README.md \
    ../index.php \
    ../trece \
    ../css \
    ../img
docker build -t $DOCKER_IMAGE .
rm htdocs.tar
