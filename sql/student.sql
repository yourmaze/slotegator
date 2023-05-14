SELECT (
           CASE
               WHEN grade.grade > 8 THEN students.name
               ELSE 'low'
               END) as name,
       grade.grade,
       students.marks as mark
FROM students
         INNER JOIN grade
                    ON students.marks > grade.min_mark AND  students.marks < grade.max_mark
ORDER BY grade.grade DESC,
         (CASE WHEN grade.grade >= 8 THEN name END) ASC,
         (CASE WHEN grade.grade <= 7 THEN students.marks END) ASC

/*
 Модификация DDL
 */

create table grade
(
    id       int NOT NULL ,
    min_mark int null,
    max_mark int null,
    PRIMARY KEY (id)
);


create table students
(
    id    int null,
    name  varchar(100) null,
    marks int null,
    grade_id int NOT NULL ,
    FOREIGN KEY (grade_id) REFERENCES grade(id)
);