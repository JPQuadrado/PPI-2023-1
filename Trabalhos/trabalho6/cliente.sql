CREATE DATABASE ppi_2023;

CREATE TABLE cliente (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario varchar(100),
    nome varchar(100),
    cpf VARCHAR(11),
    senha varchar(100)
);

select * from cliente;