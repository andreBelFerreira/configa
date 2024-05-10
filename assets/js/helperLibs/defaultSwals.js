(function (swal) {
    
    function loading(title = 'Carregando', text = 'Por favor, aguarde...') {
        swal({
            title,
            text,
            imageUrl: base_url + 'assets/img/loading.gif',
            showConfirmButton: false
        });
    }

    function success(title = '', text = 'Operação realizada com sucesso.') {
        swal({ title, text, type: 'success' });
    }

    function error(title = '', text = 'Houve um erro na operação.') {
        swal({ title, text, type: 'error' });
    }

    swal.defaultError = error;
    swal.defaultSuccess = success;
    swal.defaultLoading = loading;
}) (swal);
