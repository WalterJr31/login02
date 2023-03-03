<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <section class="p-4 p-md-5" style="
    background-image: url(https://mdbcdn.b-cdn.net/img/Photos/Others/background3.webp);
  ">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-5">
                <div class="card rounded-3">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <h3>OPÇÕES</h3>
                            <h6>Pagamento</h6>
                        </div>
                        <form action="" method="post">
                            <p class="fw-bold mb-4 pb-2">Cartões salvos:</p>

                            <div class="d-flex flex-row align-items-center mb-4 pb-1">
                                <img class="img-fluid" src="https://img.icons8.com/color/48/000000/mastercard-logo.png" />
                                <div class="flex-fill mx-3">
                                    <div class="form-outline">
                                        <input type="number" id="formControlLgXc" class="form-control form-control-lg" value="" />
                                        <label class="form-label" for="formControlLgXc">Numero Cartão</label>
                                    </div>
                                </div>
                                <a href="#!">Remover cartão</a>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4 pb-1">
                                <img class="img-fluid" src="https://img.icons8.com/color/48/000000/visa.png" />
                                <div class="flex-fill mx-3">
                                    <div class="form-outline">
                                        <input type="number" id="formControlLgXs" class="form-control form-control-lg" value="" />
                                        <label class="form-label" for="formControlLgXs">Número Cartão</label>
                                    </div>
                                </div>
                                <a href="#!">Remover cartão</a>
                            </div>

                            <p class="fw-bold mb-4">Adicionar novo cartão:</p>

                            <div class="form-outline mb-4">
                                <input type="text" id="formControlLgXsd" class="form-control form-control-lg" value="" />
                                <label class="form-label" for="formControlLgXsd">Nome do Titular do Cartão</label>
                            </div>

                            <div class="row mb-4">
                                <div class="col-7">
                                    <div class="form-outline">
                                        <input type="number" id="formControlLgXM" class="form-control form-control-lg" value="" />
                                        <label class="form-label" for="formControlLgXM">Número Cartão</label>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-outline">
                                        <input type="password" id="formControlLgExpk" class="form-control form-control-lg" placeholder="MM/YYYY" />
                                        <label class="form-label" for="formControlLgExpk">Expirar</label>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-outline">
                                        <input type="password" id="formControlLgcvv" class="form-control form-control-lg" placeholder="CVV" />
                                        <label class="form-label" for="formControlLgcvv">CVV</label>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-success btn-lg btn-block">Adicionar Cartão</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>