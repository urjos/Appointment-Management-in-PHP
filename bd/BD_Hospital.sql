DROP DATABASE IF EXISTS BD_Hospital;
CREATE DATABASE BD_Hospital;
USE BD_Hospital;

CREATE TABLE USUARIOS(
		idUsuario INT AUTO_INCREMENT PRIMARY KEY,
		usuario VARCHAR(50) NOT NULL,
		passsword VARCHAR(40) NOT NULL		
);

CREATE TABLE PACIENTES(
		idPaciente INT AUTO_INCREMENT PRIMARY KEY,
		nombre VARCHAR(50) NOT NULL,
		apellido VARCHAR(50) NOT NULL,
		fechaNacimiento DATE NOT NULL,
		genero VARCHAR(50) NOT NULL,
		telefono CHAR(9) NOT NULL,
		direccion TEXT NOT NULL,
		tipoDeSangre VARCHAR(50) NOT NULL
);

SELECT * FROM PACIENTES

CREATE TABLE MEDICOS(
		idMedico INT AUTO_INCREMENT PRIMARY KEY,
		nombre VARCHAR(50) NOT NULL,
		apellido VARCHAR(50) NOT NULL,
		especialidad VARCHAR(50) NOT NULL,
		telefono CHAR(9) NOT NULL,
		email VARCHAR(50) NOT NULL,
		licencia VARCHAR(50) NOT NULL,
		añosDeExperiencia INT NOT NULL
);

SELECT * FROM MEDICOS

CREATE TABLE CITAS(
		idCita INT AUTO_INCREMENT PRIMARY KEY,
		fecha DATE NOT NULL,
		motivo VARCHAR(80) NOT NULL,
		idPaciente INT NOT NULL,
		idMedico INT NOT NULL,
		estado VARCHAR(50) NOT NULL,
		observaciones TEXT,
		sala VARCHAR(50) NOT NULL,
		
		FOREIGN KEY (idPaciente) REFERENCES PACIENTES(idPaciente) ON DELETE CASCADE,
		FOREIGN KEY (idMedico) REFERENCES MEDICOS(idMedico) ON DELETE CASCADE
);

SELECT * FROM CITAS

CREATE TABLE DIAGNOSTICOS(
		idDiagnostico INT AUTO_INCREMENT PRIMARY KEY,
		descripcion TEXT,
		fecha DATE NOT NULL,
		idPaciente INT NOT NULL,
		idMedico INT NOT NULL,
		gravedad VARCHAR(80) NOT NULL,
		recomendaciones TEXT NOT NULL,
		tipoDeDiagnostico VARCHAR(50) NOT NULL,
		
		FOREIGN KEY (idPaciente) REFERENCES PACIENTES(idPaciente) ON DELETE CASCADE,
		FOREIGN KEY (idMedico) REFERENCES MEDICOS(idMedico) ON DELETE CASCADE
);

SELECT * FROM DIAGNOSTICOS

CREATE TABLE TRATAMIENTOS(
		idTratamiento INT AUTO_INCREMENT PRIMARY KEY,
		nombre VARCHAR(50) NOT NULL,
		descripcion TEXT NOT NULL,
		duracion VARCHAR(80) NOT NULL,
		idDiagnostico INT NOT NULL,
		idMedico INT NOT NULL,
		estado VARCHAR(50) NOT NULL,
		frecuenciaAdmin VARCHAR(50) NOT NULL,
		
		FOREIGN KEY (idDiagnostico) REFERENCES DIAGNOSTICOS(idDiagnostico) ON DELETE CASCADE,
		FOREIGN KEY (idMedico) REFERENCES MEDICOS(idMedico) ON DELETE CASCADE
);

SELECT * FROM TRATAMIENTOS

CREATE TABLE MEDICAMENTOS(
		idMedicamento INT AUTO_INCREMENT PRIMARY KEY,
		nombre VARCHAR(50) NOT NULL,
		dosis VARCHAR(50) NOT NULL,
		frecuencia VARCHAR(80) NOT NULL,
		duracion VARCHAR(80) NOT NULL,
		idTratamiento INT NOT NULL,
		proveedor VARCHAR(90) NOT NULL,
		efectosSecundarios VARCHAR(90) NOT NULL,
		
		FOREIGN KEY (idTratamiento) REFERENCES TRATAMIENTOS(idTratamiento) ON DELETE CASCADE
);

SELECT * FROM MEDICAMENTOS

INSERT INTO PACIENTES (nombre, apellido, fechaNacimiento, genero, telefono, direccion, tipoDeSangre) VALUES 
('Juan', 'Pérez', '1985-05-15', 'Masculino', '987654321', 'Av. Siempre Viva 123', 'O+'),
('Ana', 'Ramírez', '1990-11-20', 'Femenino', '945678910', 'Calle Los Pinos 456', 'A-'),
('Carlos', 'Gómez', '2001-02-10', 'Masculino', '912345678', 'Jirón Las Flores 789', 'B+'),
('Luisa', 'Fernández', '1975-08-30', 'Femenino', '987112233', 'Pasaje Los Rosales 987', 'AB-'),
('Sofía', 'López', '1998-12-25', 'Femenino', '999888777', 'Avenida Primavera 321', 'O-');

