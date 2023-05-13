use musicLessons;

-- Location
INSERT INTO Location(locationID, streetAddress, city, state, zip, description, maxParticipants)
	VALUES (1, '123 Main St', 'San Jose', 'CA', '95116', 'A space at the community center', 25);
INSERT INTO Location(locationID, streetAddress, city, state, zip, description, maxParticipants)
	VALUES (2, '21250 Stevens Creek Blvd', 'Cupertino', 'CA', '95014', 'A classroom at De Anza college', 16);
INSERT INTO Location(locationID, streetAddress, city, state, zip, description, maxParticipants)
	VALUES (3, '432 1st St', 'Milpitas', 'CA', '95035', 'A music room', 10);
INSERT INTO Location(locationID, streetAddress, city, state, zip, description, maxParticipants)
	VALUES (4, '567 2st St', 'Fremont', 'CA', '94536', 'A classroom at a high school', 12);

-- Verification of insertions
SELECT * FROM Location;


-- Lesson
INSERT INTO Lesson(lessonID, lessonName, instrument, startTime, endTime, cost, description, locationID)
	VALUES (1, 'Beginner Guitar', 'guitar', '11:30', '13:00', 50, "Beginner lessons in guitar", 2);
INSERT INTO Lesson(lessonID, lessonName, instrument, startTime, endTime, cost, description, locationID)
	VALUES (2, 'Intermediate Piano', 'piano', '10:00', '11:30', 60, 'Intermediate lessons in piano', 1);
INSERT INTO Lesson(lessonID, lessonName, instrument, startTime, endTime, cost, description, locationID)
	VALUES (3, 'Beginner Trumpet', 'trumpet', '13:00', '14:30', 50, 'Beginner lessons in trumpet', 3);
INSERT INTO Lesson(lessonID, lessonName, instrument, startTime, endTime, cost, description, locationID)
	VALUES (4, 'Intermediate Guitar', 'guitar', '10:30', '12:00', 60, 'Intermediate lessons in guitar', 1);
INSERT INTO Lesson(lessonID, lessonName, instrument, startTime, endTime, cost, description, locationID)
	VALUES (5, 'Beginner Flute', 'flute', '18:00', '20:00', 45, 'Beginner lessons in flute', 4);
INSERT INTO Lesson(lessonID, lessonName, instrument, startTime, endTime, cost, description, locationID)
	VALUES (6, 'Intermediate Drums', 'drums', '12:00', '13:45', 60, 'Intermediate lessons in drums', 2);

-- Verification
SELECT * FROM Lesson;


-- Customer
INSERT INTO Customer(customerID, customerName, email, phoneNumber)
	VALUES (1, 'Jane Doe', 'jane@music.com', '555-777-9999');
INSERT INTO Customer(customerID, customerName, email, phoneNumber)
	VALUES (2, 'Bob Jones', 'bob@music.com', '555-888-7777');
INSERT INTO Customer(customerID, customerName, email, phoneNumber)
	VALUES (3, 'Jack Bloggs', 'jack@music.com', '555-444-8888');
INSERT INTO Customer(customerID, customerName, email, phoneNumber)
	VALUES (4, 'Mary Green', 'mary@music.com', '555-321-8910');
INSERT INTO Customer(customerID, customerName, email, phoneNumber)
	VALUES (5, 'Kevin Cooper', 'kevin@music.com', '555-456-0987');
INSERT INTO Customer(customerID, customerName, email, phoneNumber)
	VALUES (6, 'Sam Mills', 'sam@music.com', '555-234-5678');
INSERT INTO Customer(customerID, customerName, email, phoneNumber)
	VALUES (7, 'Carol Santos', 'carol@music.com', '555-765-1234');
INSERT INTO Customer(customerID, customerName, email, phoneNumber)
	VALUES (8, 'Dean Blue', 'dean@music.com', '555-876-1414');


-- Verification
SELECT * FROM Customer;


-- CustomerLesson
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (1, 1);
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (1, 3);
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (2, 2);
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (2, 4);
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (3, 3);
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (4, 2);
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (4, 5);
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (4, 1);
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (4, 6);
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (5, 2);
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (6, 4);
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (6, 5);
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (7, 6);
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (7, 3);
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (7, 5);
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (8, 1);
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (8, 3);
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (2, 3);
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (4, 3);
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (5, 3);
INSERT INTO CustomerLesson(customerID, lessonID) VALUES (6, 3);

