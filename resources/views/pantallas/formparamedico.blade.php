@extends('base')

@section('content')

	<nav class="navbar navbar-default navbar-static-top active" role="navigation" style="margin-bottom: 0">

		@include('layout/nav-top')

		@include('layout/side-bar')

	</nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registro de paramedicos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="lol" id="morris-area-chart"></div>
            <div class="lol" id="morris-bar-chart"></div>
            <div class="lol" id="morris-donut-chart"></div>
                                  
            
            <div class="col-lg-6">
                                                                        
                                    
                                    <form id="formparamedico" role="form" method="POST" action="/pantallas/formparamedico">
                                    <form id="formularioparamedico" role="form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    	<div class="form-group has-error">
                                            <label class="control-label" for="inputError">Nombre:</label>
                                            <input type="text" class="form-control" id="inombre_persona" name="inombre_persona" placeholder="Ejemplo: Pedro Perez" required>
                                        </div>
                                             <div class="form-group has-error">
                                            <label class="control-label" for="inputError">Apellido:</label>
                                            <input type="text" class="form-control" id="iapellido_persona" name="iapellido_persona" placeholder="Ejemplo: Pedro Perez" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Cedula de Identidad:</label>
                                            <input type="text" class="form-control" id="ici_persona" name="ici_persona" placeholder="Ejemplo: V-123456" required>
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputWarning">Telefono celular:</label>
                                            <input type="num" class="form-control" id="itelefono_persona" name="itelefono_persona" placeholder="02123832288" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Direccion de Habitacion</label>
                                            <input type="text" class="form-control" id="idireccion_persona" name="idireccion_persona" placeholder="" required>
                                        </div>
                                        
                                                                          
                                   <p align="center">
                                
                                       <button type="submit" class="btn btn-outline btn-success">Registrar</button>
                                   
                                   </p>

                               </form>
                          
                                    
                                
        </div>
        <!-- /#page-wrapper -->



@endsection