CREATE database inmobiliaria;
use inmobiliaria;

CREATE TABLE usuario (
usuario_id int(5) NOT NULL AUTO_INCREMENT primary key,
nombres varchar(35) NOT NULL,
correo varchar(100) NOT NULL unique,
clave varchar(80) NOT NULL,
tipo_usuario varchar(20)
);


CREATE TABLE pisos (
Codigo_piso int primary key,
calle VARCHAR(40) NOT NULL,
numero INT NOT NULL,
piso INT NOT NULL,
puerta VARCHAR(5) NOT NULL,
cp INT NOT NULL,
metros INT NOT NULL,
zona VARCHAR (15),
precio float NOT NULL,
imagen varchar(100) NOT NULL,
usuario_id int(5)references usuario
);


CREATE TABLE comprados (
usuario_comprador int(5)references usuario(usuario_id),
Codigo_piso int references pisos ,
Precio_final float NOT NULL
);

insert into usuario(nombres, correo, clave, tipo_usuario) values ("admin", "admin@admin.com", MD5("admin"), "admin");

delimiter $$
create trigger compra_casa before delete on pisos
for each row
begin
insert into comprados (usuario_comprador, Codigo_piso, Precio_final) values (old.usuario_id, old.Codigo_piso, old.precio);
end$$
delimiter ;