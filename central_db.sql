-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 25-Nov-2018 às 00:27
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `central_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`cod`, `titulo`, `url`, `descricao`, `status`, `data`) VALUES
(1, 'Serviços', 'servicos', 'Central Soluções Serviços', 1, '2018-11-24 14:35:47'),
(2, 'Blog', 'blog', 'Central Soluções Blog', 1, '2018-11-24 14:36:34'),
(4, 'Clientes', 'clientes', 'Central Soluções Clientes', 1, '2018-11-24 17:56:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagina`
--

DROP TABLE IF EXISTS `pagina`;
CREATE TABLE IF NOT EXISTS `pagina` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `subcategoria` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `status` int(11) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pagina`
--

INSERT INTO `pagina` (`cod`, `titulo`, `categoria`, `subcategoria`, `url`, `descricao`, `status`, `thumb`, `data`) VALUES
(1, 'Soluções que valorizam o seu patrimônio', '2', '4', 'solucoes-que-valorizam-o-seu-patrimonio', '&#60;!DOCTYPE html&#62;&#13;&#10;&#60;html&#62;&#13;&#10;&#60;head&#62;&#13;&#10;&#60;/head&#62;&#13;&#10;&#60;body&#62;&#13;&#10;&#60;p&#62;Estabelecida em Bras&#38;iacute;lia, a Central Solu&#38;ccedil;&#38;otilde;es est&#38;aacute; consolidada no mercado, tendo experi&#38;ecirc;ncia na presta&#38;ccedil;&#38;atilde;o de servi&#38;ccedil;os para &#38;oacute;rg&#38;atilde;os governamentais, grandes condom&#38;iacute;nios e lojas, oferecendo sua expertise no gerenciamento de solu&#38;ccedil;&#38;otilde;es integradas, resultando em seguran&#38;ccedil;a, confian&#38;ccedil;a e conforto a seus&#38;nbsp;clientes.&#60;/p&#62;&#13;&#10;&#60;/body&#62;&#13;&#10;&#60;/html&#62;', 1, 'paginas/2018/11/solucoes-que-valorizam-o-seu-patrimonio-1543080587.jpg', '2018-11-24 16:07:57'),
(2, 'Autorizar que o porteiro tenha distrações na portaria', '2', '4', 'autorizar-que-o-porteiro-tenha-distracoes-na-portaria', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Outro h&aacute;bito corriqueiro dentro de portarias, a maioria em pr&eacute;dios mais antigos, &eacute; o uso de televis&atilde;o ou mesmo r&aacute;dio na portaria. Esse tipo de &ldquo;passatempo&rdquo; pode dificultar a concentra&ccedil;&atilde;o do porteiro no que &eacute; considerado importante: a seguran&ccedil;a do condom&iacute;nio.&lt;/p&gt;\r\n&lt;p&gt;Hoje, com o uso dos smartphone essa quest&atilde;o ganha outras propor&ccedil;&otilde;es. A utiliza&ccedil;&atilde;o de celulares durante o per&iacute;odo de trabalho pode causar erros que v&atilde;o colocar em risco a seguran&ccedil;a dos &nbsp;moradores. Estabelecer limites para o uso do celular e eliminar outras distra&ccedil;&otilde;es &eacute; um passo para manter o porteiro mais atento a sua atribui&ccedil;&atilde;o.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'paginas/2018/11/autorizar-que-o-porteiro-tenha-distracoes-na-portaria.jpg', '2018-11-24 16:24:03'),
(3, 'Residencial Fênix', '4', '5', 'residencial-fenix', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Condom&iacute;nio com 36 unidades residenciais no Sudoeste.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'paginas/2018/11/residencial-fenix.jpg', '2018-11-24 18:00:33'),
(4, 'Residencial Ilha Bela', '4', '5', 'residencial-ilha-bela', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Condom&iacute;nio com 36 unidades residenciais no Sudoeste.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'paginas/2018/11/residencial-ilha-bela.jpg', '2018-11-24 18:17:09'),
(5, 'Residencial San Thiago', '4', '5', 'residencial-san-thiago', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Condom&iacute;nio com 18 unidades residenciais situado no Sudoeste.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'paginas/2018/11/residencial-san-thiago.jpg', '2018-11-24 18:19:21'),
(6, 'Edifício Prime  Excelência Médica', '4', '5', 'edificio-prime-excelencia-medica', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Maior Centro Cl&iacute;nico de Taguatinga com 421 unidades.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'paginas/2018/11/edificio-prime-excelencia-medica.jpg', '2018-11-24 18:20:55'),
(7, 'Residencial Washington Luiz', '4', '5', 'residencial-washington-luiz', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Condom&iacute;nio com 30 unidades residenciais situado em Taguatinga.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'paginas/2018/11/residencial-washington-luiz.jpg', '2018-11-24 18:23:23'),
(8, 'Platinum Office', '4', '5', 'platinum-office', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Localizado ao lado TJDF, com 247 unidades &eacute; refer&ecirc;ncia para escrit&oacute;rios advocat&iacute;cios.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'paginas/2018/11/platinum-office.jpg', '2018-11-24 18:25:19'),
(9, 'BRASFRUT', '4', '5', 'brasfrut', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Empresa especializada em venda de poupas de frutas.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'paginas/2018/11/brasfrut.jpg', '2018-11-24 18:26:49'),
(10, 'GOVERNO FEDERAL', '4', '5', 'governo-federal', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Presta&ccedil;&atilde;o de Servi&ccedil;o ao Governo Federal&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'paginas/2018/11/governo-federal-1543091426.jpg', '2018-11-24 18:30:26'),
(11, 'FNDE', '4', '5', 'fnde', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Fundo Nacional de Desenvolvimento da Educa&ccedil;&atilde;o.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'paginas/2018/11/fnde.jpg', '2018-11-24 18:32:12'),
(12, 'FUNASA', '4', '5', 'funasa', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Funda&ccedil;&atilde;o Nacional da Sa&uacute;de.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'paginas/2018/11/funasa.jpg', '2018-11-24 18:33:54'),
(13, 'SESI', '4', '5', 'sesi', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Servi&ccedil;o Social da Industria.&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 1, 'paginas/2018/11/sesi.jpg', '2018-11-24 18:35:25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `subcategoria`
--

DROP TABLE IF EXISTS `subcategoria`;
CREATE TABLE IF NOT EXISTS `subcategoria` (
  `sub_cod` int(11) NOT NULL AUTO_INCREMENT,
  `sub_titulo` varchar(255) NOT NULL,
  `sub_url` varchar(255) NOT NULL,
  `sub_descricao` varchar(255) NOT NULL,
  `sub_status` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  PRIMARY KEY (`sub_cod`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `subcategoria`
--

INSERT INTO `subcategoria` (`sub_cod`, `sub_titulo`, `sub_url`, `sub_descricao`, `sub_status`, `categoria`) VALUES
(1, 'Condomínio', 'condominio', 'Central Soluções Condomínio', 1, '1'),
(2, 'Terceirização', 'terceirizacao', 'Central Soluções Terceirização', 1, '1'),
(3, 'Contabilidade', 'contabilidade', 'Central Soluções Contabilidade', 1, '1'),
(4, 'Artigos', 'artigos', 'Central Soluções Artigos', 1, '2'),
(5, 'Clientes Reguras', 'clientes-reguras', 'Central Soluções Clientes Regulares', 1, '4');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sliders`
--

