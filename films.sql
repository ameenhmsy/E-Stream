DROP DATABASE IF EXISTS a20bdfilms;
CREATE DATABASE a20bdfilms CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE a20bdfilms;

CREATE TABLE membres (
   idm            INT AUTO_INCREMENT, 
   prenom         VARCHAR(40), 
   nom            VARCHAR(40),  
   email          VARCHAR(40),  
   passwd         VARCHAR(40),  
   sexe           ENUM ("homme", "femme") NOT NULL, 
   naissance      DATE, 
   statut         ENUM ("A", "I") DEFAULT "I" NOT NULL, 
   role           ENUM ("ADMIN", "USER") DEFAULT "USER" NOT NULL, 
   CONSTRAINT membres_pk PRIMARY KEY (idm)
) /* ENGINE=InnoDB DEFAULT CHARSET=utf8; */ ;

CREATE TABLE films (
   idf           INT AUTO_INCREMENT, 
   titre         VARCHAR(40),  
   categorie     ENUM ("Action", "Comédie", "Drame", "Humour") NOT NULL,  
   realisateur   VARCHAR(40),  
   langue        VARCHAR(40),  
   pays          VARCHAR(40), 
   duree         TIME, 
   dateAjout     DATE,   
   pochette      VARCHAR(80),  
   video         VARCHAR(80), 
   CONSTRAINT films_pk PRIMARY KEY (idf)
);

CREATE TABLE location (
   idlo           INT AUTO_INCREMENT,
   idm            INT, 
   idf            INT, 
   infoBanque     VARCHAR(40), 
   dateLo         DATE, 
   transaction    BOOLEAN DEFAULT false, 
   acces          BOOLEAN DEFAULT false,
   CONSTRAINT location_pk PRIMARY KEY (idlo),
   CONSTRAINT location_fk_m FOREIGN KEY (idm) REFERENCES membres(idm) ON DELETE CASCADE,
   CONSTRAINT location_fk_f FOREIGN KEY (idf) REFERENCES films(idf) ON DELETE CASCADE
);


INSERT INTO membres VALUES (1, "admin", "Admin", "admin@NomDeVotreCompagnie.com", "adminadmin", "homme", "1970-01-01", "I", "ADMIN" );
INSERT INTO membres VALUES (2, "Sam", "Muler", "sam@mlr.ca", "1122qqww", "homme", CURDATE(), "A", "USER" );
INSERT INTO membres VALUES (3, "Tom", "Cruiz", "tom@crz.ca", "1133qqww", "homme", CURDATE(), "A", "USER" );
INSERT INTO membres VALUES (4, "Eve", "Charl", "eve@crl.ca", "1144qqww", "femme", CURDATE(), "A", "USER" );
INSERT INTO membres VALUES (5, "Bob", "Delan", "bob@dln.ca", "1155qqww", "homme", CURDATE(), "A", "USER" );
INSERT INTO membres VALUES (6, "liz", "Valer", "liz@vlr.ca", "1166qqww", "femme", CURDATE(), "A", "USER" );

