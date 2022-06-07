create database db_sistema;

use db_sistema;

create table pessoa (
	id int auto_increment not null,
    nome varchar(100) not null,
    rg varchar(10) not null,
    cpf varchar(11) not null,
    data_nascimento date not null,
    email varchar(100) not null,
    telefone varchar(50) not null,
    endereco varchar(100) not null,
    primary key (id) 
);

create table produto (
	id int auto_increment not null,
    nome varchar(100) not null,
    data_entrega date not null,
    validade varchar(50) not null,
    saida timestamp not null,
    codigo_barras varchar(100) not null,
    primary key (id)
);

create table categoria (
	id int auto_increment not null,
    descricao varchar(100) not null,
    primary key (id)
);

create table funcionario (
	id int auto_increment not null,
    nome varchar(100) not null,
    cargo varchar(100) not null,
    primary key (id)
);

drop database db_sistema;