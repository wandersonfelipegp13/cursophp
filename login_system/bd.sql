CREATE DATABASE login_system;

USE login_system;

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    login VARCHAR(255),
    password VARCHAR(32)
);


