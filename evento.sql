-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 11, 2024 at 06:27 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE TABLE Evento (
  `nomeEvento` varchar(25) NOT NULL,
  `nomeColecao` varchar(25) NOT NULL,
  `precoBilhete` float NOT NULL,
  `localCompra` varchar(25) NOT NULL,
  `localEvento` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE Evento
    ADD PRIMARY KEY (`nomeEvento`);

ALTER TABLE Evento
    ADD CONSTRAINT FK_NomeColecaoEvento
        FOREIGN KEY (nomeColecao) REFERENCES Colecao(nomeColecao);

INSERT INTO Evento (`nomeEvento`, `nomeColecao`, `precoBilhete`, `localCompra`, `localEvento`) VALUES
('EventoTeste', 'HarryPotter', 12, 'LocalCompraTeste', 'LocalEventoTeste'),
('EventoTeste2', 'teste', 12, 'LocalCompraTeste', 'LocalEventoTeste');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
