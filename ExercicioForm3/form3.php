<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de Formulario</title>
    <style>
        .container{
            width: 1000px;
            padding: 20px;
            border: 1px solid black;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 10px auto;
        }
        form {
            display: flex;
            align-items: center;
            flex-direction: row;
        }
        form input {
            padding: 20px;
            margin-top: 10px;
            margin-right: 10px;
        }
        .p {
            margin-right: 20;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Categoria Nadador</h1>
        <form action="exercicio9.php" method="post">
            <input type="number" name="idade" id="idade" min="5" max="137" step="1" placeholder="Idade">
            
            <input type="submit" value="Ver Resultados">
            <input type="reset" value="Limpar">
        </form>
    </div>
</body>
</html>