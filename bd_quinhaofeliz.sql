-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18/02/2025 às 20:58
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_quinhaofeliz`
--

DELIMITER $$
--
-- Procedimentos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `pc_atualiza_pedido` (IN `pn_produtoID` INT, IN `pn_quantidade` INT)   begin
	/*
    data: 06/02/2024
    autor: Kauê Gabriel
    objetivo: atualizar o a quantidade de produtos conforme as vendas
    */

update produto
	set prod_qtd_estoque =
		case
			when prod_qtd_estoque - pn_quantidade < 0 then 0
            else prod_qtd_estoque - pn_quantidade
		end
	where prod_id = pn_produtoID;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `pc_registrar_pedido` (IN `pn_clienteID` INT, IN `pn_produtoID` INT, IN `pn_quantidade` INT, OUT `ps_mensagem` VARCHAR(100))   begin
	/*
    data: 06/02/2024
    autor: Kauê Gabriel
    objetivo: registrar os pedidos requisitados pelos clientes no sistema
    */
-- Declarção de Variáveis
declare vn_produto_preco double(10, 2);
declare vn_qtd_estoque int;
declare vs_nome_cliente varchar(100);

-- Consulta nas tabelas --
-- Adquiri o preço e a quantidade no estoque disponivel --
select 
	prod_preco, prod_qtd_estoque
into vn_produto_preco, vn_qtd_estoque
from produto
where prod_id = pn_produtoID;

-- busca o nome do cliente na tabela --
select 
	clie_nome into vs_nome_cliente
from cliente where clie_id = pn_clienteID;

-- Verifica se ainda tem a quantidade do produto no estoque --
if vn_qtd_estoque >= pn_quantidade then
	insert into pedido(pedi_dt_pedido, pedi_status, clie_id, prod_id)
	values (now(), 'Concluída', pn_clienteID, pn_produtoID);

	-- Faz uma atualização da quatidade de produtos no estoque
	update produto
	set prod_qtd_estoque = prod_qtd_estoque - pn_quantidade
	where prod_id = pn_produtoID;

	set ps_mensagem = concat("Pedido Solicita pelo: ", vs_nome_cliente);
else
	set ps_mensagem = "Estoque insuficiente para realizar o pedido!";
end if;

end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `pc_vendas_relatorio` (IN `pn_dt_inicio` DATE, IN `pn_dt_fim` DATE)   begin
	/*
    data: 18/02/2025
    autor: Kauê Gabriel
    objetivo: Busca na tabela as vendas feitas em um horário específico
    */
-- Validações
select
	v.vend_id as "Venda ID",
    v.vend_dt_hora as "Data e Hora das Vendas",
    v.vend_total as "Vendas Totais",
    c.clie_nome as "Nome do Cliente",
    p.pedi_status as "Status do Pedido",
    pr.prod_id as "Produto ID",
    pr.prod_nome as "Nome do Produto",
    pp.pepr_qtd_total as "Qtd Total Vendida",
    pp.pepr_vlr_total as "Vlr Total Produto"
from venda v
inner join pedido p on v.pedi_id = p.pedi_id
inner join cliente c on p.clie_id = c.clie_id
inner join produto_pedido pp on p.pedi_id = pp.pedi_id
inner join produto pr on pr.prod_id = pp.prod_id
where v.vend_dt_hora between pn_dt_inicio and pn_dt_fim
order by v.vend_dt_hora desc;

end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `administrador`
--

CREATE TABLE `administrador` (
  `admi_id` int(11) NOT NULL,
  `admi_nome` varchar(100) NOT NULL,
  `admi_email` varchar(60) NOT NULL,
  `admi_senha` varchar(50) NOT NULL,
  `admi_login` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `cate_id` int(11) NOT NULL,
  `cate_nome` varchar(80) NOT NULL,
  `cate_descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`cate_id`, `cate_nome`, `cate_descricao`) VALUES
