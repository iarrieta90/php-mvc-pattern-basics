-- CREATE A DATABASE
CREATE DATABASE organizer;

-- USE IT
USE organizer;

-- CREATE AN EMPLOYEES TABLE
CREATE TABLE employees(
emp_no INT AUTO_INCREMENT,
first_name VARCHAR(20),
last_name VARCHAR(20),
email VARCHAR(50),
gender ENUM('M','F','N'),
street VARCHAR(50),
state VARCHAR(50),
city VARCHAR(50),
birth_date DATE,
postal_code VARCHAR(10),
phone_no VARCHAR(20)
hire_date DATE,
PRIMARY KEY(emp_no)
);

-- CREATE SOME EMPLOYEES
INSERT INTO employees (first_name, last_name, birth_date, gender, hire_date) VALUES
('Fred','Smith','1990-10-29','M','2019-08-03'),
('Jon','Doe','1979-02-22','M','2005-02-05'),
('Ana','Aguirre','1991-05-12','F','2017-05-03'),
('Maite','Moreno','1980-11-04','F','2001-07-09');

-- CREATE EMPLOYEE STATUS TABLE
CREATE TABLE emp_status (
loc_no INT AUTO_INCREMENT,
loc_name VARCHAR(20),
PRIMARY KEY(loc_no)
);

-- CREATE EMPLOYEE STATUSES
INSERT INTO emp_status (loc_name) VALUES
('Home'),
('Office'),
('Vacation');

-- CREATE WORKSTATION TABLE
CREATE TABLE workstation(
    wsta_no INT AUTO_INCREMENT,
    wsta_space INT,
    PRIMARY KEY(wsta_no)
);

-- CREATE WORKSTATIONS
INSERT INTO workstation (wsta_space) VALUES 
('2'),
('2'),
('2');

-- CREATE RESERVATION 
CREATE TABLE reservations(
res_no INT AUTO_INCREMENT,
res_done DATE,
res_day DATE,
emp_no INT,
PRIMARY KEY(res_no)
);

INSERT INTO reservations (res_done, res_day, emp_no) VALUES
('2021-02-17','2021-02-24','1'),
('2021-02-16','2021-02-22','2'),
('2021-02-15','2021-02-21','3'),
('2021-02-18','2021-02-28','4');