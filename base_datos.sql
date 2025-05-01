CREATE DATABASE lista_contactos;
USE lista_contactos;

CREATE TABLE contactos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    telefono VARCHAR(15) NOT NULL
);

-- Datos de prueba
INSERT INTO contactos (nombre, apellido, telefono) VALUES
('Juan', 'Perez', '123456789'),
('María', 'Gonzalez', '987654321'),
('Jose', 'Medina', '555123456'),
('Luciana', 'Careaga', '333444555'),
('Matias', 'Cervantes', '222777000'),
('Fernando', 'Alonso', '101010101');

