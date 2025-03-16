CREATE DATABASE expense_navigator;
USE expense_navigator;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    gender VARCHAR(10),
    email VARCHAR(100),
    phone VARCHAR(15),
    username VARCHAR(50) UNIQUE,
    password VARCHAR(255)
);

CREATE TABLE income (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date DATE,
    job_title VARCHAR(100),
    amount DECIMAL(10,2)
);

CREATE TABLE expenses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date DATE,
    source VARCHAR(100),
    amount DECIMAL(10,2)
);
