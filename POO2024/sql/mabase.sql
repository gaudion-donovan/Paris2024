drop database if exists mabase;
create database mabase;
use mabase;

create table utilisateur
(
    idutil int(5) not null auto_increment,
    nom varchar(20), 
    prenom varchar(20),
    email varchar(50),
    mdp varchar(20),
    typecompte varchar(30),
    primary key(idutil)
);

create table client
(
    idutil int(5) not null auto_increment,
    nom varchar(20), 
    prenom varchar(20),
    email varchar(50),
    mdp varchar(20),
    typecompte varchar(30),
    adresse varchar(110),
    statut varchar(50),
    primary key(idutil)
);

create table intervention
(
    idutil int(5) not null,
    idclient int(5) not null,
    description text,
    date_inter date,
    montant_inter float,
    primary key(idutil, idclient),
    foreign key(idutil) references utilisateur(idutil),
    foreign key(idclient) references client(idutil)

);

create table evenement
(
    idevent int(5) not null auto_increment,
    nom varchar(50),
    primary key(idevent) 
); 
insert into utilisateur values (null, "Jourquin", "Cedric", "cj@gmail.com", "root", "admin");
insert into client values (null, "Gaudion", "Donovan", "gd@gmail.com", "root", "root", "adresse", "public");
insert into evenement values (null, "Football: France/Allemagne");