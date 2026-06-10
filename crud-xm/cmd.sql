drop table if exists teacher;
create table teacher(
  id int auto_increment primary key,
  name varchar(50),
  qualification varchar(50),
  contact_no varchar(20)
);
drop table if exists course;
create table course (
  id int auto_increment primary key,
  course_name varchar(50),
  fee int(10),
  teacher_id int(10)
);
insert into teacher (name, qualification, contact_no)
values("John Doe", "PhD in Computer Science", "1234567890"), ("Jane Smith", "Masters in Mathematics", "9876543210"), 
("Emily Davis", "PhD in Physics", "8765432109");    

insert into course (course_name, fee, teacher_id)
values("Data Structures", 25000, 1), ("Calculus", 4000, 2), ("Quantum Mechanics", 20000, 3),
("Algebra", 8000, 2), ("Operating Systems", 30000, 1), ("Thermodynamics", 16000, 3),
("Linear Algebra", 12000, 2), ("Computer Networks", 22000, 1), ("Electromagnetism", 18000, 3);

drop procedure if exists addTeacher;
delimiter //
CREATE PROCEDURE addTeacher(tname varchar(50), tqualification varchar(50), tcontact_no varchar(20))
BEGIN
  insert into teacher (name, qualification, contact_no)
  values(tname, tqualification, tcontact_no);
END //
delimiter ;

drop trigger if exists dlt_teacher;
create trigger dlt_teacher
after delete on teacher
for each row
delete from course where teacher_id = old.id;

drop view if exists vw_course;
create view vw_course as
select c.id, c.course_name, c.fee, t.name, t.qualification, t.contact_no
from course c, teacher t
where c.teacher_id = t.id and c.fee > 15000;
