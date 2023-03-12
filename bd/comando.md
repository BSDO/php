// Comando do mysql 

//criar banco
cretae database nome_banco

// criar tabela e um campo para o banco
creat tabele nome_tabela (
    campo dado(tamanho) = 
    ex. iduser int (11)
    );

//remover tabelas do banco
drop table nome_tabela


//alterar tabelas add
alter table nome_tabela
add coluna dados

//alterar tabelas alterando
alter table nome_tabela
modify coluna dados

//alterar tabelas remove
alter table nome_tabela
drop coluna dados


//constraits campos como nulos,chave primaria,campos unnicos
// Sempre fica no final da coluna 
coluna tipodado constraits

// constrait not null - coluna nao pode ser vazia
    coluna tipodado notnull

// constrait  unique - valores unicos - cada coluna vai ter um campo com o mesma descriçao unica
    coluna dado unique
    coluna doado notnull unique    

//constrait chave primaria(primary key)
ex: id int unsigned auto_increment first primary key



//insert dados 
//  tabela coluna e dados
ex: insert into tabela(coluna1 , coluna2) values ('valor1','valor2' )

// selecionar dados SELECT
// * seleciona todas as tabelas
ex= select *from tabela todas as colunas da tabelas 
select coluna from tabela coluna especifica  

//  WHERE - filtrar por registros(resgatar dados apenas com as caracterisas passadas)
: select colunas from tabelas where condição (nome = "Breno")


//AND, OR E NOT

or = SELECT * FROM `teste` WHERE id = 1 or id= 6 chamando os dois id existentes
and = SELECT * FROM `teste` WHERE nome = 'Breno' and id= 15 selecionando o nome mas com o id especificado
outro ex: SELECT * FROM `teste` WHERE email or id > 5;

// ORDENA DADOS
// order by = orderna o retorno com base em alguma coluna , asc ou desc 
// ex: SELECT * FROM teste ORDER BY email ASC;
SELECT * FROM `teste` WHERE id > 2 ORDER by id ASC; (quando o id maior que 2, ele vai ordena dos id em ordem crescente)


// ATUALIZAR OS DADOS DA TABELA = UPDATE

// sem where 
UPDATE teste SET nome = 'Antoni'; (atualiza todos os dados daquela coluna )

// com where

UPDATE teste SET nome = 'Breno' WHERE id = 6 vai atualizar somente aquela coluna com o id 6

// DELETE  
//sem where
delete from nome_tabela exclui todos os dados

// com where
delete from teste where id = 5; vai excluir todos os dados dessa tabela




// mysqli extensao para conectar ao banco de dados x PDO - uma api de conexao ao bancos de dados(mais lenta)


 


