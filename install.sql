SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS admin;
CREATE TABLE admin (
  id int(11) NOT NULL AUTO_INCREMENT,
  name longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  hash VARCHAR(13) NOT NULL,
  email longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  password longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  level longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  authentication_key longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO admin VALUES (1,'Mr. Admin','PERT8eoZgLS' ,'admin@admin.com','admin123','1','');



DROP TABLE IF EXISTS classes;
CREATE TABLE classes (
  class_id INT(11) COLLATE utf8_unicode_ci NOT NULL,
  name longtext COLLATE utf8_unicode_ci NOT NULL,
  teacher_id int(11) NOT NULL,
  prefect_id int(11) NOT NULL,
  PRIMARY KEY (class_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO classes VALUES (1,'Form 1','', ''),(2,'Form 2','', ''),(4,'Form 3','', ''),(5,'Form 4','', '');

DROP TABLE IF EXISTS students;
CREATE TABLE students (
  student_id int(11) NOT NULL,
  name longtext COLLATE utf8_unicode_ci NOT NULL,
  hash VARCHAR(13) NOT NULL,
  birthday longtext COLLATE utf8_unicode_ci NOT NULL,
  sex longtext COLLATE utf8_unicode_ci NOT NULL,
  religion longtext COLLATE utf8_unicode_ci NOT NULL,
  blood_group longtext COLLATE utf8_unicode_ci NOT NULL,
  address longtext COLLATE utf8_unicode_ci NOT NULL,
  parent_phone longtext COLLATE utf8_unicode_ci NOT NULL,
  parent_email longtext COLLATE utf8_unicode_ci NOT NULL,
  password longtext COLLATE utf8_unicode_ci NOT NULL,
  father_name longtext COLLATE utf8_unicode_ci NOT NULL,
  mother_name longtext COLLATE utf8_unicode_ci NOT NULL,
  class_id INT(11) COLLATE utf8_unicode_ci NOT NULL,
  role longtext COLLATE utf8_unicode_ci NOT NULL,
  profileUrl longtext COLLATE utf8_unicode_ci NOT NULL,
  authentication_key longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (student_id)
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO students VALUES 
    (1011,'Lydia Adams', 'PERT8eoISLa', '06/20/2014','female','','','3103 Modoc Alley','208-259-2964','LydiaAdams@gmail.com','','james jordan','mary jane','2','', '', ''),
    (1245,'Royce Miller','axRT8eoZgLa', '06/06/2018','male','','','15 olson highway','08033527716','royce@gmail.com','','Simon Kella','Milly Kwamboka','3','', '',''),
    (899,'Ade Wellis','PERT8ISZgLa', '06/11/2014','male','','','14 Aladin Road','080-255-9586','luiswelt@gmail.com','','James Maina','lily Chepkurui','3','', '', ''),
    (912,'kemi','KtxNG771SP1', '07/15/2015','male','','','1 Long Tubae','080-5454-4545','kemi2@kem2i.com','','Mike Kemi','Jane Kemi','4','', '', ''),
    (1058,'Francesca Thornton','QItxNG271SP5', '06/10/2014','female','','','3009 Beech Street','925-752-8053','FrancescaThornton@gmail.com','','Thorton Master','Francesca Master','2','', '', ''),
    (1412,'segun','LtxHJG271SP5', '06/17/2014','female','','','12 Kware Way','08-054-5545','segun@segun.com','','De Segun','Mel Segan','3','', '', ''),
    (1511,'Danielle Glover','KtxIUD271SP5', '09/12/2017','male','','','1601 Pearlman Avenue','978-233-5452','DanielleGlover@gmail.com','','Daniel Glover','Mercy Glover','2','', '', ''),
    (889,'bryan bett','ASxNG271SP5', '06/06/2018','male','christianity','','20108 Rongai','74-661-3059','kiplangatsgt@gmail.com','','Will Smith','Wale Smith','3','', '', '');



DROP TABLE IF EXISTS subjects;
CREATE TABLE subjects (
  subject_id INT(11) NOT NULL,
  name longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (subject_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO subjects VALUES (1,'Mathematics'),(2,'Calculus'),(3,'Computer Science'),(4,'Humanity'),(5,'Neural Networks'), (6,'Robotics');


DROP TABLE IF EXISTS teachers;
CREATE TABLE teachers (
  teacher_id INT(11) NOT NULL,
  hash VARCHAR(13) NOT NULL,
  name longtext COLLATE utf8_unicode_ci NOT NULL,
  birthday longtext COLLATE utf8_unicode_ci NOT NULL,
  sex longtext COLLATE utf8_unicode_ci NOT NULL,
  religion longtext COLLATE utf8_unicode_ci NOT NULL,
  profileUrl longtext COLLATE utf8_unicode_ci NOT NULL,
  blood_group longtext COLLATE utf8_unicode_ci NOT NULL,
  role longtext COLLATE utf8_unicode_ci NOT NULL,
  address longtext COLLATE utf8_unicode_ci NOT NULL,
  phone longtext COLLATE utf8_unicode_ci NOT NULL,
  email longtext COLLATE utf8_unicode_ci NOT NULL,
  password longtext COLLATE utf8_unicode_ci NOT NULL,
  country longtext COLLATE utf8_unicode_ci NOT NULL,
  county longtext COLLATE utf8_unicode_ci NOT NULL,
  subjects longtext COLLATE utf8_unicode_ci NOT NULL,
  authentication_key longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (teacher_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO teachers(teacher_id, hash, name,birthday, sex, religion,profileUrl, blood_group, role, address, phone, email, password, country, county, subjects, authentication_key) VALUES 
(1,'PERT8eoZgLa','Tom Connolly','06/03/1976','male','','', '','','694 Michael Street','713-732-6331','TomConnolly@teachers.com','','', '', '', ''),
(2,'KtxNG271SP5','Alfie Nolly','12/08/1985','female','','', '','','4841 Andell Road','614-901-1543','jordiealaba@gmail..com','','', '', '', ''),
(3,'Y8DRa6q_9FD','Alfie Nolly','12/08/1985','female','','', '','','4841 Andell Road','614-901-1543','luisenrique@gmail..com','','', '', '', ''),
(5, 'Bk21ciawUyL','Alfie Nolly','12/08/1985','female','','', '','','4841 Andell Road','614-901-1543','juliesanchez@gmail..com','','', '', '', ''),
(6,'lidM5K6i6wK','Alfie Nolly','12/08/1985','female','','', '','','4841 Andell Road','614-901-1543','marcuschege@gmail..com','','', '', '', '');




DROP TABLE IF EXISTS subjectteacher;

CREATE TABLE subjectteacher(
  subject_id INT(11) NOT NULL,
  teacher_id INT(11) NOT NULL,
  FOREIGN KEY (subject_id) REFERENCES subjects (subject_id),
  FOREIGN KEY (teacher_id) REFERENCES teachers (teacher_id)
);

