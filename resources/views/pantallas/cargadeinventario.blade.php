@extends('base')

@section('content')

	<nav class="navbar navbar-default navbar-static-top active" role="navigation" style="margin-bottom: 0">

		@include('layout/nav-top')

		@include('layout/side-bar')

	</nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Carga de Inventario</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="lol" id="morris-area-chart"></div>
            <div class="lol" id="morris-bar-chart"></div>
            <div class="lol" id="morris-donut-chart"></div>
                                  
            
            <div class="col-lg-6">
                                                                        
                                    <h1>Planilla</h1>
                                    <form id="formulario_carga_inventario" role="form">

                                        <div class="form-group input-group">
                                            <input type="text" class="form-control" placeholder="Buscar Producto">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>

                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputWarning">Codigo:</label>
                                            <input type="number" class="form-control" id="inputWarning" placeholder="Ejemplo: 123456">
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Nombre del Producto:</label>
                                            <input type="text" class="form-control" id="inputSuccess" placeholder="Ejemplo: Acetaminofen">
                                        </div>

                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Fecha:</label>
                                            <input type="date" class="form-control" id="inputSuccess">
                                        </div>

                                        <div class="form-group has-error">
                                            <label class="control-label" for="inputError">Procedencia:</label>
                                            <select class="form-control" id="inputError">
                                              <option value="CorpoSalud">CorpoSalud</option>
                                              <option value="Gobernación">Gobernación</option>
                                              <option value="Alcaldia">Alcaldía</option>
                                            </select>
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputWarning">Cantidad:</label>
                                            <input type="number" class="form-control" id="inputWarning" placeholder="Ingrese Cantidad">
                                        </div>
                                        

                                        
                                    </form>

                             <p align="center">
                                
                                <button type="button" class="btn btn-outline btn-success">Cargar</button>

                                <button type="button" class="btn btn-outline btn-info">Limpiar</button>
                                
                                <button type="button" class="btn btn-outline btn-danger">Cancelar</button>
                                
                            </p>
                                    
                                
        </div>
        <!-- /#page-wrapper -->



@endsection