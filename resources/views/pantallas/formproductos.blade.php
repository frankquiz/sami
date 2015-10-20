@extends('base')

@section('content')

	<nav class="navbar navbar-default navbar-static-top active" role="navigation">

		@include('layout/nav-top')

		@include('layout/side-bar')

	</nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="lol" id="morris-area-chart"></div>
            <div class="lol" id="morris-bar-chart"></div>
            <div class="lol" id="morris-donut-chart"></div>
                                  
            
            <div class="col-lg-6">
                                                                        
                                    <h1>Crear Productos y/o Equipos </h1>
                                    <form id="formularioproductos" role="form" method="POST" action="/pantallas/formproductos">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Nombre producto:</label>
                                            <input class="form-control" id="inombre_producto" name="inombre_producto" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Presentacion:</label>
                                            <input class="form-control" id="ipresentacion_producto" name="ipresentacion_producto" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputWarning">cantidad:</label>
                                            <input type="number" class="form-control" id="icantidad_producto" name="icantidad_producto" required>
                                        </div>
                                       
                                    
                                        <p align="center">
                                
                                            <button type="submit" class="btn btn-outline btn-success">Registrar</button>

                                        </p>

                                    </form>
                                    
                                
        </div>
        <!-- /#page-wrapper -->



@endsection
