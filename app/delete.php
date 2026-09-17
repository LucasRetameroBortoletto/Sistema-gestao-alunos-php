<?php require_once '../login/verifica_user.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/styleForm.css">
</head>
<style>
        #deletar {
           outline: 2px solid white;
            border-radius: 5px;
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
<footer><?php require_once '../includes/functions.php'; ?> </footer>

</body>
</html>

