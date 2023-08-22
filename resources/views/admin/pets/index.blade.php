@extends('layouts.admin')

@section('content')

<div class="container">
<div class="col-12 col-sm-6 col-md-3 my-5">
  <a href="{{route('admin.pets.create')}}" class="btn btn-primary">Aggiungi animale</a>
</div>

    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Specie</th>
            <th scope="col">Nato</th>
            <th scope="col">Proprietario</th>
            <th scope="col">Visualizza/Modifica/Elimina</th>
          </tr>
        </thead>
        <tbody>
            @foreach($pets as $pet)
          <tr >
            <th scope="row">{{$pet->id}}</th>
            <td>{{$pet->name}}</td>
            <td>{{$pet->species}}</td>
            <td>{{$pet->date_born}}</td>
            <td>{{$pet->owner}}</td>
            <td>
              <div class="d-flex align-items-center">
                  <a href="{{route('admin.pets.show', $pet->id)}}"><i class="fa-solid fa-eye"></i></a>
                  <a href="{{route('admin.pets.edit', $pet->id)}}" class="mx-3"><i class="fa-solid fa-pen-to-square text-warning"></i></a>
                  <form action="{{route('admin.pets.destroy', $pet->id)}}" method="POST" onsubmit="return confirm('Sei sicuro di voler cancellare ?!?!?!?')">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn text-danger">
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

@endsection