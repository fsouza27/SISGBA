SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "-03:00";
--
-- Estrutura da tabela `tbl_professores`
--

CREATE TABLE IF NOT EXISTS `tbl_professores` (
   `id` int(12) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `rf` int(12) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Populando a tabela tbl_professores
--

INSERT INTO `tbl_professores` (`nome`, `rf`, `email`, `senha`) VALUES
('PAULO SÉRGIO', '36363636', 'paulo@fatec.org.br', 1234),
('ANA PAULA', '87973757', 'anapaula@fatec.org.br', 1234);



