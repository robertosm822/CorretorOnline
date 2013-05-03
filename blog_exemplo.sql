-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.25a
-- Versão do PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `blog_exemplo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE IF NOT EXISTS `contatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `celular` varchar(15) NOT NULL,
  `mensagem` text NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id`, `nome`, `email`, `telefone`, `celular`, `mensagem`, `created`) VALUES
(1, 'Roberto Soares', 'robertosm822@yahoo.com.br', '(21) 3204-6433', '(21) 8628-4892', 'Segue um exemplo de contato para armazenar-se em banco de dados. Segue um exemplo de contato para armazenar-se em banco de dados. Segue um exemplo de contato para armazenar-se em banco de dados.', '2013-04-30 23:46:27'),
(2, 'Roberto Soares', 'robertosm822@yahoo.com.br', '(21) 3204-6433', '(21) 8628-4892', 'asdfasdfas adafasdfasdf ', '2013-04-30 23:48:08'),
(6, 'Roberto Soares', 'robertosm822', '(21) 3204-6799', '(21) 8628-4892', 'asfasd adfasdfasd', '2013-05-01 00:15:05'),
(17, 'Roberto Soares', 'robertosm822@yahoo.com.br', '(21) 3204-6433', '(21) 8628-4892', 'asdfasdf adfasdf', '2013-05-01 01:02:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `ativo` int(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `ativo`, `created`, `modified`) VALUES
(1, 'Artigo 1', 'Titulo do Primeiro Artigo.', 0, '2013-04-30 16:01:38', NULL),
(2, 'Artigo 02', 'And the post body follows. And the post body follows. And the post body follows.\r\nAnd the post body follows. And the post body follows. And the post body follows.\r\n', 1, '2013-04-30 16:01:38', '2013-04-30 22:42:43'),
(4, 'Quarto Artigo', 'Testando a inserÃ§Ã£o...', 0, '2013-04-30 21:33:22', '2013-04-30 21:33:22'),
(5, 'Configurando os formularios no CakePHP', 'Testado os possiveis parametros padrÃµes para montar um formulario, usando o cakephp.  Aceita inclusive parametros e CSS internamente, do tipo "Style"', 0, '2013-04-30 21:51:50', '2013-04-30 21:51:50'),
(6, 'Sexto Artigo', 'testando artigo ativado', 1, '2013-04-30 21:59:35', '2013-04-30 21:59:35');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
