<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    header {
        text-align: center;
    }
    .container-header {
        display: flex;
        justify-content: center;
    }

    nav {
    margin-top: 10px;
    background-color: black;
    padding: 14px;
    border-radius: 15px;
    margin-bottom: 20px;
    }

    nav a {
        text-decoration: none;
        padding: 5px;
        color: white;
    }
</style>
<body>
    
</body>
</html>
<div class="container-header">
<header>
    <h1>Mini sistema</h1>
    <nav>
        <a href="/index.php" id="inicio">Início</a>
        <a href="../app/create.php" id="cadastrar">Cadastrar</a>
        <a href="../app/delete.php" id="deletar">Deletar</a>
        <a href="../app/select.php" id="relatorio">Relatório</a>
        <a href="../app/select_where.php" id="aluno">Aluno</a>
        <a href="../app/update.php" id="atualizar">Atualizar</a>
    </nav>
</div>
</header>