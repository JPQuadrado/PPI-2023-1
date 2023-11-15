$('#busca').submit((e) => {
    e.preventDefault();



    var nome = $('#nome').val();

    //console.log(nome);

    $.ajax({
        url: './searchNome.php',
        method: 'POST',
        data: {
            nome: nome
        },
        datatype: 'json',
        success: (data) => {
            // Limpa o conteúdo existente antes de adicionar a nova resposta
            $('.result').empty().prepend(data);
        },
        error: (errorMessage) => {
            $('.result').empty().prepend(errorMessage);
        }
    }).done(function (result) {
        $('#nome').val('');

    })


})