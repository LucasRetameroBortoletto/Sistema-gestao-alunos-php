<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        #deletar {
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


<?php include '../includes/header.php'; 
?>

    <form action="" method="post">
        <label for="id">ID: </label>
        <input type="number" name="id" id="id">
        <input type="reset" value="limpar" class="botao">
        <input type="submit" value="Apagar" class="botao">
    </form>


    <?php 
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        deletar($conexao, $_POST['id']);
    }
    include '../includes/footer.php';
    ?>
<?php require_once '../includes/functions.php'; ?>

</body>
</html>