-- Verification
SELECT * FROM CustomerLesson;


-- Instructor
INSERT INTO Instructor(instructorID, instructorName, email, phoneNumber)
	VALUES (1, 'John Smith', 'john@music.com', '555-555-4444');
INSERT INTO Instructor(instructorID, instructorName, email, phoneNumber)
	VALUES (2, 'Alice Brown', 'alice@music.com', '555-444-3333');
INSERT INTO Instructor(instructorID, instructorName, email, phoneNumber)
	VALUES (3, 'Emily Davis', 'emily@music.com', '555-333-2222');
INSERT INTO Instructor(instructorID, instructorName, email, phoneNumber)
	VALUES (4, 'James Pine', 'james@music.com', '555-222-4433');
INSERT INTO Instructor(instructorID, instructorName, email, phoneNumber)
	VALUES (5, 'Haley Grove', 'haley@music.com', '555-111-3322');
INSERT INTO Instructor(instructorID, instructorName, email, phoneNumber)
	VALUES (6, 'Alex Yen', 'alex@music.com', '555-345-1212');
    
-- Verification
SELECT * FROM Instructor;


-- InstructorLesson
INSERT INTO InstructorLesson(instructorID, lessonID) VALUES (1, 1);
INSERT INTO InstructorLesson(instructorID, lessonID) VALUES (1, 2);
INSERT INTO InstructorLesson(instructorID, lessonID) VALUES (2, 3);
INSERT INTO InstructorLesson(instructorID, lessonID) VALUES (3, 4);
INSERT INTO InstructorLesson(instructorID, lessonID) VALUES (4, 5);
INSERT INTO InstructorLesson(instructorID, lessonID) VALUES (5, 6);
INSERT INTO InstructorLesson(instructorID, lessonID) VALUES (6, 5);

-- Verification
SELECT * FROM InstructorLesson;


-- InstructorSpecialty
INSERT INTO InstructorSpecialty(instructorID, specialty) VALUES (1, 'guitar');
INSERT INTO InstructorSpecialty(instructorID, specialty) VALUES (1, 'piano');
INSERT INTO InstructorSpecialty(instructorID, specialty) VALUES (2, 'trumpet');
INSERT INTO InstructorSpecialty(instructorID, specialty) VALUES (3, 'drums');
INSERT INTO InstructorSpecialty(instructorID, specialty) VALUES (3, 'guitar');
INSERT INTO InstructorSpecialty(instructorID, specialty) VALUES (4, 'flute');
INSERT INTO InstructorSpecialty(instructorID, specialty) VALUES (4, 'clarinet');
INSERT INTO InstructorSpecialty(instructorID, specialty) VALUES (4, 'saxophone');
INSERT INTO InstructorSpecialty(instructorID, specialty) VALUES (5, 'drums');
INSERT INTO InstructorSpecialty(instructorID, specialty) VALUES (6, 'flute');

-- Verification
SELECT * FROM InstructorSpecialty;


-- LessonDay
INSERT INTO LessonDay(lessonID, day) VALUES (1, 'Mon');
INSERT INTO LessonDay(lessonID, day) VALUES (1, 'Wed');
INSERT INTO LessonDay(lessonID, day) VALUES (2, 'Tue');
INSERT INTO LessonDay(lessonID, day) VALUES (2, 'Thu');
INSERT INTO LessonDay(lessonID, day) VALUES (3, 'Tue');
INSERT INTO LessonDay(lessonID, day) VALUES (3, 'Thu');
INSERT INTO LessonDay(lessonID, day) VALUES (4, 'Wed');
INSERT INTO LessonDay(lessonID, day) VALUES (4, 'Fri');
INSERT INTO LessonDay(lessonID, day) VALUES (5, 'Fri');
INSERT INTO LessonDay(lessonID, day) VALUES (6, 'Mon');
INSERT INTO LessonDay(lessonID, day) VALUES (6, 'Wed');

-- Verification
SELECT * FROM LessonDay;
