@extends('base')

@section('content')

	<nav class="navbar navbar-default navbar-static-top active" role="navigation">

		@include('layout/nav-top')

		@include('layout/side-bar')

	</nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Llamada Radiofonica</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="lol" id="morris-area-chart"></div>
            <div class="lol" id="morris-bar-chart"></div>
            <div class="lol" id="morris-donut-chart"></div>
                                  
            
            <div class="col-lg-6">
                                                                        
                                    <h1>Planilla</h1>
                                    <form id="formradiofonica" role="form" method="POST" action="/pantallas/formradiofonica">
                                    <form  id="formularioradiofonica" role="form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    	<div class="form-group has-error">
                                            <label class="control-label" for="inputError">Nombre Del Solicitante</label>
                                            <input style="width:200px;" type="text" class="form-control" id="inombre_solicitante" name="inombre_solicitante" placeholder="Ejemplo: Pedro Perez" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Hora de Solicitud:</label>
                                            <input style="width:130px;" type="time" class="form-control" id="ihora_solicitud" name="ihora_solicitud">
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputWarning">IDX del Paciente:</label>
                                            <input type="text" class="form-control" id="iidx_paciente" name="iidx_paciente" placeholder="Diagnostico del paciente" required>
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="inputError">Edad del Paciente:</label>
                                            <input  style="width:70px;"type="number" class="form-control" id="iedad" name="iedad" placeholder="0" required>
                                        </div>

                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Direccion de la Emergencia:</label>
                                            <input type="textrea" class="form-control" id="idireccion_emergencia" name="idireccion_emergencia" placeholder="Direccion de la Emergencia" required>
                                        </div>
                                
                                        <p align="center">
                                
                                            <button type="submit" class="btn btn-outline btn-success">Procesar</button>
                                
                                            <button type="reset" class="btn btn-outline btn-info">Limpiar</button>
                                
                                            <button type="button" class="btn btn-outline btn-danger">Cancelar</button>
                                
                                        </p>
                                    

                                    </form>

                           
                                
        </div>
        <!-- /#page-wrapper -->



@endsection
