student_info

name
id
mobile

CRAETE DATABASE db_name;
USE db_name;


CREATE TABLE student_info(
name varchar(50),
id int,
mobile varchar(50)
);

st_name, reg_no,attendance,	semester

CREATE TABLE attendence(
-- id int auto_incrment,
st_name varchar(50),
reg_no int,
attendance varchar(50),
semester varchar(20)
);

C=Create
Insert into student_info (name,id,mobile) values(dd,sf,dd);
R=Read

SEELCT * FROM student_info;

U=Update
Update student_info set name ="AAABB" WHERE id=226;

D=Delete
DELETE FROM student_info where id=556

