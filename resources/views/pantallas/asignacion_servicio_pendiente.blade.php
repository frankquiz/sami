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
            <FORM ACTION="id_persona" METHOD="$_POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <SELECT NAME="paramedico" SIZE="1">
               <OPTION VALUE="">Seleccione paramedico...</OPTION>
               <OPTION VALUE="paramedico1">paramedico1</OPTION>
               <OPTION VALUE="paramedico2">paramedico2</OPTION>
               <OPTION VALUE="paramedico3">paramedico3</OPTION>
               <OPTION VALUE="paramedico4">paramedico4</OPTION>
               <OPTION VALUE="paramedico5">paramedico5</OPTION>
                      
             
            </SELECT>
                           
               
            <SELECT NAME="Conductor">
               <option>Seleccione Conductor...</option>
               <OPTION VALUE="conductor1">conductor1</OPTION>
               <OPTION VALUE="conductor2">conductor2</OPTION>
               <OPTION VALUE="conductor3">conductor3</OPTION>
               <OPTION VALUE="conductor4">conductor4</OPTION>
               <OPTION VALUE="conductor5">conductor5</OPTION>
                      
             </SELECT>
                
            <SELECT NAME="Unidad">
                <option>Seleccione Unidad...</option>
                <OPTION VALUE="Unidad1">Unidad1</OPTION>
                <OPTION VALUE="Unidad2">Unidad2</OPTION>
                <OPTION VALUE="Unidad3">Unidad3</OPTION>
                <OPTION VALUE="Unidad4">Unidad4</OPTION>
                <OPTION VALUE="Unidad5">Unidad5</OPTION>
             </SELECT>

                <BR><BR>
 
                <button type="update" class="btn btn-outline btn-success">Asignar Servicio</button>

        </FORM>

    </BODY>
</HTML> 
    </div>


 </div>
                 
        <!-- /#page-wrapper -->



@endsection