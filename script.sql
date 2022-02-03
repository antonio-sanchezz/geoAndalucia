CREATE DATABASE geoandalucia;

CREATE TABLE usuarios (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) PRIMARY KEY,
    password VARCHAR(250) NOT NULL
);

CREATE TABLE ubicaciones (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    ciudad VARCHAR(50) NOT NULL,
    pxCoords VARCHAR(50) NOT NULL,
    googleCoords VARCHAR(250) NOT NULL
)

CREATE TABLE puntuaciones (
    idUsuario INT NOT NULL,
    puntuacion INT
);