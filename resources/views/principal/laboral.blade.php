@extends('layouts.app')

@section('laboralActive')

active

@stop
@section('titulo')

<span>Información Laboral</span>

@stop
@section('contenido')

<div class="container">

    <div class="page-header text-center">
		<h1 id="">Información Laboral</h1>
	</div>    
	<div id="timeline"><div class="row timeline-movement timeline-movement-top">
    <div class="timeline-badge timeline-future-movement">
        <a href="#">
            <span class="glyphicon glyphicon-plus"></span>
        </a>
    </div>
    <div class="timeline-badge timeline-filter-movement">
        <a href="#">
            <span class="glyphicon glyphicon-time"></span>
        </a>
    </div>

</div>
<div class="row timeline-movement">

    <div class="timeline-badge">
        <span class="timeline-balloon-date-day"></span>
        <span class="timeline-balloon-date-month"></span>
    </div>


    <div class="col-sm-6  timeline-item">
        <div class="row">
            <div class="col-sm-11">
                <div class="timeline-panel credits">
                    <ul class="timeline-panel-ul">
                        <li><span class="importo">DOCENTE Universidad de Manizales, 2015 – 2016 - 2017</span></li>                                                
                    </ul>
                </div>

            </div>
        </div>
    </div>
        
</div>

<!--due -->

<div class="row timeline-movement">
    <div class="timeline-badge">
        <span class="timeline-balloon-date-day"></span>
        <span class="timeline-balloon-date-month"></span>
    </div>
    <div class="col-sm-offset-6 col-sm-6  timeline-item">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-11">
                <div class="timeline-panel debits">
                    <ul class="timeline-panel-ul">
                        <li><span class="importo">ANALISTA Y DESARROLLADOR, Tic Solutions Integration, 2015</span></li>                                                
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row timeline-movement">
    <div class="timeline-badge">
        <span class="timeline-balloon-date-day"></span>
        <span class="timeline-balloon-date-month"></span>
    </div>
    <div class="col-sm-6  timeline-item">
        <div class="row">
            <div class="col-sm-11">
                <div class="timeline-panel credits">
                    <ul class="timeline-panel-ul">                        
                        <li><span class="importo">INGENIERO DE SISTEMAS, Centro de Desarrollo Comunitario Versalles, 2015</span></li>                                                
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="row timeline-movement">
    <div class="timeline-badge">
        <span class="timeline-balloon-date-day"></span>
        <span class="timeline-balloon-date-month"></span>
    </div>
    <div class="col-sm-offset-6 col-sm-6  timeline-item">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-11">
                <div class="timeline-panel debits">
                    <ul class="timeline-panel-ul">
                        <li><span class="importo">INDEPENDIENTE - Proyectos de software</span></li>
                        <li><span class="causale">Adaris</span> </li>
                        <li><span class="causale">Nucleo Ingeniería</span> </li>
                        <li><span class="causale">Funnovatec</span> </li>
                        <li><span class="causale">Joint Venture</span> </li>
                        <li><span class="causale">DR Lukas Marcelo Ríos Giraldo</span> </li>
                        <li><span class="causale">Fundación Fadesco</span> </li>                        
                    </ul>
                </div>

            </div>
      
        </div>
    </div>
</div>

</div>
</div>

@stop