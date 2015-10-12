@extends('base')

@section('content')

	<nav class="navbar navbar-default navbar-static-top active" role="navigation" style="margin-bottom: 0">

		@include('layout/nav-top')

		@include('layout/side-bar')

	</nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Referencia Medica</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="lol" id="morris-area-chart"></div>
            <div class="lol" id="morris-bar-chart"></div>
            <div class="lol" id="morris-donut-chart"></div>
                                  
            
            <div class="col-lg-6">
                                                                        
                                    <h1>Solicitud de traslado</h1>
                                    <form id="formreferencia" role="form" method="POST" action="/pantallas/formreferencia">
                                    <form  id="formularioreferencia" role="form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">


                                    	<div class="form-group has-success">
                                            <label class="control-label" for="inputError">Centro Asistencial que Refiere:</label>
                                            <input type="text" class="form-control" id="icentro_asistencial_refiere" name="icentro_asistencial_refiere" placeholder="Ej.: Ambulatorio Madre Isabel" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Centro Asistencial Referido:</label>
                                            <input type="text" class="form-control" id="icentro_asistencial_referido" name="icentro_asistencial_referido" placeholder="Ej.: Hospital Victorino Santaella Ruiz" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputWarning">Hora de Solicitud:</label>
                                            <input type="time" class="form-control" id="ihora_solicitud" name="ihora_solicitud" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputError">Medico que Refiere:</label>
                                            <input type="text" class="form-control" id="imedico_refiere" name="imedico_refiere" placeholder="Ej.: DR. Pedro Perez" required>
                                        </div>

                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">S.A.S Medico:</label>
                                            <input type="text" class="form-control" id="isas_medico" name="isas_medico" placeholder=" Ej.:23258">
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Nombre del Paciente:</label>
                                            <input type="text" class="form-control" id="inombre_paciente" name="inombre_paciente" placeholder="Ej.: Juan Pacheco" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputWarning">Edad del Paciente:</label>
                                            <input type="number" class="form-control" id="iedad_paciente" name="iedad_paciente" placeholder="Ej.:40" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputError">IDX del Paciente:</label>
                                            <input type="text" class="form-control" id="iidx_paciente" name="iidx_paciente" placeholder="Ej.: Trauma Multisistemico" required>
                                        </div>

                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Cedula del Paciente:</label>
                                            <input type="text" class="form-control" id="ici_paciente" name="ici_paciente" placeholder="Ej.: V-16889564" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Nombre del Representante:</label>
                                            <input type="text" class="form-control" id="inombre_representante" name="inombre_representante" placeholder="Ej.:Juan Pacheco" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputWarning">Cedula del Representante:</label>
                                            <input type="text" class="form-control" id="ici_representante" name="ici_representante" placeholder=" Ej.: V-16889564" required>
                                        </div>

                                        <p align="center">
                                
                                            <button type="submit" class="btn btn-outline btn-success">Registrar</button>
                                                                   
                                        </p>


                                    </form>
                           
                                    
                                
        </div>
        <!-- /#page-wrapper -->



@endsection