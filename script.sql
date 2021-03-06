CREATE DATABASE geoandalucia;
USE geoandalucia;

CREATE TABLE ubicaciones (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    ciudad VARCHAR(50) NOT NULL,
    pxCoords VARCHAR(50) NOT NULL,
    googleCoords VARCHAR(250) NOT NULL,
    info VARCHAR(250) NOT NULL
);

CREATE TABLE puntuaciones (
    username VARCHAR(50) NOT NULL,
    puntuacion INT
);

/* Ubicaciones */
INSERT INTO ubicaciones VALUES(1, "La Giralda", "Sevilla", "750,482", "!4v1643891705669!6m8!1m7!1stiK0QQOxv7TiPM-VrpHItw!2m2!1d37.38622440265058!2d-5.992304694506838!3f265.84611063245967!4f47.377649142396905!5f0.7820865974627469", "https://es.wikipedia.org/wiki/Giralda");
INSERT INTO ubicaciones VALUES(2, "Mezquita-Catedral", "Cordoba", "800,532", "!4v1644929687203!6m8!1m7!1smol39Ulsdu24DKFOibDwkQ!2m2!1d37.87942793657921!2d-4.779533481083613!3f286.9086338297085!4f8.697610895773977!5f0.7820865974627469", "https://es.wikipedia.org/wiki/Mezquita-catedral_de_C%C3%B3rdoba");
INSERT INTO ubicaciones VALUES(3, "Torre del Oro", "Sevilla", "713,560", "!4v1644151713282!6m8!1m7!1s7nKnS3WP_uqKco8zReKkhg!2m2!1d37.38233753430826!2d-5.996589215518552!3f77.35779408296617!4f30.100921247544704!5f0.7820865974627469", "https://es.wikipedia.org/wiki/Torre_del_Oro");
INSERT INTO ubicaciones VALUES(4, "Catedral de Granada", "Granada", "926,550", "!4v1644498163371!6m8!1m7!1shSf4o0zj6Ov11qOWO8whkw!2m2!1d37.1760699938643!2d-3.598529946242474!3f339.4364378676025!4f21.18347365747509!5f0.4000000000000002", "https://es.wikipedia.org/wiki/Catedral_de_Granada");
INSERT INTO ubicaciones VALUES(5, "Castillo de Santa Catalina", "Jaen", "762,614", "!4v1644498363687!6m8!1m7!1sCAoSLEFGMVFpcE0zcVBoYlJtT0Rwb3hRclZMWVVaeUVrOGNRZFJ6ZHhwVnhsV1R4!2m2!1d37.7673316!2d-3.7995754!3f339.6389384339108!4f5.2998053794379985!5f0.7820865974627469", "https://es.wikipedia.org/wiki/Castillo_de_Santa_Catalina_(Ja%C3%A9n)");
INSERT INTO ubicaciones VALUES(6, "Catedral", "Cadiz", "763,370", "!4v1644843242726!6m8!1m7!1sMCcE4_cIx2wQXWdnv6LcTg!2m2!1d36.52939958394282!2d-6.294980470526069!3f209.29849417326614!4f26.019759756699727!5f0.4000000000000002", "https://es.wikipedia.org/wiki/Catedral_de_la_Santa_Cruz_de_C%C3%A1diz");
INSERT INTO ubicaciones VALUES(7, "Plaza de Espa??a", "Sevilla", "790,611", "!4v1644843623187!6m8!1m7!1sZM3YKJvpppg-ZK2I6Su9Uw!2m2!1d37.37677266783119!2d-5.987670524743825!3f68.30863045435042!4f13.393265497225698!5f0.7820865974627469", "https://es.wikipedia.org/wiki/Plaza_de_Espa%C3%B1a_(Sevilla)");
INSERT INTO ubicaciones VALUES(8, "Alcazaba de Almer??a", "Almeria", "763,555", "!4v1644843864250!6m8!1m7!1sW3J3PldhOaEQdaKRQwM31g!2m2!1d36.8399626547177!2d-2.470575744333535!3f6.9695700618269525!4f27.421784550583!5f0.7820865974627469", "https://es.wikipedia.org/wiki/Alcazaba_y_Murallas_del_Cerro_de_San_Crist%C3%B3bal");
INSERT INTO ubicaciones VALUES(9, "Catedral de la Encarnaci??n", "Almeria", "814,584", "!4v1644844148534!6m8!1m7!1sN4F2Gni2UZA7a4izT4XEZQ!2m2!1d36.8386683098203!2d-2.46696840495148!3f217.38181750907307!4f6.118898359471132!5f0.7820865974627469", "https://es.wikipedia.org/wiki/Catedral_de_Almer%C3%ADa");
INSERT INTO ubicaciones VALUES(10, "Ayuntamiento de M??laga", "Malaga", "870,574", "!4v1644844535288!6m8!1m7!1sOJc08-DSfb-qf-cfVs45Vg!2m2!1d36.72007282108058!2d-4.414957108057314!3f355.0006674922133!4f27.583996063585744!5f0.7820865974627469", "https://es.wikipedia.org/wiki/Ayuntamiento_de_M%C3%A1laga");
INSERT INTO ubicaciones VALUES(11, "Catedral de la Encarnaci??n", "Malaga", "826,582", "!4v1644844655131!6m8!1m7!1sk7TzwlXRQFuwkhrADaO-9Q!2m2!1d36.71964907337303!2d-4.419874477989181!3f24.701399054505906!4f28.584516236075544!5f0.7820865974627469", "https://es.wikipedia.org/wiki/Catedral_de_M%C3%A1laga");
INSERT INTO ubicaciones VALUES(12, "Iglesia Sagrado Coraz??n", "Malaga", "799,560", "!4v1644844801362!6m8!1m7!1s7HmcecFemjTUEuLwwfwZBg!2m2!1d36.72153383919533!2d-4.423450816681634!3f40.6850086969837!4f26.83851648389971!5f0.7820865974627469", "https://es.wikipedia.org/wiki/Iglesia_del_Sagrado_Coraz%C3%B3n_(M%C3%A1laga)");
INSERT INTO ubicaciones VALUES(13, "Mercado de Atarazanas", "Malaga", "793,596", "!4v1644845265459!6m8!1m7!1sU9_lS6_N_CQ9sSzLhGrGdQ!2m2!1d36.71815155924185!2d-4.423877248877196!3f322.66337708331497!4f16.655394730257143!5f0.7820865974627469", "https://es.wikipedia.org/wiki/Mercado_de_Atarazanas");
INSERT INTO ubicaciones VALUES(14, "Catedral de Ja??n", "Jaen", "837,628", "!4v1645090714237!6m8!1m7!1s5tKTj4gb5VoIHrsMxPES5w!2m2!1d37.76447535650934!2d-3.790613933806877!3f28.993279196670827!4f13.987081202809847!5f0.7820865974627469", "https://es.wikipedia.org/wiki/Catedral_de_la_Asunci%C3%B3n_de_Ja%C3%A9n");
INSERT INTO ubicaciones VALUES(15, "Museo Provincial", "Jaen", "854,523", "!4v1645090922293!6m8!1m7!1sGP_s2p0kZOdKrj8GVyxt_Q!2m2!1d37.77414599465592!2d-3.789009051929369!3f275.32641156330396!4f17.923087609026283!5f0.7820865974627469", "https://es.wikipedia.org/wiki/Museo_de_Ja%C3%A9n");

/* Puntuaciones de prueba */
INSERT INTO puntuaciones (username, puntuacion) VALUES
("admin", 1000),
("antonio", 500),
("admin", 3500);