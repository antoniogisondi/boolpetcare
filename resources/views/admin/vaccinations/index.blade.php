@extends('layouts.admin')

@section('content')

<div class="container">
<div class="col-12 col-sm-6 col-md-3 my-5">
  <a href="{{route('admin.vaccinations.create')}}" class="btn btn-primary">Aggiungi un vaccino</a>
</div>


    <div class="card">
      <div class="card-header">
        <h3>I nostri vaccini</h3>
      </div>
      <div class="card-body">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome vaccino</th>
                <th scope="col">Data vaccino</th>
                <th scope="col">Visualizza/Modifica/Elimina</th>
              </tr>
            </thead>
            <tbody>
                @foreach($vaccinations as $vaccination)
                  <tr >
                    <th scope="row">{{$vaccination->id}}</th>
                    <td>{{$vaccination->vaccine_name}}</td>
                    <td>{{$vaccination->vaccination_date}}</td>
                    <td>
                      <div class="d-flex align-items-center justify-content-between my-content">
                          <a href="{{route('admin.vaccinations.show', $vaccination->id)}}"><i class="fa-solid fa-eye"></i></a>
                          <a href="{{route('admin.vaccinations.edit', $vaccination->id)}}" class="mx-3"><i class="fa-solid fa-pen-to-square text-warning"></i></a>
                          <form class="form-delete" action="{{route('admin.vaccinations.destroy', $vaccination->id)}}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn text-danger">
                                  <i class="fa-solid fa-trash-can"></i>
                              </button>
                          </form>
                      </div>
                    </td>
                  </tr>
                @endforeach
            </tbody>   
        </table>
      </div>
    </div>
</div>
@include('admin.partials.modal_delete')
@endsection