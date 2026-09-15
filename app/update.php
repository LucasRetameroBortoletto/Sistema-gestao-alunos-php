<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        #atualizar {
            outline: 2px solid white;
            border-radius: 5px;
        }
            form {
            display: flex;
            flex-direction: column;
            max-width: 300px;
            margin: 10px auto;
            padding: 15px 35px;
            outline: 2px solid black;
            border-radius: 10px;
        }

        input {
            margin-bottom: 5px;
            padding: 2px;
        }

        form .form-radio {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 6px;
        }

        label:hover,
        .botao:hover {
            cursor: pointer;
        }
</style>
<body>
    <?php  include '../includes/header.php'; 
    ?>
        <form action="" method="post">
        
        <label for="id">ID:</label>
        <input type="number" name="id" id="id" required>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <label for="turma">Turma:</label>
        <input type="text" name="turma" id="turma" required>

        <label for="nasc">Nascimento:</label>
        <input type="date" name="nasc" id="nasc" required>

        <div class="form-radio">
            <label for="ativo" required>Ativo: </label>
            <input type="radio" name="ativo" id="sim" value="true">
            <label for="sim">Sim</label>
            <input type="radio" name="ativo" id="nao" value="false">
            <label for="nao">Não</label>
        </div>

        <input type="reset" value="Limpar" class="botao">
        <input type="submit" value="Atualizar" class="botao">
    </form>
</body>
</html>
<?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        atualizar($conexao,$_POST['id'] , $_POST['nome'], $_POST['nasc'], $_POST['turma'], $_POST['ativo']);
    }
?>
<?php require_once '../includes/functions.php'; ?>