create database taghazout_surf;

use taghazout_surf;

create table users(
    id int AUTO_INCREMENT PRIMARY KEY,
    username varchar(255) not null,
    email varchar(255) not null,
	role ENUM("admin","student")
);

create table sessions (
	id int AUTO_INCREMENT PRIMARY KEY,
    titre varchar(255) NOT null,
    coach varchar(255) not null,
    DATE_TIME DATETIME
);

create table students(
    id int AUTO_INCREMENT PRIMARY KEY,
    users_id int,
	name varchar(100) not null, 	
    country varchar(100),
	level ENUM("beginner","intermediate","advanced"),
    FOREIGN KEY (users_id) REFERENCES users(id)
);

create table lesson_student(
    id int AUTO_INCREMENT PRIMARY KEY,
    sessions_id int,
    students_id int, 
    payment_status ENUM("paied","unpaid"),
    FOREIGN KEY (sessions_id) REFERENCES sessions(id),
    FOREIGN KEY (students_id) REFERENCES students(id)
    );


-------------------------------------------------------------------------
-- Table des utilisateurs (administrateurs et surfeurs)
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL, -- stocker le hash
    role ENUM('admin', 'surfer') NOT NULL DEFAULT 'surfer',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table des élèves / surfeurs
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL, -- lien vers users
    full_name VARCHAR(100) NOT NULL,
    country VARCHAR(50),
    level ENUM('Débutant', 'Intermédiaire', 'Avancé') DEFAULT 'Débutant',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Table des cours / sessions
CREATE TABLE lessons (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    coach VARCHAR(100) NOT NULL,
    lesson_date DATETIME NOT NULL,
    max_students INT DEFAULT 10,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table de liaison pour les inscriptions des élèves aux cours
CREATE TABLE lesson_student (
    id INT AUTO_INCREMENT PRIMARY KEY,
    lesson_id INT NOT NULL,
    student_id INT NOT NULL,
    payment_status ENUM('Payé', 'En attente') DEFAULT 'En attente',
    FOREIGN KEY (lesson_id) REFERENCES lessons(id) ON DELETE CASCADE,
    FOREIGN KEY (student_id) REFERENCES students(id) ON DELETE CASCADE,
    UNIQUE KEY (lesson_id, student_id) -- un élève ne peut s'inscrire qu'une fois par cours
);