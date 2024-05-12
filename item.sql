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

CREATE TABLE Items (
  `id` int(11) NOT NULL,
  `nome_item` varchar(25) NOT NULL,
  `nomeColecao` varchar(25) NOT NULL,
  `descricao_item` text NOT NULL,
  `preco_item` float NOT NULL,
  `local_item` varchar(25) NOT NULL,
  `importancia_item` int(11) NOT NULL,
  `data_item` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE Items
    ADD PRIMARY KEY (`id`);

ALTER TABLE Items
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE Items
    ADD CONSTRAINT FK_NomeColecao
        FOREIGN KEY (nomeColecao) REFERENCES Colecao(nomeColecao);

INSERT INTO Items (`id`, `nome_item`, `nomeColecao`, `descricao_item`, `preco_item`, `local_item`, `importancia_item`, `data_item`) VALUES
(1, 'teste', 'HarryPotter', 'teste', 10, 'porto', 4, '2024-05-11');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
