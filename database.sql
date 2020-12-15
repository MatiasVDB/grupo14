drop database if EXISTS grupo14;
create SCHEMA grupo14;
use grupo14;

create table ROL(
	id INT not null,
    nivel varchar(50) not null,
    PRIMARY KEY(id)
);

INSERT INTO ROL(id, nivel)
values (0, "Invitado"),
(1, "Chofer"),
(2, "Supervisor"),
(3, "Encargado del taller"),
(4, "Administrador");

create table CARGA(
id int not null auto_increment,
tipo varchar (15) not null,
pesoNeto float not null,
hazard varchar (2) not null,
imo float,
reefer varchar (2) not null,
temperatura DECIMAL(5,2),
primary key (id)
);

insert into CARGA(TIPO, PESONETO, HAZARD, IMO, REEFER, TEMPERATURA)
values("Granel", 500, "SI", 1, "SI", 5),
("Liquida", 200, "SI", 1.1, "SI", -40),
("Jaula", 8000, "NO", 0, "SI", 16),
("Granel", 4500, "SI", 1.1, "SI", -55),
("Liquida", 2200, "SI", 2.2, "SI", -45),
("Granel", 5100, "SI", 3.3, "SI", 15),
("Granel", 1500, "SI", 4.1, "SI", 15);

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

insert into TRACTOR( marca, modelo, patente, numeroDeMotor, chasis, kilometros, añoDeFabricacion)
values ("IVECO", "Cursor", "AA124DC", 69904367, "R69904367", 40005, 2013),
("IVECO", "Cursor", "AD200XS", 57193968, "R57193968", 12000, 2019),
("IVECO", "Cursor", "AA211ZX", 82836641, "N82836641", 84000, 2013),
("IVECO", "Cursor", "AC452WE", 28204636, "R28204636", 78000, 2014),
("IVECO", "Cursor", "AA233SS", 26139668, "K26139668", 78356, 2012),
("IVECO", "Cursor", "AB900QW", 44301415, "F44301415", 29000, 2015),
("IVECO", "Cursor", "AC342WW", 44260023, "D44260023", 19003, 2017),
("SCANIA", "G310", "AA150QW", 82039512, "I82039512", 14590, 2020);

create table ARRASTRADO(
id int not null auto_increment,
patente varchar(40),
numeroDeChasis int,
tipo varchar(50),
primary key (id, patente, numeroDeChasis));

insert into ARRASTRADO(patente, numeroDeChasis, tipo)
values ("AA100AS", 585822, "Araña"),
("AC125AD", 605737,  "Araña"),
("AB135AG", 705687, "Granel"),
("AD166AS", 815082,  "Araña"),
("AA189AD", 775167,  "Jaula"),
("AC208AG", 642287,  "Araña"),
("AB230AS", 678666,  "Araña");

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
value ("Buenos Aires", "Cordoba", '2020-03-18', "2020-03-17", "2020-03-17", "2020-03-17", 0.0, 0.0, 0.0, 0.0, 1, 1),
("Santa Fe", "Cordoba", '2020-03-16', "2020-03-17", "2020-03-17", "2020-03-17", 0.0, 0.0, 0.0, 0.0, 2, 2),
("Santa Fe", "Cordoba", '2020-03-15', "2020-03-17", "2020-03-17", "2020-03-17", 0.0, 0.0, 0.0, 0.0, 2, 3),
("Corrientes", "Cordoba", '2020-03-14', "2020-03-17", "2020-03-17", "2020-03-17", 0.0, 0.0, 0.0, 0.0,3, 4),
("Corrientes", "Cordoba", '2020-03-20', "2020-03-17", "2020-03-17", "2020-03-17", 0.0, 0.0, 0.0, 0.0, 4, 5),
("Cordoba", "Buenos aires", '2020-03-21', "2020-03-17", "2020-03-17", "2020-03-17", 0.0, 0.0, 0.0, 0.0, 1, 6);

create table USUARIO(
    numeroDeDocumento INT NOT null,
    nombre varchar(50) not null  ,
    password varchar(50) not null,
    fechaDeNacimiento date not null,
    mail varchar(75) not null unique,
    rolUsuario int,
    PRIMARY KEY( numeroDeDocumento),
    foreign key(rolUsuario) references ROL(id)
    );
    
insert into USUARIO(numeroDeDocumento, nombre, password, fechaDeNacimiento, mail,rolUsuario)
values (41263730, "Agustin","81dc9bdb52d04dc20036dbd8313ed055", "1998-06-09", "1234@hotmail.com", 4),
(41823476, "Roberto","81dc9bdb52d04dc20036dbd8313ed055", "1998-06-09", "roberto@hotmail.com", 1),
(41214566, "Pablo","81dc9bdb52d04dc20036dbd8313ed055", "1998-06-09", "pablo@hotmail.com", 1),
(42343476, "Juan","81dc9bdb52d04dc20036dbd8313ed055", "1998-06-09", "juan@hotmail.com", 1),
(41456476, "Peter","81dc9bdb52d04dc20036dbd8313ed055", "1998-06-09", "peter@hotmail.com", 1),
(41111111, "Chofer","81dc9bdb52d04dc20036dbd8313ed055", "1998-06-09", "chofer@hotmail.com", 1),
(42222222, "Supervisor","81dc9bdb52d04dc20036dbd8313ed055", "1998-06-09", "supervisor@hotmail.com", 2),
(43333333, "Mecanico","81dc9bdb52d04dc20036dbd8313ed055", "1998-06-09", "mecanico@hotmail.com", 3),
(44444444, "Admin","81dc9bdb52d04dc20036dbd8313ed055", "1998-06-09", "admin@hotmail.com", 4),
(41852376, "Matisco","81dc9bdb52d04dc20036dbd8313ed055", "1998-06-09", "matisco@hotmail.com", 2);

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
(322444, "Winco", "123@hotmail.com", "45213324", "99995555", "44443333", "Buenos Aires, Ramos mejia, libertador 375"),
(534243, "Philips", "456@hotmail.com", "44441111", "99995555", "25452222", "Chaco, Chacho, Julio 3751"),
(234213, "Tabasco", "789@hotmail.com", "22241112", "99995555", "21124422", "Jujuy, Ramos mejia, Armando 3752"),
(213443, "Samsung", "1111@hotmail.com", "43316664", "99995555", "31112251", "San Luis, Mataderos, Clash 3755"),
(345121, "Flete", "12341@hotmail.com", "12357432", "99995555", "21145566", "San Luis, Moreno, Etesech 3751"),
(554233, "Bk", "2525252@hotmail.com", "12346782", "99995555", "12908871", "Tucuman , Ituzaingo, San Pedro 2500");

create table PROFORMA(
numero int primary key,
fecha date,
CUIT_cliente int,
id_viaje int,
numeroDeDocumento_chofer int,
id_carga int,
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
foreign key (id_carga) references carga(id),
 foreign key ( numeroDeDocumento_chofer) references USUARIO( numeroDeDocumento));

insert into proforma(numero, fecha, CUIT_cliente, id_viaje, numeroDeDocumento_chofer)
values(1, "2020-03-17",
213443, 2, 41214566);


create table combustible(
id int not null auto_increment,
idViaje int,
numeroDeDocumento_chofer int,
lugar varchar(75),
cantidad int,
importe float,
kilometrosRecorridos float,
primary key (id, idViaje, numeroDeDocumento_chofer),
foreign key (idViaje) references VIAJE(id),
foreign key ( numeroDeDocumento_chofer) references USUARIO( numeroDeDocumento));

insert into combustible(id, idViaje, numeroDeDocumento_chofer, lugar, cantidad, importe, kilometrosRecorridos)
values(1, 1, 41823476, "Ciudadela", 100, 400, 50);

create table service(
codigo int not null primary key,
id_tractor int,
repuestos varchar(40),
tipoDeService varchar(40),
numeroDeDocumento_mecanico int,
foreign key (id_tractor) references TRACTOR(id), 
foreign key (numeroDeDocumento_mecanico) references USUARIO( numeroDeDocumento)); 


 create table FECHA_SERVICE(
 id int auto_increment,
 id_tractor int,
 hora time,
 fecha date,
 codigo_service int,
 primary key (id, codigo_service),
 foreign key (id_tractor) references TRACTOR(id),
 foreign key (codigo_service)  references service(codigo) ON DELETE CASCADE
 );
 
