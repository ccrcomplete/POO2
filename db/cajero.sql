create database cajero;
use cajero;

CREATE TABLE usuarios(
	idusuario INT PRIMARY KEY auto_increment,
    nombre VARCHAR(100),
    saldo double,
    tipo_cuenta boolean
);