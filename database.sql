create SCHEMA grupo14;
use grupo14;

create table ROL(
	id INT not null,
    nivel varchar(50) not null,
    PRIMARY KEY(id)
);

create table USUARIO(
    tipoDeDocumento varchar(50) not null,
    numeroDeDocumento INT NOT null,
    nombre varchar(50) not null  ,
    password varchar(50) not null,
    fechaDeNacimiento date not null,
    mail varchar(75) not null unique,
    rolUsuario int,
    id_viaje int,
    PRIMARY KEY(tipoDeDocumento, numeroDeDocumento),
    foreign key(rolUsuario) references ROL(id),
    foreign key(id_viaje) references VIAJE(id)
    );
    
INSERT INTO ROL(id, nivel)
values (1, "Chofer"),
(2, "Supervisor"),
(3, "Encargado del taller"),
(4, "Administrador");

insert into USUARIO(tipoDeDocumento, numeroDeDocumento, nombre, password, fechaDeNacimiento, mail,rolUsuario)
values ("DNI", 41263730, "Agustin","1234", "1998-06-09", "1234@hotmail.com", 4),
("DNI", 41823476, "Roberto","1234", "1998-06-09", "roberto@hotmail.com", 1);


create table TRACTOR(
id int not null auto_increment,
marca varchar(40),
modelo varchar(40),
patente varchar(40),
numeroDeMotor int,
chasis varchar(40),
kilometros int,
añoDeFabricacion int,
primary key (id, patente, chasis));

insert into TRACTOR(id, marca, modelo, patente, numeroDeMotor, chasis, kilometros, añoDeFabricacion)
values (1,"IVECO", "Cursor", "AA124DC", 69904367, "R69904367", 7892356, 2013);


create table ARRASTRADO(
id int not null auto_increment,
patente varchar(40),
numeroDeChasis int,
id_carga int,
primary key (id, patente, numeroDeChasis),
foreign key(id_carga) references CARGA(id));

insert into ARRASTRADO(id, patente, numeroDeChasis, id_carga)
values (1, "AA100AS", 585822, 1);

create table CARGA(
id int not null auto_increment,
tipo varchar (15) not null,
pesoNeto float not null,
hazard varchar (2) not null,
imo varchar(10),
reefer varchar (2) not null,
temperatura DECIMAL(5,2),
primary key (id)
);


insert into CARGA(ID, TIPO, PESONETO, HAZARD, IMO, REEFER, TEMPERATURA)
values(1,"Granel", 500, "SI", "Class", "SI", 5),
(2,"Liquida", 200, "SI", "Subclass", "SI", -40),
(3,"Jaula", 8000, "NO", "Ninguna", "SI", 16);

create table CLIENTE(
CUIT INT,
denominacion varchar (50),
email varchar(75) not null unique,
contacto1 varchar (50),
contacto2 varchar (50),
telefono varchar (50),
direccion varchar (50),
primary key (CUIT)
);

insert into CLIENTE(CUIT, denominacion, email, contacto1, contacto2, telefono, direccion)
values (244444, "Sancor", "blabla@hotmail.com", "55559999", "99995555", "44443333", "Buenos Aires, Ramos mejia, libertador 345"),
(322444, "Winco", "blablop@hotmail.com", "55559999", "99995555", "44443333", "Buenos Aires, Ramos mejia, libertador 375");



create table VIAJE(
id int not null auto_increment,
origen varchar(70) not null,
destino varchar(70) not null,
fechaInicio date,
fechaFinalizacion date,
ETA date,
ETD date,
kilometrosActuales float,
kilometrosFinal float,
combustibleFinal float,
combustibleConsumido float,
idVehiculo int,
idArrastrado int,
primary key (id),
foreign key(idVehiculo) references TRACTOR(id),
foreign key(idArrastrado) references ARRASTRADO(id));

insert into VIAJE (origen, destino, fechaInicio, fechaFinalizacion,  ETA, ETD, kilometrosActuales, kilometrosFinal, combustibleFinal, combustibleConsumido, idVehiculo, idArrastrado) 
value ("Buenos Aires", "Cordoba", '2020-03-18', "2020-03-17", "2020-03-17", "2020-03-17", 0.0, 0.0, 0.0, 0.0, 1, 1);

create table PROFORMA(
numero int primary key,
fecha date,
CUIT_cliente int,
id_viaje int,
tipoDeDocumento_chofer varchar(40),
numeroDeDocumento_chofer int,
costeoEstimado_Kilometros int,
costeoEstimado_Combustible int,
costeoEstimado_ETD int,
costeoEstimado_ETA int,
costeoEstimado_Viaticos int,
costeoEstimado_Peajes_Pesajes int,
costeoEstimado_Extras int,
costeoEstimado_FEE int,
costeoEstimado_Hazard int,
costeoEstimado_Reefer int,
 foreign key (CUIT_cliente) references CLIENTE(CUIT),
 foreign key (id_viaje) references VIAJE(id),
 foreign key (tipoDeDocumento_chofer, numeroDeDocumento_chofer) references USUARIO(tipoDeDocumento, numeroDeDocumento));

create table combustible(
id int not null auto_increment,
idViaje int,
numeroDeDocumento_chofer int,
tipoDeDocumento_chofer varchar(5),
lugar varchar(75),
cantidad int,
importe float,
kilometrosRecorridos float,
primary key (id, idViaje, numeroDeDocumento_chofer),
foreign key (idViaje) references VIAJE(id),
foreign key (tipoDeDocumento_chofer, numeroDeDocumento_chofer) references USUARIO(tipoDeDocumento, numeroDeDocumento));


select * from tractor; 
 
 select * from PROFORMA;

 select * from CARGA;
 
 SELECT * FROM VIAJE;
 
 select * from VIAJE join ARRASTRADO on viaje.iDArrastrado = arrastrado.id 
 join CARGA where carga.id = arrastrado.id_carga;

 select * from CLIENTE;

 select * from rol join usuario where rol.id = usuario.rolUsuario;

 select * from rol;
 
 select * from usuario;
 
