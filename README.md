Pequeno código PHP em que estabeleço um conexão com um banco de dados SQL, com o intuito de inserir informações na tabela usuarios.

Para rodar em sua máquina, crie uma tabela no seu SGBD com o seguinte comando:

CREATE TABLE usuarios ( id int(11) NOT NULL, usuario varchar(25) NOT NULL, senha char(255) NOT NULL, email varchar(50) NOT NULL, data_reg datetime NOT NULL DEFAULT current_timestamp() ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

Feito com XAMPP.
