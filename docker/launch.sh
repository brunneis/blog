#!/bin/bash
./build.sh
source env.sh
docker rm -f minitrece 2>/dev/null
run_container () {
    docker run -d \
    -e SITE_SCHEME=$SITE_SCHEME \
    -p $PORT:80 \
    -v "$(pwd)"/blog:/var/www/html/trece/inc/blog \
    -v "$(pwd)"/img:/var/www/html/img/blog \
    --name $CONTAINER_NAME $DOCKER_IMAGE
}
run_container
