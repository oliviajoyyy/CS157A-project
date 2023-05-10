use musicLessons;

-- Location
DELETE FROM Location WHERE locationID = 1;
DELETE FROM Location WHERE locationID = 2;
DELETE FROM Location WHERE locationID = 3;
INSERT INTO Location(locationID, streetAddress, city, state, zip, description, maxParticipants)
	VALUES (1, '123 Main St', 'San Jose', 'CA', '95116', 'A space at the community center', 25);
INSERT INTO Location(locationID, streetAddress, city, state, zip, description, maxParticipants)
	VALUES (2, '21250 Stevens Creek Blvd', 'Cupertino', 'CA', '95014', 'A classroom at De Anza college', 16);
INSERT INTO Location(locationID, streetAddress, city, state, zip, description, maxParticipants)
	VALUES (3, '432 1st St', 'Anytown', 'CA', '12345', 'A music room', 10);

-- Verification of insertions
SELECT * FROM Location;

-- Lesson
DELETE FROM Lesson WHERE lessonID = 1;
DELETE FROM Lesson WHERE lessonID = 2;
DELETE FROM Lesson WHERE lessonID = 3;
DELETE FROM Lesson WHERE lessonID = 4;
INSERT INTO Lesson(lessonID, lessonName, instrument, startTime, endTime, cost, description, locationID)
	VALUES (1, 'Beginner Guitar', 'guitar', '11:30', '13:00', 50, 'Beginner lessons in guitar', 2);
INSERT INTO Lesson(lessonID, lessonName, instrument, startTime, endTime, cost, description, locationID)
	VALUES (2, 'Intermediate Piano', 'piano', '10:00', '11:30', 60, 'Intermediate lessons in piano', 1);
INSERT INTO Lesson(lessonID, lessonName, instrument, startTime, endTime, cost, description, locationID)
	VALUES (3, 'Beginner Trumpet', 'trumpet', '13:00', '14:30', 50, 'Beginner lessons in trumpet', 3);
INSERT INTO Lesson(lessonID, lessonName, instrument, startTime, endTime, cost, description, locationID)
	VALUES (4, 'Intermediate Guitar', 'guitar', '10:30', '12:00', 60, 'Intermediate lessons in guitar', 1);

-- Verification
SELECT * FROM Lesson;

-- Customer
DELETE FROM Customer WHERE customerID = 1;
DELETE FROM Customer WHERE customerID = 2;
DELETE FROM Customer WHERE customerID = 3;
INSERT INTO Customer(customerID, customerName, email, phoneNumber)
	VALUES (1, 'Jane Doe', 'jane@music.com', '555-777-9999');
INSERT INTO Customer(customerID, customerName, email, phoneNumber)
	VALUES (2, 'Bob Jones', 'bob@music.com', '555-888-7777');
INSERT INTO Customer(customerID, customerName, email, phoneNumber)
	VALUES (3, 'Jack Bloggs', 'jack@music.com', '555-444-8888');

-- Verification
SELECT * FROM Customer;

-- CustomerLesson
TRUNCATE CustomerLesson;
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (1, 1);
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (1, 3);
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (2, 2);
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (2, 4);
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (3, 3);

-- Verification
SELECT * FROM CustomerLesson;

-- Information retrieval; For verification, compare with Views spreadsheet
-- select all customers who are taking the beginner trumpet lesson (lessonID=3)
SELECT Customer.customerID, customerName, Lesson.lessonName FROM Customer INNER JOIN CustomerLesson ON Customer.customerID = CustomerLesson.customerID AND CustomerLesson.lessonID = 3;

-- select all customers who are taking any lesson using the guitar instrument
SELECT Customer.customerID, customerName, Lesson.lessonName, Lesson.instrument FROM Customer INNER JOIN CustomerLesson ON Customer.customerID = CustomerLesson.customerID INNER JOIN Lesson ON CustomerLesson.lessonID = Lesson.lessonID AND instrument = 'guitar';

-- select all lessons that have max participants less than 25
SELECT Lesson.lessonID, Lesson.lessonName, maxParticipants, Location.description FROM Lesson INNER JOIN Location ON Lesson.locationID = Location.locationID AND maxParticipants < 25;


-- More insertion
-- Instructor
DELETE FROM Instructor WHERE instructorID = 1;
DELETE FROM Instructor WHERE instructorID = 2;
DELETE FROM Instructor WHERE instructorID = 3;
INSERT INTO Instructor(instructorID, instructorName, email, phoneNumber)
	VALUES (1, 'John Smith', 'john@music.com', '555-555-4444');
INSERT INTO Instructor(instructorID, instructorName, email, phoneNumber)
	VALUES (2, 'Alice Brown', 'alice@music.com', '555-444-3333');
INSERT INTO Instructor(instructorID, instructorName, email, phoneNumber)
	VALUES (3, 'Emily Davis', 'emilye@music.com', '555-333-2222');
    
-- Verification
SELECT * FROM Instructor;

SELECT * FROM Location WHERE maxParticipants < 25;
SELECT * FROM Lesson WHERE instrument = 'guitar';


-- InstructorLesson
TRUNCATE InstructorLesson;
INSERT INTO InstructorLesson(instructorID, lessonID) VALUES (1, 1);
INSERT INTO InstructorLesson(instructorID, lessonID) VALUES (1, 2);
INSERT INTO InstructorLesson(instructorID, lessonID) VALUES (2, 3);
INSERT INTO InstructorLesson(instructorID, lessonID) VALUES (3, 4);

-- InstructorSpecialty
TRUNCATE InstructorSpecialty;
INSERT INTO InstructorSpecialty(instructorID, specialty) VALUES (1, 'guitar');
INSERT INTO InstructorSpecialty(instructorID, specialty) VALUES (1, 'piano');
INSERT INTO InstructorSpecialty(instructorID, specialty) VALUES (2, 'trumpet');
INSERT INTO InstructorSpecialty(instructorID, specialty) VALUES (3, 'drums');
INSERT INTO InstructorSpecialty(instructorID, specialty) VALUES (3, 'guitar');

-- LessonDay
TRUNCATE LessonDay;
INSERT INTO LessonDay(lessonID, day) VALUES (1, 'Mon');
INSERT INTO LessonDay(lessonID, day) VALUES (1, 'Wed');
INSERT INTO LessonDay(lessonID, day) VALUES (2, 'Tue');
INSERT INTO LessonDay(lessonID, day) VALUES (2, 'Thu');
INSERT INTO LessonDay(lessonID, day) VALUES (3, 'Tue');
INSERT INTO LessonDay(lessonID, day) VALUES (3, 'Thu');
INSERT INTO LessonDay(lessonID, day) VALUES (4, 'Wed');
INSERT INTO LessonDay(lessonID, day) VALUES (4, 'Fri');