(1, 'Salgados', ''),
(2, 'Doces', ''),
(3, 'Bebidas', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `clie_id` int(11) NOT NULL,
  `clie_nome` varchar(100) NOT NULL,
  `clie_email` varchar(100) NOT NULL,
  `clie_login` varchar(100) NOT NULL,
  `clie_senha` varchar(50) NOT NULL,
  `clie_matricula` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `forma_pgto_venda`
--

CREATE TABLE `forma_pgto_venda` (
  `vend_id` int(11) NOT NULL,
  `fopa_id` int(11) NOT NULL,
  `fpve_valor` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `form_pagamento`
--

CREATE TABLE `form_pagamento` (
  `fopa_id` int(11) NOT NULL,
  `fopa_pagamento` varchar(50) NOT NULL,
  `vend_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `historico`
--

CREATE TABLE `historico` (
  `hist_id` int(11) NOT NULL,
  `hist_dt_hora` datetime NOT NULL,
  `pedi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido`
--

CREATE TABLE `pedido` (
  `pedi_id` int(11) NOT NULL,
  `pedi_dt_hora` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pedi_status` varchar(100) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `pedi_qtd` int(11) NOT NULL,
  `clie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `prod_id` int(11) NOT NULL,
  `prod_nome` varchar(100) NOT NULL,
  `prod_preco` decimal(10,2) NOT NULL,
  `prod_ descricao` varchar(100) NOT NULL,
  `prod_qtd_estoque` int(11) NOT NULL,
  `pedi_id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`prod_id`, `prod_nome`, `prod_preco`, `prod_ descricao`, `prod_qtd_estoque`, `pedi_id`, `cate_id`) VALUES
(1, 'Bolo de Chocolate', 9.99, '', 0, 2, 2),
(2, 'Bolo de Chocolate', 9.99, '', 0, 2, 2);

--
-- Acionadores `produto`
--
DELIMITER $$
CREATE TRIGGER `tg_produto_pre_ins` AFTER INSERT ON `produto` FOR EACH ROW begin
/*
    data: 10/02/2025
    autor: Kauê Gabriel
    objetivo: Uma trigger que faz atualizações do estoque em produtos
*/
-- Definindo o estoque inicial
	if new.prod_qtd_estoque is null then
		update produto
		set prod_qtd_estoque = 1
		where prod_id = new.prod_id;
	end if;

-- se ainda não existe um pedido solicitado, define um tipo null
	if new.pedi_id is null then
		update produto
		set pedi_id = null
		where prod_id = new.prod_id;
	end if;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_pedido`
--

CREATE TABLE `produto_pedido` (
  `prod_id` int(11) NOT NULL,
  `pedi_id` int(11) NOT NULL,
  `pepr_vlr_total` decimal(10,2) NOT NULL,
  `pepr_dt_hora` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pepr_qtd_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `venda`
--

CREATE TABLE `venda` (
  `vend_id` int(11) NOT NULL,
  `vend_dt_hora` datetime NOT NULL,
  `vend_total` decimal(10,2) NOT NULL,
  `pedi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`admi_id`);

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cate_id`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`clie_id`);

--
-- Índices de tabela `forma_pgto_venda`
--
ALTER TABLE `forma_pgto_venda`
  ADD PRIMARY KEY (`vend_id`,`fopa_id`),
  ADD KEY `fk_forma_pgto_venda_FORM_PAGAMENTO1_idx` (`fopa_id`);

--
-- Índices de tabela `form_pagamento`
--
ALTER TABLE `form_pagamento`
  ADD PRIMARY KEY (`fopa_id`);

--
-- Índices de tabela `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`hist_id`),
  ADD KEY `fk_HISTORICO_PEDIDO1_idx` (`pedi_id`);

--
-- Índices de tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`pedi_id`),
  ADD KEY `fk_PEDIDO_CLIENTE1_idx` (`clie_id`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `fk_PRODUTO_CATEGORIA1_idx` (`cate_id`);

--
-- Índices de tabela `produto_pedido`
--
ALTER TABLE `produto_pedido`
  ADD PRIMARY KEY (`prod_id`,`pedi_id`),
  ADD KEY `fk_produto_pedido_PEDIDO1_idx` (`pedi_id`);

--
-- Índices de tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`vend_id`),
  ADD KEY `fk_VENDA_PEDIDO1_idx` (`pedi_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `admi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `clie_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `form_pagamento`
--
ALTER TABLE `form_pagamento`
  MODIFY `fopa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `historico`
--
ALTER TABLE `historico`
  MODIFY `hist_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `pedi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `vend_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `forma_pgto_venda`
--
ALTER TABLE `forma_pgto_venda`
  ADD CONSTRAINT `fk_forma_pgto_venda_FORM_PAGAMENTO1` FOREIGN KEY (`fopa_id`) REFERENCES `form_pagamento` (`fopa_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_forma_pgto_venda_VENDA1` FOREIGN KEY (`vend_id`) REFERENCES `venda` (`vend_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `historico`
--
ALTER TABLE `historico`
  ADD CONSTRAINT `fk_HISTORICO_PEDIDO1` FOREIGN KEY (`pedi_id`) REFERENCES `pedido` (`pedi_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_PEDIDO_CLIENTE1` FOREIGN KEY (`clie_id`) REFERENCES `cliente` (`clie_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_PRODUTO_CATEGORIA1` FOREIGN KEY (`cate_id`) REFERENCES `categoria` (`cate_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `produto_pedido`
--
ALTER TABLE `produto_pedido`
  ADD CONSTRAINT `fk_produto_pedido_PEDIDO1` FOREIGN KEY (`pedi_id`) REFERENCES `pedido` (`pedi_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produto_pedido_PRODUTO1` FOREIGN KEY (`prod_id`) REFERENCES `produto` (`prod_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `fk_VENDA_PEDIDO1` FOREIGN KEY (`pedi_id`) REFERENCES `pedido` (`pedi_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
