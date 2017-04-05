@extends('layouts.app')
@section('personalActive')

active

@stop
@section('titulo')

<span>Información personal</span>

@stop
@section('contenido')
<div class="page-header text-center">
    <h1 id="">Información Personal</h1>
</div>
<div class="col-md-3 col-md-offset-2">
    <img class="img-responsive thumbnail" src="{!! asset('img/jhonathan.jpg') !!}" alt="Jhonathan G A">
</div>
<div class="col-md-6">
    <div class="thumbnail">        
        <div class="caption">
            <h3>Jhonathan González Aguirre</h3>
            <p><b>Fecha de Nacimiento:</b> 20/06/1991</p>
            <p><b>Cédula:</b> 1053811510</p>
            <p><b>Dirección residencia:</b> carrera 23 # 40-99 apto 544</p>
            <p><b>Celular:</b> 301 264 8537</p>
            <p><b>Ciudad:</b> Manizales</p>
            <p><b>Correo:</b> proyectos@co-workers.com.co</p>
            <p><b>Correo2:</b> jhonathan.gonzaleza@autonoma.edu.co</p>
            <p><b>Profesión:</b> Ingeniero de sistemas y telecomunicaciones</p>
            
        </div>
    </div>
</div>

@stop