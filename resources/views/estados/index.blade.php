@extends('layouts.app')

@section('content')
<div class="container">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="mb-0">Estados</h3>
    <span class="text-muted">COPOMEX</span>
  </div>

  <table id="tablaEstados" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Estado</th>
        <th style="width:160px;">Acción</th>
      </tr>
    </thead>
    <tbody>
      @foreach($estados as $e)
      <tr>
        <td>{{ $e->nombre }}</td>
        <td class="text-center">
          <a class="btn btn-sm btn-primary" href="{{ route('estados.municipios', $e->id) }}">
            Ver municipios
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection

@push('scripts')
<script>
  $(function () {
    new DataTable('#tablaEstados', {
      pageLength: 10,
      order: [[0, 'asc']],
      language: {
        url: 'https://cdn.datatables.net/plug-ins/2.3.1/i18n/es-ES.json'
      }
    });
  });
</script>
@endpush
