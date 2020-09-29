#!/bin/sh

cp info.php /var/www/localhost/info.php
cp test.html /var/www/localhost/test.html
cp todo_list.php /var/www/localhost/todo_list.php

service mysql start

echo "CREATE DATABASE testdb;" | mysql -u root
echo "CREATE USER 'test'@'localhost';" | mysql -u root
echo "SET password FOR 'test'@'localhost' = password('admin');" | mysql -u root
echo "GRANT ALL ON testdb.* TO 'test'@'localhost' IDENTIFIED BY 'password' WITH GRANT OPTION;" | mysql -u root
echo "FLUSH PRIVILEGES" | mysql -u root

echo "CREATE TABLE testdb.todo_list (item_id INT AUTO_INCREMENT, content VARCHAR(255), PRIMARY KEY(item_id));" | mysql -u root

echo "INSERT INTO testdb.todo_list (content) VALUES ('Get corrected.');" | mysql -u root
echo "INSERT INTO testdb.todo_list (content) VALUES ('Get a 100.');" | mysql -u root
echo "INSERT INTO testdb.todo_list (content) VALUES ('Outstanding???');" | mysql -u root
echo "INSERT INTO testdb.todo_list (content) VALUES ('Review the Corrector.');" | mysql -u root

echo "SELECT * FROM testdb.todo_list;" | mysql -u root
