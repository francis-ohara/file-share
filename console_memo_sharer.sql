CREATE DATABASE creative_learning;
USE creative_learning;

CREATE TABLE employee(
                         employee_id INTEGER PRIMARY KEY AUTO_INCREMENT,
                         employee_username VARCHAR(256) UNIQUE,
                         employee_password VARCHAR(256),
                         employee_firstname VARCHAR(256),
                         employee_lastname VARCHAR(256),
                         employee_email VARCHAR(256),
                         employee_date_of_birth DATE,
                         employee_permanent_address TEXT,
                         employee_phone_number VARCHAR(15),
                         employee_store ENUM ('A', 'B', 'C', 'D', 'E', 'F'),
                         employee_position TEXT,
                         employee_date_employed DATE
);

CREATE TABLE manager(
                        manager_id INTEGER PRIMARY KEY AUTO_INCREMENT,
                        manager_username VARCHAR(256) UNIQUE,
                        manager_password VARCHAR(256),
                        manager_firstname VARCHAR(256),
                        manager_lastname VARCHAR(256),
                        manager_email VARCHAR(256),
                        manager_date_of_birth DATE,
                        manager_permanent_address TEXT,
                        manager_phone_number VARCHAR(15),
                        manager_store ENUM ('A', 'B', 'C', 'D', 'E', 'F'),
                        manager_position TEXT,
                        manager_date_employed DATE
);

CREATE TABLE memo(
                     memo_id INTEGER PRIMARY KEY AUTO_INCREMENT,
                     memo_filename TEXT,
                     memo_filesize DOUBLE,
                     memo_filepath TEXT,
                     memo_date_uploaded DATE,
                     memo_uploader VARCHAR(256),
                     memo_store_of_uploader ENUM ('A', 'B', 'C', 'D', 'E', 'F')
);