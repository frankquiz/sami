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
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Exampl
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>3326</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:29 PM</td>
                                                    <td>$321.33</td>
                                                </tr>
                                                <tr>
                                                    <td>3325</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:20 PM</td>
                                                    <td>$234.34</td>
                                                </tr>
                                                <tr>
                                                    <td>3324</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:03 PM</td>
                                                    <td>$724.17</td>
                                                </tr>
                                                <tr>
                                                    <td>3323</td>
                                                    <td>10/21/2013</td>
                                                    <td>3:00 PM</td>
                                                    <td>$23.71</td>
                                                </tr>
                                                <tr>
                                                    <td>3322</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:49 PM</td>
                                                    <td>$8345.23</td>
                                                </tr>
                                                <tr>
                                                    <td>3321</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:23 PM</td>
                                                    <td>$245.12</td>
                                                </tr>
                                                <tr>
                                                    <td>3320</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:15 PM</td>
                                                    <td>$5663.54</td>
                                                </tr>
                                                <tr>
                                                    <td>3319</td>
                                                    <td>10/21/2013</td>
                                                    <td>2:13 PM</td>
                                                    <td>$943.45</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
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

                    <!--
                    <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i>
                            Chat
                           
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-refresh fa-fw"></i> Refresh
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-check-circle fa-fw"></i> Available
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-times fa-fw"></i> Busy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-clock-o fa-fw"></i> Away
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                     cerrando comentario del div de arriba-->
                        <!-- /.panel-heading -->
                        <!--
                        <div class="panel-body">
                            
                            <ul class="chat">-->
                                <!--<li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                            </small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                -->
                               <!--
                               <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>-->
                                <!--
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>-->
                                <!--<li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 15 mins ago</small>
                                            <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>-->
                            <!--</ul>-->

                        <!--</div>-->
                        <!-- /.panel-body
                        <div class="panel-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Send
                                    </button>
                                </span>
                            </div>
                        </div>-->
                        <!-- /.panel-footer -->
                    <!--</div>-->
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



@endsection
