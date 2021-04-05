use ucode_web;
CREATE TABLE IF NOT EXISTS heroes
(
   id INT primary key AUTO_INCREMENT NOT NULL,
   name VARCHAR(30) UNIQUE NOT NULL,
   description TEXT NOT NULL,
   race VARCHAR(30) DEFAULT 'human' NOT NULL,
   class_role ENUM('tankman', 'healer', 'dps') NOT NULL
);