CREATE TABLE IF NOT EXISTS Pets(
	id	INT PRIMARY KEY AUTO_INCREMENT NOT NULL COMMENT 'Este campo es el indice del registro', 
	name VARCHAR(80) NOT NULL COMMENT 'Este campo es el nombre de la mascota',
	type VARCHAR(15) NOT NULL COMMENT 'Este campo es el tipo de mascota',
	breed VARCHAR(80) NULL COMMENT 'Este campo es la raza de la mascota',
	owner VARCHAR(80) NOT NULL COMMENT 'Este campo es el dueno de la mascota',
    birth_date DATETIME  NULL COMMENT 'Este campo es la fecha de nacimiento de la mascota'
);