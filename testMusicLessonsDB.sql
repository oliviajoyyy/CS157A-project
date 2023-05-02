use musicLessons;

-- Check all table names
show tables;

-- Check the number of columns in each table
SELECT count(*) AS NumberOfColumns FROM information_schema.columns WHERE table_name = 'Customer';
SELECT count(*) AS NumberOfColumns FROM information_schema.columns WHERE table_name = 'CustomerLesson';
SELECT count(*) AS NumberOfColumns FROM information_schema.columns WHERE table_name = 'Instructor';
SELECT count(*) AS NumberOfColumns FROM information_schema.columns WHERE table_name = 'InstructorLesson';
SELECT count(*) AS NumberOfColumns FROM information_schema.columns WHERE table_name = 'InstructorSpecialty';
SELECT count(*) AS NumberOfColumns FROM information_schema.columns WHERE table_name = 'Lesson';
SELECT count(*) AS NumberOfColumns FROM information_schema.columns WHERE table_name = 'LessonDay';
SELECT count(*) AS NumberOfColumns FROM information_schema.columns WHERE table_name = 'Location';

-- Check column names, data types, and length or precision for each table
SELECT column_name, column_type, is_nullable, column_key FROM information_schema.columns WHERE table_name = 'Customer';
SELECT column_name, column_type, is_nullable, column_key FROM information_schema.columns WHERE table_name = 'CustomerLesson';
SELECT column_name, column_type, is_nullable, column_key FROM information_schema.columns WHERE table_name = 'Instructor';
SELECT column_name, column_type, is_nullable, column_key FROM information_schema.columns WHERE table_name = 'InstructorLesson';
SELECT column_name, column_type, is_nullable, column_key FROM information_schema.columns WHERE table_name = 'InstructorSpecialty';
SELECT column_name, column_type, is_nullable, column_key FROM information_schema.columns WHERE table_name = 'Lesson';
SELECT column_name, column_type, is_nullable, column_key FROM information_schema.columns WHERE table_name = 'LessonDay';
SELECT column_name, column_type, is_nullable, column_key FROM information_schema.columns WHERE table_name = 'Location';