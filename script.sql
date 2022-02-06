CREATE DATABASE geoandalucia;
USE geoandalucia;

CREATE TABLE usuarios (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(250) NOT NULL
);

CREATE TABLE ubicaciones (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    ciudad VARCHAR(50) NOT NULL,
    pxCoords VARCHAR(50) NOT NULL,
    googleCoords VARCHAR(250) NOT NULL
);

CREATE TABLE puntuaciones (
    idUsuario INT NOT NULL,
    puntuacion INT,
    FOREIGN KEY (idUsuario) REFERENCES usuarios(id)
);

/* Contraseña del usuario admin: developer */
INSERT INTO usuarios VALUES(1, "admin", "$2y$10$IoD0wcYWEJZcwrJ8FJSjH.dx0drC3aZ9ru7xIzEHrbyBhdKjzuru2");
INSERT INTO ubicaciones VALUES(1, "La Giralda", "Sevilla", "", "!4v1643891705669!6m8!1m7!1stiK0QQOxv7TiPM-VrpHItw!2m2!1d37.38622440265058!2d-5.992304694506838!3f265.84611063245967!4f47.377649142396905!5f0.7820865974627469");