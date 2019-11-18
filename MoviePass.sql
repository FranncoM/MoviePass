drop database moviepass;
create database MoviePass;
use MoviePass;



/**********************Tabla de usuarios************************/
create table users ( id int auto_increment primary key, level int not null, name varchar(50) not null, lastname varchar(50) not null,
					 username varchar(50) not null, password varchar(60) not null, email varchar(80) not null UNIQUE);

/****Volcado de usuarios***/
insert into users (level,name, lastname, username, password, email) values (0, "nombre", "apellido", "admin", "admin", "admin@gmail.com");
insert into users (level,name, lastname, username, password, email) values (1, "nombre2", "apellido2", "admin2", "admin2", "admin2@gmail.com");


/************************Tabla de Peliculas*****************************/
create table movies ( id int auto_increment primary key, title varchar(80) not null,
						age varchar(10) not null, category varchar(40) not null,id_tmbd int not null);

/*Volcado de peliculas*/
insert into movies (title, age, category, id_tmbd) values ("Joker", "18", "Accion","111");
insert into movies (title, age, category, id_tmbd) values ("Malefic", "13", "Fantasia","222");
insert into movies (title, age, category, id_tmbd) values ("La familia Adams", "APT", "Fantasia","555");


/***********************************Tabla Cines**********************************/

CREATE TABLE theathers ( id_theather int auto_increment primary key, name varchar(30) not null, adress varchar(30) not null, 
						price float not null, full_capacity int not null);


/*Volcado a de cines*/

insert into theathers( name , adress , price , full_capacity) values ('Ambassador','Cordoba 1673',300,200);  
insert into theathers( name , adress , price , full_capacity) values ('Cines Paseo Aldrey','Sarmiento 2685',300,200);  


/***********************Tabla de salas*************************************************/
create table rooms (id_room int auto_increment primary key, id_theather int not null , name varchar(15) not null,  tickets int default(50),
foreign key (id_theather) references theathers(id_theather));

/**Volcado tabla de salas**/

insert into rooms(id_theather, name , tickets ) values (1,'Sala 1',50); /*Ambassador*/
insert into rooms(id_theather, name , tickets) values (1,'Sala 2',50);	/*Ambassador*/
insert into rooms(id_theather, name , tickets) values (1,'Sala 3',50);	/*Ambassador*/
insert into rooms(id_theather, name , tickets) values (1,'Sala 4',50);	/*Ambassador*/


insert into rooms(id_theather, name , tickets) values (2,'Sala 1',50);  /*Cine Paseo Aldrey*/
insert into rooms(id_theather, name , tickets) values (2,'Sala 2',50);	/*Cine Paseo Aldrey*/
insert into rooms(id_theather, name , tickets) values (2,'Sala 3',50);	/*Cine Paseo Aldrey*/
insert into rooms(id_theather, name , tickets) values (2,'Sala 4',50);	/*Cine Paseo Aldrey*/

/***************************Sala_X_pelicula******************************************/

create table room_x_movie (id_rm int auto_increment primary key,id_room int not null,id_movie int default (0), date date not null ,time time not null ,
foreign key(id_room) references rooms(id_room),foreign key (id_movie)references movies(id));


/**Volcado en Sala_X_pelicula**/

insert into room_x_movie(id_room,id_movie,date,time)values(1,1,'2019-12-10' ,'18:00');
insert into room_x_movie(id_room,id_movie,date,time)values(2,2,'2019-12-10',' 18:00');
insert into room_x_movie(id_room,id_movie,date,time)values(3,3,'2019-12-10',' 18:00');
insert into room_x_movie(id_room,id_movie,date,time)values(3,1,'2019-12-12',' 20:15');

insert into room_x_movie(id_room,id_movie,date,time)values(4,1,'2019-12-10',' 18:30');
insert into room_x_movie(id_room,id_movie,date,time)values(5,2,'2019-12-10',' 20:00');
insert into room_x_movie(id_room,id_movie,date,time)values(6,3,'2019-12-10',' 18:00');

/*select * from room_x_movie r where date(r.date)= '2019-12-12';*/

/***************************Tabla de boletos***************************************/

create table tickets (id_ticket int auto_increment primary key, id_room int not null, id_user int ,foreign key(id_room) references rooms(id_room));

/*Volcado en la tabla de boletos*/
insert into tickets(id_room,id_user) values(1,1);
insert into tickets(id_room,id_user) values(1,1);
insert into tickets(id_room,id_user) values(1,2);

/**********************Tabla de ventas****************************************/

create table purchase (id_purchase int auto_increment primary key , id_ticket int not null, monto float not null, 
						date date default (curdate()), time time default(curtime()), foreign key (id_ticket) references tickets(id_ticket));

/*Volcado a la tabla de ventas*/
insert into purchase (id_ticket,monto) values (1,300);
insert into purchase (id_ticket,monto) values (1,300);



select * from users;
select * from movies;
select * from theather;
select * from rooms;
select * from room_x_movie;
select * from tickets;
select * from purchase;

select * from movies m where m.age = '13';

select * from movies m where m.age = 'apt';

/*Consulta Todas las sesiones********/

select t.name as 'cine',r.name as 'sala',m.title as 'Pelicula',rm.date as 'Fecha',rm.time as 'Hora',r.tickets as 'Boletos disponibles' 
from room_x_movie rm inner join  rooms r on rm.id_room = r.id_room inner join theathers t on t.id_theather = r.id_theather inner join movies m on rm.id_movie = m.id order by t.name;


select t.name as 'cine',r.name as 'sala',m.title as 'Pelicula',rm.date as 'Fecha',rm.time as 'Hora',r.tickets as 'Boletos disponibles' 
from room_x_movie rm inner join  rooms r on rm.id_room = r.id_room inner join theathers t on t.id_theather = r.id_theather inner join movies m on rm.id_movie = m.id where t.id_theather = 2 order by t.name ;
/*************/


SELECT * FROM rooms where id_theather = 1;

select * from tickets; 
select * from purchase;
select curdate();

select p.date as fecha ,p.time as hora, p.monto from purchase p where p.date = '2019-11-17';

/* prueba*/
