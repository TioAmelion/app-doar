<!DOCTYPE html>
<html>

<!-- Mirrored from gambolthemes.net/html/workwise/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Oct 2018 09:39:01 GMT -->

<head>
    <meta charset="UTF-8">
    <title>Sistema de doação - Doar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/line-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/line-awesome-font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/lib/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/lib/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>

<body class="sign-in" oncontextmenu="return false;">
    <div class="wrapper">
        <div class="sign-in-page">
            <center>
                <div class="col-lg-7 col-md-8 no-pd">
                    <div class="main-ws-sec">
                        <div class="post-topbar">
                            <h3 class="display-4 font-weight-bold">Cadastre-se e comece já a sua campanha!</h3>
                            <br>
                            <ul class="sign-control">
                                <li data-tab="tab-1"><a onclick="doa()" href="#" title="">Doador</a></li>
                                <li data-tab="tab-1" class="current"><a onclick="insti()" href="#"
                                        title="">Instituição</a></li>
                            </ul>
                            <div class="form-row">
                                @if($errors->any())
                                <div class="form-group col-md-12 alert alert-danger" role="alert">
                                    Por favor corriga os erros do formulario
                                </div>
                                @endif
                            </div>
                            <!-- DOADOR -->
                            <form id="doador" method="POST" action="{{ route('doador.store') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input type="text"
                                            class="form-control @error('nome_doador') is-invalid @enderror" id="nome"
                                            name="nome_doador" placeholder="Nome Completo do Doador"
                                            value="{{old('nome_doador')}}">
                                        @error('nome_doador')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-8">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" placeholder="Email" name="email" value="{{old('email')}}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control @error('pais') is-invalid @enderror col-12"
                                            name="pais" id="pais">
                                            <option selected disabled>Selecione o País</option>
                                            @foreach($paises as $pais)
                                            <option  value="{{$pais->id}}" {{ old('pais') == 'Angola' ? 'selected' : '' }}>{{$pais->nome_pais}}</option>
                                            @endforeach
                                        </select>
                                        @error('pais')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-lg-3" id="p">
                                        <select class="form-control @error('provincia') is-invalid @enderror col-12"
                                            name="provincia" id="provincia">
                                            <option selected disabled>Selecione a Provincia</option>
                                        </select>
                                        @error('provincia')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-3" id="m">
                                        <select class="form-control @error('municipio') is-invalid @enderror col-12"   
                                            name="municipio" id="municipio">
                                            <option selected disabled>Selecione o municipio</option>
                                        </select>
                                        @error('municipio')
                                        <spans class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-sm-4" id="nd">
                                        <input type="text" class="form-control @error('num_bi') is-invalid @enderror"
                                            id="num_bi" name="num_bi" placeholder="Número do B.I"
                                            value="{{old('num_bi')}}">
                                        @error('num_bi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-sm-4">
                                        <input type="date" class="form-control @error('data_nasc') is-invalid @enderror"
                                            name="data_nasc" id="data_nasc" value="{{old('data_nasc')}}" max="<?php echo date('Y-m-d', strtotime('-18 year')); ?>">
                                        @error('data_nasc')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <input type="tel" class="form-control @error('telefone') is-invalid @enderror"
                                            id="telefone" name="telefone" placeholder="Número de Telefone"
                                            value="{{old('telefone')}}">
                                        @error('telefone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control @error('genero') is-invalid @enderror col-12"
                                            name="genero">
                                            <option value="" selected disabled>Selecione o Genero</option>
                                            <option value="masculino"
                                                {{ old('genero') == 'masculino' ? 'selected' : '' }}>Masculino</option>
                                            <option value="feminino"
                                                {{ old('genero') == 'feminino' ? 'selected' : '' }}>Feminino </option>
                                        </select>
                                        @error('genero')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control @error('tipo_doador') is-invalid @enderror col-12"
                                            name="tipo_doador">
                                            <option value="" selected disabled>Selecione o Tipo de Doador</option>
                                            <option value="pessoa_fisica"
                                                {{ old('tipo_doador') == 'masculino' ? 'selected' : '' }}>Pessoa Fisica
                                            </option>
                                            <option value="pessoa_juridica"
                                                {{ old('tipo_doador') == 'feminino' ? 'selected' : '' }}>Pessoa Juridica
                                            </option>
                                        </select>
                                        @error('genero')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="form-row">
                                    <div class="form-group bg-dark col-md-12" style="color: white;padding: 10px 10px">
                                        <span>Credências de Acesso ao Sistema</span>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <input type="password" class="form-control" id="senha" name="password"
                                            placeholder="Palavra passe" value="{{old('password')}}">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror" id="senha"
                                            name="password_confirmation" placeholder="Confirmar palavra passe">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                    href="{{ route('login') }}" style="color: #E75348">
                                    {{ __('Já tens registro?') }}
                                </a> &nbsp;
                                <button type="submit" class="btn btn-danger" style="background: #E75348">Cadastrar</button>
                            </form>

                            <!-- INSTITUICAO -->
                            <form id="instituicao" method="POST" action="{{ route('instituicao.store') }}">
                                @csrf

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input type="text"
                                            class="form-control @error('nome_instituicao') is-invalid @enderror"
                                            id="nome_instituicao" name="nome_instituicao"
                                            placeholder="Nome da Instituicao"
                                            value="{{old('nome_instituicao')}}">
                                        @error('nome_instituicao')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-8">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" placeholder="Email" name="email" value="{{old('email')}}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input type="text" class="form-control @error('sigla') is-invalid @enderror"
                                            id="sigla" name="sigla" placeholder="Sigla da instituicao"
                                            value="{{old('sigla')}}">
                                        @error('sigla')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-sm-4">
                                        <input type="text" class="form-control @error('nif') is-invalid @enderror"
                                            id="nif" name="nif" placeholder="Número do Nif" value="{{old('nif')}}">
                                        @error('nif')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <!-- <div class="form-group"> -->
                                        <select class="form-control @error('pais') is-invalid @enderror col-12"
                                            name="paisI" id="paisI">
                                            <option selected disabled>Selecione o País</option>
                                            @foreach($paises as $pais)
                                                @if($pais->nome_pais == "Angola")
                                                    <option value="{{$pais->id}}" {{ old('pais') == 'Angola' ? 'selected' : '' }}>{{$pais->nome_pais}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        @error('genero')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    <!-- </div> -->
                                    </div>

                                    <div class="form-group col-lg-3">
                                        <select class="form-control @error('provinciaI') is-invalid @enderror col-12"
                                            name="provinciaI" id="provinciaI">
                                            <option selected disabled>Selecione a Provincia</option>
                                        </select>
                                        @error('provinciaI')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-auto">
                                        <select class="form-control @error('municipioI') is-invalid @enderror col-12"
                                            name="municipioI" id="municipioI">
                                            <option selected disabled>Selecione o municipio</option>
                                        </select>
                                        @error('municipioI')
                                        <spans class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-4">
                                        <input type="tel" class="form-control @error('telefoneI') is-invalid @enderror"
                                            id="telefoneI" name="telefoneI" placeholder="Telefone"
                                            value="{{old('telefoneI')}}">
                                        @error('telefoneI')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <textarea class="form-control @error('objectivo') is-invalid @enderror"
                                            id="objectivo" name="objectivo" placeholder="objectivo da instituicao"
                                            value="{{old('objectivo')}}" name="objectivo"></textarea>
                                        @error('objectivo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div> &nbsp;
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="form-group bg-dark col-md-12" style="color: white;padding: 10px 10px">
                                        <span>Credências de Acesso ao Sistema</span>
                                    </div>
                                </div> 
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <input type="password" class="form-control" id="senha" name="password"
                                            placeholder="Palavra passe" value="{{old('password')}}">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror" id="senha"
                                            name="password_confirmation" placeholder="Confirmar palavra passe">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                    href="{{ route('login') }}" style="color: #E75348">
                                    {{ __('Já tens registro?') }}
                                </a> &nbsp;
                                <button type="submit" class="btn btn-danger" style="background: #E75348">Cadastrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </center>
            <div class="footy-sec">
                <div class="container">
                    <ul>
                        <li><a href="#" title="">Help Center</a></li>
                        <li><a href="#" title="">Privacy Policy</a></li>
                        <li><a href="#" title="">Community Guidelines</a></li>
                        <li><a href="#" title="">Cookies Policy</a></li>
                        <li><a href="#" title="">Career</a></li>
                        <li><a href="#" title="">Forum</a></li>
                        <li><a href="#" title="">Language</a></li>
                        <li><a href="#" title="">Copyright Policy</a></li>
                    </ul>
                    <p><img src="assets/images/copy-icon.png" alt="">Copyright 2018</p>
                </div>
            </div>
            <!--footy-sec end-->
        </div>
        <!--sign-in-page end-->
    </div>
    <!--theme-layout end-->


<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript">
    var instituicao =  $('#instituicao');
    var doador =  $('#doador')

    var form_atual = ""

    $(document).ready(function(){
         
        if(localStorage.getItem('form_atual') === "instituicao"){
            
            instituicao.show()
            doador.hide()

        } else { 

            instituicao.hide()
            doador.show() 

        } 
    })

    function insti(){

        form_atual = "instituicao"
        localStorage.setItem('form_atual', form_atual)

        doador.hide()
        instituicao.show()
    }

    function doa(){

        localStorage.removeItem('form_atual');

        instituicao.hide()
        doador.show()
    }
</script>
<script type="text/javascript">
    $(document).ready(function (){

        
        $('select[id="pais"]').on('change',function(){
            var pais_id = $(this).val();  
            
            var option = $('#pais').find(":selected").text();
                   
            if(option == "Angola") {
                $('#provincia').show()
                $('#municipio').show()
                $('#num_bi').show()
                $('#p').show()
                $('#m').show()
                $('#nb').show()

                $('#telefone').attr("placeholder", "(+244) 999 999 999")
                $('#telefone').mask("(+244) 999-999-999")
                $('#telefoneI').mask("(+244) 999-999-999")
 
            } else if(option == "Moçambique" ) {
                $('#provincia').hide() 
                $('#municipio').hide()
                $('#num_bi').hide()
                $('#m').hide()
                $('#nb').hide()
                $('#p').hide()
 
                $('#telefone').attr("placeholder", "(+55) 99 99999 9999")
                $('#telefone').mask("(+55) 99 99999 9999")

            } else if(option== "Portugal") {
                $('#provincia').hide()
                $('#municipio').hide()
                $('#num_bi').hide()
                $('#p').hide()
                $('#m').hide()
                $('#nb').hide()

                $('#telefone').attr("placeholder", "(+351) 999 999 999")
                $('#telefone').mask("(+351) 999 999 999")

            } else if(option == "Brasil") {
                $('#provincia').hide()
                $('#municipio').hide()
                $('#num_bi').hide()
                $('#p').hide()
                $('#m').hide()
                $('#nb').hide()  
 
                $('#telefone').attr("placeholder", "(+258) 99 999 9999")
                $('#telefone').mask("(+258) 99 999 9999")
            }

           if(pais_id){

              $.ajax({
                 url : 'provincia/' +pais_id,
                 type : "GET",
                 dataType : "json",
                 success:function(data)
                 {
                    console.log(data);
                    $('select[name="provincia"]');
                    $.each(data, function(key, value){ 
                       $('select[name="provincia"]').append('<option value="'+ key +'">'+value+'</option>');
                    });
                 }
              });
           } 
           else
           {
              $('select[name="state"]').empty();
           }
        });

        $('select[id="provincia"]').on('change',function(){

            var option = $('#provincia').find(":selected").text();

            if(option == "Luanda") {

                $('#num_bi').mask("999999999LA999")

            } else if(option == "Malanje" ) {

                $('#num_bi').mask("999999999ML999")
            }

           var provincia_id = jQuery(this).val();

           if(provincia_id)
           {
              $.ajax({
                 url : 'municipio/' +provincia_id,
                 type : "GET",
                 dataType : "json",
                 success:function(data) 
                 { 
                    console.log(data); 
                    $('select[name="municipio"]');
                    $.each(data, function(key, value){ 
                       $('select[name="municipio"]').append('<option style="width:100px" value="'+ key +'">'+ value +'</option>');
                    });
                 }
              });
           } 
           else
           {
              $('select[name="state"]').empty();
           }
        });

        //DADOS DA INSTITUICAO
        $('select[id="paisI"]').on('change',function(){
            var Pais_id = $(this).val();  
            
            var option = $('#paisI').find(":selected").text();
                   
            if(option == "Angola") {
                $('#provincia').show()
                $('#municipio').show()
                $('#num_bi').show()
                $('#p').show()

                $('#telefoneI').attr("placeholder", "(+244) 999-999-999")
                $('#telefoneI').mask("(+244) 999-999-999")
 
            }

           if(Pais_id){

              $.ajax({
                 url : 'provincia/' +Pais_id,
                 type : "GET",
                 dataType : "json",
                 success:function(data)
                 {
                    console.log(data);
                    $('select[name="provinciaI"]');
                    $.each(data, function(key, value){ 
                       $('select[name="provinciaI"]').append('<option value="'+ key +'">'+ value+'</option>');
                    });
                 }
              });
           } 
           else
           {
              $('select[name="state"]');
           }
        });

        $('select[id="provinciaI"]').on('change',function(){

            var option = $('#provinciaI').find(":selected").text();

           var Provincia_id = jQuery(this).val();

           if(Provincia_id)
           {
              $.ajax({
                 url : 'municipio/' +Provincia_id,
                 type : "GET",
                 dataType : "json",
                 success:function(data) 
                 { 
                    console.log(data); 
                    $('select[name="municipioI"]');
                    $.each(data, function(key, value){ 
                       $('select[name="municipioI"]').append('<option style="width:100px" value="'+ key +'">'+ value +'</option>');
                    });
                 }
              });
           } 
           else
           {
              $('select[name="state"]').empty();
           }
        });
    });
</script>
<script type="text/javascript" src="assets/js/popper.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/lib/slick/slick.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
<script>
    'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0235'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.
</script>
<script src='../../../img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>
<!-- Mirrored from gambolthemes.net/html/workwise/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Oct 2018 09:39:01 GMT -->

</html>