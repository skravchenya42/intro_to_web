CREATE TABLE students (
  id TINYINT NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  age INT,
  adress TEXT,  
  PRIMARY KEY (id)
);

INSERT INTO students (name, age, adress) VALUES 
  ('Олеся Петрова', 18, 'Москва, проспект Победы, д. 10., кв 17'),
  ('Ира Петрова', 30, 'Москва, проспект Победы, д. 10., кв 17'),
  ('Света Петрова', 20, 'Москва, проспект Победы, д. 10., кв 17'),
  ('Ваня Петрова', 21, 'Москва, проспект Победы, д. 10., кв 17'),
  ('Олег Петрова', 12, 'Москва, проспект Победы, д. 10., кв 17'),
  ('Катя Петрова', 41, 'Москва, проспект Победы, д. 10., кв 17');

SELECT name FROM students as n
WHERE age >= 18 AND age < 30;