CREATE DATABASE musicLessons;

USE musicLessons;

CREATE TABLE Instructor (
instructorID INTEGER PRIMARY KEY UNIQUE NOT NULL,
instructorName VARCHAR(50) NOT NULL,
email VARCHAR(50) UNIQUE NOT NULL,
phoneNumber VARCHAR(50) UNIQUE NOT NULL
);

CREATE TABLE Customer (
customerID INTEGER PRIMARY KEY UNIQUE NOT NULL,
customerName VARCHAR(50) NOT NULL,
email VARCHAR(50) UNIQUE NOT NULL,
phoneNumber VARCHAR(15) UNIQUE NOT NULL
);

CREATE TABLE Location (
LocationID INTEGER PRIMARY KEY UNIQUE NOT NULL,
streetAddress VARCHAR(50) NOT NULL,
city VARCHAR(30) NOT NULL,
state VARCHAR(4) NOT NULL,
zip VARCHAR(5) NOT NULL,
description TEXT NOT NULL,
maxParticipants INTEGER NOT NULL
);

CREATE TABLE Lesson (
lessonID INTEGER PRIMARY KEY UNIQUE NOT NULL,
lessonName VARCHAR(25) NOT NULL,
instrument VARCHAR(15) NOT NULL,
startTime TIME NOT NULL,
endTime TIME NOT NULL,
cost DECIMAL(5,2) NOT NULL,
description TEXT NOT NULL,
locationID INTEGER NOT NULL,
FOREIGN KEY (locationID) REFERENCES Location(locationID)
);

CREATE TABLE CustomerLesson (
customerID INTEGER NOT NULL,
lessonID INTEGER NOT NULL,
PRIMARY KEY (customerID, lessonID),
FOREIGN KEY (customerID) REFERENCES Customer(customerID),
FOREIGN KEY (lessonID) REFERENCES Lesson(lessonID)
);

CREATE TABLE InstructorLesson (
instructorID INTEGER NOT NULL,
lessonID INTEGER NOT NULL,
PRIMARY KEY (instructorID, lessonID),
FOREIGN KEY (instructorID) REFERENCES Instructor(instructorID),
FOREIGN KEY (lessonID) REFERENCES Lesson(lessonID)
);

CREATE TABLE InstructorSpecialty (
instructorID INTEGER NOT NULL,
specialty VARCHAR(15) NOT NULL,
PRIMARY KEY (instructorID, specialty),
FOREIGN KEY (instructorID) REFERENCES Instructor(instructorID)
);

CREATE TABLE LessonDay (
lessonID INTEGER NOT NULL,
day CHAR(3) NOT NULL,
PRIMARY KEY (lessonID, day),
FOREIGN KEY (lessonID) REFERENCES lesson(lessonID)
);

-- in testing the DB schema, a couple errors were found. they are now fixed here.
ALTER TABLE Instructor MODIFY COLUMN phoneNumber VARCHAR(15) NOT NULL;
ALTER TABLE Location RENAME COLUMN LocationID to locationID;