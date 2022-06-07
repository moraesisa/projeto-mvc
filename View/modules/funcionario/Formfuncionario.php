<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de funcionario</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
    <form action="/funcionario/save" method="post">
        <fieldset>
            <legend>Cadastro de funcionario</legend>
            <input type="hidden" value="<?= $model->id ?>" name="id" />
            <label for="nome">Nome:</label>
            <input name="nome" value="<?= $model->nome ?>" id="nome" type="text" />

            <label for="cargo">cargo:</label>
            <input name="cargo" value="<?= $model->cargo ?>" id="cargo" type="text" />

            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
</body>
</html>