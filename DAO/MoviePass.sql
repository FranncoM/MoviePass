create database MoviePass;
use MoviePass;

create table users ( level int not null, name varchar(50) not null, lastname varchar(50) not null,
					 username varchar(50) not null, password varchar(60) not null, email varchar(80) not null,
                     constraint pk_user primary key (email)
				   );

insert into users values (0, "nombre", "apellido", "admin", "admin", "admin@gmail.com");

select * from users;