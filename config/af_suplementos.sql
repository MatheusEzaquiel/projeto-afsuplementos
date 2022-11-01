-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 01-Nov-2022 às 13:30
-- Versão do servidor: 8.0.31-0ubuntu0.20.04.1
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `af_suplementos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int NOT NULL,
  `nome_admin` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email_admin` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `senha_admin` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `foto_admin` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_carrinho`
--

CREATE TABLE `tb_carrinho` (
  `id_pedido` int NOT NULL,
  `cliente_pedido` int NOT NULL,
  `produto_pedido` int NOT NULL,
  `quantidade_pedido` int NOT NULL DEFAULT '1',
  `preco_pedido` decimal(7,2) NOT NULL,
  `estado_pedido` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Extraindo dados da tabela `tb_carrinho`
--

INSERT INTO `tb_carrinho` (`id_pedido`, `cliente_pedido`, `produto_pedido`, `quantidade_pedido`, `preco_pedido`, `estado_pedido`) VALUES
(104, 4, 52, 11, '100.00', 0),
(105, 4, 54, 13, '0.00', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `id_cliente` int NOT NULL,
  `nome_cliente` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email_cliente` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `senha_cliente` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `foto_cliente` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cidade_cliente` varchar(60) COLLATE utf8mb3_unicode_ci NOT NULL,
  `endereco_cliente` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `telefone_cliente` varchar(16) COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`id_cliente`, `nome_cliente`, `email_cliente`, `senha_cliente`, `foto_cliente`, `cidade_cliente`, `endereco_cliente`, `telefone_cliente`) VALUES
(1, 'Lulian Costa', 'luliancs@gmail.com', '123', 'foto-lulian.jpg', '', '', ''),
(2, 'Renata Cristina', 'rntcris@gmail.com', '000', 'foto-renata-cristina.jpg', '', '', ''),
(3, 'Thainá Moreira', 'thainá_moreira@outlook.com', '0123456789', 'foto-thiana-moreira.jpg', '', '', ''),
(4, 'Larissa Chaves', 'larissachaves@outlook.com', 'MTIzNDU2Nzg5', '63128765ef709.jpeg', 'pacajus', 'nº500, rua das flores', '85996578821'),
(5, 'Renata Vasconcelos', 'renatavs32@gmail.com', 'cmVuYXRh', '631288978d483.png', 'horizonte', 'nº200, rua dos esmeros', '85991528675'),
(6, 'Bruno Carvalho', 'brcarvalho@outlook.com', 'dGVzdGU=', '6312891e650e1.jpeg', 'chorozinho', 'nº520, rua das esmeraldas', '85992582649'),
(7, 'Tatiele dos Santos Pereira', 'tatipereiras@gmail.com', 'dGVzdGU=', '631289afeb810.png', 'chorozinho', 'nº320, rua da luz', '85994521644'),
(8, 'Karine dos Santos', 'ksantosbr@gmail.com', 'MTIz', '63128a1b74c04.jpeg', 'horizonte', 'n°222, rua da luz', '85992653785'),
(9, 'Karine dos Santos', 'ksantosbr@gmail.com', '', '63128b4537453.jpeg', 'horizonte', 'n°222, rua da luz', '85992653785'),
(10, 'Karen Martins', 'karenm@outlook.com', 'MTIz', '6348bbb457fef.jpg', 'chorozinho', 'rua 3, bairro 0', '85996554235');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pedido`
--

