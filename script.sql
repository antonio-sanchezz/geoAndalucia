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

/* Contraseña de los usuarios "developer" */
INSERT INTO usuarios VALUES(1, "admin", "$2y$10$IoD0wcYWEJZcwrJ8FJSjH.dx0drC3aZ9ru7xIzEHrbyBhdKjzuru2");
INSERT INTO usuarios VALUES(2, "roberto", "$2y$10$IoD0wcYWEJZcwrJ8FJSjH.dx0drC3aZ9ru7xIzEHrbyBhdKjzuru2");

/* Ubicaciones */
INSERT INTO ubicaciones VALUES(1, "La Giralda", "Sevilla", "", "!4v1643891705669!6m8!1m7!1stiK0QQOxv7TiPM-VrpHItw!2m2!1d37.38622440265058!2d-5.992304694506838!3f265.84611063245967!4f47.377649142396905!5f0.7820865974627469");
INSERT INTO ubicaciones VALUES(2, "Mezquita-Catedral", "Córdoba", "", "!4v1644151626143!6m8!1m7!1s!2m2!1d37.87820743566696!2d-4.779905745019867!3f69.28713090263793!4f18.539207267925676!5f0.7820865974627469");
INSERT INTO ubicaciones VALUES(3, "Torre del Oro", "Sevilla", "", "!4v1644151713282!6m8!1m7!1s7nKnS3WP_uqKco8zReKkhg!2m2!1d37.38233753430826!2d-5.996589215518552!3f77.35779408296617!4f30.100921247544704!5f0.7820865974627469");

/* Puntuaciones de prueba */
INSERT INTO puntuaciones (idUsuario, puntuacion) VALUES
(1, 1000),
(1, 500),
(2, 3500);