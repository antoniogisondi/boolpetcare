@extends('layouts.admin')

@section('content')
{{-- prova --}}
    <div class="container">
        <div class="row">
            <div class="col-12 my-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Insert a new vaccination</h2>
                    <a href=" {{ route('admin.vaccinations.index')}} " class="btn btn-secondary btn-sm">Lista vaccini</a>
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
                    <form action=" {{ route('admin.vaccinations.store') }} " method="POST">
                        @csrf
                        <div class="class-group">
                            <label class="control-label">Name</label>
                            <input type="text" id="vaccine_name" name="vaccine_name" class="form-control @error('vaccine_name')is-invalid @enderror" placeholder="Name vaccination" value="{{ old('vaccine_name') }}">
                            @error('vaccine_name')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="class-group">
                            <label class="control-label">Dosage</label>
                            <input type="text" id="dosage" name="dosage" class="form-control @error('dosage')is-invalid @enderror" placeholder="dosage" value="{{ old('dosage') }}">
                            @error('dosage')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="class-group">
                            <label class="control-label">Date</label>
                            <input type="date" id="vaccination_date" name="vaccination_date" class="form-control @error('vaccination_date')is-invalid @enderror" placeholder="Date" value="{{ old('vaccination_date') }}">
                            @error('vaccination_date')
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
                        <div class="class-group my-3">
                            <button type="submit" class="btn btn-primary btn-success">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection