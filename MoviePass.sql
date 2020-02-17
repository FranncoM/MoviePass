drop database moviepass;
create database moviepass;
use moviepass;

/**********************Tabla de usuarios************************/
create table users ( id int auto_increment primary key, level int not null, name varchar(50) not null, lastname varchar(50) not null,
					  password varchar(60) not null, email varchar(80) not null UNIQUE);

/****Volcado de usuarios***/
insert into users (level,name, lastname,  password, email) values (0, "nombre", "apellido", "admin", "admin@admin");
insert into users (level,name, lastname,  password, email) values (1, "nombre2", "apellido2", "user", "user@user");


/************************Tabla de Peliculas*****************************/
CREATE TABLE movies(id int auto_increment primary key,id_tmdb int (100) not null, title varchar(80)not null,age varchar(10) not null,genre varchar(40) not null,overview text ,poster varchar(100) not null);

/*Volcado de peliculas*/
INSERT INTO movies (id_tmdb,title,age,genre,overview,poster) VALUES(475557,"Joker", "18", "Accion","Arthur Fleck es un hombre ignorado por la sociedad, cuya motivación en la vida es hacer reír. Pero una serie de trágicos acontecimientos le llevarán a ver el mundo de otra forma. Película basada en Joker, el popular personaje de DC Comics y archivillano de Batman, pero que en este film toma un cariz más realista y oscuro. ","https://image.tmdb.org/t/p/original/v0eQLbzT6sWelfApuYsEkYpzufl.jpg");
INSERT INTO movies (id_tmdb,title,age,genre,overview,poster) VALUES(453405,"Géminis", "18", "Accion","Henry Bogan, un asesino a sueldo, pretende retirarse porque se siente viejo. Sin embargo, hay alguien que no está dispuesto a permitírselo porque tiene la misión de matarlo: un clon suyo más joven, más rápido y más fuerte. ","https://image.tmdb.org/t/p/original/gJpbw3pVCAKksp1LgsTGW7c8SFV.jpg");
INSERT INTO movies (id_tmdb,title,age,genre,overview,poster) VALUES(301528,"Toy Story 4 ", "ATP", "Fantasia","Woody siempre ha tenido claro cuál es su labor en el mundo y cuál es su prioridad: cuidar a su dueño, ya sea Andy o Bonnie. Sin embargo, Woody descubrirá lo grande que puede ser el mundo para un juguete cuando Forky se convierta en su nuevo compañero de habitación. Los juguetes se embarcarán en una aventura de la que no se olvidarán jamás. ","https://image.tmdb.org/t/p/original/yF1vPDuHVrAUMX5dy1tVMbAjkEL.jpg ");
INSERT INTO movies (id_tmdb,title,age,genre,overview,poster) VALUES(290859,"Terminator: Destino oscuro", "18", "Accion","Sarah Connor une todas sus fuerzas con una mujer cyborg para proteger a una joven de un extremadamente poderoso y nuevo Terminator. ","https://image.tmdb.org/t/p/original/k7PuHoj2oE7nEHExwliF2FSXFnr.jpg");
INSERT INTO movies (id_tmdb,title,age,genre,overview,poster) VALUES(299537,"Capitana Marvel", "16", "Accion","La historia sigue a Carol Danvers mientras se convierte en uno de los héroes más poderosos del universo, cuando la Tierra se encuentra atrapada en medio de una guerra galáctica entre dos razas alienígenas. Situada en los años 90, 'Capitana Marvel' es una historia nueva de un período de tiempo nunca antes visto en la historia del Universo Cinematográfico de Marvel. ","https://image.tmdb.org/t/p/original/d3p5JuwN7dG0TvrN5h4ZY4tMOEX.jpg");



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

SELECT * from movies;
SELECT rm.id_rm, t.name AS theather , r.name AS room, m.title AS film, rm.date, rm.time, m.id as id_movie, r.tickets
          FROM room_x_movie rm INNER JOIN  rooms r ON rm.id_room = r.id_room INNER JOIN theathers t ON t.id_theather = r.id_theather INNER JOIN movies m ON rm.id_movie = m.id
           where rm.date ='2019-12-13' group by m.title;

SELECT * FROM room_x_movie rm INNER JOIN  rooms r ON rm.id_room = r.id_room INNER JOIN theathers t ON t.id_theather = r.id_theather INNER JOIN movies m ON rm.id_movie = m.id
           where rm.date ='2019-12-13' group by m.title;

SELECT m.title AS title, m.age AS age, m.genre AS genre, m.overview AS overview, m.poster AS poster
          FROM room_x_movie rm INNER JOIN  rooms r ON rm.id_room = r.id_room INNER JOIN theathers t ON t.id_theather = r.id_theather INNER JOIN movies m ON rm.id_movie = m.id
           where rm.date ='2019-12-12' group by m.title;