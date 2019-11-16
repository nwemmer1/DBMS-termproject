CREATE TABLE `departments` (
  `department_id` smallint(6) NOT NULL,
  `department_name` varchar(100) DEFAULT NULL,
  `building` varchar(25) NOT NULL,
  `numOfEmployees` smallint(6) NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `teaches` varchar(250) DEFAULT NULL,
  `type_of_employment` varchar(15) NOT NULL,
  `email` varchar(60) NOT NULL,
  `office_number` varchar(12) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1

CREATE TABLE `scholarships` (
  `scholarship_id` int(11) NOT NULL,
  `department_id` smallint(6) NOT NULL,
  `scholarship_name` varchar(150) DEFAULT NULL,
  `requirements` varchar(100) NOT NULL,
  `cashAmount` varchar(30) DEFAULT NULL,
  `body` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`scholarship_id`),
  KEY `department_id` (`department_id`),
  CONSTRAINT `scholarships_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1

CREATE TABLE `offices` (
  `employee_id` int(11) NOT NULL,
  `department` varchar(30) NOT NULL,
  `room_number` smallint(6) NOT NULL,
  `office_hours` varchar(25) NOT NULL,
  `building` varchar(25) NOT NULL,
  PRIMARY KEY (`building`,`room_number`),
  KEY `employee_id` (`employee_id`),
  CONSTRAINT `offices_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1