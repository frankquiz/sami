@extends('base')

@section('content')

	<nav class="navbar navbar-default navbar-static-top active" role="navigation" style="margin-bottom: 0">

		@include('layout/nav-top')

		@include('layout/side-bar')

	</nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <h1>hola</h1>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                        </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        
                        <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart Example
                                </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                                    <a href="#" class="btn btn-default btn-block">View Details</a>
                                </div>
                            <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->

                            
                        </div>
                     
                        
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



@endsection
