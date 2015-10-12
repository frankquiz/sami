@extends('base')

@section('content')

	<nav class="navbar navbar-default navbar-static-top active" role="navigation" style="margin-bottom: 0">

		@include('layout/nav-top')

		@include('layout/side-bar')

	</nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Asignacion de Servicio</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="lol" id="morris-area-chart"></div>
            <div class="lol" id="morris-bar-chart"></div>
            <div class="lol" id="morris-donut-chart"></div>
                                  
        <div>
          
             
               <SELECT NAME="Conductor">
                        <option>Seleccione Conductor...</option>
               </SELECT>
               
               <SELECT NAME="Conductor">
                        <option>Seleccione Conductor...</option>
               </SELECT>
                
               <SELECT NAME="Unidad">
                        <option>Seleccione Unidad...</option>
               </SELECT>

                <BR><BR>
 
                <button type="update" class="btn btn-outline btn-success">Asignar Servicio</button>




      
                     
    </div>


 </div>
                 
        <!-- /#page-wrapper -->



@endsection