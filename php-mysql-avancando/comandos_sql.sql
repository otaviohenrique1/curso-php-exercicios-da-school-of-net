CREATE DATABASE php-mysql-avancando;
CREATE TABLE posts(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50) NOT NULL,
    body TEXT NOT NULL
);
INSERT INTO posts (title, body) VALUES
    ("Laravel framework", "o Laravel é muito utilizado hoje em dia"),
    ("CakePHP", "Framework de desenvolvimento rápido")
    ("Slim Framework", "Micro framework, podemos utilizar o Eloquent do Laravel nele");