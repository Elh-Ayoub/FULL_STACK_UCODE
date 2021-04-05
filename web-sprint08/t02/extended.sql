use ucode_web;
CREATE TABLE IF NOT EXISTS powers
(
   id INT AUTO_INCREMENT NOT NULL,
   hero_id INT NOT NULL,
   name VARCHAR(30) NOT NULL,
   points INT NOT NULL,
   type ENUM('attack', 'defense') NOT NULL,
   primary key (id),
   FOREIGN KEY(hero_id) REFERENCES heroes(id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS races
(
   id INT  AUTO_INCREMENT NOT NULL,
   hero_id INT NOT NULL,
   name VARCHAR(30) NOT NULL,
   primary key(id),
   FOREIGN KEY(hero_id) REFERENCES heroes(id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS teams
(
   id INT  AUTO_INCREMENT NOT NULL,
   hero_id INT NOT NULL,
   name VARCHAR(30) NOT NULL,
   primary key(id),
   FOREIGN KEY(hero_id) REFERENCES heroes(id) ON DELETE CASCADE
);


INSERT INTO powers (hero_id, name, points, type) VALUES
(5, 'iron shield', 200, 'defense'),
(4, 'iron shield', 200, 'defense'),
(9, 'iron shield', 200, 'defense'),
(2, 'bloody fist', 110, 'attack'),
(3, 'bloody fist', 110, 'attack'),
(6, 'bloody fist', 110, 'attack'),
(10,'Wallcrawling', 150, 'attack');

INSERT INTO races (hero_id, name)VALUES 
 ( 1, 'Human'),
 ( 3, 'Kree'),
 ( 8, 'witch'),
 ( 6, 'Asgardian');

INSERT INTO teams (hero_id, name)VALUES
(1, 'Avengers'),
(2, 'Hydra'),
(4, 'Hydra'),
(5, 'Avengers'),
(7, 'Avengers'),
(8, 'Hydra'),
(10, 'Avengers');
