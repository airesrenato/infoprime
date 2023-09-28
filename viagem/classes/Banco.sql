CREATE DATABASE IF NOT EXISTS Viagem;

USE Viagem;

CREATE TABLE Viagem(
    idViagem INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Origem VARCHAR(100),
    Destino VARCHAR(100),
    DiaSaida VARCHAR(45),
    DiaChegada VARCHAR(45),
    StatusViagem VARCHAR(45)
);

CREATE TABLE Motorista(
    idMotorista INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(45),
    CNH VARCHAR(45)
);

CREATE TABLE Veiculo(
    idVeiculo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Marca VARCHAR(45),
    Modelo VARCHAR(45),
    Placa VARCHAR(45)
);
CREATE TABLE Viagem_has_Motorista(
    idViagem INT,
    idMotorista INT
    FOREIGN KEY (idViagem) REFERENCES Viagem(idViagem),
    FOREIGN KEY (idMotorista) REFERENCES Motorista(idMotorista)
);
CREATE TABLE Trajeto(
    idTrajeto INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    QuilometragemInicial INT,
    QuilometragemFinal INT,
    LI VARCHAR(45),
    LF VARCHAR(45),
    HorarioInicio VARCHAR(45),
    HorarioFim VARCHAR(45),
    idMotorista INT,
    idVeiculo INT,
    idViagem INT
);

