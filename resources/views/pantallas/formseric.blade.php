@extends('base')

@section('content')

	<nav class="navbar navbar-default navbar-static-top active" role="navigation">

		@include('layout/nav-top')

		@include('layout/side-bar')

	</nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">S.E.R.I.C</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="lol" id="morris-area-chart"></div>
            <div class="lol" id="morris-bar-chart"></div>
            <div class="lol" id="morris-donut-chart"></div>
                                  
            
            <div class="col-lg-6">
                                                                        
                                    <h1>Planilla</h1>
                                    <form id="formularioseric" role="form" method="POST" action="/pantallas/formseric">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Hora de Solicitud:</label>
                                            <input style="width:130px;" type="time"  class="form-control" id="ihora_solicitud" name="ihora_solicitud" required>
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputWarning">Hora de Servicio:</label>
                                            <input  style="width:130px;" type="time" class="form-control" id="ihora_servicio" name="ihora_servicio" required>
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="inputError">Nombre Operador S.E.R.I.C</label>
                                            <input style="width:200px;" type="text" class="form-control" id="inombre_operador_seric" name="inombre_operador_seric" placeholder="Ejemplo: Pedro Perez" required>
                                        </div>

                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Cedula de Identidad del Operador:</label>
                                            <input style="width:200px;" type="num" class="form-control" id="ici_operador_seric" name="ici_operador_seric" placeholder="Ejemplo: V-123456" required>
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
