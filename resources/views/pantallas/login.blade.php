@extends('base')

@section('content')



<html lang="en"><head>



</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Por Favor Ingrese su Cuenta:</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Ingrese su Cuenta" name="cuenta" type="text" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="contraseña" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Recordar Contraseña
                                    </label>
                                </div>

                                

                                <!-- Change this to a button or input when using this as a form -->
                                <a href="{{ url('/') }}" class="btn btn-lg btn-success btn-block">Ingresar</a>
                                <!--<a href="{{ url('/') }}">Ingresar</a>-->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  


</body></html>

@endsection