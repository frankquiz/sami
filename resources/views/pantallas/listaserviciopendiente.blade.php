@extends('base')

@section('content')

	<nav class="navbar navbar-default navbar-static-top active" role="navigation" style="margin-bottom: 0">

		@include('layout/nav-top')

		@include('layout/side-bar')

	</nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Servicios Pendientes no Procesados</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="lol" id="morris-area-chart"></div>
            <div class="lol" id="morris-bar-chart"></div>
            <div class="lol" id="morris-donut-chart"></div>
                                  
                    
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Asignacion de Servicios
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th><i class='fa fa-clock-o'></i> Hora de solicitud</th>
                                            <th>Hora servicio</th>
                                            <th>Nombre operador seric</th>
                                            <th>Cedula operador</th>
                                            <th>Nombre Solicitante</th>
                                            <th>Cedula solicitante</th>
                                            <th>telefono solicitante</th>
                                            <th>nombre paciente</th>
                                            <th>Idx paciente</th>
                                            <th>Edad Paciente</th>
                                            <th>direccion de emergencia</th>
                                            <th>facha del servicio</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Servicio as $value)
                                        <tr>
                                            <td><a href="asignacion_servicio_pendiente/{{$value->id_servicio }}  ">{{$value->hora_solicitud_servicio }}</a></td>
                                            <td>{{$value->hora_de_servicio}}</td>
                                            <td>{{$value->nombre_operador_seric}}</td>
                                            <td>{{$value->ci_operador_seric}}</td>
                                            <td>{{$value->nombre_solicitante}}</td>
                                            <td>{{$value->cedula_solicitante}}</td> 
                                            <td>{{$value->telefono_solicitante}}</td>
                                            <td>{{$value->nombre_paciente}}</td>
                                            <td>{{$value->idx_paciente}}</td>
                                            <td>{{$value->edad_paciente}}</td>
                                            <td>{{$value->direccion_emergencia}}</td>
                                            <td>{{$value->facha_del_servicio}}</td>
                                          
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>

       </div>
                 
        <!-- /#page-wrapper -->



@endsection