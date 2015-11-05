@extends("templates.main")

@section("css")
<style>
    .form-horizontal{
    }

    #signature{
        width: 535px;
        position:relative;
        margin:auto;
        background-color:white;
    }

    #signature img{
        width:30%;
        float:left;
    }

    #signature .data{
        margin-top:15px;
        width:70%;
        padding-left:15px;
        float:left;
    }

</style>
@stop

@section("titulo")
    Gerador de Assinatura - EJCM
@stop

@section("conteudo")
<br/><br/><br/>
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 style="text-align:center;">Gerador de Assinatura</h2>
        </div>
        <div class="panel-body">
            <form class="form-horizontal col-md-8 col-md-offset-2" action="">
                <div class="form-group">
                    <label class="control-label" for="name">Nome:</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{Input::get('name')}}"/>
                </div>
                <div class="form-group">
                    <label class="control-label" for="position">Cargo:</label>
                    <input type="text" name="position" class="form-control" id="position" value="{{Input::get('position')}}"/>
                </div>
                <div class="form-group">
                    <input type="submit" value="Gerar" class="btn btn-success btn-block"/>
                </div>
            </form>
        </div>
    </div>
</div>
<button class="btn" data-clipboard-target="#signature" data-clipboard-action="copy" id="lol">
    Copiar
</button>
<div class="panel panel-default col-md-10 col-md-offset-1">
    <div class="panel-body">
        <div id="signature">
            <img src="{{asset('images/ejcm-signature-logo.png')}}" alt=""/>
            <div class="data">
                <div class="name"><strong>{{Input::get("name")}}</strong></div>
                <div class="position"><em>{{Input::get("position")}}</em></div>
                <div>Empresa Júnior de Consultoria e Desenvolvimento Web</div>
                <div id="lol">Departamento de Ciência da Computação - UFRJ</div>
                <div><a href="http://www.ejcm.com.br">www.ejcm.com.br</a> | (21) 3938-3336</div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@stop

@section('javascript')
    <script type="text/javascript" src="{{asset('clipboard.js-master/dist/clipboard.js')}}"></script>
    <script type="text/javascript">
        new Clipboard('#lol');
    </script>
@stop