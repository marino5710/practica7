CREATE TABLE alumnos (
    alumno_id SERIAL PRIMARY KEY,
    alumno_nombre VARCHAR(50),
    alumno_apellido VARCHAR(50),
    alumno_fecha_naci VARCHAR (14),
    alumno_telefono VARCHAR(20),
    alumno_correo VARCHAR(100)
);

ALTER TABLE alumnos
MODIFY (alumno_fecha_naci CHAR(24));


SELECT * FROM alumnos;