@extends('layouts.app')

@section('indexActive')

active

@stop
@section('titulo')

<span>Página de inicio</span>

@stop

@section('contenido')

<div class="col-md-3 col-md-offset-2">
    <img class="img-responsive thumbnail" src="{!! asset('img/jhonathan.jpg') !!}" alt="Jhonathan G A">
</div>
<div class="col-md-6">
    <div class="thumbnail">        
        <div class="caption">
            <h3>Jhonathan González Aguirre</h3>
            <p>Ingeniero de sistemas y telecomunicaciones, especialista tecnológico en desarrollo de aplicaciones móviles, estudiante de maestría en gestión y desarrollo de proyectos de software.<br><br> Excelente manejo de relaciones personales y gusto por realizar trabajos en equipo. Soy proactivo, creativo y propositivo, siento gran responsabilidad por la naturaleza y la sociedad, me gusta analizar problemáticas y resolverlas con estrategias y herramientas TIC.<br><br> Dispuesto a adquirir nuevos aprendizajes y a compartir conocimiento, apasionado por el emprendimiento y los eventos de tecnología.</p>
        </div>
    </div>
</div>

@stop