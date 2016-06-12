CREATE TABLE `resultado` (
`id_luta` int(10) NOT NULL AUTO_INCREMENT,
`vencedor` varchar(25) NOT NULL,
`perdedor` varchar(25) NOT NULL,
`valor` double NOT NULL,
PRIMARY KEY (`id_luta`)
) ENGINE=MyISAM;

CREATE TABLE `usuario` (
`id_user` int(10) AUTO_INCREMENT NOT NULL,
`email` varchar(50) NOT NULL,
`senha` varchar(50) NOT NULL,
`nome` varchar(25) NOT NULL,
`cpf` varchar(14) NOT NULL,
`sexo` varchar(9) NOT NULL,
`nascimento` Date NOT NULL,
`conta` int(10) NOT NULL,
`cidade` varchar(25) NOT NULL,
`uf` varchar(2) NOT NULL,
`cep` int(8) NOT NULL,
`num` int(5) NOT NULL,
`complemento` varchar(40) NOT NULL,
`type` int(1) NOT NULL,
`bloqueado` int(1) NOT NULL,
`saldo` double NOT NULL,
PRIMARY KEY (`id_user`)
) ENGINE=MyISAM;

CREATE TABLE `lutas` (
`id_lutas` int(10) AUTO_INCREMENT NOT NULL,
`op1` varchar(25) NOT NULL,
`op2`varchar(25) NOT NULL,
`data` Date NOT NULL,
`horario` TIME NOT NULL,
`local` varchar(50),
`apostas_minimas` double NOT NULL,
`ativo` int(1) NOT NULL,
PRIMARY KEY (`id_lutas`)
) ENGINE=MyISAM;

CREATE TABLE `apostas` (
`id_aposta` int(10) AUTO_INCREMENT NOT NULL,
`id_luta` int(10) NOT NULL,
`id_user` int(10) NOT NULL,
`candidato` varchar(25) NOT NULL,
`aposta` double NOT NULL,
PRIMARY KEY (`id_aposta`)
) ENGINE=MyISAM;

CREATE TABLE `reclamacao` (
`id_reclamacao` int(10) AUTO_INCREMENT NOT NULL,
`id_user` int(10) NOT NULL,
`categoria` varchar(20) NOT NULL,
`texto` text NOT NULL,
`resposta` text NULL,
PRIMARY KEY (`id_reclamacao`)
) ENGINE=MyISAM;

CREATE TABLE `lutadores` (
`id_lutador` int(10) AUTO_INCREMENT NOT NULL,
`nome` varchar(25) NOT NULL,
`lutas` int(3) NOT NULL,
`vitorias` int(3) NOT NULL,
`derrotas` int(3) NOT NULL,
PRIMARY KEY (`id_lutador`)
) ENGINE=MyISAM;