CREATE TABLE `tb_pedido` (
  `id_pedido` int NOT NULL,
  `fk_cliente_pedido` int NOT NULL,
  `fk_produto_pedido` int NOT NULL,
  `quantidade_produto` int NOT NULL,
  `preco_produto` float NOT NULL,
  `total_pedido` float NOT NULL,
  `data_pedido` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Extraindo dados da tabela `tb_pedido`
--

INSERT INTO `tb_pedido` (`id_pedido`, `fk_cliente_pedido`, `fk_produto_pedido`, `quantidade_produto`, `preco_produto`, `total_pedido`, `data_pedido`) VALUES
(52, 4, 3, 2, 202, 404, '2022-10-27 03:00:00'),
(53, 4, 3, 1, 202, 202, '2022-10-27 03:00:00'),
(54, 4, 3, 1, 202, 202, '2022-10-27 03:00:00'),
(55, 4, 51, 5, 65, 325, '2022-10-27 03:00:00'),
(56, 4, 52, 10, 118, 1180, '2022-10-27 03:00:00'),
(57, 4, 51, 5, 65, 325, '2022-10-27 03:00:00'),
(58, 4, 52, 10, 118, 1180, '2022-10-27 03:00:00'),
(59, 4, 53, 11, 5.5, 60.5, '2022-10-27 03:00:00'),
(60, 4, 62, 7, 14, 98, '2022-10-27 03:00:00'),
(61, 4, 54, 3, 36, 108, '2022-10-27 03:00:00'),
(62, 4, 52, 2, 118, 236, '2022-10-28 03:00:00'),
(63, 4, 52, 10, 118, 1180, '2022-10-28 03:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produto`
--

CREATE TABLE `tb_produto` (
  `id_produto` int NOT NULL,
  `tipo_produto` int NOT NULL,
  `marca_produto` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_produto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tamanho_produto` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao_produto` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco_compra_produto` decimal(7,2) NOT NULL,
  `preco_venda_produto` decimal(7,2) NOT NULL,
  `quantidade_produto` int NOT NULL,
  `validade_produto` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `foto_produto` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promocao_produto` int DEFAULT '0',
  `disponibilidade_produto` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_produto`
--

INSERT INTO `tb_produto` (`id_produto`, `tipo_produto`, `marca_produto`, `nome_produto`, `tamanho_produto`, `descricao_produto`, `preco_compra_produto`, `preco_venda_produto`, `quantidade_produto`, `validade_produto`, `foto_produto`, `promocao_produto`, `disponibilidade_produto`) VALUES
(3, 0, 'marca A', 'Produto A', '600g', 'Descrição do produto A.', '179.99', '200.00', 15, '2022-12-31 03:00:00', '635b085c9b485.jpg', 0, 1),
(26, 3, 'Teste', 'Teste', '350g', 'Descrição teste', '77.00', '89.00', 10, '0000-00-00 00:00:00', '', 0, 0),
(50, 1, 'Max Titanium', 'Creatina ', '450g', 'Uma dose de creatina Max para aumentar sua energia nos treinos diários.', '65.00', '90.00', 30, '0000-00-00 00:00:00', '', 0, 0),
(51, 0, 'Scientifica', 'Ômega 1000', '180g', 'Contém 35 pílulas na embalagem.', '48.00', '65.00', 25, '2022-11-15 03:00:00', '634457d2d574b.jpeg', 0, 1),
(52, 0, 'Raio', 'Whey Protein', '3kg', 'Whey protein Raio...', '80.00', '118.00', 18, '2023-01-25 03:00:00', '634458cbedd23.jpg', 0, 1),
(53, 4, 'Nutry plus+', 'Barra de cereal c/ banana', '36g', 'Uma saborosa barrinha.', '3.00', '5.50', 15, '0000-00-00 00:00:00', '6344658239311.jpg', 5, 1),
(54, 1, 'Darkness', 'Glutamina', '320g', ' Glutamina Descrição...', '27.00', '36.00', 25, '0000-00-00 00:00:00', '6346c88490cf4.jpeg', 1, 1),
(62, 2, 'Aloha', 'bebida FourX', '600ml', 'Uma bebida lotada de cálcio e diversos minerais para fortalecer seu corpo e espírito.', '7.00', '14.00', 20, '0000-00-00 00:00:00', '63475db465672.jpg', 0, 1),
(63, 2, 'marca teste', 'teste II', '200g', ' teste do projeto', '120.00', '210.00', 20, '0000-00-00 00:00:00', 'ok', NULL, 1),
(68, 1, 'aaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaa', '2kg', ' aaaaaaaaaaaaaaaaaa', '2.00', '3.00', 2, '2023-01-31 03:00:00', '635c0c4d26065.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produto2`
--

CREATE TABLE `tb_produto2` (
  `id_produto` int NOT NULL,
  `tipo_produto` int NOT NULL,
  `marca_produto` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `nome_produto` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `tamanho_produto` varchar(30) COLLATE utf8mb3_unicode_ci NOT NULL,
  `descricao_produto` varchar(200) COLLATE utf8mb3_unicode_ci NOT NULL,
  `preco_compra_produto` decimal(7,2) NOT NULL,
  `preco_venda_produto` decimal(7,2) NOT NULL,
  `quantidade_produto` int NOT NULL,
  `validade_produto` date NOT NULL,
  `foto_produto` varchar(200) COLLATE utf8mb3_unicode_ci NOT NULL,
  `promocao_produto` int NOT NULL DEFAULT '0',
  `disponibilidade_produto` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Extraindo dados da tabela `tb_produto2`
--

INSERT INTO `tb_produto2` (`id_produto`, `tipo_produto`, `marca_produto`, `nome_produto`, `tamanho_produto`, `descricao_produto`, `preco_compra_produto`, `preco_venda_produto`, `quantidade_produto`, `validade_produto`, `foto_produto`, `promocao_produto`, `disponibilidade_produto`) VALUES
(1, 1, 'marca teste', 'nome teste', '500g', 'descrição de produto inexistente, teste', '80.00', '109.99', 15, '2023-01-01', '', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_promocao`
--

CREATE TABLE `tb_promocao` (
  `id_promocao` int NOT NULL,
  `nome_promocao` int NOT NULL,
  `descricao_promocao` int NOT NULL,
  `valor_promocao` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `teste_date`
--

CREATE TABLE `teste_date` (
  `id_teste` int NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Extraindo dados da tabela `teste_date`
--

INSERT INTO `teste_date` (`id_teste`, `data`) VALUES
(1, '2022-10-15'),
(2, '2022-10-15');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Índices para tabela `tb_carrinho`
--
ALTER TABLE `tb_carrinho`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `prodt_pedido_idx` (`cliente_pedido`);

--
-- Índices para tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `tb_pedido`
--
ALTER TABLE `tb_pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Índices para tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `tb_produto2`
--
ALTER TABLE `tb_produto2`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `tb_promocao`
--
ALTER TABLE `tb_promocao`
  ADD PRIMARY KEY (`id_promocao`);

--
-- Índices para tabela `teste_date`
--
ALTER TABLE `teste_date`
  ADD PRIMARY KEY (`id_teste`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_carrinho`
--
ALTER TABLE `tb_carrinho`
  MODIFY `id_pedido` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `id_cliente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tb_pedido`
--
ALTER TABLE `tb_pedido`
  MODIFY `id_pedido` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  MODIFY `id_produto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de tabela `tb_produto2`
--
ALTER TABLE `tb_produto2`
  MODIFY `id_produto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_promocao`
--
ALTER TABLE `tb_promocao`
  MODIFY `id_promocao` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `teste_date`
--
ALTER TABLE `teste_date`
  MODIFY `id_teste` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_carrinho`
--
ALTER TABLE `tb_carrinho`
  ADD CONSTRAINT `id_cliente` FOREIGN KEY (`cliente_pedido`) REFERENCES `tb_cliente` (`id_cliente`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
