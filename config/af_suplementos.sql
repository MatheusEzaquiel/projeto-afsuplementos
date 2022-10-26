-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 13-Out-2022 às 22:39
-- Versão do servidor: 8.0.30-0ubuntu0.20.04.2
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
(99, 4, 52, 6, '708.00', 0);

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
-- Estrutura da tabela `tb_produto`
--

CREATE TABLE `tb_produto` (
  `id_produto` int NOT NULL,
  `tipo_produto` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca_produto` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_produto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tamanho_produto` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao_produto` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco_compra_produto` decimal(7,2) NOT NULL,
  `preco_venda_produto` decimal(7,2) NOT NULL,
  `quantidade_produto` int NOT NULL,
  `foto_produto` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promocao_produto` int DEFAULT NULL,
  `disponibilidade_produto` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tb_produto`
--

INSERT INTO `tb_produto` (`id_produto`, `tipo_produto`, `marca_produto`, `nome_produto`, `tamanho_produto`, `descricao_produto`, `preco_compra_produto`, `preco_venda_produto`, `quantidade_produto`, `foto_produto`, `promocao_produto`, `disponibilidade_produto`) VALUES
(3, 'grao', 'marca A', 'Produto A', '600g', 'Descrição do produto A.', '1.00', '2.00', 60, '', 0, 0),
(26, 'pilula', 'Teste', 'Teste', '350g', 'Descrição teste', '77.00', '89.00', 10, '', 0, 0),
(50, 'po', 'Max Titanium', 'Creatina ', '450g', 'Uma dose de creatina Max para aumentar sua energia nos treinos diários.', '65.00', '90.00', 30, '', 0, 0),
(51, 'pilula', 'Scientifica', 'Ômega 1000', '180g', 'Contém 35 pílulas na embalagem.', '48.00', '65.00', 35, '634457d2d574b.jpeg', 0, 1),
(52, 'po', 'Raio', 'Whey Protein', '3kg', 'Whey protein Raio...', '80.00', '118.00', 42, '634458cbedd23.jpg', 0, 1),
(53, 'pilula', 'Nutry plus+', 'Barra de cereal c/ banana', '36g', 'Uma saborosa barrinha.', '3.00', '5.50', 46, '6344658239311.jpg', 5, 1),
(54, 'po', 'Darkness', 'Glutamina', '320g', ' Glutamina Descrição...', '27.00', '36.00', 10, '6346c88490cf4.jpeg', 1, 1),
(55, 'po', 'asfds', 'asfdfsa', '44', 'afdsfasdfasdfsf ', '34.00', '43.00', 2, '', 0, 0),
(56, 'po', 'gfdsgfdsgdfsg', 'retrfgfdgsdf', '55g', ' sdfdsfdsfsdfsdf', '34.00', '44.00', 4, '', 0, 0),
(57, 'po', 'fdsafsdfasd', 'fsdafasdfsdaf', '45', ' fdsafdsfsdfasadf', '44.00', '55.00', 1, '', 0, 0),
(58, 'po', 'fdsafsdfasd', 'fsdafasdfsdaf', '45', ' fdsafdsfsdfasadf', '44.00', '55.00', 1, '', 0, 0),
(59, 'po', 'fdsfsdafsa', 'fdsafasdf', '250g', ' dfsfdsfgfdfgdga', '45.00', '445.00', 1, '', 0, 0),
(60, 'grao', 'fdsafsd', 'fddsafdsfds', '3', ' dsffasfaaaaaaaaa', '4.00', '44.00', 4, '', 0, 0),
(61, 'po', 'a', 'a', '4', ' afsdfas', '3.00', '5.00', 1, '', 0, 0),
(62, 'bebida', 'Aloha', 'bebida FourX', '600ml', 'Uma bebida lotada de cálcio e diversos minerais para fortalecer seu corpo e espírito.', '7.00', '14.00', 20, '63475db465672.jpg', 0, 1);

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
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_carrinho`
--
ALTER TABLE `tb_carrinho`
  MODIFY `id_pedido` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `id_cliente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  MODIFY `id_produto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de tabela `tb_promocao`
--
ALTER TABLE `tb_promocao`
  MODIFY `id_promocao` int NOT NULL AUTO_INCREMENT;

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
