@extends('base')

@section('content')

	<nav class="navbar navbar-default navbar-static-top active" role="navigation" style="margin-bottom: 0">

		@include('layout/nav-top')

		@include('layout/side-bar')

	</nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registro de unidades</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="lol" id="morris-area-chart"></div>
            <div class="lol" id="morris-bar-chart"></div>
            <div class="lol" id="morris-donut-chart"></div>
                                  
            
            <div class="col-lg-6">
                                                                        
                                    
                                    <form id="formunidad" role="form" method="POST" action="/pantallas/formunidad">
                                    <form id="formulariounidad" role="form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    	<div class="form-group has-error">
                                            <label class="control-label" for="inputError">Placa del Vehiculo:</label>
                                            <input style="width:200px;" type="text" class="form-control" id="iplaca_unidad" name="iplaca_unidad" placeholder="Ejemplo: FR123AD" required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Numero Distintivo:</label>
                                            <input style="width:200px;" type="text" class="form-control" id="inumero_unidad" name="inumero_unidad" placeholder="Ejemplo: A01" required>
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputWarning">Modelo del Vehiculo:</label>
                                            <input type="num" style="width:200px;" class="form-control" id="imodelo_unidad" name="imodelo_unidad" placeholder="F-150"required>
                                        </div>
                                   

                              

                                   <p align="center">
                                
                                       <button type="submit" class="btn btn-outline btn-success">Registrar</button>

                                  
                                
                                   </p>


                                    </form>

                             
                                    
                                
        </div>
        <!-- /#page-wrapper -->



@endsection