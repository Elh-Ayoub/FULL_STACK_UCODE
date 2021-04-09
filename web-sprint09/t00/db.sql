CREATE DATABASE sword;
use sword;
create table if not exists users (
    id INT primary key AUTO_INCREMENT NOT NULL,
    login  VARCHAR(15) UNIQUE NOT NULL,
    password VARCHAR(20) NOT NULL,
    full_name VARCHAR(20) NOT NULL,
    email VARCHAR(30) NOT NULL,
    status VARCHAR(20) default 'user' NOT NULL
);
ALTER USER 'aelhaddadi'@'localhost' IDENTIFIED WITH mysql_native_password BY 'securepass';
INSERT INTO `users` (login, password, full_name, email) VALUES (\"$login\", \"$password\", \"$full_name\", \"$email\");