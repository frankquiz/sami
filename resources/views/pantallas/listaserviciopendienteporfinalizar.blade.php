@extends('base')

@section('content')

	<nav class="navbar navbar-default navbar-static-top active" role="navigation" style="margin-bottom: 0">

		@include('layout/nav-top')

		@include('layout/side-bar')

	</nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">Servicios asignados por finalizar</h4>
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
                            Finalizar de Servicios
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th><i class='fa fa-clock-o'></i> Hora de solicitud</th>
                                            <th>Hora servicio</th>                                            
                                            <th>Nombre Paramedico</th>
                                            <th>Nombre Conductor</th>
                                            <th>cod Unidad</th>
                                            <th>Opciones</th>

                                           
                                          
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Servicio as $value)
                                        <tr>
                                            <td>{{$value->hora_solicitud_servicio }}</a></td>
                                            <td>{{$value->hora_de_servicio}}</td>
                                            <td>{{$value->getParamedico()}}</td>
                                            <td>{{$value->getConductor()}}</td>
                                            <td>{{$value->id_unidad}}</td>
                                            <td><a href="/pantallas/FormFinalizarServicios/{{$value->id_servicio }}" class="btn btn-outline btn-success">Finalizar</a></td>
                                            
                                            
                                            
                                          
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