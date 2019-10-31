create database MoviePass;
use MoviePass;

create table users ( id int auto_increment primary key, level int not null, name varchar(50) not null, lastname varchar(50) not null,
					 username varchar(50) not null, password varchar(60) not null, email varchar(80) not null);

insert into users (level,name, lastname, username, password, email) values (0, "nombre", "apellido", "admin", "admin", "admin@gmail.com");

select * from users;