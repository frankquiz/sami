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
         <HTML>

<BODY>
          <FORM ACTION="/pantallas/post_asignacion_servicio_pendiente/" METHOD="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id_servicio" value="{{ $id }}">

            <SELECT NAME="paramedico">
               <OPTION VALUE="">Seleccione paramedico...</OPTION>
                @foreach ($paramedicos as $paramedico)
                  <OPTION VALUE="{{$paramedico->id_persona}}">{{$paramedico->nombre_persona}}</OPTION>
                   
                @endforeach              
                      
             
            </SELECT>
                           
               
            <SELECT NAME="conductor">
               <option>Seleccione Conductor...</option>
                @foreach ($conductores as $conductor)
                  <OPTION VALUE="{{$conductor->id_persona}}">{{$conductor->nombre_persona}}</OPTION>
                   
                @endforeach  
                      
             </SELECT>
                
            <SELECT NAME="unidad">
                <option>Seleccione Unidad...</option>
                @foreach ($unidades as $unidad)
                  <OPTION VALUE="{{$unidad->id_unidad}}">{{$unidad->numero_unidad}}</OPTION>
                @endforeach 
             </SELECT>

                <BR><BR>
 
                <button type="submit" class="btn btn-outline btn-success">Asignar Servicio</button>

        </FORM>

    </BODY>
</HTML> 
    </div>


 </div>
                 
        <!-- /#page-wrapper -->



@endsection