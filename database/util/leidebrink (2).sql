-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Jul-2018 às 06:29
-- Versão do servidor: 5.5.11
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leidebrink`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `Id` int(11) NOT NULL,
  `Nome` varchar(55) NOT NULL,
  `TipoPessoa` char(2) DEFAULT NULL,
  `CNPJ` bigint(14) DEFAULT NULL,
  `CPF` bigint(11) DEFAULT NULL,
  `RG` bigint(7) DEFAULT NULL,
  `Phone1` bigint(11) DEFAULT NULL,
  `Phone2` bigint(11) DEFAULT NULL,
  `Email` varchar(55) DEFAULT NULL,
  `DataAniversario` date DEFAULT NULL,
  `Obs` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`Id`, `Nome`, `TipoPessoa`, `CNPJ`, `CPF`, `RG`, `Phone1`, `Phone2`, `Email`, `DataAniversario`, `Obs`) VALUES
(1, 'Paulo Eduardo', 'pf', NULL, 99999999999, 9999999, 8191983193, 81983639014, 'paulo@gmail.com', '1998-08-21', 'Cadastro para testes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `forma_pagamento`
--

CREATE TABLE `forma_pagamento` (
  `Id` int(11) NOT NULL,
  `Descricao` varchar(55) NOT NULL,
  `QuantidadeParcelas` int(11) DEFAULT NULL,
  `PrimeiraParcela` int(11) DEFAULT NULL,
  `IntervaloParcelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `forma_pagamento`
--

INSERT INTO `forma_pagamento` (`Id`, `Descricao`, `QuantidadeParcelas`, `PrimeiraParcela`, `IntervaloParcelas`) VALUES
(1, 'Á Vista', 1, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `Id` int(11) NOT NULL,
  `Login` varchar(256) NOT NULL,
  `Senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`Id`, `Login`, `Senha`) VALUES
(1, 'admin', 'admin!admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `forma_pagamento`
--
ALTER TABLE `forma_pagamento`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `forma_pagamento`
--
ALTER TABLE `forma_pagamento`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
