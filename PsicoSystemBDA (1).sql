CREATE TABLE  pessoa (
	nome varchar(60),
	cpf varchar(60),
	telefone varchar(11),
	endereco varchar(60),
	email varchar(60)
);

INSERT INTO Pessoa (nome, cpf, telefone,endereco,email) VALUES
('Michelle', '00000000000', 99999999,'rua jose alves cavalheiro','802.098@unigran.br');

CREATE TABLE Login (
	id_login INT,
	email VARCHAR(60),
	senha VARCHAR(60)

);


INSERT INTO Login (id_login, email, senha ) VALUES
(01,'802.098@unigran.br','michelle21');



CREATE TABLE Paciente (
	id_paciente INT,
	modo_pagamento VARCHAR(60),
	area_especifica VARCHAR(60),
	plano_saude varchar(60)
 
);


INSERT INTO Paciente ( id_paciente,modo_pagamento, area_especifica,  plano_saude ) VALUES
	(01,'boleto','comportamental','cassems');

CREATE TABLE Psicologo (
	id_psicologo INT ,
	area_especializado VARCHAR(60),
	valor_consulta varchar(60),
	atend_planosaude varchar(60),
	crp VARCHAR(20)
);
--
-- Extraindo dados da tabela `Psicólogo`
--

INSERT INTO Psicologo (id_psicologo, area_especializado,valor_consulta, atend_planosaude, crp) VALUES
	(03,'comportamental', 150.00,  'sim', 'XX/351.476');
    

CREATE TABLE PlanoSaude (
	id_plano int,
	nome VARCHAR(60),
	tipo VARCHAR(60),
	valor varchar(60)

);
--
-- Extraindo dados da tabela `PlanoSaude`
--
INSERT INTO PlanoSaude (id_plano, nome, tipo, valor) VALUES
	(02,'adriana','nenhum', 120.00);

--
-- Estrutura da tabela `Recebimento`
--
CREATE TABLE  Recebimento  (
	id_recebimento INT,
	id_psicologo  INT,
	id_paciente INT,
    data_receb date,
	plano_saude VARCHAR(60),
	tipo_pagamento  VARCHAR(60),
	tipo_receita  VARCHAR(60)
);

INSERT INTO Recebimento (id_recebimento, id_psicologo, id_paciente, data_receb, plano_saude, tipo_pagamento,tipo_receita) VALUES
	(02, 07, 05, '2019-04-05', 'sim, cassems', 'conta de agua', 'aluguel');



CREATE TABLE  Agenda (
	id_paciente int,
	id_psicologo INT,
	id_agenda INT,
	hora time,
	data_agenda date,
	valor varchar(60)
);
insert into Agenda (id_paciente, id_psicologo, id_agenda, hora, data_agenda, valor) VALUES
	(01, 02, 05, '14:00:00', '2018-07-12', 120.00);



CREATE TABLE Pagamento (
	id_psicologo INT,
	id_pagamento INT,
	descricao VARCHAR(10),
	data_pag date ,
	valor varchar(60)
	
);

insert into Pagamento (id_psicologo, id_pagamento, descricao, data_pag, valor) VALUES
	(01, 02, 'conta agua', '2018-07-12', 120.00);

