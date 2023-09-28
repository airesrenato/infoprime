CREATE DATABASE rolloutd;
USE rolloutd;

CREATE TABLE tecnico(
    idTecnico INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(45),
    Senha VARCHAR(45)

);

CREATE TABLE equipamento(
    idEquipamento INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Modelo VARCHAR(45),
    VC VARCHAR(45),
    ServiceTag VARCHAR(45)
);

CREATE TABLE acessorio(
    idAcessorio INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Tipo VARCHAR(45),
    Marca VARCHAR(45),
    idEquipamento INT,
    FOREIGN KEY(idEquipamento) REFERENCES equipamento(idEquipamento)
);

CREATE TABLE avaria(
    idAvaria INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Descricao VARCHAR(45),
    Foto VARCHAR(100)
    idEquipamento INT,
    FOREIGN KEY(idEquipamento) REFERENCES equipamento(idEquipamento)
);

CREATE TABLE atendimento(
    idAtendimento INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Responsavel VARCHAR(45),
    Email VARCHAR(45),
    Departamento VARCHAR(45),
    Localidade VARCHAR(45),
    Backup VARCHAR(45),
    Dia VARCHAR(45),
    Termo VARCHAR(100),
    idAntigo INT,
    idNovo INT,
    idTecnico INT
);





create table acessorio(
    idAcessorio int not null primary key auto_increment,
    Tipo VARCHAR(45),
    Marca VARCHAR(45),
    idEquipamento int,
    foreign key(idEquipamento) references equipamento(idEquipamento)

);

insert into acessorio values(null,'Teclado','DELL',1);
insert into acessorio values(null,'Mouse','DELL',1);
insert into acessorio values(null,'Monitor','DELL',1);

insert into acessorio values(null,'Teclado','DELL',2);
insert into acessorio values(null,'Mouse','DELL',2);
insert into acessorio values(null,'Monitor','DELL',2);

insert into acessorio values(null,'Teclado','DELL',3);
insert into acessorio values(null,'Mouse','DELL',3);
insert into acessorio values(null,'Monitor','DELL',3);

insert into acessorio values(null,'carregador','DELL',5);
insert into acessorio values(null,'Carregador','DELL',6);
insert into acessorio values(null,'Carregador','DELL',7);
insert into acessorio values(null,'Carregador','DELL',8);
insert into acessorio values(null,'Carregador','DELL',9);


create table atendimento(
    idAtendimento int not null  primary key auto_increment,
    Responsavel VARCHAR(45),
    Email VARCHAR(45),
    Departamento VARCHAR(45),
    Localidade VARCHAR(45),
    Backup VARCHAR(45),
    Dia VARCHAR(45),
    Termo VARCHAR(45),
    idAntigo int,
    idNovo int,
    idTecnico int,
    foreign key(idNovo) references equipamento(idEquipamento),
    foreign key(idAntigo) references equipamento(idEquipamento),
    foreign key(idTecnico) references tecnico(idTecnico)
);

insert into atendimento values(
    null,
    'fulano de tal',
    'fulano@de.tal',
    'qualidade',
    'Fortaleza',
    'sim',
    '23/04/2023',
    'termo1.jpg',
    1,
    2,
    1
);
