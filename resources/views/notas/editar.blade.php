@extends('base')

@section('cuerpo')
  <h1>Editar</h1>
  @if (session('mensaje'))
      <div class="alert alert-success">
          {{ session('mensaje') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
      </div>
  @endif
  <form action="{{ route('notas.update', $nota->id) }}" method="POST">
    @method('PUT')
    @csrf
    
    <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value="{{ $nota->nombre }}">
    <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2" 
    value="{{ $nota->descripcion }}">
    <button class="btn btn-warning btn-block" type="submit">Editar</button>
  </form>
@endsection