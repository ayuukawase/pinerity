create database pinerity;
use pinerity;

-- tabela beneficiario

create table beneficiario (
id int auto_increment,
nome varchar(50),
email varchar(50),
senha varchar(50),
ativo boolean,
cpf varchar(11),
telefone varchar(11),
primary key(id));

-- tabela beneficente

