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
            _token = $('meta[name="csrf_token"]').attr('content'),
            _method = $(this).hasClass('delete')? 'DELETE' : 'PUT';
        console.log(descricao);

        $.ajax({
            type: 'POST',
            url: url,
            //dataType: 'json',
            //contentType: "application/json",
            data: {
                descricao: descricao,
                //_token: _token,
                _method: _method
            },
            success: function(data){
                console.log('lololol');
            },
            error: function(data){
                console.log(data);
            }
        });
    });
});