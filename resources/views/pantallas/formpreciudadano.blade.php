@extends('base')

@section('content')

	<nav class="navbar navbar-default navbar-static-top active" role="navigation" style="margin-bottom: 0">

		@include('layout/nav-top')

		@include('layout/side-bar')

	</nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">PRESENTACION DE CIUDADANO</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="lol" id="morris-area-chart"></div>
            <div class="lol" id="morris-bar-chart"></div>
            <div class="lol" id="morris-donut-chart"></div>
                                  
            
            <div class="col-lg-6">
                                                                        
                                    <h1>Planilla</h1>
                                    <form id="formulariopciudadano" role="form">

                                    	<div class="form-group has-error">
                                            <label class="control-label" for="inputError">Nombre Del Solicitante:</label>
                                            <input style="width:200px;" type="text" class="form-control" id="inombre_solicitante" placeholder="Ejemplo: Pedro Perez">
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Cedula Del Solicitante:</label>
                                            <input style="width:200px;" type="text" class="form-control" id="ici_solicitante" placeholder="Ejemplo: V-123456">
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputWarning">Telefono del Solicitante:</label>
                                            <input type="tel" style="width:200px;" class="form-control" id="itelf_solicitante">
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="inputError">Nombre del Paciente:</label>
                                            <input style="width:200px;" type="text" class="form-control" id="inombre_paciente" placeholder="Ejemplo: Pedro Perez">
                                        </div>

                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Edad del Paciente</label>
                                            <input style="width:70px;"type="number" class="form-control" id="iedad_paciente" placeholder="0">
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">IDX del Paciente:</label>
                                            <input type="text" class="form-control" id="iidx_paciente" placeholder="Descripcion o estatus del paciente">
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputWarning">Direccion de la Emergencia:</label>
                                            <input type="text" class="form-control" id="idireccion_emergencia" placeholder="Direccion de la Emergencia">
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="inputError">Fecha del Servicio:</label>
                                            <input type="date" class="form-control" id="ifecha_servicio">
                                        </div>

                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Hora del Servicio:</label>
                                            <input style="width:130px;" type="time" class="form-control" id="ihora_servicio">
                                        </div>
                                    </form>

                             <p align="center">
                                
                                <button type="button" class="btn btn-outline btn-success">Procesar</button>

                                <button type="button" class="btn btn-outline btn-info">Limpiar</button>
                                
                                <button type="button" class="btn btn-outline btn-danger">Cancelar</button>
                                
                            </p>
                                    
                                
        </div>
        <!-- /#page-wrapper -->



@endsection

