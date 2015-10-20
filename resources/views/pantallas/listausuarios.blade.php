@extends('base')

@section('content')

	<nav class="navbar navbar-default navbar-static-top active" role="navigation" style="margin-bottom: 0">

		@include('layout/nav-top')

		@include('layout/side-bar')

	</nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Usuarios del sistema</h2>
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
                            Registrados 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                             <th>Cod</th>
                                             <th>Nombre</th>
                                             <th>Apellido</th>
                                             <th>cedula de Identidad</th>
                                             <th>correo Electronico</th>
                                             <th>Cuenta del Sistema</th>
                                             <th>Contraseña</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($listausuario as $value)
                                        <tr>
                                            <td>{{$value->id_usuario}}</td>
                                            <td>{{$value->nombre_usuario}}</td>
                                            <td>{{$value->apellido_usuario}}</td>
                                            <td>{{$value->ci_usuario}}</td>
                                            <td>{{$value->correo_usuario}}</td>
                                            <td>{{$value->cuenta_usuario}}</td>
                                            <td>{{$value->contraseña_usuario}}</td>
                                          
                                            
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