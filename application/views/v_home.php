<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?= base_url() ?>assets/alerta/sweetalert.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/ajax-bootstrap-select.min.css" rel="stylesheet">
    <script src="<?= base_url() ?>assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/alerta/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/moment-develop/moment.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/moment-develop/locale/pt-br.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/tableExport.min.js"></script>

    <script src="<?= base_url() ?>assets/js/helperLibs/defaultSwals.js"></script>
    <script src="<?= base_url() ?>assets/js/helperLibs/format.js"></script>
    <script src="<?= base_url() ?>assets/js/helperLibs/jquery.inputmask.min.js"></script>
    <script src="<?= base_url() ?>assets/js/helperLibs/string-mask.js"></script>
    <script src="<?= base_url() ?>assets/js/helperLibs/ajax-bootstrap-select.min.js"></script>
    <script src="<?= base_url() ?>assets/js/helperLibs/ajax-bootstrap-select.pt-BR.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/js/plugins/piexif.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/js/plugins/sortable.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/js/fileinput.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/js/locales/pt-BR.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.2.5/themes/explorer/theme.css" rel="stylesheet">



    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        #btnCadastro {
            position: fixed;
            top: 90%;
            right: 10px;
            z-index: 1;
            text-align: right;

        }
    </style>

    <title>Ondacom</title>
</head>

<body>
    <script>
        var base_url = "<?php echo base_url() ?>";
    </script>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active col-12">
                    <a class="nav-link text-light text-center" href="<?php echo base_url('home') ?>"><b>Biblioteca de livros</b></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">


        <div class="modal fade" id="modalCadLivros" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white p-1">
                        <h5 class="modal-title col-11 text-center" style="font-size:30px;">Adicionar livro</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="formCadLivro">
                            <div class="mb-3">
                                <center><label for="txtTitulo" class="form-label text-center">TITULO </label></center>
                                <input type="text" class="form-control" id="txtTitulo" name="txtTitulo">
                            </div>
                            <div class="mb-3">
                                <center><label for="txtAutor" class="form-label">AUTOR</label></center>
                                <input type="text" class="form-control" id="txtAutor" name="txtAutor">
                            </div>
                            <div class="mb-3">
                                <center><label for="txtDescricao" class="form-label">DESCRIÇÃO</label></center>
                                <textarea id="txtDescricao" id="txtDescricao" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <center><label for="txtURL" class="form-label">URL da imagem</label></center>
                                <input type="text" class="form-control" id="txtURL" name="txtURL">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer border border-white">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" onclick="cadLivro()">Confirmar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="col-12">
                        <div class="row">
                            <?php
                            foreach ($livros as $linha) {
                            ?>
                                <div class="col-3">
                                    <div class="card">
                                        <img src="<?= $linha->URL ?>" class="card-img-top" height="300px">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= mb_strtoupper($linha->TITULO) ?></h5>
                                            <p class="card-text"><?= $linha->AUTOR ?></p>
                                            <p class="card-text"><?= $linha->DESCRICAO  ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-lg-12" id="btnCadastro">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCadLivros">
                                ADICIONAR
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function cadLivro() {
            $.ajax({
                url: base_url + "/home/cadastroLivro",
                type: "POST",
                dataType: "json",
                data: $('#formCadLivro').serialize(),
                success: function(data) {

                },
                beforeSend: function() {
                    swal({
                        title: "Aguarde!",
                        text: "Carregando...",
                        imageUrl: base_url + "assets/img/gifs/loading-red.gif",
                        showConfirmButton: false
                    });
                },
                error: function(data_error) {}
            });
        }
    </script>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/jasny/js/jasny-bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/button-checkbox.js"></script>
</body>

</html>