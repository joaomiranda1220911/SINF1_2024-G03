CREATE DATABASE `Database`;
USE `Database`;

-- database name: Database

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 01, 2024 at 03:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE TABLE User (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE User
    ADD PRIMARY KEY (`username`);

INSERT INTO User (`username`, `password`) VALUES
('user1', '$2y$10$Pb4S1fgVvogWmZlVAUzvY.VJAdDIvqaFQ4veBj3bxFh1NqzMXcPg.'),
('user2', '!Password123');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

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
                        `localEvento` varchar(25) NOT NULL,
                        `classificacao` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE Evento
    ADD PRIMARY KEY (`nomeEvento`);

ALTER TABLE Evento
    ADD CONSTRAINT FK_NomeColecaoEvento
        FOREIGN KEY (nomeColecao) REFERENCES Colecao(nomeColecao);

INSERT INTO Evento (`nomeEvento`, `nomeColecao`, `precoBilhete`, `localCompra`, `localEvento`, `classificacao`) VALUES
                                                                                                                    ('EventoTeste', 'HarryPotter', 12, 'LocalCompraTeste', 'LocalEventoTeste', 1),
                                                                                                                    ('EventoTeste2', 'teste', 12, 'LocalCompraTeste', 'LocalEventoTeste', 5);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
