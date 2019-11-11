create database MoviePass;
use MoviePass;

create table users ( id int auto_increment primary key, level int not null, name varchar(50) not null, lastname varchar(50) not null,
					 username varchar(50) not null, password varchar(60) not null, email varchar(80) not null);

insert into users (level,name, lastname, username, password, email) values (0, "nombre", "apellido", "admin", "admin", "admin@gmail.com");
insert into users (level,name, lastname, username, password, email) values (1, "nombre2", "apellido2", "admin2", "admin2", "admin2@gmail.com");

create table movies ( id int auto_increment primary key, title varchar(80) not null, age int not null, category varchar(40) not null,
					  id_tmbd int not null);

insert into movies (title, age, category, id_tmbd) values ("Joker", "13", "Accion","111");
insert into movies (title, age, category, id_tmbd) values ("Malefic", "13", "Fantasia","222");


select * from users;