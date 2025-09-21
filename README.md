CREA EN PHPMYADMIN LA BASE DE DATOS CON EL SIGUIENTE NOMBRE -> "db_ngms"


CREAS LA SIGUIENTE TABLA :
CREATE TABLE Persona_NGMS (
    idPersona_NGMS INT PRIMARY KEY AUTO_INCREMENT,
    primerNombre_NGMS VARCHAR(20) NOT NULL,
    segundoNombre_NGMS VARCHAR(20) NOT NULL,
    primerApellido_NGMS VARCHAR(20) NOT NULL,
    segundoApellido_NGMS VARCHAR(20) NOT NULL,
    fechaNacimiento_NGMS DATE NOT NULL,
    sexo_NGMS  VARCHAR(10) NOT NULL,
    documento_NGMS  VARCHAR(5) NOT NULL,
    cedula_NGMS INTEGER NOT NULL,
    lateralidad_NGMS VARCHAR(50) NOT NULL,
    ordenNacimiento_NGMS INTEGER NOT NULL,
    lugarNacimiento_NGMS VARCHAR(255) NOT NULL,
    estatura_NGMS DECIMAL(10,2) NOT NULL,
    peso_NGMS DECIMAL(10,2) NOT NULL,
    tallaCamisa_NGMS DECIMAL(10,2) NOT NULL,
    tallaPantalon_NGMS DECIMAL(10,2) NOT NULL, 
    tallaZapato_NGMS DECIMAL(10,2) NOT NULL
    
);

y listongo :3
