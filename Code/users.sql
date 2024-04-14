
-- Create the main database
CREATE DATABASE IF NOT EXISTS UserDB;

-- Use the created database
USE UserDB;

-- Create the table for storing user information
CREATE TABLE IF NOT EXISTS Users (
    UserID INT AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(50) UNIQUE NOT NULL,
    Email VARCHAR(100) UNIQUE NOT NULL,
    Password VARCHAR(100) NOT NULL,
    RegistrationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

--made by: Dominik Szczepański https://github.com/Dominik-developer 
