@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Modify Vaccination</h2>
                    <a href=" {{ route('admin.vaccination.index')}} " class="btn btn-secondary btn-sm">Vaccination</a>
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
                    <form action=" {{ route('admin.vaccination.update', $vaccination->id) }} " method="POST">
                        @csrf
                        @method('PUT')
                        <form action=" {{ route('admin.vaccinations.store') }} " method="POST">
                        @csrf
                        <div class="class-group">
                            <label class="control-label">Name</label>
                            <input type="text" id="vaccine_name" name="vaccine_name" class="form-control @error('vaccine_name')is-invalid @enderror" placeholder="Name" value="{{ old('name') ?? $vaccination->vaccine_name}}">
                            @error('vaccine_name')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="class-group">
                            <label class="control-label">Dosage</label>
                            <input type="text" id="dosage" name="dosage" class="form-control @error('dosage')is-invalid @enderror" placeholder="Dosage" value="{{ old('dosage') ?? $vaccination->dosage}}">
                            @error('dosage')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="class-group">
                            <label class="control-label">Date</label>
                            <input type="text" id="vaccination_date" name="vaccination_date" class="form-control @error('vaccination_date')is-invalid @enderror" placeholder="Date" value="{{ old('vaccination_date') ?? $vaccination->vaccination_date}}">
                            @error('date_born')
                                <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="class-group">
                            <label class="control-label">Notes</label>
                            <input type="text" id="notes" name="notes" class="form-control @error('notes')is-invalid @enderror" placeholder="Notes" value="{{ old('notes') ?? $vaccination->notes}}">
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