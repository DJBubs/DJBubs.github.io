-- Step 1: Create the database
CREATE DATABASE RallyResults;

-- Step 2: Use the database
USE RallyResults;

-- Step 3: Create the table
CREATE TABLE RallyData (
    id INT AUTO_INCREMENT PRIMARY KEY,
    rally_year YEAR NOT NULL,
    rally_name VARCHAR(255) NOT NULL,
    placement INT NOT NULL
);

-- Step 4: Insert some example data (optional)
INSERT INTO RallyData (rally_year, rally_name, placement) 
VALUES 
(2023, 'Monte Carlo Rally', 1),
(2023, 'Swedish Rally', 2),
(2022, 'Monte Carlo Rally', 1),
(2022, 'Swedish Rally', 3);
