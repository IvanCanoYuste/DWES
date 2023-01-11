use ejercicios

create table cine(
    id_cine varchar(30) primary key,
    nombre_c varchar(30),
    ciudad_c varchar(30)
)ENGINE="InnoDB";

insert into 
    cine 
values
    ("CINE1","Odeón","Burgos"),
    ("CINE2","Van Golem","Burgos"),
    ("CINE3","CineSur","Sevilla"),
    ("CINE4","Capital","Madrid"),
    ("CINE5","Conde Duque","Madrid");


create table proyectar(
    titulo varchar(30),
    id_cine varchar(30),
    fecha_proy date,
    constraint pk primary key (titulo,id_cine),
    constraint fk_titulo foreign key  (titulo) references peliculas (titulo),
    constraint fk_cine foreign key (id_cine) references cine (id_cine)
)ENGINE="InnoDB";
