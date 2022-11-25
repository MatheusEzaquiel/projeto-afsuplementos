-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Nov-2022 às 02:40
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `id_admin` int(11) NOT NULL,
  `email_admin` varchar(150) NOT NULL,
  `senha_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `email_admin`, `senha_admin`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(150) NOT NULL,
  `email_cliente` varchar(150) NOT NULL,
  `senha_cliente` varchar(100) NOT NULL,
  `telefone_cliente` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`id_cliente`, `nome_cliente`, `email_cliente`, `senha_cliente`, `telefone_cliente`) VALUES
(1, 'Matheus', 'matheus@gmail.com', 'MTIz', '85992653785'),
(2, 'teste', 'teste@gmail.com', 'MTIz', '85991528675'),
(3, 'Larissa Chaves', 'larissa@outlook.com', 'MTIz', '85992584517'),
(4, 'Manuel Lucas', '2020infor32@gmail.com', 'MjAyMA==', '85996445872'),
(5, 'a', 'a@gmail.com', 'MTI=', '5555555555555');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pedido`
--

CREATE TABLE `tb_pedido` (
  `id_pedido` int(11) NOT NULL,
  `fk_cliente_pedido` int(11) NOT NULL,
  `fk_produto_pedido` int(11) NOT NULL,
  `quantidade_produto_pedido` int(11) NOT NULL,
  `preco_produto` float NOT NULL,
  `total_pedido` float NOT NULL,
  `data_pedido` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado_pedido` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_pedido`
--

INSERT INTO `tb_pedido` (`id_pedido`, `fk_cliente_pedido`, `fk_produto_pedido`, `quantidade_produto_pedido`, `preco_produto`, `total_pedido`, `data_pedido`, `estado_pedido`) VALUES
(3, 2, 7, 3, 14, 42, '2022-11-22 00:07:43', 2),
(4, 2, 7, 2, 14, 28, '2022-11-22 00:09:31', 1),
(5, 1, 2, 2, 90, 180, '2022-11-22 00:10:24', 1),
(6, 1, 5, 1, 5.5, 5.5, '2022-11-22 00:10:24', 2),
(7, 1, 7, 5, 14, 70, '2022-11-22 00:27:42', 1),
(8, 1, 3, 10, 65, 650, '2022-11-22 00:28:15', 1),
(9, 1, 6, 6, 36, 216, '2022-11-22 00:28:51', 2),
(10, 4, 2, 1, 90, 90, '2022-11-23 22:21:25', 0),
(11, 4, 1, 3, 65.75, 197.25, '2022-11-23 22:21:25', 0),
(12, 5, 7, 2, 14, 28, '2022-11-24 21:12:21', 0),
(13, 2, 7, 21, 14, 294, '2022-11-25 00:52:38', 0),
(14, 2, 6, 1, 36, 36, '2022-11-25 00:52:38', 0),
(15, 2, 1, 1, 65.75, 65.75, '2022-11-25 00:52:38', 0),
(16, 2, 3, 3, 65, 195, '2022-11-25 01:33:44', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produto`
--

CREATE TABLE `tb_produto` (
  `id_produto` int(11) NOT NULL,
  `tipo_produto` int(11) NOT NULL,
  `marca_produto` varchar(100) NOT NULL,
  `nome_produto` varchar(100) NOT NULL,
  `tamanho_produto` varchar(30) NOT NULL,
  `descricao_produto` varchar(200) NOT NULL,
  `preco_compra_produto` decimal(7,2) NOT NULL,
  `preco_venda_produto` decimal(7,2) NOT NULL,
  `preco_promocao_produto` decimal(7,2) NOT NULL,
  `quantidade_produto` int(11) NOT NULL,
  `validade_produto` date NOT NULL,
  `foto_produto` varchar(200) NOT NULL,
  `promocao_produto` int(11) NOT NULL DEFAULT 0,
  `preco_promocao` decimal(7,2) DEFAULT NULL,
  `disponibilidade_produto` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_produto`
--

INSERT INTO `tb_produto` (`id_produto`, `tipo_produto`, `marca_produto`, `nome_produto`, `tamanho_produto`, `descricao_produto`, `preco_compra_produto`, `preco_venda_produto`, `preco_promocao_produto`, `quantidade_produto`, `validade_produto`, `foto_produto`, `promocao_produto`, `preco_promocao`, `disponibilidade_produto`) VALUES
(1, 3, 'Produtos Genéricos', 'Produto B', '600g', 'Produtos Genéricos', '45.15', '65.75', '0.00', 52, '2022-12-01', '637d89f0c39a1.png', 0, NULL, 1),
(2, 1, 'Max Titanium', 'Creatina ', '450g', 'Uma dose de creatina Max para aumentar sua energia nos treinos diários.', '65.00', '90.00', '0.00', 50, '2022-12-03', '637d8b18b22e1.png', 0, NULL, 1),
(3, 3, 'Scientifica', 'Ômega 1000', '180g', 'Contém 35 pílulas na embalagem.', '48.00', '65.00', '60.50', 50, '2024-02-25', '637d8872d788f.jpeg', 1, NULL, 1),
(4, 1, 'Raio', 'Whey Protein', '3kg', 'Whey protein Raio...', '80.00', '118.00', '0.00', 50, '2023-01-01', '634458cbedd23.jpg', 0, NULL, 1),
(5, 4, 'Nutry plus+', 'Barra de cereal c/ banana', '36g', 'Uma saborosa barrinha.', '3.00', '5.50', '0.00', 50, '2023-06-19', '6344658239311.jpg', 0, NULL, 1),
(6, 0, 'Darkness', 'Glutamina', '320g', ' Glutamina Descrição...', '27.00', '36.00', '0.00', 50, '2022-12-10', '6346c88490cf4.jpeg', 0, NULL, 1),
(7, 2, 'Linea', 'WheyShake Chocolate', '600ml', 'Uma bebida lotada de cálcio e diversos minerais para fortalecer seu corpo e espírito.', '7.00', '14.00', '9.00', 50, '2023-03-30', '636155c8298ed.jpeg', 1, NULL, 1),
(8, 3, 'Scientifica', 'Ômega 1000', '180g', 'Contém 35 pílulas na embalagem.', '48.00', '65.00', '9.75', 3, '2024-02-25', '634457d2d574b.jpeg', 0, NULL, 0),
(66, 0, 'Sync', 'blusa padrão', 'M', 'Blusa preta básica', '6.50', '9.75', '9.75', 12, '2022-11-20', '637d89777b6df.jpg', 0, NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_promocao`
--

CREATE TABLE `tb_promocao` (
  `id_promocao` int(11) NOT NULL,
  `nome_promocao` varchar(200) NOT NULL,
  `valor_promocao` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_promocao`
--

INSERT INTO `tb_promocao` (`id_promocao`, `nome_promocao`, `valor_promocao`) VALUES
(1, '10% de desconto', '0.10'),
(2, '15% de desconto', '0.15'),
(3, '20% de desconto', '0.20'),
(4, '25% de desconto', '0.25'),
(5, '30% de desconto', '0.30'),
(6, '40% de desconto', '0.40'),
(7, '50% de desconto', '0.50');

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_pedido`
--
ALTER TABLE `tb_pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de tabela `tb_promocao`
--
ALTER TABLE `tb_promocao`
  MODIFY `id_promocao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
