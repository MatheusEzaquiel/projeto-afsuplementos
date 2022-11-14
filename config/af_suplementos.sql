-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 14-Nov-2022 às 20:39
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
  `senha_admin` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Extraindo dados da tabela `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nome_admin`, `senha_admin`) VALUES
(1, 'admin', 'admin');

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
  `cidade_cliente` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `endereco_cliente` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `telefone_cliente` varchar(16) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
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
  `quantidade_produto_pedido` int NOT NULL,
  `preco_produto` float NOT NULL,
  `total_pedido` float NOT NULL,
  `data_pedido` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado_pedido` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Extraindo dados da tabela `tb_pedido`
--

INSERT INTO `tb_pedido` (`id_pedido`, `fk_cliente_pedido`, `fk_produto_pedido`, `quantidade_produto_pedido`, `preco_produto`, `total_pedido`, `data_pedido`, `estado_pedido`) VALUES
(1, 4, 1, 3, 65.75, 197.25, '2022-11-14 18:56:56', 1),
(2, 4, 2, 2, 90, 180, '2022-11-14 18:56:57', 1),
(3, 4, 6, 2, 36, 72, '2022-11-14 19:00:57', 2),
(4, 4, 7, 6, 14, 84, '2022-11-14 19:04:25', 2),
(5, 4, 5, 3, 5.5, 16.5, '2022-11-14 19:05:27', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produto`
--

CREATE TABLE `tb_produto` (
  `id_produto` int NOT NULL,
  `tipo_produto` int NOT NULL,
  `marca_produto` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `nome_produto` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `tamanho_produto` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `descricao_produto` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `preco_compra_produto` decimal(7,2) NOT NULL,
  `preco_venda_produto` decimal(7,2) NOT NULL,
  `quantidade_produto` int NOT NULL,
  `validade_produto` date NOT NULL,
  `foto_produto` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `promocao_produto` int NOT NULL DEFAULT '0',
  `disponibilidade_produto` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Extraindo dados da tabela `tb_produto`
--

INSERT INTO `tb_produto` (`id_produto`, `tipo_produto`, `marca_produto`, `nome_produto`, `tamanho_produto`, `descricao_produto`, `preco_compra_produto`, `preco_venda_produto`, `quantidade_produto`, `validade_produto`, `foto_produto`, `promocao_produto`, `disponibilidade_produto`) VALUES
(1, 3, 'Produtos Genéricos', 'Produto B', '600g', 'Produtos Genéricos ', '45.25', '65.75', 50, '2022-05-01', '637289be0e308.jpg', 0, 1),
(2, 1, 'Max Titanium', 'Creatina ', '450g', 'Uma dose de creatina Max para aumentar sua energia nos treinos diários.', '65.00', '90.00', 50, '2023-01-26', '6365cdf0d3b6d.jpeg', 0, 1),
(3, 3, 'Scientifica', 'Ômega 1000', '180g', 'Contém 35 pílulas na embalagem.', '48.00', '65.00', 50, '2024-02-25', '634457d2d574b.jpeg', 0, 1),
(4, 1, 'Raio', 'Whey Protein', '3kg', 'Whey protein Raio...', '80.00', '118.00', 50, '2023-01-01', '634458cbedd23.jpg', 3, 1),
(5, 4, 'Nutry plus+', 'Barra de cereal c/ banana', '36g', 'Uma saborosa barrinha.', '3.00', '5.50', 50, '2023-06-19', '6344658239311.jpg', 5, 1),
(6, 0, 'Darkness', 'Glutamina', '320g', ' Glutamina Descrição...', '27.00', '36.00', 50, '2022-12-10', '6346c88490cf4.jpeg', 1, 1),
(7, 2, 'Linea', 'WheyShake Chocolate', '600ml', 'Uma bebida lotada de cálcio e diversos minerais para fortalecer seu corpo e espírito.', '7.00', '14.00', 50, '2023-03-30', '636155c8298ed.jpeg', 2, 1),
(65, 4, 'Produtos Genéricos', 'Produto A', '100g', ' Produto Genérico A', '6.50', '9.75', 50, '2022-09-15', '63728e05bc5d6.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_promocao`
--

CREATE TABLE `tb_promocao` (
  `id_promocao` int NOT NULL,
  `nome_promocao` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `valor_promocao` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Extraindo dados da tabela `tb_promocao`
--

INSERT INTO `tb_promocao` (`id_promocao`, `nome_promocao`, `valor_promocao`) VALUES
(1, '10% de desconto', '0.10'),
(2, '20% de desconto', '0.20'),
(3, '30% de desconto', '0.30');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

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
-- Índices para tabela `tb_promocao`
--
ALTER TABLE `tb_promocao`
  ADD PRIMARY KEY (`id_promocao`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `id_cliente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tb_pedido`
--
ALTER TABLE `tb_pedido`
  MODIFY `id_pedido` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  MODIFY `id_produto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de tabela `tb_promocao`
--
ALTER TABLE `tb_promocao`
  MODIFY `id_promocao` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
