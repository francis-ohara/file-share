CREATE DATABASE file_share;
USE file_share;

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

CREATE TABLE file(
                     file_id INTEGER PRIMARY KEY AUTO_INCREMENT,
                     file_filename TEXT,
                     file_filesize DOUBLE,
                     file_filepath TEXT,
                     file_date_uploaded DATE,
                     file_uploader VARCHAR(256),
                     file_store_of_uploader ENUM ('A', 'B', 'C', 'D', 'E', 'F'),
                     file_downloaded_by_manager BOOL
);