<!--
File: db.sql
Author: Gyüre Árpád
Copyright: 2024, Gyüre Árpád
Group: Szoft II-1-E
Date: 2024-01-17
Github: https://github.com/RP2022K/csaladfa.git
Licenc: GNU GPL
-->


# Create database
CREATE DATABASE IF NOT EXISTS familyTree
CHARACTER SET utf8
COLLATE utf8_hungarian_ci;

# ENGINE=InnoDB DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_hungarian_ci;

USE familyTree;

# Create persons table
CREATE TABLE IF NOT EXISTS persons (
  person_id INT AUTO_INCREMENT NOT NULL,
  name VARCHAR(60),
  birthdate date NOT NULL,
  birthplace VARCHAR(30),
  deathdate date,
  deathplace VARCHAR(30),
  mother_id INT,
  father_id INT,
  child_id INT,
  PRIMARY KEY (person_id)
);

#Insert data
USE familytree;

INSERT INTO persons (name, birthdate, birthplace, deathdate, deathplace, mother_id, father_id)
VALUES ('Dönci', '1949-09-28', 'Ököritófülpös', '1999-10-10', 'Budapest', NULL, NULL, NULL);

#Update data
USE familytree;

UPDATE persons set mother_id = 7, child_id = 6
WHERE person_id = 2;

