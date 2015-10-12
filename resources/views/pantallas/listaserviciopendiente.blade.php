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
                                  
        <div>
                   <table border="4"> 
                           <thead>
                               <th>Hora</th>
                               <th>Hora servicio</th>
                               <th>Nombre operador seric</th>
                               <th>Cedula operador</th>
                               <th>Nombre Solicitante</th>
                               <th>Cedula solicitante</th>
                               <th>telefono solicitante</th>
                               <th>nombre paciente</th>
                           </thead>

                           <tbody>
                               @foreach($Servicio as $value)
                             <tr>

                              <td> <a href="asignacion_servicio_pendiente/{{$value->id_servicio }}  ">{{$value->hora_solicitud_servicio }}</td>
                              <td>{{$value->hora_de_servicio}}</td>
                              <td>{{$value->nombre_operador_seric}}</td>
                              <td>{{$value->ci_operador_seric}}</td>
                              <td>{{$value->nombre_solicitante}}</td>
                              <td>{{$value->cedula_solicitante}}</td> 
                              <td>{{$value->telefono_solicitante}}</td>
                              <td>{{$value->cedula_solicitante}}</td>
                              <td>{{$value->nombre_paciente}}</td>

                            </tr>
                                @endforeach
                          </tbody>> 
                   </table>>                     
                     
              </div>
       </div>
                 
        <!-- /#page-wrapper -->



@endsection