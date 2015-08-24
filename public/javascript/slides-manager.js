$(document).ready(function(){
    $('.action-btn').on('click', function(e){
        e.preventDefault();
        if($(this).hasClass('delete')){
            if(!confirm('Do you really want to delete this slide?')){
                return false;
            }
        }
        var url = $(this).attr('href'),
            descricao = $(this).parent().parent().find('textarea').val(),
            token = $('input[name="csrf_token"]').attr('value'),
            method = $(this).hasClass('delete')? 'DELETE' : 'PUT';
        // console.log(descricao);
        // console.log(method);
        // console.log(token);

        $.ajax({
            type: 'POST',
            url: url,
            //dataType: 'json',
            //contentType: "application/json",
            data: {
                descricao: descricao,
                _token: token,
                _method: method
            },
            success: function(data){
                console.log('foi');
            },
            error: function(data){
                console.log(data);
            }
        });
    });
});