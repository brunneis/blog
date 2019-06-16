#!/bin/bash
tar --dereference -c -f htdocs.tar \
    .htaccess \
    ../LICENSE \
    ../README.md \
    ../index.php \
    ../trece \
    ../css \
    ../img
docker build -t minitrece .
rm htdocs.tar