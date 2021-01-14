-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Jan-2021 às 18:52
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadat`
--

CREATE TABLE `cadat` (
  `id` int(11) NOT NULL,
  `nome_atleta` varchar(255) NOT NULL,
  `data_nascimento` varchar(255) NOT NULL,
  `cpf` varchar(32) NOT NULL,
  `rg` varchar(255) NOT NULL,
  `orgao_expedidor` varchar(255) NOT NULL,
  `uf` varchar(255) NOT NULL,
  `naipe` varchar(255) NOT NULL,
  `modalidade` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `nacionalidade` varchar(255) NOT NULL,
  `naturalidade` varchar(255) NOT NULL,
  `escola` varchar(255) NOT NULL,
  `nome_mae` varchar(255) NOT NULL,
  `nome_pai` varchar(255) NOT NULL,
  `tel_responsavel` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `local_treinamento` varchar(255) NOT NULL,
  `professor` varchar(255) NOT NULL,
  `imagem` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadat`
--

INSERT INTO `cadat` (`id`, `nome_atleta`, `data_nascimento`, `cpf`, `rg`, `orgao_expedidor`, `uf`, `naipe`, `modalidade`, `categoria`, `nacionalidade`, `naturalidade`, `escola`, `nome_mae`, `nome_pai`, `tel_responsavel`, `endereco`, `bairro`, `numero`, `cidade`, `estado`, `local_treinamento`, `professor`, `imagem`) VALUES
(1, 'Jhordam Silva Janacaro', '03/06/2000', '125.050.646-98', '18.254.585', 'Outros', 'MG', 'Masculino', 'Futebol', 'Adulto', 'Brasil', 'MONTE CARMELO', 'Unifucamp', 'Lucy Janacaro', 'Jorge Araujo', '34998075095', 'Av.noé', 'Irineu', '01', 'Monte Carmelo', 'Minas Gerais', 'Lagoinha', 'Jubiscleudo', ''),
(2, 'Renato Cesar Vasconcelos', '12/02/2001', '200.545.958-00', '20.001.584', 'Outros', 'MG', 'Masculino', 'Futsal', 'Adulto', 'Brasil', 'MONTE CARMELO', 'Unifucamp', 'Juliana Fernades', 'Crisleilton Vasconcelos', '34999999999', 'Rua 1', 'Santa Rita', '12', 'Monte Carmelo', 'Minas Gerais', 'Superação', 'Rolisca', ''),
(58, 'SFGHGFS ASGF ASDF ', '51/46/5165', '546.164.654-65', '51.356.165', '(SSP/TO)', 'PR', 'Masculino', 'Futebol', 'sub-11', 'Barém', 'FDSGFDS DFSG DS', ' SDFG SDFG DSF', 'FDGS DDFG DFSG DSFG', ' DFSGFDSG DSF', '(44) 4 4435-3534', ' CDG SDFAGFDSA AF', ' DFGFS GSFD G4', '354 5FD4R43', 'DFSGDSE', 'Maranhão', 'SDGSDFG SFDGSFD', 'SDFG SDFG', 'jsdfjnALK3XSF.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `nome`, `usuario`, `senha`) VALUES
(1, 'Renato', 'renatoadmin', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'Admin2', 'Admin2', '0192023a7bbd73250516f069df18b500');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadat`
--
ALTER TABLE `cadat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadat`
--
ALTER TABLE `cadat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
