create database escoladeconducao;

use escoladeconducao;

CREATE TABLE usuario(
id int primary key not null auto_increment,
nome VARCHAR(50),
data_nascimento date,
genero enum('M','F'),
acesso enum('aluno','instrutor'),
email varchar (60),
palavra_passe varchar(50),
numero_de_telefone varchar (9),
numero_secundario varchar (9)
);

CREATE TABLE especialidade (
    id int primary key auto_increment not null,
    especialidade VARCHAR(50)
);

CREATE table usuario_especialidade(
    id int primary key auto_increment not null,
    usuario_id int unique,
    especialidade_id int,
    foreign key  (usuario_id) references usuario(id) on delete cascade,
    foreign key  (especialidade_id) references especialidade(id) on delete cascade
);
 
 CREATE TABLE veiculo(
 placa VARCHAR(20) PRIMARY KEY not null unique,
 modelo VARCHAR(50),
 ano int
 );
 
CREATE TABLE morada(
id int primary key not null auto_increment,
bairro int not null,
rua varchar (20),
numero_da_casa int
);

CREATE TABLE contacto(
id int primary key not null auto_increment,
idUsuario int,
numero_secundario varchar (9),
numero_de_telefone varchar (9),
email varchar (256),
);

CREATE TABLE registro(
id int primary key not null auto_increment,
horario_de_inicio datetime,
turno varchar(10),
horario_de_termino datetime,
categoria varchar (20)
);
