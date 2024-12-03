#base trabalho de Programação Web	
create schema quinhao_feliz;
use quinhao_feliz;
#tabela de produtos
create table produtos(
	prod_tipo VARCHAR(100),
    prod_descricao TEXT,
    prod_quantidade DECIMAL(5,2)
);
#tabela de loguin
create table loguin(
	logi_id INT NULL AUTO_INCREMENT,
	logi_email VARCHAR(100) NULL,
    logi_senha VARCHAR(200) NULL
);
create table criar_conta(
	crta_nome VARCHAR(100),
	loguin_email  references loguin(login_email)
);
create table histórico();
