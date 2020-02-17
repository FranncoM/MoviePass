drop database moviepass;
create database MoviePass;
use MoviePass;

/**********************Tabla de usuarios************************/
create table users ( id int auto_increment primary key, level int not null, name varchar(50) not null, lastname varchar(50) not null,
					 username varchar(50) not null, password varchar(60) not null, email varchar(80) not null UNIQUE);

/****Volcado de usuarios***/
insert into users (level,name, lastname,  password, email) values (0, "nombre", "apellido", "admin", "admin@admin");
insert into users (level,name, lastname,  password, email) values (1, "nombre2", "apellido2", "user", "user@user");


/************************Tabla de Peliculas*****************************/
CREATE TABLE movies(id int auto_increment primary key,id_tmdb int (100) not null, title varchar(80)not null,age varchar(10) not null,genre varchar(40) not null,overview text ,poster varchar(100) not null);

/*Volcado de peliculas*/
INSERT INTO movies (title,age,genre,poster) VALUES(475557,"Joker", "18", "Accion"," ","https://image.tmdb.org/t/p/original/v0eQLbzT6sWelfApuYsEkYpzufl.jpg");


/***********************************Tabla Cines**********************************/

CREATE TABLE theathers ( id_theather int auto_increment primary key, name varchar(30) not null, adress varchar(30) not null, 
						price float not null, full_capacity int not null);


/*Volcado a de cines*/

insert into theathers( name , adress , price , full_capacity) values ('Ambassador','Cordoba 1673',300,200);  
insert into theathers( name , adress , price , full_capacity) values ('Cines Paseo Aldrey','Sarmiento 2685',320,200);
insert into theathers( name , adress , price , full_capacity) values ('Cine del Paseo','Diagonal Pueyrredón 3058',300,400);
insert into theathers( name , adress , price , full_capacity) values ('Cine del Paseo','Diagonal Pueyrredón 3058',300,200);
insert into theathers( name , adress , price , full_capacity) values ('Los Gallegos Shopping','Diagonal Pueyrredón 3058',300,200); 


/***********************Tabla de salas*************************************************/
create table rooms (id_room int auto_increment primary key, id_theather int not null , name varchar(20) not null,  tickets int default(50),
foreign key (id_theather) references theathers(id_theather)ON DELETE CASCADE);

/**Volcado tabla de salas**/

insert into rooms(id_theather, name , tickets) values (1,'Sala 1',50); 
insert into rooms(id_theather, name , tickets) values (1,'Sala 2',50);	
insert into rooms(id_theather, name , tickets) values (1,'Sala 3',50);	
insert into rooms(id_theather, name , tickets) values (1,'Sala 4',50);	


insert into rooms(id_theather, name , tickets) values (2,'Sala 1',50);  
insert into rooms(id_theather, name , tickets) values (2,'Sala 2',50);	
insert into rooms(id_theather, name , tickets) values (2,'Sala 3',50);	
insert into rooms(id_theather, name , tickets) values (2,'Sala 4',50);	


insert into rooms(id_theather, name , tickets) values (3,'Sala 1',50);  
insert into rooms(id_theather, name , tickets) values (3,'Sala 2',50);	
insert into rooms(id_theather, name , tickets) values (3,'Sala 3',50);	
insert into rooms(id_theather, name , tickets) values (3,'Sala 4',50);	

insert into rooms(id_theather, name , tickets) values (4,'Sala 1',50);  
insert into rooms(id_theather, name , tickets) values (4,'Sala 2',50);	
insert into rooms(id_theather, name , tickets) values (4,'Sala 3',50);	
insert into rooms(id_theather, name , tickets) values (4,'Sala 4',50);	

insert into rooms(id_theather, name , tickets) values (5,'Sala 1',50);  
insert into rooms(id_theather, name , tickets) values (5,'Sala 2',50);	
insert into rooms(id_theather, name , tickets) values (5,'Sala 3',50);	
insert into rooms(id_theather, name , tickets) values (5,'Sala 4',50);	

/***************************Sala_X_pelicula******************************************/

create table room_x_movie (id_rm int auto_increment primary key,id_room int not null,id_movie int default (0), date date not null ,time time not null ,  tickets int default(50),
foreign key(id_room) references rooms(id_room) ON DELETE CASCADE,foreign key (id_movie)references movies(id) ON DELETE CASCADE);


/**Volcado en Sala_X_pelicula**/

insert into room_x_movie(id_room,id_movie,date,time)values(1,1,'2019-12-10' ,'18:00');
insert into room_x_movie(id_room,id_movie,date,time)values(2,2,'2019-12-10',' 18:00');
insert into room_x_movie(id_room,id_movie,date,time)values(3,3,'2019-12-10',' 18:00');
insert into room_x_movie(id_room,id_movie,date,time)values(4,5,'2019-12-12',' 20:15');


insert into room_x_movie(id_room,id_movie,date,time)values(5,1,'2019-12-10',' 18:30');
insert into room_x_movie(id_room,id_movie,date,time)values(6,2,'2019-12-10',' 20:00');
insert into room_x_movie(id_room,id_movie,date,time)values(7,3,'2019-12-10',' 18:00');
insert into room_x_movie(id_room,id_movie,date,time)values(8,3,'2019-12-10',' 18:00');


insert into room_x_movie(id_room,id_movie,date,time)values(9,4,'2019-12-15',' 18:30');
insert into room_x_movie(id_room,id_movie,date,time)values(10,1,'2019-12-20',' 20:00');
insert into room_x_movie(id_room,id_movie,date,time)values(11,5,'2019-12-01',' 18:00');
insert into room_x_movie(id_room,id_movie,date,time)values(12,3,'2019-12-30',' 18:00');

insert into room_x_movie(id_room,id_movie,date,time)values(13,4,'2019-12-03',' 18:00');
insert into room_x_movie(id_room,id_movie,date,time)values(14,5,'2019-12-03',' 18:00');
insert into room_x_movie(id_room,id_movie,date,time)values(15,2,'2019-12-13',' 18:00');
insert into room_x_movie(id_room,id_movie,date,time)values(16,1,'2019-12-13',' 18:00');

insert into room_x_movie(id_room,id_movie,date,time)values(17,3,'2019-12-13',' 18:00');
insert into room_x_movie(id_room,id_movie,date,time)values(18,3,'2019-12-04',' 15:00');
insert into room_x_movie(id_room,id_movie,date,time)values(19,3,'2019-12-04',' 19:00');
insert into room_x_movie(id_room,id_movie,date,time)values(20,3,'2019-12-06',' 22:00');



/**********************Tabla de ventas****************************************/

create table purchases (id_purchase int auto_increment primary key,id_user int not null , price float not null, tickets int not null,id_rm int not null,
						date date default (curdate()), time time default(curtime()));


/***************************Tabla de boletos***************************************/

create table tickets (id_ticket int auto_increment primary key, id_rm int not null, id_user int not null,movie varchar(50) not null,date date not null,time time not null,
price float not null,theather varchar(50)not null);


