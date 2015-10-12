@extends('base')

@section('content')

    <nav class="navbar navbar-default navbar-static-top active" role="navigation" style="margin-bottom: 0">

        @include('layout/nav-top')

        @include('layout/side-bar')

    </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" align="center"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="lol" id="morris-area-chart"></div>
            <div class="lol" id="morris-bar-chart"></div>
            <div class="lol" id="morris-donut-chart"></div>

            <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            QUIENES SOMOS
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" style="text-align: justify;">
                            <p>Servicio Venezolano de salud  dedicada al servicio de ambulancias y  de asistencia médica domiciliaria. Iniciamos operaciones  en la ciudad de Los Teques Municipio Carrizal en el año XXXX, ofreciendo un servicio de calidad y  de rápida respuesta y hoy en día  con el apoyo de nuestros clientes, la alcaldia del municipio, el estado y de nuestro personal y de mantener un alto standard de eficiencia ,logrando consolidarnos como una de la mejor y la mas solida  alternativa de servicios  de emergencia  del municipio Carrizal., <a target="_blank" href="http://carrizal-miranda.gob.ve/web/">http://carrizal-miranda.gob.ve/web/</a>.</p>
                            <a target="_blank" class="btn btn-default btn-lg btn-block" href="https://www.facebook.com/Alcald%C3%ADa-de-Carrizal-198147443556562/timeline/">Ver mas Informacion de Nuestra Alcaldia</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Nuestros Servicios
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul style="text-align: justify;">                            
                                <li>Traslados  médicos  en ambulancias a nivel nacional: Servicio 24 horas / 365 Días de traslados de pacientes por afiliación o por solicitud para ingresos y egresos de clínicas y hospitales, traslados de Terapia Intensiva, traslados para estudios de resonancia e imagen,  rehabilitaciones y diálisis.</li>
                                <br>
                                <li>Asistencia Médica Domiciliaria por afiliación: Servicio 24 / 365  Consulta médica en el hogar o lugar de trabajo para emergencias y casos que ameriten la presencia de un medico general y un asistente equipados con  equipos  de primeros auxilios y maletín con medicamentos.</li> 
                                <br>
                                <li>Guardias de prevención: Cubrimos cualquier tipo de eventos corporativos, deportivos, musicales, proyectos de construcciones, centro comerciales  con  un servicio  de prevención de emergencias; unidades de ambulancia tipo I y II y personal profesional paramédico, médicos y operadores, las unidades están equipadas con  equipos médicos de monitoreo, traslado e inmovilización.</li> 
                                <br>
                                <li> Planes de afiliación corporativa: Servicio de asistencia médica domiciliaria  y traslados de emergencia dirigida a proteger y cubrir  el personal de empresas privadas y públicas tales como  industrias,  fabricas, comercios, colegios, clínicas, instituciones públicas, compañías de seguro, condominios, clubes etc.
</li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ambulancias y Equipos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <p>Disponemos de equipos capacitados para responder cualquier solicitud, entre los cuales tenemos:</p>
                            <p><strong><span class="panel-body">Unidades de Avance</span><br>
                  Renaul Kangoo</strong><br>
                  Año 2008<br>
                Aire acondicionado<br>
                <br>
                <strong><span class="panel-body">Equipos</span></strong><br>
                <strong>Monitores Multiparametros</strong><br>
                Marca Mindray Mec-100<br>
                Año 2008<br>
                <br>
                <strong>Monitores Desfibriladores</strong><br>
                Tipo Dea<br>
                Marca Combiomed<br>
                Año 2008<br>
                <br>
                <strong>Aspiradores de Gleras</strong><br>
                Marca Thomas<br>
                Tipo Portatil<br>
                Año 2008<br>
                <br>
                <strong>Ventilador Mecanico</strong><br>
                Marca Mecamed<br>
                Año 2008<br>
                <br>
                <strong>Equipo de Oxigeno Portatil</strong><br>
                Tipo E de Aluminio<br>
                Regulador<br>
                <br>
                <strong>Oxigeno Central</strong><br>
                Tipo M-90 Aluminio<br>
                Regulador Universal<br>
                <br>
                <strong>Laringoscopio<br>
                <br>
                Estetoscopios<br>
                <br>
                Tensiometros<br>
                <br>
                Equipo de ORL<br>
                <br>
                Equipo de Cirugia Menor<br>
                <br>
                Ambu Pediatrico<br>
                Ambu Adulto<br>
                <br>
                Camillas Telescopicas<br>
                <br>
                Camillas Scoop<br>
                <br>
                Tabla Long Board<br>
                <br>
                Collarines<br>
                Tallas: S,M,L<br>
                <br>
                Inmovilizador Cervical<br>
                <br>
                Maletin de Medicamentos <br>
                y Materiales</strong></p>

                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                                  
           
   
        <!-- /#page-wrapper -->



@endsection