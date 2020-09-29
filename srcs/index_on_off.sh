#!/bin/sh

if ! cmp -s /etc/nginx/sites-enabled/localhost localhost_index_off
then
	echo "index OFF"
	cp localhost_index_off /etc/nginx/sites-enabled/localhost
	rm -r /var/www/localhost/index.html
elif ! cmp -s /etc/nginx/sites-enabled/localhost localhost_index_on
then
	echo "index ON"
	cp localhost_index_on /etc/nginx/sites-enabled/localhost
	cp tests/index.html /var/www/localhost/index.html
	cp tests/bg.jpg /var/www/localhost/bg.jpg
fi

service nginx reload
service nginx restart
