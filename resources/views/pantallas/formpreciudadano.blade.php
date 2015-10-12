@extends('base')

@section('content')

	<nav class="navbar navbar-default navbar-static-top active" role="navigation" style="margin-bottom: 0">

		@include('layout/nav-top')

		@include('layout/side-bar')

	</nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Presentacion de Ciudadano</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="lol" id="morris-area-chart"></div>
            <div class="lol" id="morris-bar-chart"></div>
            <div class="lol" id="morris-donut-chart"></div>
                                  
            
            <div class="col-lg-6">
                                                                        
                                    <h1>Solicitud de servicio</h1>
                                    <form id="formpreciudadano" role="form" method="POST" action="/pantallas/formpreciudadano">
                                    <form id="formulariopciudadano" role="form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    	<div class="form-group has-success">
                                            <label class="control-label" for="inputError">Nombre Del Solicitante:</label>
                                            <input type="text" class="form-control" id="inombre_solicitante" name="inombre_solicitante" placeholder="Ejemplo: Pedro Perez" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Cedula Del Solicitante:</label>
                                            <input type="text" class="form-control" id="ici_solicitante" name="ici_solicitante" placeholder="Ejemplo: V-123456" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputWarning">Telefono del Solicitante:</label>
                                            <input type="num" class="form-control" id="itelf_solicitante" name="itelf_solicitante" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputError">Nombre del Paciente:</label>
                                            <input type="text" class="form-control" id="inombre_paciente" name="inombre_paciente" placeholder="Ejemplo: Pedro Perez" required>
                                        </div>

                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Edad del Paciente</label>
                                            <input type="number" class="form-control" id="iedad_paciente" name="iedad_paciente" placeholder="0" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">IDX del Paciente:</label>
                                            <input type="text" class="form-control" id="iidx_paciente" name="iidx_paciente" placeholder="Diagnostico del paciente"required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputWarning">Direccion de la Emergencia:</label>
                                            <input type="text" class="form-control" id="idireccion_emergencia" name="idireccion_emergencia"  placeholder="Direccion de la Emergencia"required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputError">Fecha del Servicio:</label>
                                            <input type="date" class="form-control" id="ifecha_servicio" name="ifecha_servicio" required>
                                        </div>

                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Hora del Servicio:</label>
                                            <input type="time" class="form-control" id="ihora_servicio" name="ihora_servicio"required>
                                        </div>

                                   <p align="center">
                                
                                       <button type="submit" class="btn btn-outline btn-success">Registrar</button>
                                                                   
                                   </p>


                                    </form>

                             
                                    
                                
        </div>
        <!-- /#page-wrapper -->



@endsection

