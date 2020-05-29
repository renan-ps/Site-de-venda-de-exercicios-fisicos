-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Maio-2020 às 01:02
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `personal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `biografia`
--

CREATE TABLE `biografia` (
  `idBiografia` int(11) NOT NULL,
  `tituloBiografia` varchar(40) NOT NULL,
  `textoBiografia` varchar(200) NOT NULL,
  `imgBiografia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `biografia`
--

INSERT INTO `biografia` (`idBiografia`, `tituloBiografia`, `textoBiografia`, `imgBiografia`) VALUES
(3, 'A Consultoria', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit deleniti consequuntur nihil.', 'https://mdbootstrap.com/img/Photos/Others/men.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `idPersonal` int(11) NOT NULL,
  `emailPersonal` varchar(40) NOT NULL,
  `dataCriacao` datetime NOT NULL DEFAULT current_timestamp(),
  `dataAtualizacao` datetime NOT NULL DEFAULT current_timestamp(),
  `telefonePersonal` int(20) NOT NULL,
  `WhatsAppPersonal` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`idPersonal`, `emailPersonal`, `dataCriacao`, `dataAtualizacao`, `telefonePersonal`, `WhatsAppPersonal`) VALUES
(1, 'personal', '2020-05-27 13:17:46', '2020-05-27 13:17:46', 2133820000, 219888888);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `idUsuario` int(11) NOT NULL,
  `nome` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `sena` varchar(255) NOT NULL,
  `dataNascimento` varchar(20) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `dataCriacao` datetime NOT NULL DEFAULT current_timestamp(),
  `permissoes` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`idUsuario`, `nome`, `email`, `sena`, `dataNascimento`, `cpf`, `dataCriacao`, `permissoes`, `status`) VALUES
(6, 'joalison', 'joalison1', '3382039', '21021996', '16866668', '2020-05-27 12:41:53', '1', '1');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `biografia`
--
ALTER TABLE `biografia`
  ADD PRIMARY KEY (`idBiografia`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`idPersonal`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `biografia`
--
ALTER TABLE `biografia`
  MODIFY `idBiografia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `idPersonal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
