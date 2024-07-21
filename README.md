Before testing the result of the code run XAMPP (apache and SQL)
Also create a database and run these commands


CREATE DATABASE user_management;

USE user_management;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    address TEXT NOT NULL,
    country VARCHAR(50) NOT NULL,
    state VARCHAR(50) NOT NULL
);
