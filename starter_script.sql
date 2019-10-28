
use demo;
DROP TABLE IF EXISTS Employees;
DROP TABLE IF EXISTS Departments;
DROP TABLE IF EXISTS Scholarships;
DROP TABLE IF EXISTS Offices;

CREATE TABLE Employees (
    employee_id INT NOT NULL,
    first_name VARCHAR(15) NOT NULL,
    last_name VARCHAR(25) NOT NULL,
    phone_number VARCHAR(15) NOT NULL,
    title VARCHAR(35) NOT NULL,
    department VARCHAR(20) NOT NULL,
    teaches VARCHAR(20),
    type_of_employment VARCHAR(15) NOT NULL,
    email VARCHAR(60) NOT NULL,
    office_number VARCHAR(12) NOT NULL,
    PRIMARY KEY (employee_id)
);

CREATE TABLE Departments (
    department_id SMALLINT NOT NULL,
    department_name VARCHAR(30) NOT NULL,
    building VARCHAR(25) NOT NULL,
    numOfEmployees SMALLINT NOT NULL,
    PRIMARY KEY (department_id)
);

CREATE TABLE Scholarships (
    scholarship_id INT NOT NULL,
    department_id SMALLINT NOT NULL,
    scholarship_name VARCHAR(30) NOT NULL,
    requirements VARCHAR(100) NOT NULL,
    cashAmount INT NOT NULL,
    PRIMARY KEY (scholarship_id),
    FOREIGN KEY (department_id)
        REFERENCES Departments (department_id)
);

CREATE TABLE Offices (
    employee_id INT NOT NULL,
    department VARCHAR(30) NOT NULL,
    room_number SMALLINT NOT NULL,
    office_hours VARCHAR(25) NOT NULL,
    building VARCHAR(25) NOT NULL,
    PRIMARY KEY (building , room_number),
    FOREIGN KEY (employee_id)
        REFERENCES Employees (employee_id)
);
insert into Employees values
(1,'nathan','wemmer','330-336-7944', 'mr.', 'Computer Science', 'Computer Science', 'full-time', 'nww8@zips.uakron.edu','234');
