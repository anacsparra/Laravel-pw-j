create database bdaulalaravel;
use bdaulalaravel;

create table tbContato(
idContato int PRIMARY key AUTO_INCREMENT,
nome varchar(40),
email varchar(40),
fone varchar(40),
assunto varchar(40),
mensagem varchar(500)
);

create table tbCliente(
idCliente int PRIMARY KEY NOT NULL auto_increment,
nome varchar(45),
dtNasc date,
estadoCivil varchar(10),
endereco varchar(45),
numero int(4),
complemento varchar(45),
cep varchar(45),
cidade varchar(45),
estado varchar(45),
Rg int(11),
cpf int(11),
email varchar(45),
fone int(9),
celular int(11)
);

create table tbCategoria(
idCategoria int PRIMARY KEY NOT NULL auto_increment,
categoria varchar(45)
);

create table tbProduto(
idProduto int PRIMARY KEY NOT NULL auto_increment,
idCategoria int,
FOREIGN KEY (idCategoria) REFERENCES tbCategoria(idCategoria),
produto varchar(45),
valor int
);


create table tbPedido(
idPedido int PRIMARY KEY NOT NULL auto_increment,
idCategoria int,
idProduto int,
FOREIGN KEY (idCategoria) REFERENCES tbCategoria(idCategoria),
FOREIGN KEY (idProduto) REFERENCES tbProduto(idProduto),
valor_t int
);

insert into tbCliente values (null,"Ana", "2005-05-04","Solteiro","Rua do cambio","293","Apto 233C","93849040","São Paulo", "SP", "839298349", "39129312", "anacarol@gmail.com", "1193283813", "23123923");
insert into tbCliente values (null,"Joao", "2005-03-23","Solteiro","Rua da Marcial","495","Apto 32D","32442555","São Paulo", "SP", "323212556", "534141234", "joaogabriel@gmail.com", "1193239233", "39213191");
insert into tbCliente values (null,"Emily", "2005-07-16","Solteiro","Rua da Sadia","342","Apto 14A","32131238","São Paulo", "SP", "217313834", "982193819", "emily@gmail.com", "1183231928", "321931834");

insert into tbCategoria values(null, "Saude");
insert into tbCategoria values(null, "Brinquedo");
insert into tbCategoria values(null, "Alimentação");

insert into tbProduto values(null, 3,"Cookie", 400);
insert into tbProduto values(null, 1,"Bengué", 140);
insert into tbProduto values(null, 2,"Hot wheels", 1200);

insert into tbContato values(null,
'Ana',
'ana@gmail.com',
'1199999-9999',
'Assunto ana',
'msg ana'
);
