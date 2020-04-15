CREATE TABLE Acheteur(
Type varchar(255),
Civilite varchar(255) NOT NULL,
Nom varchar(255) NOT NULL,
Prenom varchar(255) NOT NULL,
DateNaissance Date NOT NULL,
Telephone varchar(255) NOT NULL,
Adresse varchar(255) NOT NULL,
CodePostal varchar(255) NOT NULL,
Ville varchar(255) NOT NULL,
Paiement varchar(255) NOT NULL,
AdresseMail varchar(255) NOT NULL PRIMARY KEY,
MotdePasse varchar(255) NOT NULL
);

Insert into Acheteur (Type, Civilite, Nom, Prenom, DateNaissance, Telephone, Adresse, CodePostal, Ville, Paiement, AdresseMail, MotdePasse) values ("Acheteur", "M.", "Stark", "Tony", "1969-12-24", "0216932719", "42 Rue stark", "67743", "San Francisco", "298328637209183", "ironman@gmail.com", "iron");
Insert into Acheteur (Type, Civilite, Nom, Prenom, DateNaissance, Telephone, Adresse, CodePostal, Ville, Paiement, AdresseMail, MotdePasse) values ("Acheteur", "Mme.", "Danvers", "Carol", "1986-04-05", "9865279654", "34 Rue Espace", "8866", "Galar", "3726847310298201", "marvel@gmail.com", "marvel");


CREATE TABLE Vendeur(
Type varchar(255),
Civilite varchar(255) NOT NULL,
Nom varchar(255) NOT NULL,
Prenom varchar(255) NOT NULL,
DateNaissance Date NOT NULL,
Telephone varchar(255) NOT NULL,
Adresse varchar(255) NOT NULL,
CodePostal varchar(255) NOT NULL,
Ville varchar(255) NOT NULL,
AdresseMail varchar(255) NOT NULL PRIMARY KEY,
MotdePasse varchar(255) NOT NULL,
Photo varchar(1000) NOT NULL,
Fondecran varchar(1000) NOT NULL
);

Insert into Vendeur (Type, Civilite, Nom, Prenom, DateNaissance, Telephone, Adresse, CodePostal, Ville, AdresseMail, MotdePasse, Photo, Fondecran) values ("Vendeur", "M.", "Rogers", "Steven", "1975-01-21", "0182736354", "21 rue Zola", "75002", "Paris", "america@gmail.com", "america", "https://vignette.wikia.nocookie.net/marveldatabase/images/6/63/Steven_Rogers_%28Earth-199999%29_from_Avengers_Infinity_War_licensing_art_003.jpg/revision/latest?cb=20180510225405", "http://getwallpapers.com/wallpaper/full/1/3/c/547193.jpg");
Insert into Vendeur (Type, Civilite, Nom, Prenom, DateNaissance, Telephone, Adresse, CodePostal, Ville, AdresseMail, MotdePasse, Photo, Fondecran) values ("Vendeur", "M.", "Banner", "Bruce", "1963-08-10", "0765241829", "50 rue Enervé", "75014", "Paris", "hulk@gmail.com", "hulk", "http://www.marvel-cineverse.fr/medias/images/hulkendgame.jpg", "https://wallpaperplay.com/walls/full/6/0/d/107012.jpg");
Insert into Vendeur (Type, Civilite, Nom, Prenom, DateNaissance, Telephone, Adresse, CodePostal, Ville, AdresseMail, MotdePasse, Photo, Fondecran) values ("Vendeur", "Société", "ECE", "Amazon", "2019-04-29", "0144390600", "37 Quai de Grenelle", "75015", "Paris", "EceAmazon", "eceamazon", "http://www.marvel-cineverse.fr/medias/images/hulkendgame.jpg", "https://wallpaperplay.com/walls/full/6/0/d/107012.jpg");

CREATE TABLE Article(
ID int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
Type varchar(255) NOT NULL,
Mode1 varchar(255) NOT NULL,
Mode2 varchar(255) NOT NULL,
Mode3 varchar(255) NOT NULL,
Titre varchar(255) NOT NULL,
Description text NOT NULL,
Quantité int(11) NOT NULL,
Prix float(11) NOT NULL,
URLimage varchar(1000) NOT NULL,
Vendeur varchar(255) NOT NULL,
PrixMax2 float(11) NOT NULL
);




CREATE TABLE panier(
ID int(11) PRIMARY KEY NOT NULL,
Titre varchar(255) NOT NULL,
Mode1 varchar(255) NOT NULL,
Mode2 varchar(255) NOT NULL,
Mode3 varchar(255) NOT NULL,
URLimage varchar(1000) NOT NULL,
Description text NOT NULL,
Quantité int(11) NOT NULL,
Prix float(11) NOT NULL,
Vendeur varchar(255) NOT NULL,
Acheteur varchar(255) NOT NULL,
PrixMax2 float(11) NOT NULL
);


CREATE TABLE enchere(
ID int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
IDannonce int(11)NOT NULL,
IDacheteur varchar(255) NOT NULL,
CB varchar(11) NOT NULL,
PrixOffre float(11) NOT NULL,
PrixMax float(11) NOT NULL
);