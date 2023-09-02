@extends('layouts.admin')

@section('content')

<div class="container">
<div class="col-12 col-sm-6 col-md-3 my-5 w-100">
  <div class="d-flex justify-content-between">
    <div>
      <a href="{{route('admin.illnesses.create')}}" class="btn btn-primary">Aggiungi una malattia</a>
    </div>
    <div>
      <a href="{{route('admin.illnesses.index')}}" class="btn btn-primary">Lista delle malattie</a>
    </div>
  </div>
</div>
<form action="{{ route('admin.pets.index') }}" method="GET">
  @csrf
  <div class="input-group mb-3">
      <input type="text" class="form-control" name="keyword" placeholder="Cerca per nome">
      <input type="text" class="form-control mx-3" name="species" placeholder="Cerca per specie">
      <div class="input-group-append">
          <button class="btn btn-outline-secondary mx-3" type="submit">Cerca</button>
      </div>
  </div>
</form>


    <div class="card">
      <div class="card-header">
        <h3>Le nostre malattie diagnosticate</h3>
      </div>
      <div class="card-body">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Slug</th>
                <th scope="col">Diagnosi</th>
                <th scope="col">Trattamento</th>
                <th scope="col">Note</th>
                <th scope="col">Visualizza/Modifica/Elimina</th>
              </tr>
            </thead>
            <tbody>
                @foreach($illnesses as $illness)
              <tr >
                <th scope="row">{{$illness->id}}</th>
                <td>{{$illness->name}}</td>
                <td>{{$illness->slug}}</td>
                <td>{{$illness->diagnosis}}</td>
                <td>{{$illness->treatment}}</td>
                <td>{{$illness->notes}}</td>
                <td>
                  <div class="d-flex align-items-center justify-content-between my-content">
                      <a class="btn btn-sm btn-primary" href="{{route('admin.illnesses.show', $illness->id)}}"><i class="fa-solid fa-eye"></i></a>
                      <a class="btn btn-sm btn-warning" href="{{route('admin.illnesses.edit', $illness->id)}}" class="mx-3"><i class="fa-solid fa-pen-to-square"></i></a>
                      <form class="form-delete" action="{{route('admin.illnesses.destroy', $illness->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">
                              <i class="fa-solid fa-trash-can"></i>
                          </button>
                      </form>
                  </div>
                </td>
              </tr>
            </tbody>
          @endforeach
        </table>
      </div>
    </div>
</div>
@include('admin.partials.modal_delete')
@endsection