@extends('base')

@section('content')

	<nav class="navbar navbar-default navbar-static-top active" role="navigation" style="margin-bottom: 0">

		@include('layout/nav-top')

		@include('layout/side-bar')

	</nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Unidades</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="lol" id="morris-area-chart"></div>
            <div class="lol" id="morris-bar-chart"></div>
            <div class="lol" id="morris-donut-chart"></div>
                                  
              <div>
                   <table border="4">
                           <thead>
                               <th>id</th>
                               <th>placa</th>
                               <th>numeral</th>
                               <th>modelo</th>
                                             
                           </thead>

                           <tbody>

                               @foreach($listaunid as $value)
                            <tr>
                              <td>{{$value->id_unidad}}</td>
                              <td>{{$value->placa_unidad}}</td>
                              <td>{{$value->numero_unidad}}</td>
                              <td>{{$value->modelo_unidad}}</td>                                                                     
                            </tr>
                                
                                @endforeach

                          </tbody>> 
                   </table>>                     
                     
              </div>
       </div>
   
   
        <!-- /#page-wrapper -->



@endsection