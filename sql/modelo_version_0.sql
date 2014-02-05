#Tablas version 1#

CREATE TABLE IF NOT EXISTS usuario (
	#Atributos
	id_usuario INTEGER NOT NULL AUTO_INCREMENT,
    nombre_completo VARCHAR(100) NOT NULL DEFAULT '',
    usuario VARCHAR(50) NOT NULL DEFAULT '',
    contrasena VARCHAR(100) NOT NULL DEFAULT '',
    email VARCHAR(100) NOT NULL DEFAULT '',
	admin CHAR(1) DEFAULT '1',
	estado CHAR(1) DEFAULT '1',
	#Indices
	PRIMARY KEY (id_usuario),
    UNIQUE (email)
);

CREATE TABLE IF NOT EXISTS relacion (
	#Atributos
	id_relacion INTEGER NOT NULL AUTO_INCREMENT,
    id_usuario_a INTEGER NOT NULL,
    id_usuario_b INTEGER NOT NULL,
	estado CHAR(1) DEFAULT '1',
	#Indices
	PRIMARY KEY (id_relacion),
	FOREIGN KEY (id_usuario_a) REFERENCES usuario(id_usuario) ON DELETE CASCADE,
	FOREIGN KEY (id_usuario_b) REFERENCES usuario(id_usuario) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS conversacion (
	#Atributos
	id_conversacion INTEGER NOT NULL AUTO_INCREMENT,
	inicio_conversacion DATETIME NOT NULL DEFAULT '2014-01-01 00:00:00',
	estado CHAR(1) DEFAULT '1',
	#Indices
	PRIMARY KEY (id_conversacion)
);

CREATE TABLE IF NOT EXISTS usuario_conversacion (
	#Atributos
	id_usuario_conversacion INTEGER NOT NULL AUTO_INCREMENT,
	id_usuario INTEGER NOT NULL,
	id_conversacion INTEGER NOT NULL,
	estado CHAR(1) DEFAULT '1',
	#Indices
	PRIMARY KEY (id_usuario_conversacion),
	FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario) ON DELETE CASCADE,
	FOREIGN KEY (id_conversacion) REFERENCES conversacion(id_conversacion) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS mensaje_usuario_conversacion (
	#Atributos
	id_mensaje_usuario_conversacion INTEGER NOT NULL AUTO_INCREMENT,
	id_usuario_conversacion INTEGER NOT NULL,
	mensaje TEXT NOT NULL,
	fecha_ingreso_mensaje DATETIME NOT NULL DEFAULT '2014-01-01 00:00:00',
	estado CHAR(1) DEFAULT '1',
	#Indices
	PRIMARY KEY (id_mensaje_usuario_conversacion),
	FOREIGN KEY (id_usuario_conversacion) REFERENCES usuario_conversacion(id_usuario_conversacion) ON DELETE CASCADE
);

#Tablas version 1#

INSERT INTO Conversacion VALUES (1,now(),'1');
INSERT INTO `usuario_conversacion` (`id_usuario_conversacion`, `id_usuario`, `id_conversacion`, `estado`) VALUES ('1', '1', '1', '1');