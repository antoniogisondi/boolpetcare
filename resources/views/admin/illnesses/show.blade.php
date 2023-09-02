@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1>{{$illness->name}}</h1>
                        <h6>{{ $illness->slug }}</h6>
                    </div>

                    <div class="card-body">
                        <strong>Dettagli:</strong>
                        <ul>
                            <li><strong>Diagnosi:</strong> {{ $illness->diagnosis}}</li>
                            <li><strong>Trattamento:</strong> {{ $illness->treatment}}</li>
                            <li><strong>Note aggiuntive:</strong> {{ $illness->notes}}</li>
                        </ul>   
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection