
CREATE DATABASE medical_management;

\c medical_management;


CREATE TABLE patients (
    id SERIAL PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    date_of_birth DATE NOT NULL,
    gender VARCHAR(10) NOT NULL,
    phone_number VARCHAR(15),
    email VARCHAR(100) UNIQUE,
    address TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE doctors (
    id SERIAL PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    specialization VARCHAR(100) NOT NULL,
    phone_number VARCHAR(15),
    email VARCHAR(100) UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE appointments (
    id SERIAL PRIMARY KEY,
    patient_id INT REFERENCES patients(id) ON DELETE CASCADE,
    doctor_id INT REFERENCES doctors(id) ON DELETE CASCADE,
    appointment_date TIMESTAMP NOT NULL,
    status VARCHAR(20) DEFAULT 'Scheduled',
    notes TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    role VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- INSERT INTO patients (first_name, last_name, date_of_birth, gender, phone_number, email, address)
-- VALUES
-- ('John', 'Doe', '1990-05-15', 'Male', '1234567890', 'john.doe@example.com', '123 Main St'),
-- ('Jane', 'Smith', '1985-10-22', 'Female', '0987654321', 'jane.smith@example.com', '456 Elm St');

-- INSERT INTO doctors (first_name, last_name, specialization, phone_number, email)
-- VALUES
-- ('Alice', 'Johnson', 'Cardiologist', '1112223333', 'alice.johnson@example.com'),
-- ('Bob', 'Brown', 'Dermatologist', '4445556666', 'bob.brown@example.com');

-- INSERT INTO appointments (patient_id, doctor_id, appointment_date, status, notes)
-- VALUES
-- (1, 1, '2023-11-15 10:00:00', 'Scheduled', 'Routine checkup'),
-- (2, 2, '2023-11-16 14:30:00', 'Scheduled', 'Skin allergy consultation');