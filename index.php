<!DOCTYPE html>

<html>
    <head lang="pt-br">
        <!--Meta-->
        <meta charset="utf-8">
        <meta charset="viewport" content="width=device-width,initial-scale=1">

        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="./arquivocss/index.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <title>App lista tarefas</title>

    </head>

    <body>
        <nav class="navbar nav-light bg-light">
            <div class="container">
                <a><img src="./img/logo.png" width="30px">App lista tarefas</a>
            </div>
        </nav>

        <div class="container mt-4">

            <div class="row">

                <div class="col-md-3 menu mt-3">
                    <ul class="list-group shadow" type="none">
                        <li class="list-group-item"><a href="#">Tarefas Pendentes</a></li>
                        <li class="list-group-item"><a href="#">Nova tarefa</a></li>
                        <li class="list-group-item"><a href="#">Todas tarefas</a></li>
                    </ul>
                </div>

                <div class="col-md-9">
                    <div class="container pagina border rounded shadow mt-3">
                        <div class="row">
                            
                            <div class="col">
                                <h4 class="text-success">Tarefas Pendentes</h4><hr>
                            
                                <div class="row mb-3 d-flex align-items-center">
                                    <div class="col-sm-9">Lavar o carro</div>
                                    <div class="col-sm-3 ml-auto d-flex justify-content-between">
                                        <i class="fas fa-trash-alt text-danger"></i>
                                        <i class="fas fa-edit text-primary"></i>
                                        <i class="fas fa-check text-success"></i>
                                    </div>
                                </div>

                                <hr>

                                <div class="row mb-3 d-flex align-items-center">
                                    <div class="col-sm-9">Passear com o cachorro</div>
                                    <div class="col-sm-3 ml-auto d-flex justify-content-between">
                                        <i class="fas fa-trash-alt text-danger"></i>
                                        <i class="fas fa-edit text-primary"></i>
                                        <i class="fas fa-check text-success"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </body>
</html>