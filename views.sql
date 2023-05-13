use musicLessons;

CREATE VIEW LessonCatalog AS 
	SELECT lessonID, lessonName, instrument, startTime, endTime, cost, Lesson.description, Location.description "location", Location.locationID
    FROM Lesson INNER JOIN Location ON Lesson.locationID = Location.locationID
    ORDER BY lessonID ASC;

CREATE VIEW InstructorReport AS 
	SELECT Instructor.instructorID, instructorName, email, phoneNumber, specialty, Lesson.lessonName "lessonsTaught"
    FROM Instructor INNER JOIN InstructorSpecialty ON Instructor.instructorID = InstructorSpecialty.instructorID
    INNER JOIN InstructorLesson ON Instructor.instructorID = InstructorLesson.instructorID
    LEFT JOIN Lesson ON InstructorLesson.lessonID = Lesson.lessonID AND specialty = instrument
    ORDER BY Instructor.instructorID ASC;

CREATE VIEW CustomerReport AS
	SELECT Customer.customerID, customerName, email, phoneNumber, Lesson.lessonName "lessonsTaken"
    FROM Customer INNER JOIN CustomerLesson ON Customer.customerID = CustomerLesson.customerID 
    INNER JOIN Lesson ON CustomerLesson.lessonID = Lesson.lessonID
    ORDER BY Customer.customerID ASC;


-- Query demonstrations
SELECT * FROM LessonCatalog;
 -- Can view lessons for certain instruments
SELECT * FROM LessonCatalog WHERE instrument = 'guitar';

-- view info about all instructors, including their specialties even if they don't teach a class in their specialty
SELECT * FROM InstructorReport;
-- view all instructors and the lessons they are teaching
SELECT * FROM InstructorReport WHERE lessonsTaught IS NOT NULL;

SELECT * FROM CustomerReport;
-- view all customers taking the Beginner Trumpet lesons
SELECT * FROM CustomerReport WHERE lessonsTaken = 'Beginner Trumpet';