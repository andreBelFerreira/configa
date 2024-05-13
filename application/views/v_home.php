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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

        .text {
            white-space: nowrap;
            width: 13em;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .textArea {
            width: 16em;
            height: 12em;
            text-align: justify;
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
                                <textarea id="txtDescricao" name="txtDescricao" class="form-control"></textarea>
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
                <div class="card-body pt-0">
                    <div class="col-12">
                        <div class="row " id="divLivros">

                        </div>
                        <div class="col-lg-12" id="btnCadastro">
                            <button type="button" class="btn btn-warning" onclick="retFavorito()" id="btnFavorito">
                                FAVORITO
                            </button>
                            <button type="button" class="btn btn-warning d-none" onclick="retornoLivro()" id="btnTodos">
                                TODOS
                            </button>
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
                    if (data == true) {
                        retornoLivro()
                        limpar()
                    } else {
                        swal({
                            title: "Atenção!",
                            text: "Não foi possivel cadastrar o livro.",
                            type: "error"
                        });
                    }

                },
                beforeSend: function() {
                    swal({
                        title: "Aguarde!",
                        text: "Carregando...",
                        imageUrl: base_url + "assets/img/loading.gif",
                        showConfirmButton: false
                    });
                },
                error: function(data_error) {
                    swal({
                        title: "Atenção!",
                        text: "Erro ao tentar cadastrar no livro.",
                        type: "error"
                    });
                }
            });
        }

        function deleteLivro(id) {
            $.ajax({
                url: base_url + "/home/deleteLivro",
                type: "POST",
                dataType: "json",
                data: {
                    'id': id
                },
                success: function(data) {
                    if (data == true) {
                        retornoLivro()
                    } else {
                        swal({
                            title: "Atenção!",
                            text: "Não foi possivel cadastrar o livro.",
                            type: "error"
                        });
                    }

                },
                beforeSend: function() {
                    swal({
                        title: "Aguarde!",
                        text: "Carregando...",
                        imageUrl: base_url + "assets/img/loading.gif",
                        showConfirmButton: false
                    });
                },
                error: function(data_error) {
                    swal({
                        title: "Atenção!",
                        text: "Erro ao tentar cadastrar no livro.",
                        type: "error"
                    });
                }
            });
        }

        function favorito(id) {
            $.ajax({
                url: base_url + "/home/favorito",
                type: "POST",
                dataType: "json",
                data: {
                    'id': id
                },
                success: function(data) {
                    if (data == true) {
                        retornoLivro()
                    } else {
                        swal({
                            title: "Atenção!",
                            text: "Não foi possivel cadastrar o livro.",
                            type: "error"
                        });
                    }

                },
                beforeSend: function() {
                    swal({
                        title: "Aguarde!",
                        text: "Carregando...",
                        imageUrl: base_url + "assets/img/loading.gif",
                        showConfirmButton: false
                    });
                },
                error: function(data_error) {
                    swal({
                        title: "Atenção!",
                        text: "Erro ao tentar cadastrar no livro.",
                        type: "error"
                    });
                }
            });
        }

        $(document).ready(function() {
            retornoLivro()
        })

        function retornoLivro() {
            var variavel = ''
            $.ajax({
                url: base_url + "/home/retornoLivro",
                type: "POST",
                dataType: "json",
                success: function(data) {
                    swal({
                        timer: 1,
                        title: "Aguarde!",
                        text: "Carregando...",
                        imageUrl: base_url + "assets/img/loading.gif",
                        showConfirmButton: false
                    });
                    $('#divLivros').html('');
                    var json = JSON.stringify(data);
                    $.each(JSON.parse(json), function(idx, obj) {
                        variavel += '<div class="col-3 mt-3"><div class="card" height="300px"><img src="' + obj.URL + '" class="card-img-top" height="300px"><div class="card-body"><h5 class="card-title text">' + obj.TITULO + '</h5> <p class="card-text" > ' + obj.AUTOR + '</p><p class="card-text textArea">' + obj.DESCRICAO + '</p>';
                        if (obj.FAVORITO == '') {
                            variavel += '<a class="card-link btn btn-outline-warning m-1" onclick="favorito(' + obj.ID + ')"><i class="fa-regular fa-heart"></i></a>';
                        } else {
                            variavel += '<a class="card-link btn btn-warning m-1" onclick="favorito(' + obj.ID + ')"><i class="fa-regular fa-heart"></i></a>';
                        }
                        variavel += '<a class="card-link btn btn-danger m-1" onclick="deleteLivro(' + obj.ID + ')">Deletar</a></div></div></div></div>';
                    });
                    $('#divLivros').append(variavel)
                    $('#btnFavorito').removeClass('d-none');
                    $('#btnTodos').addClass('d-none');
                },
                beforeSend: function() {
                    swal({
                        title: "Aguarde!",
                        text: "Carregando...",
                        imageUrl: base_url + "assets/img/loading.gif",
                        showConfirmButton: false
                    });
                },
                error: function(data_error) {
                    swal({
                        title: "Atenção!",
                        text: "Erro ao tentar cadastrar no livro.",
                        type: "error"
                    });
                }
            });
        }

        function retFavorito() {
            var variavel = '';
            $.ajax({
                url: base_url + "/home/retFavorito",
                type: "POST",
                dataType: "json",
                data: {
                    'favorito': 'F'
                },
                success: function(data) {
                    swal({
                        timer: 1,
                        title: "Aguarde!",
                        text: "Carregando...",
                        imageUrl: base_url + "assets/img/loading.gif",
                        showConfirmButton: false
                    });
                    $('#divLivros').html('');
                    var json = JSON.stringify(data);
                    $.each(JSON.parse(json), function(idx, obj) {
                        variavel += '<div class="col-3 mt-3"><div class="card" height="300px"><img src="' + obj.URL + '" class="card-img-top" height="300px"><div class="card-body"><h5 class="card-title text">' + obj.TITULO + '</h5> <p class="card-text" > ' + obj.AUTOR + '</p><p class="card-text textArea">' + obj.DESCRICAO + '</p>';
                        if (obj.FAVORITO == '') {
                            variavel += '<a class="card-link btn btn-outline-warning m-1" onclick="favorito(' + obj.ID + ')"><i class="fa-regular fa-heart"></i></a>';
                        } else {
                            variavel += '<a class="card-link btn btn-warning m-1" onclick="favorito(' + obj.ID + ')"><i class="fa-regular fa-heart"></i></a>';
                        }
                        variavel += '<a class="card-link btn btn-danger m-1" onclick="deleteLivro(' + obj.ID + ')">Deletar</a></div></div></div></div>';
                    });

                    $('#divLivros').append(variavel)
                    $('#btnFavorito').addClass('d-none');
                    $('#btnTodos').removeClass('d-none');
                },
                beforeSend: function() {
                    swal({
                        title: "Aguarde!",
                        text: "Carregando...",
                        imageUrl: base_url + "assets/img/loading.gif",
                        showConfirmButton: false
                    });
                },
                error: function(data_error) {
                    swal({
                        title: "Atenção!",
                        text: "Erro ao tentar cadastrar no livro.",
                        type: "error"
                    });
                }
            });
        }

        function limpar() {
            $("#txtTitulo, #txtAutor, #txtDescricao, #txtURL").val('');
            $("#modalCadLivros").modal('hide')
        }
    </script>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/jasny/js/jasny-bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/button-checkbox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>