@extends('base')

@section('content')

	<nav class="navbar navbar-default navbar-static-top active" role="navigation" style="margin-bottom: 0">

		@include('layout/nav-top')

		@include('layout/side-bar')

	</nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Medicamentos y Equipos Medicos</h1>
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
                            Almacen 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                             <th>Cod</th>
                                             <th>nombre de producto</th>
                                             <th>presentacion de producto</th>
                                             <th>cantidad del producto</th>
                                             <th>Opciones</th>
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($listaproduct as $value)
                                        <tr>
                                            <td>{{$value->id_producto}}</td>
                                            <td>{{$value->nombre_producto}}</td>
                                            <td>{{$value->presentacion_producto}}</td>
                                            <td>{{$value->cantidad_producto}}</td>
                                            <td><a href="**" class="btn btn-outline btn-success">+</a></td>
                                            <td><a href="**" class="btn btn-outline btn-danger">-</a></td>


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