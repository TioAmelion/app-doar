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
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo">
                                    </div>
                                    
                                    <div class="form-group col-md-8">
                                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input type="tel" class="form-control" id="telemovel" name="telemovel" placeholder="Telemóvel">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-4">
                                        <input type="text" class="form-control" id="nif" name="nif" placeholder="NIF">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <input type="date" class="form-control" name="data_nasc" id="data_nasc">
                                    </div>
                                  <div class="form-group col-md-auto">
                                    <input type="text" class="form-control" id="provincia" name="provincia" placeholder="Província">
                                  </div>
                                  <div class="form-group col-md-auto">
                                    <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Municipio">
                                  </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="form-group bg-dark col-md-12" style="color: white ;padding: 10px 10px">
                                        <span>Credências de Acesso ao Sistema</span>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Usuario">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Palavra passe">
                                    </div>
                                    <div class="form-group col-lg-6"> 
                                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Confirmar palavra passe"> 
                                    </div>
                                </div>
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                    {{ __('Já tens registro?') }}
                                </a> &nbsp;
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </form>
                        </div><!--post-topbar end-->
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
        </div><!--footy-sec end-->
    </div><!--sign-in-page end-->
    </div><!--theme-layout end-->

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/lib/slick/slick.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/js/disabled.js"></script>
</body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0235'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='../../../img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>
<!-- Mirrored from gambolthemes.net/html/workwise/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Oct 2018 09:39:01 GMT -->
</html>

