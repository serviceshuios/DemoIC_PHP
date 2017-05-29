CREATE TABLE categorie (
    id int NOT NULL AUTO_INCREMENT,
    nom varchar(255) NOT NULL,
    description text,
    PRIMARY KEY (id)
);

CREATE TABLE produit (
	reference varchar(100) NOT NULL,
	categorie int NOT NULL,
	designation varchar(255) NOT NULL,
	quantite int NOT NULL DEFAULT 0,
	prix float NOT NULL DEFAULT 0,
	photo varchar(100),
	disponible bool NOT NULL DEFAULT 0,
	promotion bool NOT NULL  DEFAULT 0,
	selectionne bool NOT NULL  DEFAULT 0,
	PRIMARY KEY (reference),
	FOREIGN KEY (categorie) REFERENCES categorie(id)
);