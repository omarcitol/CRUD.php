
CREATE TABLE persona ( 
    id SERIAL PRIMARY KEY, 
    cedula VARCHAR(50) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE,
    fecha_nacimiento DATE,
    profesion VARCHAR(50) NOT NULL
 )


