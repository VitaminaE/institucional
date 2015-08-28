$(document).ready(function(){
    $('.action-btn').on('click', function(e){
        e.preventDefault();

        // Guarda a referencia ao botão para uso
        // fora do escopo da variável $(this)
        var button = $(this);

        if(button.hasClass('delete')){
            if(!confirm('Do you really want to delete this slide?')){
                return false;
            }
        }
        var url = button.attr('href'),
            descricao = button.parent().parent().find('textarea').val(),
            token = $('input[name="csrf_token"]').val(),
            method = button.hasClass('delete')? 'DELETE' : 'PUT';

        $.ajax({
            type: 'POST',
            url: url,
            data: {
                descricao: descricao,
                _token: token,
                _method: method
            },
            success: function(data){
                switch(data.message){
                    case 'updated':
                        alert('wowowowo CONSEGUIU!!');
                        break;
                    case 'deleted':
                        // Causa o efeito de fade out no slide deletado.
                        // Para que o método abaixo funcione, é preciso que a classe
                        // usada como seletor seja a primeira entre as classes da tag
                        button.parents('.slide-options').fadeOut();
                        break;
                    default:
                        alert('Algo errado não está certo. Não se preocupe,'
                              + ' enviaremos uma equipe de macacos'
                              + ' especializados para resolver o seu problema');
                        break;
                }
                console.log(data.answer);
            },
            error: function(data, err){
                console.log(data);
                console.log(err);
            }
        });
    });
});