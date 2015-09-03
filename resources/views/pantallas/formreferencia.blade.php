@extends('base')

@section('content')

	<nav class="navbar navbar-default navbar-static-top active" role="navigation" style="margin-bottom: 0">

		@include('layout/nav-top')

		@include('layout/side-bar')

	</nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">REFERENCIA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="lol" id="morris-area-chart"></div>
            <div class="lol" id="morris-bar-chart"></div>
            <div class="lol" id="morris-donut-chart"></div>
                                  
            
            <div class="col-lg-6">
                                                                        
                                    <h1>Planilla</h1>
                                    <form  id="formularioreferencia" role="form">

                                    	<div class="form-group has-error">
                                            <label class="control-label" for="inputError">Centro Asistencial que Refiere:</label>
                                            <input type="text" class="form-control" id="icentro_asistencial_refiere" placeholder="Centro Asistencial que Refiere" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Centro Asistencial Referido:</label>
                                            <input type="text" class="form-control" id="icentro_asistencial_referido" placeholder="Centro Asistencial Referido" required>
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputWarning">Hora de Solicitud:</label>
                                            <input style="width:130px;" type="time" class="form-control" id="ihora_solicitud" required>
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="inputError">Medico que Refiere:</label>
                                            <input style="width:200px;" type="text" class="form-control" id="imedico_refiere" placeholder="Medico que Refiere" required>
                                        </div>

                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">S.A.S Medico:</label>
                                            <input style="width:200px;" type="text" class="form-control" id="isas_medico" placeholder="S.A.S Medico">
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Nombre del Paciente:</label>
                                            <input style="width:200px;" type="text" class="form-control" id="inombre_paciente" placeholder="Nombre del Paciente" required>
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputWarning">Edad del Paciente:</label>
                                            <input style="width:70px;" type="number" class="form-control" id="iedad_paciente" placeholder="0">
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="inputError">IDX del Paciente:</label>
                                            <input type="text" class="form-control" id="iidx_paciente" placeholder="IDX del Paciente">
                                        </div>

                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Cedula del Paciente:</label>
                                            <input style="width:200px;" type="text" class="form-control" id="ici_paciente" placeholder="Cedula de Identidad" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Nombre del Representante:</label>
                                            <input style="width:200px;" type="text" class="form-control" id="inombre_representante" placeholder="Nombre del Representante">
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputWarning">Cedula del Representante:</label>
                                            <input style="width:200px;" type="text" class="form-control" id="ici_representante" placeholder=" Cedula del Identidad">
                                        </div>
                                    </form>

                             <p align="center">
                                
                                <button type="button" class="btn btn-outline btn-success">Procesar</button>

                                <button type="reset" class="btn btn-outline btn-info">Limpiar</button>
                                
                                <button type="button" class="btn btn-outline btn-danger">Cancelar</button>
                                
                            </p>
                                    
                                
        </div>
        <!-- /#page-wrapper -->



@endsection