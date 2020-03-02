create table funcionario (ID_FUNC int(20), NOME varchar(255), SALARIO float(10,2), ID_DEPTO int(5), IDADE int(2),  PRIMARY KEY (ID_FUNC), FOREIGN KEY (ID_DEPTO) REFERENCES depto((ID_DEPTO));


create table depto (ID_DEPTO int(5), DESCRI varchar(255) PRIMARY KEY (ID_DEPTO));
