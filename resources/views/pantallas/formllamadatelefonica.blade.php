@extends('base')

@section('content')

	<nav class="navbar navbar-default navbar-static-top active" role="navigation" style="margin-bottom: 0">

		@include('layout/nav-top')

		@include('layout/side-bar')

	</nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">LLAMADA TELEFONICA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="lol" id="morris-area-chart"></div>
            <div class="lol" id="morris-bar-chart"></div>
            <div class="lol" id="morris-donut-chart"></div>
                                  
            
            <div class="col-lg-6">
                                                                        
                                    <h1>Planilla</h1>
                                    <form role="form">
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Nombre del Solicitante:</label>
                                            <input  style="width:200px;" type="text" class="form-control" id="inombre_solicitante" placeholder="Nombre Solicitante" required>
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputWarning">Cedula del Solicitate:</label>
                                            <input style="width:200px;" type="text" class="form-control" id="ici_solicitante" placeholder="Cedula del Solicitante"  required>
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="inputError">Telefono del Solicitante:</label>
                                            <input style="width:200px;" type="tel" class="form-control" id="itelf_socilitante">
                                        </div>

                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Direccion de la Emergencia:</label>
                                            <input type="number" class="form-control" id="idireccion_emergencia" placeholder="Direccion de la Emergencia" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Nombre del Paciente:</label>
                                            <input  style="width:200px;" type="text" class="form-control" id="inombre_paciente" placeholder="Nombre del Paciente" required>
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputWarning">Edad del Paciente:</label>
                                            <input style="width:70px;" type="number" class="form-control" id="iedad_paciente" placeholder="0">
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="inputError">IDX del Paciente:</label>
                                            <input type="text" class="form-control" id="iidx_paciente" placeholder="IDX del paciente" required>
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