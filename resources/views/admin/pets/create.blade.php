@extends('layouts.admin')

@section('content')
{{-- prova --}}
    <div class="container">
        <div class="row">
            <div class="col-12 my-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Insert a new pets</h2>
                    <a href=" {{ route('admin.pets.index')}} " class="btn btn-secondary btn-sm">Gli animali della nostra clinica</a>
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
                    <form action=" {{ route('admin.pets.store') }} " method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="class-group">
                            <label class="control-label">Name</label>
                            <input type="text" id="name" name="name" class="form-control @error('name')is-invalid @enderror" placeholder="Name" value="{{ old('name') }}">
                            @error('name')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="class-group">
                            <label class="control-label">Species</label>
                            <input type="text" id="species" name="species" class="form-control @error('species')is-invalid @enderror" placeholder="Species" value="{{ old('species') }}">
                            @error('species')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="class-group">
                            <label class="control-label">Date born</label>
                            <input type="date" id="date_born" name="date_born" class="form-control @error('date_born')is-invalid @enderror" placeholder="Date born" value="{{ old('date_born') }}">
                            @error('date_born')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="class-group">
                            <label class="control-label">Genere</label>
                            <input type="text" id="genre" name="genre" class="form-control @error('genre')is-invalid @enderror" placeholder="Genere" value="{{ old('genre') }}">
                            @error('genre')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="class-group">
                            <label class="control-label">Owner</label>
                            <input type="text" id="owner" name="owner" class="form-control @error('owner')is-invalid @enderror" placeholder="Owner" value="{{ old('owner') }}">
                            @error('owner')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="class-group">
                            <label class="control-label">Notes</label>
                            <input type="text" id="notes" name="notes" class="form-control @error('notes')is-invalid @enderror" placeholder="Notes" value="{{ old('notes') }}">
                            @error('notes')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="form-group my-4">
                            <label class="control-label my-2">Vaccino:</label>
                            @foreach($vaccinations as $vaccination)
                                <div class="form-check">
                                    <input type="checkbox" name="vaccinations[]" id="vaccination_{{ $vaccination->id }}" value="{{ $vaccination->id }}" class="form-check-input @error('vaccinations') is-invalid @enderror">
                                    <label class="form-check-label">{{ $vaccination->vaccine_name }}</label>
                                </div>
                            @endforeach
                            @error('vaccinations')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group my-4">
                            <p>Seleziona le malattie</p>
                            @foreach ($illnesses as $illness)
                                <input type="checkbox" class="form-control-check" value="{{ $illness->id }}" name="illnesses[]" {{ in_array($illness->id , old('illnesses', [])) ? 'checked' : ''}}>
                                <label class="form-control-label">{{ $illness->name }}</label>
                            @endforeach
                        </div>
                        <div class="col-12 my-3">
                                <!-- Immagine -->
                                <label class="control-label my-3">Immagine</label>
                                <input type="file" name="image" id="image" placeholder="Inserisci la tua immagine" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}">
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        <div class="class-group my-3">
                            <button type="submit" class="btn btn-primary btn-success">Crea</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection