CREATE DATABASE VisualBD;
USE VisualBD;
create table Usuario(Idusuario int NOT NULL AUTO_INCREMENT PRIMARY KEY,
			NombreCompleto varchar(120),
			usuario varchar(120),
			Tipo Int,
			Correo varchar(150),
			contra varchar(100)
);

create table Lente(Idlente int NOT NULL AUTO_INCREMENT PRIMARY KEY,
			Nombre varchar(150),
			Descripcion Varchar(250),
			Tipo Varchar(150),
			Precio float,
			Existencia Int,
			Imagen varchar(150)
);

create table Pedido(Idpedido int NOT NULL AUTO_INCREMENT PRIMARY KEY,
			IdUsuario Int,
			Idlente Int,
			Precio float,
			Cantidad Int,
			FechaPedido Date,
			FechaEntregado Date,
			DomicilioEntrega varchar(250),
			FOREIGN KEY (Idusuario) REFERENCES usuario(Idusuario),
			FOREIGN KEY (Idlente) REFERENCES lente(Idlente)
);

Insert into Usuario(NombreCompleto,usuario,Tipo ,Correo,contra)Values('Baldomero Goméz Domínguez','BaldoUno',1,'admin@visual.com','12345');



Insert into Lente(Nombre,Descripcion,Tipo,Precio,Existencia) Values('WAYFARERS','Lentes de sol','SPRING 2019',1199.99, 50);
Insert into Lente(Nombre,Descripcion,Tipo,Precio,Existencia) Values('CLUB MASTER','Lentes de moda','SPRING 2018',1099.99, 50);
Insert into Lente(Nombre,Descripcion,Tipo,Precio,Existencia) Values('REFLECTORS','Lentes de moda','SPRING 2019',899.99, 50);
Insert into Lente(Nombre,Descripcion,Tipo,Precio,Existencia) Values('AVIADOR','Lentes de sol','SPRING 2018',799.99, 50);


.no_enlace{
    text-decoration: none;
    background: crimson;
    color: white;
    margin: auto;
    padding: 5px 25px;
    cursor: pointer;
    font-size: 20px;
}


Insert into Lente(Nombre,Descripcion,Tipo,Precio,Existencia) Values('CAT EYE','Lentes de moda','SPRING 2017',899.99, 50);
Insert into Lente(Nombre,Descripcion,Tipo,Precio,Existencia) Values('LENTES DE MADERA','Lentes de sol','SPRING 2016',999.99, 50);
Insert into Lente(Nombre,Descripcion,Tipo,Precio,Existencia) Values('CARAVAN','Lentes de moda','SPRING 2018',899.99, 50);
Insert into Lente(Nombre,Descripcion,Tipo,Precio,Existencia) Values('WAYFEAR','Lentes de sol','SPRING 2019',999.99, 50);





Insert into Lente(Nombre,Descripcion,Tipo,Precio,Existencia) Values('ROUND METAL','Lentes de moda','SPRING 2016',899.99, 50);
Insert into Lente(Nombre,Descripcion,Tipo,Precio,Existencia) Values('OFTALMICOS','Lentes de sol','SPRING 2017',999.99, 50);
Insert into Lente(Nombre,Descripcion,Tipo,Precio,Existencia) Values('CARAVAN','Lentes de moda','SPRING 2018',899.99, 50);
Insert into Lente(Nombre,Descripcion,Tipo,Precio,Existencia) Values('RB4253','Lentes de sol','SPRING 2019',999.99, 50);






Insert into Lente(Nombre,Descripcion,Tipo,Precio,Existencia) Values('MARSHAL','Lentes de sol','SPRING 2019',1199.99, 50);
Insert into Lente(Nombre,Descripcion,Tipo,Precio,Existencia) Values('ROUND FLECK','Lentes de moda','SPRING 2018',1099.99, 50);
Insert into Lente(Nombre,Descripcion,Tipo,Precio,Existencia) Values('ERIKA METAL','Lentes de moda','SPRING 2017',899.99, 50);
Insert into Lente(Nombre,Descripcion,Tipo,Precio,Existencia) Values('BLAZE WAYFARER','Lentes de sol','SPRING 2016',799.99, 50);






Insert into Lente(Nombre,Descripcion,Tipo,Precio,Existencia) Values('GENERAL','Lentes de moda','SPRING 2016',899.99, 50);
Insert into Lente(Nombre,Descripcion,Tipo,Precio,Existencia) Values('CLUBMASTER','Lentes de sol','SPRING 2017',999.99, 50);
Insert into Lente(Nombre,Descripcion,Tipo,Precio,Existencia) Values('BAN RB','Lentes de moda','SPRING 2018',899.99, 50);
Insert into Lente(Nombre,Descripcion,Tipo,Precio,Existencia) Values('CLUBROUND','Lentes de sol','SPRING 2019',999.99, 50);








