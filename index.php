<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário PHP</title>
    <style>
        h1{
            color: rgb(5, 102, 146);
            font-size: 20px;
            font-family:Arial, Helvetica, sans-serif;
        }

        form{
            width: 350px;
        }
        #botao{
            color: rgb(41, 236, 24);
            background-color: rgb(3, 72, 104);
            padding: 4px;
            font-size: 15px;
        }


    </style>
</head>
<body>
    <h1>Inscrição de competidores</h1>
    <form action="script.php" method="post">
        <fieldset><legend>User Competidores</legend>

        <p><strong>Nome</strong><input type="text" name="nome" id=""></p>
        <p><strong>Idade</strong><input type="text" name="idade" id=""></p>
        <p><input type="submit" value="Enviar dados" id="botao"></p>

        </fieldset>
    </form>
</body>
</html>