SELECT * FROM PACIENTES;


INSERT INTO MEDICOS (nombre, apellido, especialidad, telefono, email, licencia, añosDeExperiencia) VALUES 
('Ana', 'Ramírez', 'Cardiología', '987654321', 'ana.ramirez@hospital.com', 'LIC123456', 10),
('Luis', 'Fernández', 'Pediatría', '945678910', 'luis.fernandez@hospital.com', 'LIC987654', 8),
('María', 'Pérez', 'Neurología', '912345678', 'maria.perez@hospital.com', 'LIC543210', 15),
('Carlos', 'Gómez', 'Oncología', '987112233', 'carlos.gomez@hospital.com', 'LIC678901', 20),
('Sofía', 'López', 'Dermatología', '999888777', 'sofia.lopez@hospital.com', 'LIC112233', 12);

SELECT * FROM MEDICOS;


INSERT INTO CITAS (fecha, motivo, idPaciente, idMedico, estado, observaciones, sala) VALUES 
('2024-12-01', 'Consulta general', 1, 1, 'Pendiente', 'Paciente con síntomas leves.', 'Sala 101'),
('2024-12-05', 'Chequeo pediátrico', 2, 2, 'Confirmada', 'Niño con antecedentes de asma.', 'Sala 202'),
('2024-12-10', 'Evaluación neurológica', 3, 3, 'Pendiente', 'Dolores de cabeza recurrentes.', 'Sala 303'),
('2024-12-15', 'Examen de piel', 4, 5, 'Confirmada', 'Lesiones cutáneas sospechosas.', 'Sala 104'),
('2024-12-20', 'Control oncológico', 5, 4, 'Pendiente', 'Paciente en remisión.', 'Sala 404');

SELECT * FROM CITAS;


INSERT INTO DIAGNOSTICOS (descripcion, fecha, idPaciente, idMedico, gravedad, recomendaciones, tipoDeDiagnostico) VALUES 
('Hipertensión arterial detectada.', '2024-12-01', 1, 1, 'Moderada', 'Controlar dieta, ejercicio diario.', 'Primario'),
('Asma infantil leve.', '2024-12-05', 2, 2, 'Leve', 'Usar inhalador según indicaciones.', 'Primario'),
('Migraña crónica diagnosticada.', '2024-12-10', 3, 3, 'Moderada', 'Evitar estrés y consumir analgésicos.', 'Secundario'),
('Lesiones cutáneas benignas.', '2024-12-15', 4, 5, 'Leve', 'Uso de cremas específicas.', 'Primario'),
('Control de cáncer exitoso.', '2024-12-20', 5, 4, 'Grave', 'Seguimiento trimestral obligatorio.', 'Primario');

SELECT * FROM DIAGNOSTICOS;


INSERT INTO TRATAMIENTOS (nombre, descripcion, duracion, idDiagnostico, idMedico, estado, frecuenciaAdmin) VALUES 
('Tratamiento para hipertensión', 'Medicación y control semanal.', '6 meses', 1, 1, 'Activo', 'Diario'),
('Control de asma', 'Uso de inhaladores según necesidad.', '3 meses', 2, 2, 'Activo', 'Semanal'),
('Control de migrañas', 'Medicación y terapia de relajación.', '1 año', 3, 3, 'Activo', 'Mensual'),
('Cuidado de la piel', 'Uso de cremas recetadas.', '2 meses', 4, 5, 'Finalizado', 'Diario'),
('Seguimiento oncológico', 'Quimioterapia y control médico.', '1 año', 5, 4, 'Activo', 'Trimestral');

SELECT * FROM TRATAMIENTOS;


INSERT INTO MEDICAMENTOS (nombre, dosis, frecuencia, duracion, idTratamiento, proveedor, efectosSecundarios) VALUES 
('Losartán', '50 mg', 'Diaria', '6 meses', 1, 'Laboratorio ABC', 'Mareos, náuseas.'),
('Salbutamol', '1 inhalación', 'Cuando sea necesario', '3 meses', 2, 'Farmacéutica XYZ', 'Taquicardia, temblores.'),
('Paracetamol', '500 mg', 'Mensual', '1 año', 3, 'Distribuidora LMN', 'Irritación gástrica.'),
('Crema hidratante', 'Aplicar en piel', 'Diaria', '2 meses', 4, 'Cosméticos DEF', 'Enrojecimiento leve.'),
('Ciclofosfamida', '200 mg', 'Trimestral', '1 año', 5, 'Químicos GHI', 'Fatiga, náuseas.');

SELECT * FROM MEDICAMENTOS;
