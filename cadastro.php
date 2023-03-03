<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <div class="container">
        <form class="form-horizontal" role="form">
            <h2>Cadastro</h2>
            <div class="form-group">
                <label for="primeironome" class="col-sm-3 control-label">Primeiro Nome</label>
                <div class="col-sm-9">
                    <input type="text" id="primeironome" placeholder="Primeiro Nome" class="form-control" autofocus>
                </div>
            </div>
            <div class="form-group">
                <label for="sobrenome" class="col-sm-3 control-label">Sobrenome</label>
                <div class="col-sm-9">
                    <input type="text" id="sobrenome" placeholder="Sobrenome" class="form-control" autofocus>
                </div>
            </div>
            <div class="form-group">
                <label for="cpf" class="col-sm-3 control-label">CPF* </label>
                <div class="col-sm-9">
                    <input type="number" id="cpf" placeholder="CPF" class="form-control" name="cpf">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email* </label>
                <div class="col-sm-9">
                    <input type="email" id="email" placeholder="Email" class="form-control" name="email">
                </div>
            </div>
            <div class="form-group">
                <label for="senha" class="col-sm-3 control-label">Senha*</label>
                <div class="col-sm-9">
                    <input type="password" id="password" placeholder="Senha" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="senha" class="col-sm-3 control-label">Confirmar Senha*</label>
                <div class="col-sm-9">
                    <input type="password" id="password" placeholder="Senha" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="datanasc" class="col-sm-3 control-label">Data de Nascimento*</label>
                <div class="col-sm-9">
                    <input type="date" id="datanasc" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="phoneNumber" class="col-sm-3 control-label">Número Telefone</label>
                <div class="col-sm-9">
                    <input type="phoneNumber" id="phoneNumber" placeholder="Número Telefone" class="form-control">
                    <span class="help-block">Seu número de telefone não será divulgado em nenhum lugar. </span>
                </div>
            </div>
            <div class="form-group">
                <label for="Height" class="col-sm-3 control-label">Altura* </label>
                <div class="col-sm-9">
                    <input type="number" id="height" placeholder="Por favor, escreva sua altura em centímetros." class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="weight" class="col-sm-3 control-label">Peso* </label>
                <div class="col-sm-9">
                    <input type="number" id="weight" placeholder="Por favor, escreva seu peso em quilos." class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Gênero</label>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" id="femaleRadio" value="Feminino">Feminino
                            </label>
                        </div>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" id="maleRadio" value="Masculino">Masculino
                            </label>
                        </div>
                        <div class="col-sm-4">
                            <label class="radio-inline">
                                <input type="radio" id="Radio" value="Outros">Outros
                            </label>

                        </div>
                    </div>
                </div>
            </div> 
            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    <span class="help-block">*Campo Obrigatório</span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Salvar</button>
        </form> 
    </div> 
</body>

</html>