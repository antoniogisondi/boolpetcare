@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Modify Pets</h2>
                    <a href=" {{ route('admin.pets.index')}} " class="btn btn-secondary btn-sm">Pets</a>
                </div>
                <div>
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action=" {{ route('admin.pets.update', $pets->id) }} " method="POST">
                        @csrf
                        @method('PUT')
                        <form action=" {{ route('admin.pets.store') }} " method="POST">
                        @csrf
                        <div class="class-group">
                            <label class="control-label">Name</label>
                            <input type="text" id="name" name="name" class="form-control @error('name')is-invalid @enderror" placeholder="Name" value="{{ old('name') ?? $pet->name}}">
                            @error('name')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="class-group">
                            <label class="control-label">Species</label>
                            <input type="text" id="species" name="species" class="form-control @error('species')is-invalid @enderror" placeholder="Species" value="{{ old('species') ?? $pet->species}}">
                            @error('name')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="class-group">
                            <label class="control-label">Date born</label>
                            <input type="text" id="date_born" name="date_born" class="form-control @error('date_born')is-invalid @enderror" placeholder="Date born" value="{{ old('date_born') ?? $pet->date_born}}">
                            @error('date_born')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="class-group">
                            <label class="control-label">Genere</label>
                            <input type="text" id="genre" name="genre" class="form-control @error('genre')is-invalid @enderror" placeholder="Genere" value="{{ old('genre') ?? $pet->genre}}">
                            @error('genre')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="class-group">
                            <label class="control-label">Owner</label>
                            <input type="text" id="owner" name="owner" class="form-control @error('owner')is-invalid @enderror" placeholder="Owner" value="{{ old('owner') ?? $pet->owner}}">
                            @error('owner')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="class-group">
                            <label class="control-label">Notes</label>
                            <input type="text" id="notes" name="notes" class="form-control @error('notes')is-invalid @enderror" placeholder="Notes" value="{{ old('notes') ?? $pet->notes}}">
                            @error('notes')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="class-group my-3">
                            <button type="submit" class="btn btn-primary btn-success">Modify</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection