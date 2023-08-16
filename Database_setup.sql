-- database_setup.sql

-- Drop 'users' table if it exists
DROP TABLE IF EXISTS users;

-- Create 'users' table
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    address VARCHAR(255),
    phone VARCHAR(20)
);


-- Insert sample user data
INSERT INTO users (name, email, password, address, phone)
VALUES ('John Doe', 'john@example.com', 'hashed_password', '123 Main St', '555-1234');
