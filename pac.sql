DROP DATABASE IF EXISTS pac;
CREATE DATABASE IF NOT EXISTS pac CHARACTER SET utf8;
/*set names UTF8;
*/
	/*COLLATE utf8_bin;*/
use pac;
set names UTF8;

CREATE TABLE IF NOT EXISTS slider (
	id int not null primary key auto_increment,
	titre varchar(255) not null,
	s_titre varchar(255) not null,
	contenu  text,
	photo varchar(255) not null,
	date_s timestamp NULL DEFAULT CURRENT_TIMESTAMP
);

insert into slider(titre,s_titre,contenu,photo) values 
("Jounal rape","PAC MESRIMES","Un rappeur viens de naitre, bientot tous les faux rappeurs vont disparaitre...",
	"slide01.jpg"),
("Operation netoyage","PAC MESRIMES","Un rappeur viens de naitre, bientot tous les faux rappeurs vont disparaitre...",
	"slide02.jpg"),
("Goma bonne musique","PAC MESRIMES","Un rappeur viens de naitre, bientot tous les faux rappeurs vont disparaitre...",
	"slide03.jpg");

CREATE TABLE IF NOT EXISTS type(
	id int not null primary key auto_increment,
	titre varchar(255) not null
); 
insert into type(titre) values 
("Audio"),("video"),("journal"),("slider"),("Actualite");


CREATE TABLE IF NOT EXISTS posts (
	id int not null primary key auto_increment,
	titre varchar(255) not null,
	s_titre varchar(255) not null,
	contenu text,
	media varchar(255) not null,
	frequence varchar(255) not null,
	photo varchar(255) not null,
	photo_cover_sm varchar(255) not null,
	url varchar(255) not null,
	audio_min varchar(255) not null,
	type_id int not null,
	CONSTRAINT link foreign key (type_id) references type (id),
	date_s timestamp NULL DEFAULT CURRENT_TIMESTAMP
);
insert into posts(titre,s_titre,contenu,media,frequence,photo,type_id) values 
("RADIO KIVU 1","PAC MESRIMES","Un rappeur viens de naitre, bientot tous les faux rappeur vont disparaitre...",
	"Radio kivu 1","150 MHZ","event04-500x780.jpg",3),
("RADIO OKAPI","PAC MESRIMES","Un rappeur viens de naitre, bientot tous les faux rappeur vont disparaitre...",
	"Radio okapi","80 MHZ","event03-500x780.jpg",3),
("COLOMBE FM","PAC MESRIMES","Un rappeur viens de naitre, bientot tous les faux rappeur vont disparaitre...",
	"Colombe Fm 1","22 MHZ","event02-500x780.jpg",3),
("HOPE CHANEL","PAC MESRIMES","Un rappeur viens de naitre, bientot tous les faux rappeur vont disparaitre...",
	"Hope chanel","880 MHZ","event01-500x780.jpg",3);

insert into posts(titre,s_titre,contenu,url,photo,photo_cover_sm,type_id) values
("OPERATION NETOIYAGE","PAC MESRIMES","Un rappeur viens de naitre, biento tous les faux rappeur vont disparaitre...",
	"2.mp3","11.jpg","003.jpg",1),
("GOMA BONNE MUSIQUE","PAC MESRIMES","Un rappeur viens de naitre, bientot tous les faux rappeur vont disparaitre...",
	"https://www.youtube.com/embed/mcixldqDIEQ?feature=oembed","12.jpg","004.jpg",2),
("JE VEUX PARTIR A L'ECOLE","PAC MESRIMES","Un rappeur viens de naitre, bientot tous les faux rappeur vont disparaitre...",
	"2.mp3","20.jpg","004.jpg",1),
("AFRIQUE","PAC MESRIMES","Un rappeur viens de naitre, bientot tous les faux rappeur vont disparaitre...",
	"2.mp3","18.jpg","005.jpg",1),
("Demoniaque","PAC MESRIMES","Un rappeur viens de naitre, bientot tous les faux rappeur vont disparaitre...",
	"2.mp3","19.jpg","006.jpg",1),
("Demoniaque","PAC MESRIMES","Un rappeur viens de naitre, bientot tous les faux rappeur vont disparaitre...",
	"https://www.youtube.com/embed/mcixldqDIEQ?feature=oembed","19.jpg","006.jpg",2),
("AFRIQUE","PAC MESRIMES","Un rappeur viens de naitre, bientot tous les faux rappeur vont disparaitre...",
	"https://www.youtube.com/embed/mcixldqDIEQ?feature=oembed","18.jpg","005.jpg",2);

CREATE TABLE IF NOT EXISTS type_photo(
	id int not null primary key auto_increment,
	titre varchar(255) not null
); 
insert into type_photo(titre) values 
("concerts"),("journal"),("music"),("life");

CREATE TABLE IF NOT EXISTS galerie_smal(
	id int not null primary key auto_increment,
	url varchar(255) not null,
	url_big varchar(255) not null,
	comment text not null,
	type_id int not null,
	CONSTRAINT link_two foreign key (type_id) references type_photo (id)
);
insert into galerie_smal(url,url_big,comment,type_id) values
	("02-1-780x780.jpg","02-1.jpg", "Un petit commentaire ici",1),
	("03-1-780x780.jpg","03-1.jpg", "Un petit commentaire ici",2),
	("04-780x780.jpg","04.jpg", "Un petit commentaire ici",3),
	("05-780x780.jpg","05.jpg", "Un petit commentaire ici",4),
	("06-780x780.jpg","06.jpg", "Un petit commentaire ici",4),
	("07-780x780.jpg","07.jpg", "Un petit commentaire ici",3),
	("08-780x780.jpg","08.jpg", "Un petit commentaire ici",2),
	("09-780x780.jpg","09.jpg", "Un petit commentaire ici",1),
	("10-780x780.jpg","10.jpg", "Un petit commentaire ici",1),
	("11-780x780.jpg","11.jpg", "Un petit commentaire ici",2),
	("12-780x780.jpg","12.jpg", "Un petit commentaire ici",3),
	("18-780x780.jpg","18.jpg", "Un petit commentaire ici",4);
	


/*
CREATE TABLE if not EXISTS audio
(
	id_a int not null primary key auto_increment,
	titre varchar(20) not null,
	chanson varchar(255) not null,
	categorie  varchar(255) not null default 'musique',
	photo varchar(255) not null,
	details text not null, 
	aimer int not null DEFAULT 0,
	download int not null DEFAULT 0,
	play int not null DEFAULT 0,
	id_artiste int not null,
	date_audio timestamp NULL DEFAULT CURRENT_TIMESTAMP
);*/
