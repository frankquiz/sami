
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse active">
        <ul class="nav in" id="side-menu">
           <!-- <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
                
            </li>
            -->
            <li>
                <a href="{{ url('/') }}"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
            </li>
            <li>
                <a href="#" class="active"><i class="fa fa-plus-circle"></i> Nuevo Servicio<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="{{ url('/pantallas/formseric') }}">Seric</a>
                    </li>
                    <li>
                        <a href="{{ url('/pantallas/formradiofonica') }}">Radiofonica</a>
                    </li>
                    <li>
                        <a href="{{ url('/pantallas/formpreciudadano') }}">P Ciudadano</a>
                    </li>
                    <li>
                        <a href="{{ url('/pantallas/formreferencia') }}">Referencia</a>
                    </li>
                    <li>
                        <a href="{{ url('/pantallas/formllamadatelefonica') }}">Llamada Telefonica</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#" class="active"><i class="fa fa-bar-chart-o fa-fw"></i> Status de Servicio <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="{{ url('/pantallas/listaserviciopendiente') }}">Servicios Pendiente</a>
                    </li>
                    <li>
                        <a href="{{ url('/pantallas/listaserviciopendienteporfinalizar') }}">Servicios por finalizar</a>
                    </li>
                </ul>
            </li>
            <!-- 
                    <li>
                        <a href="#" class="active"><i class="fa fa-columns"></i> Inventario<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="{{ url('/pantallas/cargadeinventario') }}">Cargar Inventario</a>
                            </li>
                            <li>
                                <a href="{{ url('/pantallas/descargadeinventario') }}">Descargar Inventario</a>
                            </li>
                        </ul>
                    </li>
                                 -->
                    <li>
                        <a href="#" class="active"><i class="fa fa-wrench fa-fw"></i> Recursos<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="{{ url('/pantallas/recursoparamedico') }}">Paramedicos</a>
                            </li>
                            <li>
                                <a href="{{ url('/pantallas/recursoconductor') }}">Conductores</a>
                            </li>
                            <li>
                                <a href="{{ url('/pantallas/recursounidad') }}">Unidades</a>
                            </li>
                            <li>
                                <a href="{{ url('/pantallas/formgestionproductos') }}">Productos y/o Equipos</a>
                            </li>
                        </ul>
                    </li>
            
            

            <!--Otra Opcion del Menu
            <li>
                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
            </li>

            -->
            



            <li>
                <a href="#" class="active"><i class="fa fa-files-o fa-fw"></i> Reportes<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                        <li>
                                <a href="{{ url('/pantallas/#') }}">Minutas</a>
                        </li>
                        <li>
                          <a href="#" class="active"><i class="fa fa-files-o fa-fw"></i> Servicios<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="panels-wells.html">Por Unidad</a>
                            </li>
                            <li>
                                <a href="panels-wells.html">Por Paramedico</a>
                            </li>
                            <li>
                                <a href="panels-wells.html">Por Conductor</a>
                            </li>
                            <li>
                                <a href="panels-wells.html">Por Fecha</a>
                            </li>
                        </ul>
                    
                        </li>
                    
                        <li>
                            <a href="#" class="active"><i class="fa fa-files-o fa-fw"></i> Inventario<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#">Carga de Inventario</a>
                            </li>
                            <li>
                                <a href="#">Descarga de Inventario</a>
                            </li>
                        </ul>
                        </li>



<!-- Otras opciones del Menu
                    <li>
                        <a href="buttons.html">Inventario</a>
                    </li>
                    
                    <li>
                        <a href="notifications.html">######</a>
                    </li>
                    <li>
                        <a href="typography.html">#####</a>
                    </li>
                    <li>
                        <a href="icons.html"> #####</a>
                    </li>
                    <li>
                        <a href="grid.html">#####</a>
                    </li>

                    Cerrando Opciones del Menu-->
                </ul>
                <!-- /.nav-second-level -->
            </li>
           
           
<!--
            <li class="active">
                <a href="#" class="active"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse in">
                    <li>
                        <a href="#" class="active">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#" class="active">Second Level Item</a>
                    </li>
                    <li class="active">
                        <a href="#" class="active">Third Level <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level collapse in">
                            <li>
                                <a href="#" class="active">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#" class="active">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#" class="active">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#" class="active">Third Level Item</a>
                            </li>
                        </ul>
                        
                    </li>
                </ul>
                
            </li>
            -->

            <li>

                <a href="#" class="active"><i class="fa fa-users"></i>Usuarios<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="{{ url('/pantallas/gestionusuarios') }}">Gestionar Usuarios</a>
                    </li>
                    
                </ul>
                
            </li>

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->