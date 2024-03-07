<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-language" content="pt-br">
        <meta name="viewport" content="width=devise-width, initial-scale=1">
        <title>MULTIPLATAFORMA - WEB</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <style>
            body {
                background-color: #C0C0C0;
            }
        </style>
    </head>
    <body>
        <center><h1><b>MULTIPLATAFORMA-WEB</b></h1></center>
        <hr/>
        <br/>
        <br/>
        <main>
            <div class="conteiner">
                <div class="row row-cols-2 row-cols-md-4 mb-4 text-center">
                    <div class="col-md-12">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-heder py-3">
                                <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#0000FF" class="bi bi-people" viewBox="0 0 16 16">
                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                                </svg>&nbsp;&nbsp;<b>EDIÇÃO DA PESSOA<b></h4>
                            </div>
                            <div class="card-body text-start">
                                <?php
                                    include 'conecta.php';
                                    $id = $_GET['id'];
                                    $sql = "SELECT * FROM pessoa WHERE id=$id";
                                    $query = $conn->query($sql);
                                    while ($dados = $query->fetch_array()) {
                                        $nome = $dados['nome'];
                                        $idade = $dados['idade'];
                                        $cidade = $dados['cidade'];
                                    }
                                ?>
                                <form action="edpessoa.php?id=<?php echo $id; ?>" method="post">
                                    <label>NOME</label>
                                    <input type="text" class="form-control" name="nome" value="<?php echo $nome; ?>" required/>
                                    <label>IDADE</label>
                                    <input type="number" class="form-control" name="idade" value="<?php echo $idade; ?>" required/>
                                    <label>CIDADE</label>
                                    <input type="text" class="form-control" name="cidade" value="<?php echo $cidade; ?>" required/>
                                    <br/>
                                    <button type="submit" class="btn btn-outline-success"><b>ATUALIZAR</b></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>