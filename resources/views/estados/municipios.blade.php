@extends('layouts.app')

@section('content')
<div class="container">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="mb-0">Municipios de: {{ $estado->nombre }}</h3>
    <a class="btn btn-secondary btn-sm" href="{{ route('estados.index') }}">Volver</a>
  </div>

  <div class="card">
    <div class="card-body">
      @if(empty($municipios))
        <div class="alert alert-warning mb-0">No se recibieron municipios desde COPOMEX.</div>
      @else
        <ul class="list-group">
          @foreach($municipios as $m)
            <li class="list-group-item">{{ $m }}</li>
          @endforeach
        </ul>
      @endif
    </div>
  </div>
</div>
@endsection