DROP TABLE IF EXISTS `tb_sliders`;
CREATE TABLE IF NOT EXISTS `tb_sliders` (
  `slider_cod` int(11) NOT NULL AUTO_INCREMENT,
  `slider_titulo` varchar(255) NOT NULL,
  `slider_status` int(11) NOT NULL,
  `slider_link` varchar(255) NOT NULL,
  `slider_thumb` varchar(255) NOT NULL,
  `slider_tamanho` char(1) NOT NULL,
  PRIMARY KEY (`slider_cod`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_sliders`
--

INSERT INTO `tb_sliders` (`slider_cod`, `slider_titulo`, `slider_status`, `slider_link`, `slider_thumb`, `slider_tamanho`) VALUES
(1, 'Qualidade, soluções de excelência na gestão do seu patrimônio', 1, '#', 'sliders/2018/11/qualidade-solucoes-de-excelencia-na-gestao-do-seu-patrimonio-1543077623.jpg', 'g'),
(2, 'Segurança, soluções que proporcionam tranquilidade e conforto', 1, '#', 'sliders/2018/11/seguranca-solucoes-que-proporcionam-tranquilidade-e-conforto.jpg', 'g'),
(3, 'Proteção soluções que valorizam seu patrimônio', 1, '#', 'sliders/2018/11/protecao-solucoes-que-valorizam-seu-patrimonio-1543077740.jpg', 'g'),
(4, 'Bem-estar, soluções que geram convivência harmoniosa', 1, '#', 'sliders/2018/11/bem-estar-solucoes-que-geram-convivencia-harmoniosa-1543077780.jpg', 'g');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `senha` varchar(255) NOT NULL,
  `nivel` int(1) NOT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `bairro` varchar(180) DEFAULT NULL,
  `cidade` varchar(180) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod`, `usuario`, `email`, `status`, `nome`, `senha`, `nivel`, `cep`, `bairro`, `cidade`, `endereco`, `estado`, `data`) VALUES
(5, 'Junio', 'junio@gmail.com', 1, 'Junio  Santos', '91c7f25f8c2364924cac69dc32ddd55f', 1, '', '', '', '', '', '2018-04-26 12:16:05'),
(6, 'Central Soluções', 'contato@grupocentralsolucoes.com.br', 1, 'Central Soluções', '48f124a7a135917988adc0c0b18f3a3b', 1, '71953-000', 'Areal (Águas Claras)', 'Brasília', 'QS 3', 'DF', '2018-11-24 19:26:54');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
