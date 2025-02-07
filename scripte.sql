
CREATE DATABASE medical_management;

\c medical_management;


CREATE TABLE admin (
  id_admin SERIAL PRIMARY KEY,
  fn_admin VARCHAR(100) NOT NULL,
  email_admin VARCHAR(255) NOT NULL UNIQUE,
  password VARCHAR(100) NOT NULL
);

CREATE TABLE doctor (
  id_doctor SERIAL PRIMARY KEY,
  fn_doctor VARCHAR(100) NOT NULL,
  email_doctor VARCHAR(255) NOT NULL UNIQUE,
  password VARCHAR(100) NOT NULL,
  date_birth DATE NOT NULL,
  type_competence VARCHAR(50) NOT NULL CHECK (type_competence IN ('hearth', 'dentist', 'spe1', 'spe2')),
  img_doctor VARCHAR(100) NOT NULL
);

CREATE TABLE patient (
  id_patient SERIAL PRIMARY KEY,
  fn_patient VARCHAR(100) NOT NULL,
  email_patient VARCHAR(255) NOT NULL UNIQUE,
  password VARCHAR(100) NOT NULL,
  date_birth DATE NOT NULL,
  type_sickness VARCHAR(100) NOT NULL,
  img_patient VARCHAR(100) NOT NULL
);

CREATE TABLE raport (
  id_raport SERIAL PRIMARY KEY,
  desc_raport TEXT NOT NULL,
  date_raport DATE NOT NULL,
  id_patient INT NOT NULL REFERENCES patient(id_patient) ON DELETE CASCADE,
  id_doctor INT NOT NULL REFERENCES doctor(id_doctor) ON DELETE CASCADE
);

CREATE TABLE rendez_vous (
  id_rendezvous SERIAL PRIMARY KEY,
  date_rendezvous DATE NOT NULL,
  time_rdv TIME NOT NULL,
  id_patient INT NOT NULL REFERENCES patient(id_patient) ON DELETE CASCADE,
  id_doctor INT NOT NULL REFERENCES doctor(id_doctor) ON DELETE CASCADE
);

CREATE TABLE visit (
  id_visit SERIAL PRIMARY KEY,
  date_visit DATE NOT NULL,
  id_patient INT NOT NULL REFERENCES patient(id_patient) ON DELETE CASCADE
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