INSERT INTO films VALUES (1, "Honest Thief", "Action", "Mark Williams", "Eng", "USA", "01:49:00", SYSDATE(), "./donnees/video/Honest.jpg", "./donnees/video/Honest.mp4" );
INSERT INTO films VALUES (2, "Marraine Ou Presque", "Humour", "Sharon Maguire", "Eng", "USA", "02:13:00", SYSDATE(), "./donnees/video/Marraine-Ou-Presque.jpg", "./donnees/video/Marraine-Ou-Presque.mp4" );
INSERT INTO films VALUES (3, "Safety", "Comédie", "Reginald Hudlin", "Eng", "USA", "01:34:00", SYSDATE(), "./donnees/video/Safety.jpg", "./donnees/video/Safety.mp4" );
INSERT INTO films VALUES (4, "Eau Paisible", "Humour", "Sidonie Dumas", "Eng", "USA", "02:23:00", SYSDATE(), "./donnees/video/Eau-Paisible.jpg", "./donnees/video/Eau-Paisible.mp4" );
INSERT INTO films VALUES (5, "We Can Be Heroes", "Action", "Robert Rodriguez", "Eng", "USA", "01:52:00", SYSDATE(), "./donnees/video/We-Can-Be-Heroes.jpg", "./donnees/video/We-Can-Be-Heroes.mp4" );
INSERT INTO films VALUES (6, "Le Tunnel", "Drame", "Pål Øie", "Nvg", "Norvège", "01:13:00", SYSDATE(), "./donnees/video/Le-Tunnel.jpg", "./donnees/video/Le-Tunnel.mp4" );
INSERT INTO films VALUES (7, "Fatale ", "Action", "Deon Taylor", "Eng", "USA", "01:27:00", SYSDATE(), "./donnees/video/Fatale.jpg", "./donnees/video/Fatale.mp4" );
INSERT INTO films VALUES (8, "Hunted", "Action", "Vincent Paronnaud", "Eng", "Irleand", "01:54:00", SYSDATE(), "./donnees/video/Hunted.jpg", "./donnees/video/Hunted.mp4" );
INSERT INTO films VALUES (9, "Earth", "Drame", "Sylvie Van Brabant", "Fr", "Canada", "00:58:00", SYSDATE(), "./donnees/video/Earth.jpg", "./donnees/video/Earth.mp4" );
INSERT INTO films VALUES (10, "Monster Hunter", "Action", "Paul Anderson", "Eng", "USA", "01:06:00", SYSDATE(), "./donnees/video/Coming-2-America.jpg", "./donnees/video/Coming-2-America.mp4" );
INSERT INTO films VALUES (11, "Coming 2 America", "Humour", "SCraig Brewer", "Eng", "USA", "01:15:00", SYSDATE(), "./donnees/video/Coming-2-America.jpg", "./donnees/video/Coming-2-America.mp4" );
INSERT INTO films VALUES (12, "Soul", "Humour", "Pete Docter", "Eng", "USA", "01:47:00", SYSDATE(), "./donnees/video/Soul.jpg", "./donnees/video/Soul.mp4" );
INSERT INTO films VALUES (13, "Outside the Wire", "Action", "Mikael Håfström", "Eng", "USA", "01:55:00", SYSDATE(), "./donnees/video/Outside-the-Wire.jpg", "./donnees/video/Outside-the-Wire.mp4" );
INSERT INTO films VALUES (14, "The Marksman", "Action", "Robert Lorenz", "Eng", "USA", "01:48:00", SYSDATE(), "./donnees/video/The-Marksman.jpg", "./donnees/video/The-Marksman.mp4" );
INSERT INTO films VALUES (15, "Magic Max", "Humour", "James D. Fields", "Eng", "USA", "01:19:00", SYSDATE(), "./donnees/video/Magic-Max.jpg", "./donnees/video/Magic-Max.mp4" );
INSERT INTO films VALUES (16, "Flinch", "Comédie", "Cameron Van Hoy", "Eng", "USA", "01:10:00", SYSDATE(), "./donnees/video/Flinch.jpg", "./donnees/video/Flinch.mp4" );
INSERT INTO films VALUES (17, "American Dream", "Drame", "Janusz Kaminski", "Eng", "USA", "01:31:00", SYSDATE(), "./donnees/video/American-Dream.jpg", "./donnees/video/American-Dream.mp4" );
INSERT INTO films VALUES (18, "Asphalt Burning", "Comédie", "Hallvard Bræin", "Nvg", "Norvège", "01:12:00", SYSDATE(), "./donnees/video/Asphalt-Burning.jpg", "./donnees/video/Asphalt-Burning.mp4" );
INSERT INTO films VALUES (19, "The Midnight Sky", "Drame", "George Clooney", "Eng", "USA", "01:12:00", SYSDATE(), "./donnees/video/The-Midnight-Sky.jpg", "./donnees/video/The-Midnight-Sky.mp4" );

INSERT INTO location VALUES (1, 2, 1, "123-456-789-123" ,CURDATE(), true, true );

