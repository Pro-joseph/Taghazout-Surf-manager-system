CREATE DATABASE manage_surf;

USE manage_surf;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255),
    role ENUM('admin','student') DEFAULT 'student',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    country VARCHAR(100) NOT NULL,
    level ENUM('beginner','intermediate','advanced'),
    user_id INT UNIQUE,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE lessons (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100),
    coach VARCHAR(100),
    description TEXT,
    price DECIMAL(10,2),
    level ENUM('beginner','intermediate','advanced'),
    date DATETIME
);

CREATE TABLE enrollments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT,
    lesson_id INT,
    payment_status ENUM('paid','pending') DEFAULT 'pending',
    FOREIGN KEY (student_id) REFERENCES students(id) ON DELETE CASCADE,
    FOREIGN KEY (lesson_id) REFERENCES lessons(id) ON DELETE CASCADE
);

-- Insert Users
INSERT INTO users (name, email, password, role) VALUES
('System Admin', 'admin@surf.com', 'admin123', 'admin'),
('Alice Johnson', 'alice@student.com', 'alice123', 'student'),
('Bob Smith', 'bob@student.com', 'bob123', 'student'),
('Charlie Brown', 'charlie@student.com', 'charlie123', 'student');

-- Insert Students (linked to user accounts)
INSERT INTO students (country, level, user_id) VALUES
('USA', 'beginner', 2),
('UK', 'intermediate', 3),
('France', 'advanced', 4);

-- Insert Lessons
INSERT INTO lessons (title, coach, description, price, level, date) VALUES
('Intro to Surfing', 'John Doe', 'Learn the basics of surfing safely.', 50.00, 'beginner', '2026-04-10 10:00:00'),
('Wave Riding Techniques', 'Jane Roe', 'Improve your wave riding skills.', 75.00, 'intermediate', '2026-04-11 14:00:00'),
('Advanced Surf Challenges', 'Mike Lee', 'Take on bigger waves with advanced techniques.', 100.00, 'advanced', '2026-04-12 09:00:00');

-- Insert Enrollments
INSERT INTO enrollments (student_id, lesson_id, payment_status) VALUES
(1, 1, 'paid'),
(2, 2, 'pending'),
(3, 3, 'paid'),
(1, 2, 'paid'); -- Alice also enrolls in the intermediate lesson
