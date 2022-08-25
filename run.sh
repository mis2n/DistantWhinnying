#!/bin/bash
docker run -i -t -p "80:80" -p 3306:3306 -v /root/DistantWhinnying/app:/app -v /root/DistantWhinnying/mysql:/var/lib/mysql mattrayner/lamp:latest
