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

CREATE TABLE Colecao (
    `nomeColecao` varchar(25) NOT NULL,
    `temaColecao` varchar(25) NOT NULL,
    `username` varchar(25) NOT NULL,
    `favoritoStatus` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE Colecao
    ADD PRIMARY KEY (`nomeColecao`);

ALTER TABLE Colecao
    ADD CONSTRAINT FK_NomeColecaoUser
        FOREIGN KEY (username) REFERENCES User(username);

INSERT INTO Colecao (`nomeColecao`, `temaColecao`, `username`, `favoritoStatus`) VALUES
('teste', 'teste', 'user1', 0),
('HarryPotter', 'teste2', 'user2', 1);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
