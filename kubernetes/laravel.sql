DROP DATABASE IF EXISTS laravel;
CREATE DATABASE laravel;

CREATE USER '[USERNAME]'@'%' IDENTIFIED BY '[PASSWORD]';

GRANT ALL PRIVILEGES ON '[USERNAME]' . * TO 'USERNAME'@'%';

FLUSH PRIVILEGES;
