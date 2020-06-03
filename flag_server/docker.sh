#!/bin/sh

docker run -v `pwd`:/var/www/html -p 8080:80 -d  --name flag_server -ti web_14.04:latest /var/www/html/run.sh


chmod 777 score.txt
chmod 777 result.txt
chmod 777 submitted
