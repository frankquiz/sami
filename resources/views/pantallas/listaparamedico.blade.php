@extends('base')

@section('content')

	<nav class="navbar navbar-default navbar-static-top active" role="navigation" style="margin-bottom: 0">

		@include('layout/nav-top')

		@include('layout/side-bar')

	</nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Personal Paramedico</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
                  

                      <div class="lol" id="morris-area-chart"></div>
                      <div class="lol" id="morris-bar-chart"></div>
                      <div class="lol" id="morris-donut-chart"></div>

             
              <div class="row">
                <div class="col-lg-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Activos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                             <th>Id</th>
                                             <th>Cedula</th>
                                             <th>Nombre</th>
                                             <th>Apellido</th>
                                             <th>Telefono</th>
                                             <th>Direccion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($listapersona as $value)
                                        <tr>
                                            <td>{{$value->id_persona }}</td>
                                            <td>{{$value->ci_persona}}</td>
                                            <td>{{$value->nombre_persona}}</td>
                                            <td>{{$value->apellido_persona}}</td>
                                            <td>{{$value->telefono_persona}}</td>
                                            <td>{{$value->direccion_persona}}</td>
                                            
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