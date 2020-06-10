CREATE DATABASE eCommerce CHARACTER SET "utf8";

USE eCommerce;

CREATE TABLE Category(
    idCategory INT PRIMARY KEY AUTO_INCREMENT,
    nameCategory VARCHAR(45) NOT NULL UNIQUE
)
ENGINE=INNODB;

CREATE TABLE Article(
	idArticle INT PRIMARY KEY AUTO_INCREMENT,
	nameArticle VARCHAR(45) NOT NULL,
	description INT,
	price DOUBLE NOT NULL,
	stock INT DEFAULT 0,
	link_photo VARCHAR(100),
	idCategory INT,
	CONSTRAINT fk_idCategory FOREIGN KEY(idCategory) REFERENCES Category(idCategory)
)
ENGINE=INNODB;

CREATE TABLE Client(
	idClient INT PRIMARY KEY AUTO_INCREMENT,
	email VARCHAR(45) NOT NULL UNIQUE,
	password VARCHAR(45) NOT NULL,
	name VARCHAR(45)	 NOT NULL,
	firstName VARCHAR(45) NOT NULL,
	phone VARCHAR(45),
	street VARCHAR(45),
	city VARCHAR(45),
	postalCode INT
)
ENGINE=INNODB;

CREATE TABLE Admin(
	idAdmin INT PRIMARY KEY AUTO_INCREMENT,
	email VARCHAR(45) NOT NULL UNIQUE,
	password VARCHAR(45) NOT NULL
)
ENGINE=INNODB;

CREATE TABLE Commande(
	idCommande INT PRIMARY KEY AUTO_INCREMENT,
	dateCommande DATE
)
ENGINE=INNODB;

CREATE TABLE ListeArticles(
	idListeArticles INT AUTO_INCREMENT,
	quantitee INT NOT NULL,
	idArticle INT,
	idCommande INT,
	PRIMARY KEY(idListeArticles, idArticle, idCommande),
	CONSTRAINT fk_idArticle FOREIGN KEY(idArticle) REFERENCES Article(idArticle),
	CONSTRAINT fk_idCommande FOREIGN KEY(idCommande) REFERENCES Commande(idCommande)
)
ENGINE=INNODB;