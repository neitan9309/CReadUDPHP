<?php
    include("database.php");

    //Comando SQL que seleciona todos os dados inseridos na nossa tabela, e os armazena na variável $sql.
    $sql = "SELECT * FROM usuarios";
    
    //Conexão com o banco de dados e execução do comando SQL.
    $resultado = mysqli_query($conn, $sql);

    /*Condição if que estabelece a condição maior
    que 0 (retornos do comando SQL), para iniciar
    um loop while. Esse por sua vez, armazena e printa
    no navegador do usuário, algumas informações selecionadas da tabela.*/
    if(mysqli_num_rows($resultado) > 0){
        while($linha = mysqli_fetch_assoc($resultado)){
            echo $linha["id"] . "<br>";
            echo $linha["usuario"] . "<br>";
            echo $linha["data_reg"] . "<br>";
        };
    }
    else{
        echo"Nenhum usuário encontrado";
    }
    
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica</title>
</head>
<body>

</body>
</html>