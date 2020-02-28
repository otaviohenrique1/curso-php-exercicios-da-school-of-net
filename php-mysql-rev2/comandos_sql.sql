CREATE DATABASE php_mysql_iniciando;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL
);
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL
);
INSERT INTO users (email) VALUE ("erik@erik.com");
SELECT FROM users;