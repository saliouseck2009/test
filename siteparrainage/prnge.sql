DROP DATABASE IF EXISTS parrainage;
CREATE DATABASE parrainage;
USE parrainage;

CREATE TABLE L1_TDSI(
	id_L1 int not null auto_increment primary key,
	nom varchar(100),
	prenom varchar(255),
	mail varchar(50),
	tel varchar(25)
);

CREATE TABLE L2_3_TDSI(
	id int not null auto_increment primary key,
	nom varchar(100),
	prenom varchar(255),
	mail varchar(50),
	tel varchar(25)
);


CREATE TABLE parrainage_liste{
	id int not null auto_increment primary key
	L1_name varchar(255),
	L1_Contacts varchar(255),
	L2_3_name varchar(255),
	L2_3_contacts varchar(255)
}