-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Jun-2020 às 22:56
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal`
--
CREATE DATABASE IF NOT EXISTS `personal` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `personal`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `assinaturas`
--

DROP TABLE IF EXISTS `assinaturas`;
CREATE TABLE IF NOT EXISTS `assinaturas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `plano` int(11) NOT NULL,
  `desconto` float(6,2) NOT NULL,
  `idTransacao` varchar(255) DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'p',
  PRIMARY KEY (`id`),
  KEY `fk_usuario` (`usuario`),
  KEY `fk_plano` (`plano`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `assinaturas`
--

INSERT INTO `assinaturas` (`id`, `usuario`, `plano`, `desconto`, `idTransacao`, `status`) VALUES
(1, 13, 2, 0.00, NULL, 'p');

-- --------------------------------------------------------

--
-- Estrutura da tabela `attempt`
--

DROP TABLE IF EXISTS `attempt`;
CREATE TABLE IF NOT EXISTS `attempt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `biografia`
--

DROP TABLE IF EXISTS `biografia`;
CREATE TABLE IF NOT EXISTS `biografia` (
  `idBiografia` int(11) NOT NULL AUTO_INCREMENT,
  `tituloBiografia` varchar(40) NOT NULL,
  `textoBiografia` varchar(200) NOT NULL,
  `imgBiografia` varchar(100) NOT NULL,
  PRIMARY KEY (`idBiografia`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `biografia`
--

INSERT INTO `biografia` (`idBiografia`, `tituloBiografia`, `textoBiografia`, `imgBiografia`) VALUES
(3, 'A Consultoria', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit deleniti consequuntur nihil.', 'https://mdbootstrap.com/img/Photos/Others/men.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `confirmation`
--

DROP TABLE IF EXISTS `confirmation`;
CREATE TABLE IF NOT EXISTS `confirmation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(90) NOT NULL,
  `token` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `confirmation`
--

INSERT INTO `confirmation` (`id`, `email`, `token`) VALUES
(33, 'renan@gmail.com', '63a1eb8027bfb961b8e217815d59b24a61b2227a07f3c7b86951ce57896603dddf0fae59b2a6e0e4066da8cfd6ce73aa1d99544f482454e2f35f66c81badd37e'),
(34, 'renan2@gmail.com', '2f50a9fe9beeb4a81e9c9791d75ddfff1e81c3768177883fe2572f15c1c21fc3c682593bb1063f7a589523a19e5415310741c43b61fc9a056a94e80c12c8cf11'),
(35, 'renan2@gmail.com', 'b1f79a9cf0bb57bf1d7373fecd0c764bdfd326dfa1f58dbaeeb57a9933d1804cbe99c0db6f8d3eadd21cade3def68f12d05cd0c51387154b21336962bed9f9f1'),
(36, 'renan@gmail.com', '14cab4aae47bbd090a8d028ed4d72071e0147b3992358a78c75299e2b3029583c5901130954532e111715f84fbb2b29787732b3c2077c80e88e3729e953e1fb7'),
(37, 'renan@gmail.com', '82043eb530baa0ea92c5a0bbc7c2565a26d52d9cc9fe8a742baefe1426da95f76c15e27291f94a198bd2daf4ea6efc7777b7f5f1be079b180dc064d857b643bc'),
(38, 'renan2@gmail.com', '70922be76af091a3e7b1ad4970c110562760f7c8cb4dc74cf89a640468df284fc74e31929455ea4a8ace8800bc19f4d368f0cfa7526bc2ec8fcf3f238c6eb792'),
(39, 'renan@gmail.com', 'a2e18130d30149a358cef5541db1f1162f5c09083ba81353f0c00a6d2127d04f8a57d8c6676d28bfb9d1d2c5d698c43aa8d504c0acc29053eb278f006a283234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

DROP TABLE IF EXISTS `contato`;
CREATE TABLE IF NOT EXISTS `contato` (
  `idPersonal` int(11) NOT NULL AUTO_INCREMENT,
  `emailPersonal` varchar(40) NOT NULL,
  `dataCriacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `telefonePersonal` int(20) NOT NULL,
  `WhatsAppPersonal` int(20) NOT NULL,
  PRIMARY KEY (`idPersonal`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`idPersonal`, `emailPersonal`, `dataCriacao`, `dataAtualizacao`, `telefonePersonal`, `WhatsAppPersonal`) VALUES
(1, 'personal', '2020-05-27 13:17:46', '2020-05-27 13:17:46', 2133820000, 219888888);

-- --------------------------------------------------------

--
-- Estrutura da tabela `planos`
--

DROP TABLE IF EXISTS `planos`;
CREATE TABLE IF NOT EXISTS `planos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `descricaoIndex` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `preco` float(6,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `planos`
--

INSERT INTO `planos` (`id`, `titulo`, `subtitulo`, `descricaoIndex`, `descricao`, `img1`, `img2`, `video`, `preco`) VALUES
(1, 'Plano Básico', 'O plano básico mais querido do mercado!', 'Você que tem o dia apertado e não consegue parar para fazer exercícios, nosso plano Basic One é perfeito pra você.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'img-banner-plano-basico.jpg', 'img-plano-basico.jpg', 'https://www.youtube.com/watch?v=XW9IZfHiVZM', 89.00),
(2, 'Plano Premium', 'O plano campeão de vendas!', 'Se você quer além um treino, acompanhamento presencial de um nutricionista, conferira o plano Premium.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'img-banner-plano-premium.jpg', 'img-plano-premium.jpg', 'https://www.youtube.com/watch?v=XW9IZfHiVZM', 115.50),
(3, 'Plano Advanced', 'O plano completo para te deixar completo', 'Se você procura algo mais completo e intenso, com direito a equipamentos, veja o plano Advanced.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'img-banner-plano-advanced.jpg', 'img-plano-advanced.jpg', 'https://www.youtube.com/watch?v=XW9IZfHiVZM', 129.90);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `dataNascimento` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `dataCriacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `permissoes` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`idUsuario`, `nome`, `email`, `senha`, `dataNascimento`, `telefone`, `endereco`, `dataCriacao`, `permissoes`, `status`) VALUES
(13, 'Renan', 'renansoaresinfo@gmail.com', '$2y$10$sz6dg8BwmdqBIzdCbexRWOkdDqeWshN0O549Nc8azrHIb50qBaopS', '18/03/1995', '21976990053', 'Rua Paulo Duarte', '2020-05-30 23:47:14', 'user', 'confirmation'),
(24, 'Renan', 'renan@gmail.com', '$2y$10$GsLoedUNGQmtmVNJZt4Jrus7eqW/tyk/OGxbY1O6hWNs1eK/xgKEa', '18/03/1995', '21976990053', 'Rua A', '2020-06-27 05:23:09', 'user', 'confirmation');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `assinaturas`
--
ALTER TABLE `assinaturas`
  ADD CONSTRAINT `fk_plano` FOREIGN KEY (`plano`) REFERENCES `planos` (`id`),
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`usuario`) REFERENCES `users` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
