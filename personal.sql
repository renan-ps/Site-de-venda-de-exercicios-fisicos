-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Jun-2020 às 04:02
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `confirmation`
--

INSERT INTO `confirmation` (`id`, `email`, `token`) VALUES
(5, 'renansoaresinfo@gmail.com', '39fad94257ac7d1b8ad532b166cb4d789bbe92e4404b10cc7fc39ad4c7ae6d9824c9286aa385ab8510da4bbb10984eb9cab8b9b35fcfe4ed7f2fcdcd16290265'),
(6, 'renansoaresinfo@gmail.com', '8a0716ac07ef720af90a528441cb668bb72d0f5737c9b3069ed14fa4b3d501cda6a53f347eb703dd88db6beeacdfc77fbabbad9697eaa875355953a3c7d3d965'),
(7, 'renansoaresinfo@gmail.com', '077fb1fc5352de9a6c5674a09c93f8d40297fc25a1a967809c901295ff1ff6420034f4b7cc6e14c8d218ff403218c6a02f1d03fabdd724ba1e9c61d3451f356a'),
(8, 'renansoaresinfo@gmail.com', '0a82d972eda711988fbda57176fbb519f1b410663109e530961d27b7d09b9f37c35803dcfe17529af6f56c9f56cbb9041a733baf1e80d7fda1afde8c32b5d08a'),
(9, 'renansoaresinfo@gmail.com', '4e3a4623ed92b816321c1803e578071fd89d31acd28c2026a949be09a1616e8f7491624f29c92f2de7cabe4719716936092fd148becbc779c76d4dd00a96b859'),
(10, 'renansoaresinfo@gmail.com', '11a7f054c63e3b0de184510aa74a4f603738e8c36b5d9db1a1760dde4a6408e6e94121866e705925303b9480ee5d03a04b17bf420445f5fd83e0b9d7cdeadf31'),
(11, 'renansoaresinfo@gmail.com', '8b2b81c5655ec1d9d67488654a8cc46c5c4ec56792d686f9775b2e13829080ef184ce2288bfa0d75c6926252750627830e164fef068aa318d80ea7cc603912cb'),
(12, 'renansoaresinfo@gmail.com', '0c474a90c6e653ec07fd654e192f67e50ee03d6f741f21ebe84c7e0cf36acd7dae851bb1e0ac6586630837a759af4217ab435531e561c41e26e73c03960c310c'),
(13, 'renansoaresinfo@gmail.com', 'cea39ad58e36074e6215080bd05c60a9099a2065d9dcd35c5ae117f2e625144578549dc2360bbc66696d3ad0725c4982ae5766fdf2c6bb2d7ea967dabbef04cc'),
(14, 'renansoaresinfo@gmail.com', '0c26368039d94266e72d93e46300eeaa2967355e986e9a8ed73451d92c43d51ef9ed8f5c325dc36544e832c2a370adfe183acdd7b7d9f4fbee88c2e6e4f65fdc'),
(15, 'renansoaresinfo@gmail.com', '96791dfd2c6869ab8778da39d16dcf7928249b971154e0529c1b019ad4ae80a47a7ce7867371130134ac759889980fdff9ca4b1a2d7314a40c06ce5c4846c26f'),
(16, 'renansoaresinfo@gmail.com', 'c3d992b1f0209bdc1d20eb8d7a70774df082131f950b43219d4b91d32519657e7ea03b1af1df319c9737401f4c8d72e3dd91c1719cb65fa5096d0945f881276a'),
(17, 'renansoaresinfo@gmail.com', 'c7ec85c45259c8c8ece21f12892f58618ae797773fe786488d70a288f6c4609da2a0ecfc1aa6703e760a25c0a96186a9c0a31d8b75593f9a3a61cd8db1c73a78'),
(18, 'renansoaresinfo@gmail.com', '9dccccb32f34368ead3d6419ce882b5d231227b588b276eed8fada4e14778c4aa3c2450e73209c0aaf275f21ceb3f69ce82c213029916556ee69bec630a1b9ab'),
(19, 'renansoaresinfo@gmail.com', '813ebdb8b008b3f4c370694dfa8813083da0e6af3283b3263e89b522be1447211159bb6f0cf1e127b92b2c1bb982a4629dfe4e562137ef7c80aaa45b3b26e5b4'),
(20, 'renansoaresinfo@gmail.com', '3a91249d5bcf5c42bfd81573cffe87c98c60af6bc8c7631565eb6b785b97876f0501509b006ef0293da513e0d571269a6a0e1c86695a81663aba3f09339f89e0'),
(21, 'renansoaresinfo@gmail.com', 'c6014fddaed39c5d25d132c74b27e339776bef42adc049a1fa20ecb26c393a0fa42f6ad28a9f2e0444c8981b09cf2b7381f47a7d81ff4ed8ae5a87dba2a988a4'),
(22, 'renansoaresinfo@gmail.com', '44b7b9e85268c2053a09ab406d2e507eff73be47d34a72173bcfce21a4fdeb60e5e5c0193108cd7e622099472fda7205d7193f2b551cf9735645a59dca05deb5'),
(23, 'renansoaresinfo@gmail.com', 'fa0411d2e0d648667705dd967be74fe3cf038c796711d2a7b507e1ad70f763af78548f6d6837023d4d9225afa6035814ec1c8715d5515a24cf2a525ae95546e4'),
(24, 'renansoaresinfo@gmail.com', '9f3aa1779b95936fbd45df4914aa281239c200185d122d0f409d6535a5aed11f86061a89240487086aea16f995f75dae4691b04507d983821c5917c4171d62ae'),
(25, 'renansoaresinfo@gmail.com', '112032557f8d1bb58f9a915983c023f1a3525e3b7e65f42b8c0b57d1d25256284eb85647b7f9a9b44724cda5d337e01ab4a190236683babf4e61c9bde129048a'),
(26, 'renansoaresinfo@gmail.com', '250c3b75cf93216af9492be034d3223ea587a020f48a9a83614bf27a89377e3680640e797274425915b5fa0392c4878ae26ebfbad21fc435ee3eb4fd6cb6eb42'),
(27, 'renansoaresinfo@gmail.com', '88f6fed9ce61b97c2c5165f4ec1c1ca19cedd42887d41ce1d13fe6540ba672bb233a901ebbe6e33b439c5ef07452c17a61cc9d0882bd85f6aa79b182ed490e7a'),
(28, '', '266f106feccba4521b764ef4ed7771cd0736706970e24eceeb81097dfc06bd9534fd8981a7b501084472b7f2c045907dfbf5175981101d678c4f59f0da936ac6'),
(29, '', '859e9237deb27f513fd2b511ac6368e6449a1be1f82d1070391eff61e0c3520384b4f3f52d6fb12dc2a1fba9daece285e9b5f82080763a6ce0ab0756d049ba88'),
(30, 'renansoaresinfo@gmai.com', '9cafbfdcb2b7782bec8e3ce74e06de9c56342eda8e95bafe0cff8d1249cebf76e65c07ab773298d9999c8d00fe2f29a38c854a852282289165b5351751d9a45c'),
(31, '', 'ea2aa244ba913106661a2513174c058127416bd01a2ba18162b5160586d64c94719583fd9693ecda055aa304248e48ea335e4a609f4a36a7dfe3317c4c3c894f');

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`idUsuario`, `nome`, `email`, `senha`, `dataNascimento`, `telefone`, `endereco`, `dataCriacao`, `permissoes`, `status`) VALUES
(13, 'Renan', 'renansoaresinfo@gmail.com', '$2y$10$sz6dg8BwmdqBIzdCbexRWOkdDqeWshN0O549Nc8azrHIb50qBaopS', '18/03/1995', '21976990053', 'Rua Paulo Duarte', '2020-05-30 23:47:14', 'user', 'confirmation'),
(14, '', '', '$2y$10$u8bVDSeM9Fgk/TvYtehs4.i0SYYf8O8he3831bXOwdMSN/YqTQOJa', '', '', '', '2020-06-05 16:41:34', 'user', 'confirmation'),
(16, '', 'renansoaresinfo@gmai.com', '$2y$10$9TXfDLIk545t3PyYmjhTPOBOZOtIVKAVATdgkiPlED2dAjUQy9bfC', '', '', '', '2020-06-05 21:50:49', 'user', 'confirmation');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
