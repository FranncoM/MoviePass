create database MoviePass;
use MoviePass;

create table users ( id int auto_increment primary key, level int not null, name varchar(50) not null, lastname varchar(50) not null,
					 username varchar(50) not null, password varchar(60) not null, email varchar(80) not null);

insert into users (level, name, lastname, username, password, email) values (0, "nombre", "apellido", "admin", "admin", "admin@gmail.com");

select * from users;


create table theathers ( idTheather int auto_increment primary key, ticket int not null, adress varchar(50) not null,
					     name varchar(50) not null, fullCapacity int not null);

insert into theathers (ticket, adress, name, fullCapacity) values (180, "Sarmiento 2685", "Cines Paso Aldrey", 100);
insert into theathers (ticket, adress, name, fullCapacity) values (150, "Diagonal Centro 1673", "Cine Ambassador", 120);
insert into theathers (ticket, adress, name, fullCapacity) values (160, "Diagonal Pueryrredon 3050", "Cinemacenter", 100);

select * from theathers;

create table movies ( idMovie int auto_increment primary key, title varchar(80) not null, date varchar(13) not null,
					  age int not null, category varchar(40) not null);

insert into movies (title, date, age, category) values ("Joker", "31/08/2019", "13", "Accion");
insert into movies (title, date, age, category) values ("Malefic", "21", "13", "Entretenimiento");

select * from movies;

select theathersXmovies (idTheatherXmovies int auto_increment primary key, idTheather int not null,
						idMovie int not null, 
						constraint fkIdTheather foreign key (idTheather) references theathers (idTheather),
						constraint fkIdMovie foreign key (idMovie) references movies (idMovie));

insert into theatersXmovies (idTheather, idMovie) values (1, 1);
insert into theathersXmovies (idTheather, idMovie) values (3, 2);