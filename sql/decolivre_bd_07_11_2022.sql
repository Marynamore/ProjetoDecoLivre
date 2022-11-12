-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/11/2022 às 21:47
-- Versão do servidor: 10.4.24-MariaDB
-- Versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `decolivre_bd`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `id_avaliacao` int(11) NOT NULL AUTO_INCREMENT,,
  `avaliacao` int(5) DEFAULT NULL,
  `curtir_ava` tinyint(4) DEFAULT NULL,
  `comentario_ava` varchar(150) DEFAULT NULL COMMENT 'Elogio\nCritica\nSugestoes\nPergunta',
  `id_denuncia_ava` int(11) DEFAULT NULL COMMENT 'id de denuncia da avaliação',
  `situacao_com` varchar(15) DEFAULT 'Inativo' COMMENT 'A situação do comentario pode se: \nAtivo\nInativo\nBloqueado\nExcluido\n\n',
  `fk_usuarios_id_usuarios` int(11) NOT NULL,
  `fk_pontos_turisticos_id_pontur` int(11) NOT NULL,
  `fk_pontos_turisticos_usuarios_id_usuarios` int(11) NOT NULL,
  `avaliacao_id_avaliacao` int(11) NOT NULL,
  `avaliacao_usuarios_id_usuarios` int(11) NOT NULL,
  `avaliacao_pontos_turisticos_id_pontur` int(11) NOT NULL,
  `avaliacao_pontos_turisticos_usuarios_id_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `passagens`
--

CREATE TABLE `passagens` (
  `id_passagens` int(11) NOT NULL AUTO_INCREMENT,,
  `link_pass` varchar(150) NOT NULL,
  `origem_pass` varchar(50) NOT NULL,
  `destino_pass` varchar(50) NOT NULL,
  `valor_pass` decimal(10,0) NOT NULL,
  `dt_inicio_pass` datetime DEFAULT NULL,
  `dt_fim_pass` datetime DEFAULT NULL,
  `internacional_pass` varchar(45) DEFAULT 'Falso' COMMENT 'Nacional - Verdadeiro\nInternacional - Falso',
  `situacao_pass` varchar(15) DEFAULT 'Ativo',
  `fk_usuarios_id_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pontos_turisticos`
--

CREATE TABLE `pontos_turisticos` (
  `id_pontur` int(11) NOT NULL AUTO_INCREMENT,,
  `selecao_pontur` varchar(45) NOT NULL,
  `nome_pontur` varchar(45) NOT NULL,
  `cidade_pontur` varchar(45) NOT NULL,
  `pais_pontur` varchar(45) DEFAULT 'Nacional' COMMENT 'Nacional\nInternacional',
  `imagem1_pontur` varchar(100) DEFAULT NULL,
  `imagem2_pontur` varchar(100) DEFAULT NULL,
  `imagem3_pontur` varchar(100) DEFAULT NULL,
  `fk_usuarios_id_usuarios` int(11) NOT NULL,
  `fk_passagens_id_passagens` int(11) NOT NULL,
  `fk_passagens_usuarios_id_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL AUTO_INCREMENT,,
  `nome_usu` varchar(50) NOT NULL,
  `email_usu` varchar(150) NOT NULL,
  `senha_usu` varchar(50) NOT NULL,
  `perfil_usu` varchar(45) DEFAULT NULL COMMENT 'Cliente\nAdministrador\nEmpresa Aerea',
  `situacao_usu` varchar(12) DEFAULT NULL COMMENT 'Ativo\nInativo\nBloqueado\nBanido'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nome_usu`, `email_usu`, `senha_usu`, `perfil_usu`, `situacao_usu`) VALUES
(1, 'Administrador', 'adm@email.com', '202cb962ac59075b964b07152d234b70', 'Administrador', 'Ativo');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`id_avaliacao`,`fk_usuarios_id_usuarios`,`fk_pontos_turisticos_id_pontur`,`fk_pontos_turisticos_usuarios_id_usuarios`),
  ADD KEY `fk_Comentarios_usuarios1_idx` (`fk_usuarios_id_usuarios`),
  ADD KEY `fk_Comentarios_pontos_turisticos1_idx` (`fk_pontos_turisticos_id_pontur`,`fk_pontos_turisticos_usuarios_id_usuarios`),
  ADD KEY `fk_avaliacao_avaliacao1_idx` (`avaliacao_id_avaliacao`,`avaliacao_usuarios_id_usuarios`,`avaliacao_pontos_turisticos_id_pontur`,`avaliacao_pontos_turisticos_usuarios_id_usuarios`);

--
-- Índices de tabela `passagens`
--
ALTER TABLE `passagens`
  ADD PRIMARY KEY (`id_passagens`,`fk_usuarios_id_usuarios`),
  ADD KEY `fk_passagens_usuarios_idx` (`fk_usuarios_id_usuarios`);

--
-- Índices de tabela `pontos_turisticos`
--
ALTER TABLE `pontos_turisticos`
  ADD PRIMARY KEY (`id_pontur`,`fk_usuarios_id_usuarios`,`fk_passagens_id_passagens`,`fk_passagens_usuarios_id_usuarios`),
  ADD KEY `fk_pontos_turisticos_usuarios1_idx` (`fk_usuarios_id_usuarios`),
  ADD KEY `fk_pontos_turisticos_passagens1_idx` (`fk_passagens_id_passagens`,`fk_passagens_usuarios_id_usuarios`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  MODIFY `id_avaliacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `passagens`
--
ALTER TABLE `passagens`
  MODIFY `id_passagens` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD CONSTRAINT `fk_Comentarios_pontos_turisticos1` FOREIGN KEY (`fk_pontos_turisticos_id_pontur`,`fk_pontos_turisticos_usuarios_id_usuarios`) REFERENCES `pontos_turisticos` (`id_pontur`, `fk_usuarios_id_usuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Comentarios_usuarios1` FOREIGN KEY (`fk_usuarios_id_usuarios`) REFERENCES `usuarios` (`id_usuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_avaliacao_avaliacao1` FOREIGN KEY (`avaliacao_id_avaliacao`,`avaliacao_usuarios_id_usuarios`,`avaliacao_pontos_turisticos_id_pontur`,`avaliacao_pontos_turisticos_usuarios_id_usuarios`) REFERENCES `avaliacao` (`id_avaliacao`, `fk_usuarios_id_usuarios`, `fk_pontos_turisticos_id_pontur`, `fk_pontos_turisticos_usuarios_id_usuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `passagens`
--
ALTER TABLE `passagens`
  ADD CONSTRAINT `fk_passagens_usuarios` FOREIGN KEY (`fk_usuarios_id_usuarios`) REFERENCES `usuarios` (`id_usuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `pontos_turisticos`
--
ALTER TABLE `pontos_turisticos`
  ADD CONSTRAINT `fk_pontos_turisticos_passagens1` FOREIGN KEY (`fk_passagens_id_passagens`,`fk_passagens_usuarios_id_usuarios`) REFERENCES `passagens` (`id_passagens`, `fk_usuarios_id_usuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pontos_turisticos_usuarios1` FOREIGN KEY (`fk_usuarios_id_usuarios`) REFERENCES `usuarios` (`id_usuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
