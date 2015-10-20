@extends('base')

@section('content')

	<nav class="navbar navbar-default navbar-static-top active" role="navigation">

		@include('layout/nav-top')

		@include('layout/side-bar')

	</nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="page-header">Usuarios del Sistema</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="lol" id="morris-area-chart"></div>
            <div class="lol" id="morris-bar-chart"></div>
            <div class="lol" id="morris-donut-chart"></div>
                                  
            
            <div class="col-lg-6">
                                                                        
                                    <h3>Crear nuevo</h3> 
                                    <form id="formulariousuarios" role="form" method="POST" action="/pantallas/formcrearusuarios">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Nombre:</label>
                                            <input type="text"  class="form-control" id="inombre_usuario" name="inombre_usuario"placeholder="Ejemplo: Juan Pablo" required >
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputWarning">apellido :</label>
                                            <input type="text" class="form-control" id="iapellido_usuario" name="iapellido_usuario"placeholder="Ejemplo: Garcia Rodriguez" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputError">Cedula de Identidad</label>
                                            <input type="number" class="form-control" id="ici_usuario" name="ici_usuario" placeholder="Ejemplo: 16123654" required>
                                        </div>

                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Correo Electronico:</label>
                                            <input type="email" class="form-control" id="icorreo_usuario" name="icorreo_usuario" placeholder="Ejemplo: pedroperez@gmail.com.ve" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Nombre o cuenta de Usuario:</label>
                                            <input type="text" class="form-control" id="icuenta_usuario" name="icuenta_usuario" placeholder="Ejemplo: Pperez16"required>
                                        </div>
                                         <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Contraseña:</label>
                                            <input type="password" class="form-control" id="icontraseña_usuario" name="icontraseña_usuario" placeholder="Ejemplo: 123456**" required>
                                        </div>
                                                                 
                                        <p align="center">
                                
                                            <button type="submit" class="btn btn-outline btn-success">Registrar</button>

                                        </p>

                                    </form>
                                    
                                
        </div>
        <!-- /#page-wrapper -->



@endsection
